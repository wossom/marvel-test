<?php require_once 'views/layout/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 border-bottom border-white">

  <div class="container-fluid">

    <a class="navbar-brand" href="#">

      <img src="../assets/images/marvel.png" class="ms-4" alt="" height="50">

    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

            <li class="nav-item mx-3">

                <a href="<?=base_url?>character/characters" class="nav-link characters">Characters</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>character/character" class="nav-link character" >Find Character</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>comic/comic" class="nav-link comic">Find comic</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>comic/comic_characters" class="nav-link comic_characters">Character comic</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>comic/comic_authors" class="nav-link comic_authors">Comic authors</a>

            </li>

        </ul>
        
    </div>

  </div>
  
</nav>