<?php

$connection=mysqli_connect('localhost','root','',database_name);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    $request = "insert into action_page(name,email,psw)values($name,$email,$psw)";

    mysqli_query($connection,$request);

    header('location :action_page.php');

}
else{
    echo 'Something went wrong try again';
}
?>