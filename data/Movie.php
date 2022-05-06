<?php
    
class Movie {
    public $name;
    public $duration;
    public $genre;
    public $yearOfRelease;
    public $countryOfProduction;

    function _construct($name, $duration, $genre, $yearOfRelease, $countryOfProduction){
        $this->name = $name;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->yearOfRelease = $yearOfRelease;
        $this->countryOfProduction = $countryOfProduction;
    }

}
?>
