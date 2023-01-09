<?php

   class movie {

    private $title;
    public $durate;
    public $forAdult;
    public $yearPublication;
    public $movieYears;
    public  function  calcMovieYears($_arg){
        $this->movieYears = date('Y') - $_arg;
    }
    public function setTitle($_title){
        $this->title = $_title;
    }
    public function getTitle(){
    return $this->title;
}
    public function __construct($_arr){
        
        $this->title = $_arr['name'];
        $this->durate = $_arr['duration'];
        $this->forAdult = $_arr['adult'];
        $this->yearPublication = $_arr['publication'];
        $this->calcMovieYears($this->yearPublication);
    }
};
?>


