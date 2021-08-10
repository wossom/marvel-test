<?php 

require_once 'Comic.php';

class Character
{
    private $name;
    private $description;
    private $thumbnail;
    private $comics;

    public function __construct(string $name, string $description, string $thumbnail, array $comics)
    {
        $this->name = $name;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
        $this->comics = $comics;
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
 
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getComics()
    {
        return $this->comics;
    }

    public function setComics($comics)
    {
        $this->comics = $comics;

        return $this;
    }

    public function toString()
    {
        return "Name: " . $this->name . "Description: " . $this->description;
    }
}