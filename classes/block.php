<? 

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

?>
