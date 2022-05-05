<?php
if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'failed'){ ?>

    <div class="container">

        <div class="row">

            <div class="col-md-6 mx-auto">

                <h1 class="text-light"> Ups.. Comics authors hasn't been found </h1>

            </div>          

        </div>

    </div>

<?php
}else if(isset($_SESSION['chargedCharacter']) && $_SESSION['chargedCharacter'] == 'success'){
?>

    <div class="container mb-5">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <?php foreach ($authors as $author) 
            { ?>
                <div class="col py-2 px-4">

                    <div class="card">

                        <img src="<?=$author->getThumbnail()?>" class="card-img-top" height="400px" alt="...">

                    <div class="card-body">

                        <h5 class="card-title"><?=$author->getAuthor()?></h5>

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