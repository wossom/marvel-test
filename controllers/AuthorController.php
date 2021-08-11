<?php
require_once('models/author.php');
require_once('models/MarvelClient.php');

class authorController{

    public function characters()
    {
        $marvelClient = new MarvelClient();
        $characters = $marvelClient->getCharacters();

        require_once 'views/character/characters.php';
    }

    public function character()
    {
        require_once 'views/character/characterId.php';
    }

    public function character_id()
    {//1009351
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $marvelClient = new MarvelClient();
            $character = $marvelClient->getCharacter($id);

            if(is_null($character)){
                $_SESSION['chargedCharacter'] = 'failed';
            }else{
                $_SESSION['chargedCharacter'] = 'success';
            }
        }else
        {
            $_SESSION['chargedCharacter'] = 'failed';
        }
        require_once 'views/character/showCharacter.php';
    }

}


?>