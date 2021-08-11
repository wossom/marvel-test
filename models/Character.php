<?php 

class Character
{
    private $name;
    private $description;
    private $thumbnail;

    public function __construct(string $name, string $description, string $thumbnail)
    {
        $this->name = $name;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
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

    public function getInformation()
    {
        return "Name: " . $this->name . "\n" . "Description: " . $this->description;
    }
}