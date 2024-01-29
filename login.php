<?php
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];

//connectiion code

$conn = new mysqli('localhost','root','','NSUT');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into homepage(name,rollno,branch,sem)
    values(? , ?,? ,? ,?)");
    $stmt->bind_param("isisi",$id ,$name, $rollno, $branch, $sem);
    $stmt->execute();
    echo("registration succesfully");
    $stmt->close();
    $conn->close(); 
}


?>
