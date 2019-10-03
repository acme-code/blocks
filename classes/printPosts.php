<?

function printPosts() {
  $pdo = new PDO('mysql:host=localhost;dbname=blocks', 'root', '');
  $query_select = "SELECT * FROM `text` ";
  $stmt = $pdo->query($query_select);
    $counter=0;
    foreach ($stmt as $key ) {
        $form=printRmBttn($key['id']);
        $edit=printEdit($key['id'],$key['text']);
        echo("
        <div class='child' id=".$key['id'].">
         <p> AUTOR :".$key['author']." and content is :".$key['text']." </p>
        ".$form.$edit."
        </div>");
        $counter++;
    };
}
?>
