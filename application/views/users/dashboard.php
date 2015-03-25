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
    $this->load->view('partials/headerOff');
?>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <h1>Welcome <?= $this->session->userdata('userInfo')['first_name']; ?>, Below Are All Users</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>created_at</th>
                <th>user_level</th>
            </tr>
            <!-- begin of foreach loop -->
<?php
       foreach($showUsers as $showUser)
       {
?>
            <tr>
                <td><?= $showUser['id']?></td>
                <td><?= $showUser['first_name']?><?= $showUser['last_name']?></td>
                <td><?= $showUser['email_address']?></td>
                <td><?= $showUser['created_at']?></td>
                <td><?= $showUser['user_level']?></td>
            </tr>
<?php
        }
?>
            <!-- end of foreach loop -->
        </table>
        <a href='#'>Add a new user</a>
    </div><!-- End of container div -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
