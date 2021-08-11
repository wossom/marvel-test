<?php
require_once('models/character.php');
require_once('models/MarvelClient.php');

class characterController{

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
    {
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            
            if( is_numeric($id) )
            {
                $marvelClient = new MarvelClient();

                $character = $marvelClient->getCharacter($id);
    
                if(is_null($character)){
                    $_SESSION['chargedCharacter'] = 'failed';
                }else{
                    $_SESSION['chargedCharacter'] = 'success';
                }
            }
            else
            {
                $_SESSION['chargedCharacter'] = 'failed';
            }
        }else
        {
            $_SESSION['chargedCharacter'] = 'failed';
        }
        require_once 'views/character/showCharacter.php';
    }

}


?>