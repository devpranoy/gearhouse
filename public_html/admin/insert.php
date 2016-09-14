<?php
session_start();
$_SESSION['val']=1;
 if($_SESSION['pass'])
 {
     echo' <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <title>Admin Page : Gear House</title>
        <link rel=" stylesheet " href="css/index_style.css ">

  </head>

  <body>

    <div class="container ">
<h1 class="header">
  <span class="fname">Gear</span>
  <span class="lname">House</span>
</h1>
  <div class="login ">
  	<h1 class="login-heading ">
      <center><strong>Enter Car Details </strong><br>'.$_SESSION['msge'].'</h1></center>
      <form method="post" action="add_val.php">
        <input type="text" name="car_name" placeholder="Car Name " required="required " class="input-txt " />
        <select class="input-txt" name="id_cata"  >
                    <option>economy</option>
                    <option>perform</option>
                  </select>
      <select class="input-txt" name="id_engine">
                    <option>diesel</option>
                    <option>petrol</option>
                    <option>electric</option>
                    <option>hybrid</option>
                  </select>
     <select class="input-txt" name="id_type">
                    <option>suv</option>
                    <option>sedan</option>
                    <option>supercar</option>
                    <option>hatchback</option>
                  </select>
        <input type="text" name="car_price" placeholder="Car price " required="required " class="input-txt " />
        <input type="text" name="car_link" placeholder="Car link " required="required " class="input-txt " />
          <div class="login-footer ">
            <button type="submit " class="btn btn--right ">Insert Data</button>
    
          </div>
      </form>
  </div>
</div>
  </body>
</html>
';
 }
 else
 {
    header("Location: ./");
 }
?>
