<?php
if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'failed'){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1> Ups.. Comics authors hasn't been found </h1>
            </div>          
        </div>
    </div>

<?php
}else if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'success'){
?>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($characters as $character) 
            { ?>
                <div class="col py-2 px-4">
                    <div class="card">
                    <img src="<?=$character->getThumbnail()?>" class="card-img-top img-fluid" height="30" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$character->getTitle()?></h5>
                        <p class="card-text"><?=$character->getDescription()?></p>
                    </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php 
} 
Utils::deleteSession('chargedCharacter');
?>