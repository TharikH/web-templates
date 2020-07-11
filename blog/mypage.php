<?php
require_once 'connect.php';
session_start();



?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
  <title>Blog</title>
</head>

<body>
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h4 class="modal-title" id="exampleModalLongTitle">Login</h4>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> -->
          <!-- </button> -->
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="form-group col-12">
            <label for="email">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <div class="form-group col-12">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-success">Login</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="signupbutton" class="btn btn-secondary">Signup</button>
          <h2 class="logo">NEWS365</h2>
          <a type="button" class="btn btn-secondary" href="index.php" id="goback">Go Back</a>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="signup" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h4 class="modal-title" id="exampleModalLongTitle">Signup</h4>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> -->
          <!-- </button> -->
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="form-group col-12">
            <label for="email">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <div class="form-group col-12">
              <label for="password">username</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="username">
            </div>

            <div class="form-group col-12">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group col-12">
              <label for="password">confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm">
            </div>

            
            <div class="col-12">
            <button type="submit" class="btn btn-success">Login</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="loginbutton" class="btn btn-secondary">Login</button>
          <h2 class="logo">NEWS365</h2>
          <a type="button" class="btn btn-secondary" href="index.php" id="goback">Go Back</a>
        </div>
      </div>
    </div>
  </div>




  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">News365</a>
    <form class="form-inline order-lg-last d-sm-block d-none">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100 pl-lg-5 pr-lg-5 ml-lg-5 mr-lg-5 text-center">
        <li class="nav-item">
          <a class="nav-link" href="index.php">News<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Featured</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">My Page</a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <?php
  if (!isset($_SESSION['uname'])) {
    echo '<script>
    $(document).ready(function(){
        $("#login").modal(\'show\');
    });
</script>';
  }
  else{
  
  ?>

<div class="container-md container-fluid mt-5 pt-5">
    <div class="row ml-4 mr-4 mb-2 pt-2 pl-3 pr-3 bg-secondary border">
      <h2>Latest Feeds</h2>
    </div>
    <div class="row border justify-content-center" style="min-height: 300px;">
      <div class="col-lg-4 col-sm-6 p-0 text-center">
        <div class="card border border-success">
          <img class="card-img-top border border-primary" src="data:image/jpeg;base64,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" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><a href="" class="" style="text-decoration: none;">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
          </div>
          <div class="card-footer d-flex">
            <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
            <i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 p-0 text-center">
        <div class="card border border-success">
          <img class="card-img-top border border-primary" src="https://www.t-plan.com/wp-content/uploads/2017/03/Apple_logo_black.svg_.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><a href="" class="" style="text-decoration: none;">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
          </div>
          <div class="card-footer d-flex">
            <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
            <i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 p-0 text-center">
        <div class="card border border-success">
          <img class="card-img-top border border-primary" src="data:image/jpeg;base64,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" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><a href="" class="" style="text-decoration: none;">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
          </div>
          <div class="card-footer d-flex">
            <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
            <i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 p-0 text-center">
        <div class="card border border-success">
          <img class="card-img-top border border-primary" src="data:image/jpeg;base64,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" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><a href="" class="" style="text-decoration: none;">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
          </div>
          <div class="card-footer d-flex">
            <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
            <i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 p-0 text-center">
        <div class="card border border-success">
          <img class="card-img-top border border-primary" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1bdk-9BDsfelNlXldF0qlZwjIXCSk4-dQSbtJsDrXozJeVU9u&usqp=CAU" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><a href="" class="" style="text-decoration: none;">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
          </div>
          <div class="card-footer d-flex">
            <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
            <i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php }  ?>
  <script src="mypage.js"></script>
</body>

</html>