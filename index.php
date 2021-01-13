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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <!-- Custom CSS -->
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div
              class="banner text-center align-content-center pt-5 mt-5  justify-content-center "
            >
              <h2 class="py-3 pt-5">Affiliate Marketing Store</h2>
              <p class="py-3">
                Online Shopping India - Buy mobiles, laptops, cameras, books,
                watches, apparel, shoes and e-Gift Cards. Free Shipping & Cash
                on Delivery,Affiliate marketing is the process by which an affiliate earns a commission for marketing another person's or company's products. The affiliate simply searches for a product they enjoy.
              </p>
            </div>
            <div class="button d-flex justify-content-center ">
              <a href="store.php" class="btn btn-primary">Check Store</a>
            </div>
            
          </div>
          <div class="col-md-4 pt-5">
              <div class="py-2 pt-5 mt-5 d-flex justify-content-center" >
              <img src="img/undraw_Social_life_re_x7t5.svg"  width="100%">
              </div>
            </div>
        </div>
      </div>
    </section>
    <div class=" pt-5 mt-5 mb-5 pb-5 "></div>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div class="chart py-5">
              <div id="piechart" style="width: 600px; height: 500px;"></div>
              </div>
          </div>
            <div class="col-md-5 mt-5 te pt-5">
              <h1 class="text-center"> Affliate Companies</h1>
              <p class="text-center">This Associates Program Advertising Fee Schedule (“Schedule”) is part of the Operating Agreement that governs your participation in the Associates Program. This Schedule describes the advertising fee rates you may earn as a participant in the Program. It also describes the limitations that apply to earning advertising fees on certain Products.
From time to time, we may modify this Schedule in accordance with the Operating Agreement. All capitalized terms used below that are not defined on this page have the meanings given to them in the Operating Agreement.</p>
<div class="button py-2 d-flex justify-content-center ">
              <a href="blog.php" class="btn btn-success">Check Blog</a>
            </div>
            </div>
            
        </div>
      </div>
    </section>
    <div class=""></div>
    <section class="product">
      <h1 class="text-center py-2 pt-4">Product Section</h1>
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
 <div class="scrolling-wrapper">
 <div class="col-md-3 p-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="uploads/<?php echo $row['image'];?>" alt="shinzo" width="100%" height="300px">
                  <hr>
                  <div class="card-body">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                    
                    <hr>
                   <h5 class="card-text pb-2">₹ <?php echo $row['price']; ?></h5>
                   <a href=<?php echo $row['link']; ?>  class="btn btn-danger">Features</a>
                    <a href=<?php echo $row['link']; ?>  class="btn btn-primary">Book Now</a>
                    
                   </div>
                   </div>
                </div>
              <?php } ?>

</div>
 </section>
 <div class="py-5 my-5">

 </div>
 <section class="pt-5 mt-5">
   <div class="container">
     <div class="row">

    
      <div class="col-md-5">
        <div class="about__section text-center">
        <h2 class="text-center">About</h2>
        <p class="text-center col-md-12"> Affiliate marketing, while often referred to as a “channel,” is really a model or framework that makes it possible for brands to partner with individuals or companies (referred to as “affiliates,” “partners” and “publishers”), to track and measure their performance and do so in an efficient, scalable, and cost-effective way.</p>
        </div>
      </div>
      </div>
   </div>
 </section>

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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Affliate Order'],
          ['Amazon',  10],
          ['Flipkart', 6],
          ['Snapdeal',  3],
          ['Messo', 3],
          ['Jabong ',    1]
        ]);

        var options = {
          title: 'Affiliate Companies'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  </body>
</html>
