<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Code Igniter Project</title>
    <meta name="description" content="Code Igniter Project">
    <meta name="author" content="Jammy">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet/less" type="text/css" href="/assets/css/styles.less">
    
    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="/assets/css/less.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/script.js"></script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</head>
<body>

<?php
    $this->load->view('partials/headerIn');
?>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <h1>Manage users</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>created_at</th>
                <th>user_level</th>
                <th>actions</th>
                <th></th>
            </tr>
            <!-- begin of foreach loop -->
            <tr>
                <td>1</td>
                <td>Michael Choi</td>
                <td>michael@village88.com</td>
                <td>Dec 24th 2012</td>
                <td>admin</td>
                <td><a href=''>Edit</a></td>
                <td><a href=''>Remove</a></td>
            </tr>
            <!-- end of foreach loop -->
        </table>
        <a href='#'>Add a new user</a>
    </div><!-- End of container div -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
