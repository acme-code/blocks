<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> bloblocks </title>
  </head>
  <body>

    <?php
          include 'CastesLib.php';

          if(isset($_POST['func'])) {


            insertPosts($_POST['input'],$_POST['author']);
          }

          if(isset($_POST['remove'])) {

            removePost($_POST['remove']);

          }

        ?>

    <button type="button" name="button"> load base </button>
    <div id='dash_board'>

      <form action="index.php" method="post">
        <input type="text" name="input" value="write here pls">
        <input type="text" name="author" value="put u name">
        <input type="hidden" name="func" value="posting">
        <input type="submit" name="ENTER" >

      </form>




    </div>

    <div id='php'>
     <p> tu
    <?php printPosts(); ?>
    </p>
    </div>





  </body>
</html>
