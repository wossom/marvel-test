<div class="container mb-5">

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php foreach ($characters as $character) 
        { ?>
        
            <div class="col py-2 px-4">

                <div class="card">

                    <img src="<?=$character->getThumbnail()?>" class="card-img-top" height="350px" alt="...">
                
                    <div class="card-body">

                        <h5 class="card-title"><?=$character->getName()?></h5>

                        <p class="card-text"><?=$character->getDescription()?></p>

                    </div>

                </div>

            </div>

        <?php } ?>
    </div>
    
</div>


