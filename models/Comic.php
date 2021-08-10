<?php 

class Comic
{
    private $title;
    private $description;
    private $thumbnail;
    private $author;
    
    public function __construct(string $title, string $description, string $thumbnail, string $author)
    {
        $this->title = $title;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
        $this->author = $author;
    }
 
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

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

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }
}