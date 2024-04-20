<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
     
     <link rel="stylesheet" href="css/style.css">
 
     <title>Welcome in our store</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand  " href="home.php">Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul  class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">All Products</a>
            </li>
            <li class="nav-item">
            <?php
                 if (isset($_SESSION['email']))
                {
                    echo "<a class='nav-link' href='account.php'>Update</a>";
                }else
                {
                    echo "<a class='nav-link' href='account.php'>Account</a>";
                }
            ?>
            </li>
            <li class="nav-item">
                <?php
            
                if (isset($_SESSION['email']))
                {
                    echo "<a class='nav-link' href='logout.php'>Logout</a>";
                }
                ?>
            </li>
        </ul>
    </div>
</nav>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>