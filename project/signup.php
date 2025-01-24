<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>

    <!--BOOTSTRAP CDN for CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<?php
include 'nav.php';
?>


<div class="container d-flex flex-column justify-content-center align-items-center my-5 py-5 border shadow-lg" style="max-width: 900px; width: 100%;">
    <!-- Header -->
    <h4 class="display-6 text-center mb-4">CREATE ACCOUNT</h4>
    <hr class="w-100 mb-4">

    <!-- Form -->
    <form id="create-Form" class="w-10">
        <!-- First and Last Name Row -->
        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
            </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email address" aria-label="Email address" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" required>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" required>
        </div>
        <center>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-outline-success w-20">Create Account</button>
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
    <!-- script for saving in DB USING AJAX JQUERY -->

</body>
</html>
