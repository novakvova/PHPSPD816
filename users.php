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
        <?php include "_subheader.php"; ?>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    include_once "connection_database.php";
                                    $sql = 'SELECT * FROM tbl_users';
                                ?>
                                <a href="add_user.php" class="btn btn-success mb-2">Додати</a>
                                <table class="table table-responsive-sm table-hover table-outline mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">
                                            <svg class="c-icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                                            </svg>
                                        </th>
                                        <th>User</th>
                                        <th class="text-center">Country</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment Method</th>
                                        <th>Activity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($dbh->query($sql) as $row) {
                                        echo '
                                        <tr>
                                                <td class="text-center">
                                                    <div class="c-avatar">
                                                        <img class="c-avatar-img"
                                                             src="'.$row["Image"].'"
                                                             alt="user@email.com"><span
                                                                class="c-avatar-status bg-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>'.$row["Name"].'</div>
                                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="c-icon c-icon-xl">
                                                        <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-us"></use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-left"><strong>50%</strong></div>
                                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 -
                                                                Jul 10, 2015</small></div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                                             style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="c-icon c-icon-xl">
                                                        <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>10 sec ago</strong>
                                                </td>
                                            </tr> 
                                        ';
                                    }
                                    ?>
                                    </tbody>
                                </table>
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