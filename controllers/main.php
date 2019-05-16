<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        
      
    }

    function render(){
        $this->view->render('main/index');    
    }

    function saludo(){
        echo "<p>Ejecutase el método Saludo </p>";
    }
}