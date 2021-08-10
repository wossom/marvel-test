<?php 

class Author
{
    private $author;
    private $thumbnail;
    
    public function __construct(string $author, string $thumbnail)
    {
        $this->author = $author;
        $this->thumbnail = $thumbnail;
    }
 
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author= $author;

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
}