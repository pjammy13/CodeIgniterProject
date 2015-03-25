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

    <div class="jumbotron">
      <h1>Welcome to my first class project!</h1>
      <p>"This class project allows admins to be able to manage and edit another user's information. 
        It also allows users to be able to view and purchase E-Commerce items"</p>
      <p><a class="btn btn-primary btn-lg" href="/users/show/register" role="button">Register</a></p>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/users_icon.jpg" alt="...">
          <div class="caption">
            <h3>Manage Users</h3>
            <p>Using this application, I learned how to add, remove, and edit users for the application</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/messages_icon.png" alt="...">
          <div class="caption">
            <h3>Leave messages</h3>
            <p>Users will be able to leave a message to another user using this application</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/edit_icon.jpg" alt="...">
          <div class="caption">
            <h3>Edit User Information</h3>
            <p>Admins will be able to edit another user's information ( email address, first name, last name, etc</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/e-commerce_icon.png" alt="...">
          <div class="caption">
            <h3>E-Commerce</h3>
            <p>This project will also allow users to shop on an ecommerce platform</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/shopping_cart_icon.jpg" alt="...">
          <div class="caption">
            <h3>Shopping Cart</h3>
            <p>Users will be able to add items to their shopping cart</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="home_page" src="/assets/images/homepage/pay_icon.jpg" alt="...">
          <div class="caption">
            <h3>Payments</h3>
            <p>Users will be able to checkout with Stripe API</p>
          </div>
        </div><!-- end of thumbnail div -->
      </div><!-- end of col div -->
    </div><!-- End of row div -->

</div>
<!-- Scripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="/assets/css/less.js" type="text/javascript"></script>
<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
