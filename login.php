<?php
$servername="localhost";
$username="pradeep";
$password="admin123";
$database_name="Aspire";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check connection
if(!$conn)
{
    die("connection Failed:" . mysqli_connect_error());
}
if(isset($_post['save']))
{
    $email=$_post['email'];
    $password=$_post['password'];
    $sql_query =  "INSERT INTO login(email,password)
    values ('$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "details entry successfull!";
    }
    else
    {
        echo "Error: " . sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?> 

