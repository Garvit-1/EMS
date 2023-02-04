<?php
// $fname =$lname= $email = $uname = $pwd = $website = "";
if(isset($_POST)){
  $xml=simplexml_load_file("XMLdata.xml") or die("Error: Cannot create object");
  $uname=$_POST['username'];
  $count=0;
  $flag=true;
  foreach($xml as $result){
  if($result->username==$uname){
  $flag=false;
}
  }
if($flag==true){
  $emp=$xml->addChild('Employee');
  $fname=$_POST['fname'];
  $emp->addChild('fname',$fname);
 $lname=$_POST['lname'];
 $emp->addChild('lname',$lname);
 $email=$_POST['email'];
$emp->addChild('email',$email);
$uname=$_POST['username'];
$emp->addChild('username',$uname);
$pwd=$_POST['pwd'];
$emp->addChild('password',$pwd);
$dob=$_POST['dob'];
$emp->addChild('dob',$dob);
$mob=$_POST['mob'];
$emp->addChild('mob',$mob);
$post=$_POST['post'];
$emp->addChild('post',$post);
$exp=$_POST['exp'];
$emp->addChild('exp',$exp);
$branch=$_POST['branch'];
$emp->addChild('branch',$branch);
$addr=$_POST['addr'];
$emp->addChild('address',$addr);
echo "Added Successfully";
file_put_contents('XMLdata.xml',$xml->asXML());
}
elseif($flag==false){
  echo "Username Already Exist"; 
}
}
?>
<html>
<a href="login.html">Go to Home</a>
</html>

