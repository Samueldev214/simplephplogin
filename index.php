<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../assets/style/style.css" type="text/css" media="all" />
  </head>
  <body>
  <form action="loginhandler.php" method="post" accept-charset="utf-8">
    <!-- wrapper -->
      <div class="wrapper">
          <h2>sign up</h2>
        <!-- inner boxes -->
        <div class="inputbx">
          <input type="text" name="firstname" id="firstname" placeholder="firstname"/>
        </div>
        <div class="inputbx">
          <input type="text" name="lastname" id="lastname" placeholder="lastname"/>
        </div>
        <div class="inputbx">
          <input type="text" name="username" id="username" placeholder="username"/>
        </div>
        <div class="inputbx">
          <input type="password" name="password" id="password" placeholder="password"/>
        </div>
        <!-- submit button  -->
        <button type="submit">submit</button>
      </div>
</form>
  </body>
</html>