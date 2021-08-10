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

    public function character_id()
    {
        $marvelClient = new MarvelClient();
        $character = $marvelClient->getCharacter(1009351);

        if(is_null($character)){
            $_SESSION['chargedCharacterd'] = 'failed';
        }else{
            $_SESSION['chargedCharacterd'] = 'success';
        }

        require_once 'views/character/characterId.php';
    }

}


?>