<?php
    
class Movie {
    public $name;
    public $duration;
    public $genre;
    public $yearOfRelease;
    public $countryOfProduction;

    function __construct($name, $duration, $genre, $yearOfRelease, $countryOfProduction){
        $this->name = $name;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->setYearOfRelease($yearOfRelease);
        $this->countryOfProduction = $countryOfProduction;
    }

    public function setYearOfRelease($yearOfRelease){
        if ($yearOfRelease !== null && !is_string($yearOfRelease)) {
            $this->yearOfRelease = $yearOfRelease;
        }
    }
}
?>
