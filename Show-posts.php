<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
    <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap -->
</head>
<body>



<section class="pt-5 p-4 text-center mx-auto d-flex align-items-center justify-content-center">
   <div class="col-md-12">
       

            
	<?php session_start();


	include('dbConnect.php');
	$sql = "select * from post order by id desc";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	$rs =  $stmt->fetchAll();

	echo "
		<table border='1'>
			<tr>
				<th>Sno.</th>
				<th>Title</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
				<th>Links</th>
			</tr>
	";
	$i = 1;
	foreach($rs as $row){
		$cid = $row['id'];
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$row['title']."</td>
			<td>".$row['description']."</td>
			<td>".$row['price']."</td>
			<td>".$row['image']."</td>
			<td>".$row['link']."</td>;
        </tr>
		";
		$i++;
	}
	echo "</table>";
    ?>
        </div>
            </div>
        </div>
        </div>
    </section>


    
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- bootstrap -->
</body>
</html>