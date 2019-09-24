<?php



class block {

    var $content;
    var $time;

    function set_content($text) {
      $this->content  = $text;
    }

    function get_content() {
      return ('salt of space '.$this->content);
    }

}

function printPosts() {
  $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
  $query_select = "SELECT * FROM `text` ";
  $stmt = $pdo->query($query_select);

    $counter=0;
    foreach ($stmt as $key ) {

        $form=printRmBttn($key['id']);
        $edit=printEdit($key['id'],$key['text']);

        echo("

        <div class='content' id=".$key['id'].">


         <p> AUTOR :".$key['author']." and content is :".$key['text']." </p>


        ".$form.$edit."

        </div>");
        $counter++;

    };
}


function insertPosts($text,$author) {

    $query_insert="INSERT INTO text (text,author,time) VALUES ";
    $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
    $query_in = $query_insert.'("'.$text.'","'.$author.'",UNIX_TIMESTAMP());';
    $stmt = $pdo->query($query_in);
    echo($query_in);

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


  $aid = array($id,$text);
  $myJSON = json_encode($aid);
  $time="'".$text."'";
  $taxt = '"'.$text.'"';
  echo($taxt);

  print_r($text);
  $decode = preg_replace('/\s/', '&nbsp;', $text);


  $editForm= "<button type='button'  onclick=cook_edit_form($id,'".$decode."')>CLICK</button>";
  return ($editForm);

}































 ?>
