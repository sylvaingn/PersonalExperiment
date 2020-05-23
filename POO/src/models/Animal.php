<?php
namespace App\Model;

class Animal
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $species;

    /**
     * @var string
     */
    private $country;


    /**
     * @return int
     */
    public function getId(){

        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id){

        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getSpecies(){

        return $this->species;
    }

    /**
     * @param string $species
     * @return self
     */
    public function setSpecies(string $species){

        $this->species = $species;
        return $this;
    }


    /**
     * @return string
     */
    public function getCountry(){

        return $this->country;
    }

    /**
     * @param string $country
     * @return self
     */
    public function setCountry(string $country){

        $this->country = $country;
        return $this;
    }

}
