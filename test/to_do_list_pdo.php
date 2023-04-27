<?php
    $dbhost = "localhost";
    $dbname = "wdf6797";
    $dbuser = "root";
    $dbpass = "";
    
    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully <br/>";
    
        $createtable = "CREATE TABLE IF NOT EXISTS lists(
            id INT NOT NULL AUTO_INCREMENT,
            text TINYTEXT NOT NULL,
            done BOOLEAN NOT NULL DEFAULT false,
            PRIMARY KEY(id)
        );";
        $conn->exec($createtable);
        // echo "Created Table Successfully <br/>";

        if(!empty($_GET)){
            $getlist = "SELECT * FROM lists WHERE id = {$_GET['id']}";
            $stmt = $conn->prepare($getlist);
            $stmt->execute();

            $list = $stmt->fetch();

            if($_GET['type'] === 'up'){
                $bool = $list['done'] == 1 ? 0 : 1;
                $sql = "UPDATE lists SET done = $bool WHERE id = {$_GET['id']}";
            }elseif($_GET['type'] === 'del'){
                $sql = "DELETE FROM lists WHERE id = {$_GET['id']}";
            }

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("Location: {$_SERVER['PHP_SELF']}");
        }

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $getlist = $_POST["list"];
            // var_dump($getlist);

            if(isset($getlist) and strlen($getlist) > 0){
                // echo "Ready to insert data <br/>";

                $addlist = "INSERT INTO lists(list) VALUE(:list)";
                $stmt = $conn->prepare($addlist);
                $stmt->bindParam(":list", $getlist);
                $stmt->execute();

                // echo "Inserted Successfully"

                header("Location: {$_SERVER['PHP_SELF']}");
            }
        }
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage() ."<br/>";
    };
?>

<!DOCTYPE html>
<html>
    <head>
        <title>To Do List With PDO</title>
        <!-- fontawesome css1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- bootstrap css1 js1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <style type='text/css'>
            .done{
                text-decoration: line-through;
                opacity: 0.8;
            }
        </style>
    </head>
    <body>
        <div class="min-vh-100 bg-dark p-5 text-white d-flex justify-content-center">
            <ul class="list-group grid gap-3">
                <?php
                    $select = "SELECT * FROM lists";
                    $stmt = $conn->prepare($select);
                    $stmt->execute();
                    $lists = $stmt->fetchAll();
                ?>

                <?php foreach($lists as $list): ?>
                    <li class='list-group-item rounded-0 d-flex justify-content-between align-items-center' style='width: 400px'>
                        <a href=<?= "{$_SERVER['PHP_SELF']}?id={$list['id']}&type=up" ?>>
                            <input type='checkbox' <?= $list['done'] == 1 ? 'checked' : 'unchecked' ?> style='pointer-events: none;'/>
                        </a>

                        <span class='mx-3 <?= $list['done'] == 1 ? 'done' : '' ?>'>
                            <?= $list['list'] ?>
                        </span>

                        <a href=<?= "{$_SERVER['PHP_SELF']}?id={$list['id']}&type=del" ?> class='btn btn-sm btn-danger'>
                            <i class='fas fa-trash-alt'></i>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <button class="btn btn-light rounded-circle grid position-fixed" style="width: 40px; height: 40px; font-size: 15px; place-self: center; right: 15px; bottom: 15px;" data-bs-toggle="modal" data-bs-target="#form-modal">
            <i class="fa-solid fa-plus"></i>
        </button>

        <div id="form-modal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class='btn-close' data-bs-dismiss='modal'></button>
                    </div>

                    <div class="modal-body">
                        <form action=<?= $_SERVER['SCRIPT_NAME'] ?> method="POST" class="p-3">
                            <div class="form-group mb-3">
                                <input type="text" name="list" id="list"class="form-control" placeholder="Enter ..." />
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary text-uppercase">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- bootstrap css1 js1 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>