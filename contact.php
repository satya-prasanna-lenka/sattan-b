<?php
$err = false;
$success = false;
$servername= "localhost";
$username = "sattanbi_bisattan";
$password = "bisattan@892265";
$database = "sattanbi_contactdb";
$conn = mysqli_connect($servername, $username , $password , $database,'3306');
  // if($conn){
  //   echo "successfully connect";
  // }else{
  //   echo "error";
  // }
  
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $textarea = $_POST['textarea'];

    if(strlen($name)==0 || strlen($email)==0){
      $err = "Please enter your name and email address";
      // echo "Please enter your name and email address";
    }else{
      $sql = "INSERT INTO `about` (`id`, `name`, `email`, `more`, `time`) VALUES (NULL, '$name', '$email', '$textarea', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if($result){
        $success = "Successfully entered";
        // echo "Successfully entered";
      }else{
        $err = "Something went wrong Please try again";
        // echo "Something went wrong Please try again";
      }
    }


  }
  // echo "rama";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="stt.jpg" type="image/x-icon">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="contact.css">
  <title>contact us</title>
</head>

<body>

  <?php
      if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successful!</strong> We will contact you according to your filled details, as soon as possible...
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }else if($err){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$err.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }
    
    ?>

  <header id="stickyy">
    <!-- <img src="penc.jpg" class="banner"> -->
    <!-- <H6 id="pree-logo">Sattan.B</H6> -->
    <a href="index.php" class="logo">WEB DEVELOPER</a>
    <!-- <H6 id="post-logo">Let's work together</H6> -->
    <nav>
      <ul class="ul">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Service</a></li>

        <li><a href="about.php">Team</a></li>
        <li><a id="contacttt" href="#">ContactUs</a></li>
      </ul>
      <div class="logo-bar"><i class="fas fa-align-justify"></i></div>
    </nav>
  </header>


  <section>
    <div class="top">
      <div class="contact">
        <h3>Contact Our Team</h3>
        <p>We would love to hear you.</p>
      </div>
    </div>
    <div class="gt-box">
      <div class="directly">
        <h4>Contact Us Directly</h4>
        <address>
          Our Email Address: <a href="mailto:tanmaylenka5@gmail.com">tanmaylenka5@gmail.com</a> /<br>
          <a href="mailto:satyale39@gmail.com">satyale39@gmail.com</a> /<br>
          <a href="mailto:webtechd7@gmail.com">webtechd7@gmail.com </a><br>

          Visit us at: <a href="www.sattan-B.com">www.sattan-b.in</a><br>
          mobile no: +91 9938233725
        </address>
      </div>
      <div class="box">
        <form method="POST" action="contact.php" class="m-5">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Any thing else</label>
            <div class="form-floating spl">
              <textarea style="height: 10vh;" name="textarea" class="form-control" placeholder="Leave a comment here"
                id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Tell us more about your project</label>
            </div>
          </div>
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
      if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successful!</strong> We will contact you according to your filled details, as soon as possible...
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }else if($err){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$err.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }
    
    ?>

      </div>
    </div>

  </section>

  <script>
    let logo = document.querySelector('.logo-bar');
    let nav = document.querySelector('.ul');

    logo.addEventListener('click', function () {
      nav.classList.toggle('activee');
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>