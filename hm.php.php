<?php
$Name=$_REQUEST['name'];
$p_number=$_REQUEST['p_number'];
$password=$_REQUEST['password'];
$city=$_REQUEST['city'];
if(isset($_POST['beta']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="handmade";
    $conn=mysqli_connect($host,$user,$password,$db);
    $insret="insert into login values('$name','$p_number','$password','$city')";
    mysqli_query($conn,$insret);
    if($conn){
        echo("<h1 style=color:green;>you just hit the first road!</h1>");
    }
    else{
        echo("<h1 style=color:blue;>mmmmmm there is something wrong ):</h1>");
        
    }

}
?>