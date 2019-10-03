<?php





function printPosts() {
  $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
  $query_select = "SELECT * FROM `text` ";
  $stmt = $pdo->query($query_select);

    $counter=0;
    foreach ($stmt as $key ) {

        $form=printRmBttn($key['id']);
        $edit=printEdit($key['id'],$key['text']);

        echo("

        <span class='child' id=$key['id']>


         <p class='post'> $key['text'] </p>

         <p> author: $key['author'] <br /></p>




        ".$form.$edit."

        </span>");
        $counter++;

    };
}


function insertPosts($text,$author) {

    $query_insert="INSERT INTO text (text,author,time) VALUES ";
    $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
    $query_in = $query_insert.'("'.$text.'","'.$author.'",UNIX_TIMESTAMP());';
    $stmt = $pdo->query($query_in);
    echo($query_in);
    print_r($pdo->errorInfo());

}


function printRmBttn($id) {

   $form=

    '<form action="index.php" method="post">
    <input type="hidden" name="remove" value="'.$id.'">
    <input type="submit" value="REMOVE">

    </form>';

    return ($form);

  }


function removePost($id) {


  $query_delete="DELETE FROM text WHERE id='".$id.";' ";
  $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
  $stmt = $pdo->query($query_delete);



}

function printEdit($id,$text) {


  $time="'".$text."'";
  $taxt = '"'.$text.'"';
  echo($taxt);

  print_r($text);
  $decode = preg_replace('/\s/', '&nbsp;', $text);


  $editForm= "<button type='button'  onclick=cook_edit_form($id,'".$decode."')>EDIT</button>";
  return ($editForm);

}

function editPost($id,$text) {

  $query_edit="UPDATE text SET text='$text' WHERE id=$id";
  $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
  $stmt = $pdo->query($query_edit);
  print_r($pdo->errorInfo());


}

































 ?>
