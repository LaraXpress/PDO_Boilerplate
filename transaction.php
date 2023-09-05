<!-- ########################### DATABASE CONNECTION PDO  ###########################  -->
<?php
    $hostname = "localhost";
    $dbname   = "your database name";
    $username = "root";
    $password = "";
    
    try
    {
        $conn = new PDO("mysql:host=$hostname; dbname=$dbname; chartset=UTF8","$username","$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        ########################### TRANSACTIONS  ###########################
        $conn->beginTransaction();
        $conn->query("INSERT INTO posts(title,body) VALUES('MySQL','MySQL is RDBMS management system')");
        $conn->query("INSERT INTO posts(title,body) VALUES('MongoDB','NoSQL is NoSQL management system')");
        $conn->query("INSERT INTO posts(title,body) VALUES('AWS','Amazon Web Service Cloud Storage Computing')");
        $conn->commit();
    } 
    catch(PDOException $e)
    {
        $conn->rollBack();
        die("Database Connection is failed : ".$e->getMessage());
    }         
    
?>

    
