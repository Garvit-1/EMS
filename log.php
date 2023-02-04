<html>
<?php
session_start();
?>
<?php 
if(isset($_POST)){
    $xml=simplexml_load_file("XMLdata.xml") or die("Error: Cannot create object");
    $uname=$_POST['username'];
    $pass=$_POST['pwd'];
    $count=0;
    foreach($xml as $result){
    if($result->username==$uname && $result->password==$pass){
    $count++;
    echo "Success";
}
}
    if ( $count==1) {
     session_start();
        $_SESSION['user']=$uname;
         header('location:display.php');
     }
    else{
        echo "Invalid";
        // header('location:login.html');
    }
}
?>

<a href="login.html">Try Again</a>

</html>