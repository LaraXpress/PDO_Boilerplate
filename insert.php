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

        ########################### INSERT DATA INTO DATABASE ###########################
        $title = 'Laravel';
        $body  = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, rem';

        // Approach One
        $statement = $conn->prepare("insert into posts(title, body) values(?, ?)");        
        $statement->execute([$title,$body]);        

        // Approach Two
        $statement = $conn->prepare("insert into posts(title, body) values(:title, :body)");
        $statement->execute([
            ':title' => $title,
            ':body'  => $body
        ]);
                
    } 
    catch(PDOException $e)
    {
        die("Database Connection is failed : ".$e->getMessage());
    }         
    
?>

    
