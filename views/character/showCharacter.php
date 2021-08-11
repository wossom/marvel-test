<?php
if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'failed'){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1> Ups.. Character hasn't been found </h1>
            </div>          
        </div>
    </div>

<?php
}else if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'success'){
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?=$character->getThumbnail()?>" alt="" class="img-fluid rounded">
                <br><br>
                <a href="<?=base_url?>author/character" class="btn btn-outline-danger btn-block d-grid gap-2 col mx-auto">Return</a>

            </div>

            <div class="col-md-8 text-light">
                <h3><?= $character->getName()?></h3>
                <hr>
                <p><?= $character->getDescription()?></p>
            </div>
        </div>
    </div>

<?php 
} 
Utils::deleteSession('chargedCharacterd');
?>
