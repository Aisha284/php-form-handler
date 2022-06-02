<html>
  <head>
    <title>World's Smallest Form Handlerer</title>
  </head>
  <body>
    <h1>World's Smallest Form Handler</h1>
  <?php
  if(isset($_POST["FirstName"])){//show data
    echo $_POST["FirstName"];
  }else{//show form
    echo '
      <form method="post">
     <p>First Name: <input type="text" name="FirstName" /></p>
     <p><input type="submit" /></p>
   </form>
         ';
  }

  ?>



    
   
  </body>
</html>
