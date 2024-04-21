<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "php";

$connection = mysqli_connect($servername, $username, $password, $db);

if(isset($_POST["login"]))
{
    $u=$_POST['fname'];
    $p=$_POST['pswd'];

    $q= "SELECT * FROM project WHERE username = '$u' AND pass = '$p' ";
    $compare = mysqli_query($connection,  $q);

    if(mysqli_num_rows($compare))
    {
        echo '<script>
        alert("login successfully");
        window.location.href="home.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("username and password are incorrect");
        window.location.href="home.php";
        </script>';
    }
}
?>