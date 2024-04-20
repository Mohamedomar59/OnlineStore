<?php
session_start();
//getting data

$userName=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];


//clean data

function cleandata($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;

}

$userName=cleandata($userName);
$email=cleandata($email);
$password=cleandata($password);
$phone=cleandata($phone);
$facebook=cleandata($facebook);
$twitter=cleandata($twitter);
$instagram=cleandata($instagram);

//validation 
$errors2=[];
$vaild=true;


if (!filter_var($userName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH))
{
    $errors2['userName']="Not Valid User Name";
    $vaild=false;
}
//validation of email
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $errors2['email'] ="Not vaild Email";
    $vaild=false;
}
//validation of password
if($password="" || !filter_var($password, 
FILTER_VALIDATE_REGEXP,
array( "options"=> array( "regexp" => "/.{6,25}/"))
))
{
    $errors2['password'] = "Not vaild Password";
    $vaild=false;
}
//validation of phone
if(!preg_match("/^01[0-2,5]{1}[0-9]{8}$/", $phone)) 
{
    $errors2['phone'] = "Not vaild phone";
    $vaild=false;
}
//validation of facebook
if (!filter_var($facebook, FILTER_VALIDATE_URL))
{
    $errors2['facebook'] = "Not vaild facebook";
    $vaild=false;
}
//validation of twitter
if (!filter_var($twitter, FILTER_VALIDATE_URL))
{
    $errors2['twitter'] = "Not vaild twitter";
    $vaild=false;
}
//validation of instagram
if (!filter_var($instagram, FILTER_VALIDATE_URL))
{
    $errors2['instagram'] = "Not vaild instagram";
    $vaild=false;
}

$_SESSION['errors2']=$errors2;

if(isset($errors2))
{
    header('location:register.php');
}

if($vaild==true)
{
    $_SESSION['userName']=$userName;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['password']=$password;
    $_SESSION['facebook']=$facebook;
    $_SESSION['twitter']=$twitter;
    $_SESSION['instagram']=$instagram;
    header('location:home.php');

}



















?>