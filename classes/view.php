<?php
class View {
    private $vars;
    public function construct(){}
    public function render($viewname){
        if (isset($this->vars)){
            extract($this->vars);
        }
        include VIEWS.DS.'includes'.DS.'header.php';
        include VIEWS.DS.'includes'.DS.'navebar.php';
        include VIEWS.DS.'includes'.DS.'sidebar.php';
        include VIEWS.DS.'includes'.DS.'divs.php';
        include VIEWS.DS.strtolower($viewname).'.php';
        include VIEWS.DS.'includes'.DS.'footer.php';

    }
    public function setVar($key, $value = null){
        if (is_array($key)){
            $this->vars = $key;
        } else {
            $this->vars[$key] = $value;
        }
    }
}
?>