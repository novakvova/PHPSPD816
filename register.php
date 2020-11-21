<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $isValidation = true;
    $postValue = $_POST;
    //echo "<h2>Save user register</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include "_header.php"; ?>

<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Register</h1>
                    <p class="text-muted">Create your account</p>
                    <form method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                    </svg></span></div>
                            <input class="form-control" name="username" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg></span></div>
                            <input class="form-control" name="email" type="text" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Repeat password">
                        </div>
                        <input class="btn btn-block btn-success" type="submit" value="Реєструватися" />
                        <a href="index.php" class="btn btn-block btn-danger">На голону</a>
                    </form>
                </div>
                <div class="card-footer p-4">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-block btn-facebook" type="button"><span>facebook</span></button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block btn-twitter" type="button"><span>twitter</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "_scripts.php"; ?>

</body>
</html>