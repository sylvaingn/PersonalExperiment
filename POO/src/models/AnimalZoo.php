<?php


class AnimalZoo
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $animal_id;

    /**
     * @var int
     */
    private $zoo_id;


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
     * @return int
     */
    public function getAnimal_id(){

        return $this->animal_id;
    }

    /**
     * @param int $animal_id
     * @return self
     */
    public function setAnimal_id(int $animal_id){

        $this->animal_id = $animal_id;
        return $this;
    }


    /**
     * @return int
     */
    public function getZoo_id(){

        return $this->zoo_id;
    }

    /**
     * @param int $zoo_id
     * @return self
     */
    public function setZoo_id(int $zoo_id){

        $this->zoo_id = $zoo_id;
        return $this;
    }

}
