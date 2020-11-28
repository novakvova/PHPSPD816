<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<?php include "_header.php"; ?>

<body class="c-app">

<?php include "_sidebar.php"; ?>

<div class="c-wrapper c-fixed-components">
    <?php
    include_once "BreadcrumbItem.php";
    //$bItem = new BreadcrumbItem;
    $breadcrumbs = array();
    $breadcrumbs[] = new BreadcrumbItem("Головнa", false, "/");
    $breadcrumbs[] = new BreadcrumbItem("Користувачі", false, "/users.php");
    $breadcrumbs[] = new BreadcrumbItem("Додати", true);
    ?>


    <?php include "_subheader.php"; ?>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><strong>Add user</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="name">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="name" type="text"
                                                       name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="email">Email Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="email" type="email"
                                                       name="email" placeholder="Enter Email"
                                                       autocomplete="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="image">Image</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="image" type="text"
                                                       name="image" placeholder="Enter Image Path">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="password">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="password" type="password"
                                                       name="password" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <!--                                        <div class="form-group row">-->
                                        <!--                                            <label class="col-md-3 col-form-label" for="file-input">File input</label>-->
                                        <!--                                            <div class="col-md-9">-->
                                        <!--                                                <input id="file-input" type="file" name="file-input">-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <input class="btn btn-block btn-success" type="submit" value="Add">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>

</div>

<?php include "_scripts.php" ?>

<script src="js/main.js"></script>
</body>
</html>