<?php
namespace App\Model;

class Zoo
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $city;


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
    public function getName(){

        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name){

        $this->name = $name;
        return $this;
    }


    /**
     * @return string
     */
    public function getCity(){

        return $this->city;
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(string $city){

        $this->city = $city;
        return $this;
    }

}
