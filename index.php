<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title> bloblocks </title>
  </head>
  <body>

    <?php
          include 'CastesLib.php';
          function laduje($nazwa) {
            require "/classes/$nazwa.php";
          }

          spl_autoload_register('laduje');

          if(isset($_POST['func'])) {


            insertPosts($_POST['input'],$_POST['author']);
          }

          if(isset($_POST['remove'])) {

            removePost($_POST['remove']);

          }

          if (isset($_POST['edited'])) {

            editPost($_POST['edit'],$_POST['edited']);
          }



        ?>

    <button type="button" name="button"> load base </button>
    <div class='newText'>

      <form action="index.php" method="post">
        <input type="text" name="input" value="write here pls">
        <input type="text" name="author" value="put u name">
        <input type="hidden" name="func" value="posting">
        <input type="submit" name="ENTER" >

      </form>




    </div>

    <div class='container'>

    <?php printPosts(); ?>
    
    </div>



<footer>
  FUTANARI!
</footer>

  </body>
</html>
