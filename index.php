<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Rack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        
        <link rel = "stylesheet" href = "css/main.css">
        <link rel="stylesheet" href="/sandvig/mis314/assignments/bookstore/StyleSheet.css" type="text/css">
        
    </head>
    <body>
        <?php
            include("../databaseConnection.php");
            $link = fConnectToDatabase();
            include("include/header.php");
            include("include/left.php");
            
            include('include/footer.php');
        ?>
    </body>
</html>
