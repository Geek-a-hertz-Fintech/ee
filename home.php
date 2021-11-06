<?php
session_start();

if($_SESSION['id']) && isset($_SESSION['user_name']) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="icard">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="icontainer">
    <h4><b><?php echo $_SESSION['user_name']; ?></b></h4>
  </div>
  <button>Logout</button>
</div>
    </body>
    </html>

    <?php
}

else {
    header("Location: index.php");
    exit();
}
?>