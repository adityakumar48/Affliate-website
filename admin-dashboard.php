<?php
include('AdminHeader.html')
?>
<?php
include('dbConnect.php');
  $sql = "update visitor set visitor=visitor+1";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  
  $sql = "select visitor from visitor";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
  $arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $counter =  $arr[0] ['visitor'];
  $count=strlen($counter);
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
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/AdminDashboard.css">
    <!-- Custom Css -->
  </head>
  <body>
    <hr>
<div class="pt-5 pb-2">
<section class="text-center mt-5 mb-5 pb-5 pt-5 mx-auto d-flex align-items-center justify-content-center" >
<div class="container ">
  <div class="row">
    <div class="col-md-12  ">
      <h2> Page Visitor </h2>
          <div class="visitorCounter pt-2 offset-md-2 text-center ">
            <div class="offset-md-4 text-center">
            <ul id="visitor">
              <?php for($i=0;$i<$count;$i++) {?>
              <li><?php echo $counter[$i]?></li>
                <?php } ?>
            </ul>
            </div>
          </div>
          </div>
    </div>
  </div>
</div>
</section>
</div>
<?php
include('footer.html')
?>
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
