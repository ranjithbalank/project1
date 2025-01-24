
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-primary-subtle">

<div class="container-fluid d-flex justify-content-between align-items-center ">

    <!-- logo Insertion -->
    <a class="navbar-brand" href="home.php">

        <img src="asset/logos.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
        XYZ Pvt Ltd.,
    </a>

    <!-- Search Button-->
    <div class="d-flex">

        <form class="d-flex" role="search">

            <input class="form-control me-1 justify-content-center" type="search" placeholder="Search"
                aria-label="Search">

            <!-- <button class="btn btn-outline-success m-1 justify-content-center" type="submit">Search</button>  -->
            <a class="btn btn-outline-success m-1" href="#" role="button">Search</a>     
        </form>
        
    </div>

    <!--login/Signup button in the header -->
    <div class="d-flex ">
       
        <a class="btn btn-outline-success m-1" href="signup.php" role="button">Signup</a> 
        <a class="btn btn-outline-success m-1" href="login.php" role="button">Login</a> 

    </div>

</div>       

</nav>