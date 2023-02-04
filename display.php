<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// echo $_COOKIE['post'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Page</title>
    <link rel="icon" type="image/ico" href="img\android-chrome-512x512.png" >
    <style>
        * {
            margin: 0px;
            padding: 0px;

        }

        header {
            height: 10vh;
            background: black;
        }

        header a {
            float: left;
            color: white;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        header a:hover {
            background-color: #ddd;
            color: black;
        }

        main {
            height: 80vh;
            padding: 20px;
            background-image: url("img/bgimage.webp");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .mypage {
            border: 2px solid black;
            margin: auto;
            width: 60em;
            background: rgb(187 219 242 / 0.67);
            text-align: left;
            min-height: 200px;
        }

        .mypage:hover {
            background: rgb(187 219 242);

        }

        .btn {
            height: 30px;
            width: 70px;
            background: #00b8ff8f;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            height: 5vh;
            background: black;
            color: white;
            text-align: center;
        }

        .fin {  
            height: 20px;
            border-radius: 5px;

        }
    </style>
</head>

<body>
<?php
 $profile=$_SESSION['user'];
 if($profile==true){
 }
 else{
    header('location:login.html');
 }
if(isset($_POST)){
$uname=$_SESSION['user'];
$xml=simplexml_load_file("XMLdata.xml") or die("Error: Cannot create object");
 foreach($xml as $result){
    if($result->username==$uname){
    $fname=$result->fname;
    $lname=$result->lname;
    $email=$result->email;
    $uname=$result->username;
    $mob=$result->mob;
    $post=$result->post;
    $addr=$result->address;
  }
  else{
    continue;
  }
}
}
?>
    <header>
        <ul>
            <a href="home.html"> Home </a>
            <a href="leave_apply.php"> Apply Leave</a>
            <a href="leave_response.html"> Check Leave </a>
            <a href="logout.php"> Signout </a>
            <!-- <a href="#"> <img src="#" alt="Your photo"> </a> -->
            <ul>
    </header>
    <main>
    <div class="mypage">
    <h1>My page</h1><br>
        Hi <?php echo $fname . " ".$lname ?><br>
        You have succesfully Login. 
        Welcome to The Home Page.
        <br>
       <p> Your Post is: <?php 
       if($post=='sde'){
        echo "Software Developer";
       }
       else if($post=='mgr'){
        echo "Manager";
       } 
       else if($post=='ass'){
        echo "Assisstant";
       }?> 
       </p>
       <p><?php echo "Your Address is " . $addr."<br>"?></p>

    </div>
    </main>
    <footer>
        <h> Copyrights &copy Company</h>
    </footer> 


</body>
</html>
