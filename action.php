<?php

$username       = $_POST['username'];
$password       = $_POST['password'];
$phoneNumber    = $_POST['phone'];
$email          = $_POST['email'];
$gender         = $_POST['gender'];
$province       = $_POST['province'];
$interest       = $_POST['interest'];
$message        = $_POST['message'];
$filename       = $_FILES['picture']['name'];
$fileLocation   = $_FILES['picture']['tmp_name'];
move_uploaded_file($fileLocation, "img/".$filename);

echo $username;
echo $password;
echo $phoneNumber;
echo $email;
echo $gender;
echo $province;

if(isset($interest)){
    for($i = 0; $i < count($interest); $i++){
        echo $interest[$i];
    }
}else{
    echo "No interest!!!";
}
echo $message;
echo "<img src='img/$filename'>";