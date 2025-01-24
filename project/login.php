<?php
include 'dbconnect.php';
session_start();

if (isset($_SESSION['uname'])) {
    header('Location: menu.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = strtolower($_POST['uname']);
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($pass, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['uname'] = $uname;
            header('Location: menu.php');
            exit();
        } else {
            $error_message = "Username or Password Incorrect";
        }
    } else {
        $error_message = "Username or Password Incorrect";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <!-- ------------------------------------------------------------------------------------------------------------------ -->

  <!--BOOTSTRAP CDN for CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- ------------------------------------------------------------------------------------------------------------------ -->
</head>
<?php
include 'nav.php';
?>
<body>
  
<div class="container d-flex flex-column justify-content-center align-items-center my-5 py-5 border shadow-lg" style="max-width: 900px; width: 100%;">
   <!-- Header -->
   <h4 class="display-6 text-center mb-4">LOGIN TO YOUR ACCOUNT</h4>
    <hr class="w-100 mb-4">

    
    <form method='POST' class="w-50">
        <div class="row mb-3">
          <div class="col">
                <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name / E-mail ID" aria-label="First name" required>
          </div>
        </div>
          <!-- Password -->
        <div class="mb-3">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" aria-label="Password" required>
        </div>
          
      
 

        <center>
            <button type="submit" class="btn btn-outline-success">Submit</button>
            <button type="submit" class="btn btn-outline-danger w-20">Cancel</button>
        <center>
    </form>
</div>

<?php
include 'footer.php';
?>
            
            
    <!------------------------------------------------------------------------------------------------------------------ -->

    <!--BOOTSTRAP CDN for JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- --------------------------------------------------------------------------------------------------------------------- -->

</body>

</html>