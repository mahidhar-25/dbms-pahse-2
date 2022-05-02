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
   <title>admin page</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


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

<div class="bg-popcorn" style="height:100vh; color:white;">
   <div class="navi-bar-admin-page">
      <div class="d-flex flex-row justify-content-start">
         <div><h1>welcome <span style="color:white; font-size:36px;"><?php echo $_SESSION['admin_name'] ?></span></h1></div>
         <div class="ml-auto"><a href="logout.php" class="btn btn-info btn-lg" style="text-align:right; font-size: 20px; color:white;">logout</a></div>
      </div>
   </div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Movie</button>
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="">search details</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color:black;">Add Movie Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="form-container remove-min-ht">
            <form action="movie_data.php" method="post">
               <div class="data">
                  <input type="text" name="movie_name" required placeholder="<?php echo $_SESSION['admin_name'] ?>">
                  <input type="text" name="cast" required placeholder="enter cast">
                  <input type="text" name="year_of_release" required placeholder="year of release">
                  <input type="text" name="genre" required placeholder="genre">
                  <input type="text" name="rating" required placeholder="rating">
                  <input type="text" name="pic_link" required placeholder="link">
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

    <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
   

      <table class="table table-bordered">
                            <thead style="color:white;">
                                <tr>
                                    <th>id</th>
                                    <th>movie_name</th>
                                    <th>cast</th>
                                    <th>year_of_release</th>
                                    <th>genre</th>
                                    <th>rating</th>
                                    <th>pic_link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    // $conn = mysqli_connect('localhost', 'root','password','test'); 
                                    //use your database

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM movie_form WHERE CONCAT(movie_name,cast,year_of_release,genre,rating , pic_link) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                    <div style="color:white;">
                                                        <h2><?= $items['movie_name']; ?></h2>
                                                        <h3><?= $items['cast']; ?></h3>
                                                        <h3><?= $items['year_of_release']; ?></h3>
                                                        <h3><?= $items['genre']; ?></h3>
                                                        <h3><?= $items['rating']; ?></h3>
                                                        <h3><?= $items['pic_link']; ?></h3>
                                                    </div> <br>
                                                
                                                <?php
                                                //use your database's attributes
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>

</div>
</body>
</html>


