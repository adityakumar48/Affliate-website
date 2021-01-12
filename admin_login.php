<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-login</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <!-- bootstrap -->
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <!--Custom CSS-->
  </head>
  <body>
    <section
      id="admin"
      class="text-center mx-auto d-flex align-items-center justify-content-center"
    >
      <div class="col-md-4">
        <div class="card">
          <h1 class="py-3">Admin Login</h1>
          <?php session_start();
		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset($_SESSION['error']);
			}
	?>
          <form action="process.php" method="post">
            <div class="username__Section py-2">
              <tr>
                <td>Username :</td>
                <td>
                  <input type="text" name="username" />
                </td>
              </tr>
            </div>
            <div class="password__Section py-2">
              <tr>
                <td>Password :</td>
                <td class="=password__input">
                  <input type="password" name="password" />
                </td>
              </tr>
            </div>
            <div class="button pb-4 pt-3">
              <button type="submit" class="btn btn-primary px-4">Login</button>
            </div>
          </form>
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
  </body>
</html>
