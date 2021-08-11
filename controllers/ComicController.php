<?php
require_once('models/comic.php');
require_once('models/author.php');
require_once('models/MarvelClient.php');

class comicController{

    public function comic_characters()
    {
        require_once 'views/comics/comicsCharacter.php';
    }

    public function comic()
    {
        require_once 'views/comics/comic.php';
    }

    public function comic_authors()
    {
        require_once 'views/comics/comicsAuthor.php';
    }

    public function comic_characters_id()
    {//1009351
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $marvelClient = new MarvelClient();
            $characters = $marvelClient->getComicsForCharacter($id);

            if(is_null($characters))
            {
                $_SESSION['chargedCharacter'] = 'failed';
            }
            else
            {
                $_SESSION['chargedCharacter'] = 'success';
            }
        }else
        {
            $_SESSION['chargedCharacter'] = 'failed';
        }
        require_once 'views/comics/showComicCharacters.php';
    }

    public function comic_id()
    {//1009351
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $marvelClient = new MarvelClient();
            $comic = $marvelClient->getComic($id);

            if(is_null($comic))
            {
                $_SESSION['chargedCharacter'] = 'failed';
            }
            else
            {
                $_SESSION['chargedCharacter'] = 'success';
            }
        }else
        {
            $_SESSION['chargedCharacter'] = 'failed';
        }
        require_once 'views/comics/showComic.php';
    }

    public function comic_authors_id()
    {//1009351
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $marvelClient = new MarvelClient();
            $authors = $marvelClient->getCreatorsForComics($id);

            if(is_null($authors))
            {
                $_SESSION['chargedCharacter'] = 'failed';
            }
            else
            {
                $_SESSION['chargedCharacter'] = 'success';
            }
        }else
        {
            $_SESSION['chargedCharacter'] = 'failed';
        }
        require_once 'views/comics/showComicAuthors.php';
    }

}


?>