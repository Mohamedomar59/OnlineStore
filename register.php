<?php

include "navbar.php";



if (isset($_SESSION['errors2'])) 
{

    foreach ($_SESSION['errors2'] as $error)
     {
        echo  "  <div class='alert alert-danger' role='alert'>
             ".$error."
                    </div>  " ; 
    }

}

?>

<div class="container mt-5">
<form class="fotm-group" action="handelRegister.php" method="post" >
    <input class="form-control" type="text" name="userName" placeholder="enter your name "><br>
    <input class="form-control" type="text" name="email" placeholder="enter your email "><br>
    <input class="form-control" type="password" name="password" placeholder="enter your password "><br>
    <input class="form-control" type="text" name="phone" placeholder="enter your phone "><br>
    <input class="form-control" type="text" name="facebook" placeholder="enter your facebook "><br>
    <input class="form-control" type="text" name="twitter" placeholder="enter your twitter "><br>
    <input class="form-control" type="text" name="instagram" placeholder="enter your instagram "><br>
 
    <input class="btn btn-success" type="submit" value="update">
</form>
</div>