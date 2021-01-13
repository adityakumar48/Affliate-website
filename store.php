<?php
include('header.html')
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <!-- bootstrap -->
  </head>
  <body>
    <h1 class="text-center py-4">Product Section</h1>
    <div class="container">
         
        <div class="row">
          <div class="col-md-10" >
          <h1 class="text-center">
           
         
        </div>
        <?php 
        $sql = "select * from post ";
      include("dbConnect.php");
   
      $result= $pdo->query($sql);
      
    $rs =   $result->fetchAll();
     
    foreach($rs as $row){
?> 

       <!-- Card Start -->
         <div class="col-md-3 p-3">
               <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="uploads/<?php echo $row['image'];?>" alt="shinzo" width="100%" height="300px">
                 <hr>
                 <div class="card-body">
                   <h3 class="card-title"><?php echo $row['title']; ?></h3>
                   <div class="rating text-warning ">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                   <hr>
                  <h5 class="card-text pb-2">₹ <?php echo $row['price']; ?></h5>
                  <a href=<?php echo $row['link']; ?>  class="btn btn-danger">Features</a>
                   <a href=<?php echo $row['link']; ?>  class="btn btn-primary">Book Now</a>
                   
                  </div>
                  </div>
               </div>
             <?php } ?>
        
    <!-- bootstrap -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap -->
   
  </body>
</html>
