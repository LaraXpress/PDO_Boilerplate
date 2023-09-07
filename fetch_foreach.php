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
    
    // ########################### FETCH DATA FROM DATABASE USING FOREACH ###########################    
    $sql  = "select * from posts";
    $rows = $conn->query($sql);
    foreach($rows as $row)
    {
        echo $row['body']."<br/>";
    }    
        
?>

    
