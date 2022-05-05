<?php require_once 'views/layout/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 border-bottom border-white">

  <div class="container-fluid">

    <a class="navbar-brand" href="#">

      <img src="../assets/images/marvel.png" class="ms-4" alt="" height="50" testID="marvel-logo">

    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

            <li class="nav-item mx-3">

                <a href="<?=base_url?>controller=character&action=characters" class="nav-link characters" testID="characters-link">Characters</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>controller=character&action=character" class="nav-link character" testID="findCharacter-link">Find Character</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>controller=comic&action=comic" class="nav-link comic" testID="findComic-link">Find comic</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>controller=comic&action=comic_characters" class="nav-link comic_characters" testID="characterComic-link">Character comic</a>

            </li>

            <li class="nav-item mx-3">

                <a href="<?=base_url?>controller=comic&action=comic_authors" class="nav-link comic_authors" testID="comicAuthor-link">Comic authors</a>

            </li>

        </ul>
        
    </div>

  </div>
  
</nav>