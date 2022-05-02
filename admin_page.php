<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
   
<!-- <div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <img src=>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>

<div class="center">
      <div class="text">Movie Details</div>
      <form action="" method="post">
         <div class="data">
            <input type="text" name="name" required placeholder="enter hero name">
            <input type="text" name="email" required placeholder="enter heroine name">
            <input type="text" name="password" required placeholder="enter director name">
            <input type="text" name="cpassword" required placeholder="rating">
            <input type="submit" name="submit" value="add_new" class="form-btn">
         </div>
      </form>
</div> -->
<div class="bg-popcorn" style="height:95vh;">
   <div class="navi-bar-admin-page">
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>

      <div class="right-margin"><a href="logout.php" class="btn">logout</a></div>
   </div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Movie</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Movie Details</h4>
        </div>
        <div class="modal-body">
         <div class="form-container remove-min-ht">
            <form action="movie_data.php" method="post">
               <div class="data">
                  <input type="text" name="movie_name" required placeholder="enter movie name">
                  <input type="text" name="cast" required placeholder="enter cast">
                  <input type="text" name="year_of_release" required placeholder="year of release">
                  <input type="text" name="genre" required placeholder="genre">
                  <input type="text" name="rating" required placeholder="rating">
                  <input type="submit" name="submit" value="add_new" class="form-btn">
               </div>
            </form>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>