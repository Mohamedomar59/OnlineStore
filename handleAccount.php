<?php

session_start();
//getting data
$email =$_POST['email'];
$password =$_POST['password'];


//clean data

function cleanData($input) 
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}

$email=cleanData($email);
$password=cleanData($password);

//validation 

$errors=[];
$vaild=true;

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $errors['email'] ="Not vaild Email";
    $vaild=false;
}if($password="" || !filter_var($password, 
FILTER_VALIDATE_REGEXP,
array( "options"=> array( "regexp" => "/.{6,25}/"))
))
{
    $errors['password'] = "Not vaild Password";
    $vaild=false;
}

$_SESSION['errors']=$errors;

if(isset($errors))
{
    header('location:account.php');
}
if($vaild==true)
{
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:products.php');

}
  

?>