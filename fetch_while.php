<!-- ########################### DATABASE CONNECTION PDO  ###########################   -->
<?php
    $hostname = "localhost";
    $dbname   = " your database name ";
    $username = "root";
    $password = "";

    try
    {
        $conn = new PDO("mysql:host=$hostname; dbname=$dbname; chartset=UTF8","$username","$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch(PDOException $e)
    {
        die("Database Connection is failed : ".$e->getMessage());
    }
    // ########################### FETCH DATA FROM DATABASE USING WHILE LOOP ###########################
    $sql = "select title from posts";
    $statement = $conn->query($sql);
    while($row = $statement->fetch())
    {
        echo $row['title'].'<br/>';
    }
        
?>

    
