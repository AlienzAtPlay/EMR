<?php
$us1=$_POST['un'];
$ps1=$_POST['pa'];
if($us1==""){
echo "USERNAME IS EMPTY";
}
else
{
if($ps1=="")
{
echo "PASSWORD IS EMPTY";
}
else
{
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"l10");
$result = mysqli_query($conn,"SELECT * FROM users WHERE
username='" . $us1 . "' and password = '". $ps1 ."'");
$count = mysqli_num_rows($result);
if($count==0)
{
echo "INVALID USERNAME OR PASSWORD <br><br>";
}
else
{
echo "LOGIN SUCCESFULL <br><br>";
echo "SESSION STARTED <br><br>";
session_start();
if(isset($_SESSION['views']))
{
$_SESSION['views'] = $_SESSION['views']+1;
}
else
{
$_SESSION['views']=1;
}
echo "NO OF TIMES PAGE ACCESED : ".$_SESSION['views'];
}
}
}
?>