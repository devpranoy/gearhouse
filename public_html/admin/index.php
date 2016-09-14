<!DOCTYPE html>
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
      <center><strong>Hi </strong> Admin</h1></center>
      <form method="post" action="make_login.php">
        <input type="text" name="user_name" placeholder="Username " required="required " class="input-txt " />
          <input type="password" name="password" placeholder="Password" required="required " class="input-txt " />
          <div class="login-footer ">
            <button type="submit " class="btn btn--right ">Sign in  </button>
    
          </div>
      </form>
  </div>
</div>
  </body>
</html>
