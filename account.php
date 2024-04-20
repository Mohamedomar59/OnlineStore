<?php

include "navbar.php";



if (isset($_SESSION['email'] )) {
    header("location: register.php");
}

if (isset($_SESSION['errors'])) 
{

    foreach ($_SESSION['errors'] as $error)
     {
        echo  "  <div class='alert alert-danger' role='alert'>
             ".$error."
                </div>  " ; 
    }

}

?>

<form class="form-group mt-4" method="post" action="handleAccount.php " >
    <input class="form-control" type="text" name="email" placeholder="enter your email"><br>
    <input class="form-control" type="password" name="password" placeholder="enter your password"><br>
    <input class="btn btn-primary"  type="submit" value="login"><br>
</form>