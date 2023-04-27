<!DOCTYPE html>
<html>
    <head>
        <title>l29 Form Handling 1</title>
    </head>
    <body>
        <!-- GET -->
        <form action="./l30formdata1.php" method="GET">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="" placeholder="Enter Name..."/>
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="" placeholder="Enter City..."/>
            </div>

            <button type="submit">Submit</button>
        </form>

        <!-- POST -->
        <form action="./l30formdata1.php" method="POST">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="" placeholder="Enter Name..."/>
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="" placeholder="Enter City..."/>
            </div>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>