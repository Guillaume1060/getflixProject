<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edege">
    <title>Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="styles/styles_home.css" rel="stylesheet">
    
</head>


<body>
   <header>
    <img class="logo" src="images/logo.svg" alt="logo">
    <img class="logo_minia" src="images/logo_planete.svg" alt="logo_minia">
    <nav>
        <ul class="nav_links">
        <li><a href="#"><i class="fa-solid fa-house"></i> HOME</a></li>
        <li><a href="#"><i class="fa-solid fa-film"></i></i> FILMS</a></li>
        <li><a href="#"><i class="fa-solid fa-tv"></i></i> SERIES</a></li>
        <li><a href="#"></a><i class="fa-solid fa-magnifying-glass"></i></i> RECHERCHE</a></li>
    
        
        </ul>
        <ul class="nav_links_responsive">
        <li><a href="#"><i class="fa-solid fa-house"></i></a></li>
        <li><a href="#"><i class="fa-solid fa-film"></i></i></a></li>
        <li><a href="#"><i class="fa-solid fa-tv"></i></i></a></li>
        <li><a href="#"></a><i class="fa-solid fa-magnifying-glass"></i></i></a></li>
        
        </ul>
    </nav>
          <!--   <div class="searchbar">
                    <input type="text" name="searchBar" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
          </div> --><div class="user">
                          <p class="p_username">USER</p>
                           <img class="userImage" name="userImage" src="images/CN.jpg" alt="userImage">
                    </div>
  </header>

<div class="container_content">
        <div class="jumbotron"></div>
        </div>


<!-- <div class="container_content2">
<h4>Nouveau sur NovaFlix</h4>
<ul class="ListBox">
            <li class="box1"></li>
            <li class="box1"></li>
            <li class="box1"></li>
            <li class="box1"></li>
            <li class="box1"></li>
            <li class="box1"></li>
</ul>
-->
<p>Nouveauté</p>
<div class="container">

<div class="swiper-container">
  <div class="swiper-wrapper">
      
      <?php 
      include "../api/api/info.php";

      foreach($topMovies->results as $p){ // TOP SF MOVIE
    echo  "<div class='swiper-slide'>
              <a href='movie.php?id=".$p->id."'><img src='".$imgurl_500 . $p->poster_path . "'></a>
          </div>";       
  } ?>
  </div>
  
  <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>

<p>Incontournables</p>
<div class="container"> 

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/ba7hnMx1HAze0QSJSNfsTBycS8U.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c3XBgBLzB9Sh7k7ewXY2QpfH47L.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/b5rOkbQ0jKYvBqBf3bwJ6nXBOtx.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/aNsrgElf0fiKBSR8cWWEL6XUTte.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/dueiWzWc81UAgnbDAyH4Gjqnh4n.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hwNRc9ZWrakGdql22srY7DqtmRQ.jpg" alt="">
    </div>
    
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/trAOGwksvgHYNpbK4GewbjYQ1pi.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/zAIippNnm6o0gYEtjapbjQSxP8G.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/tNyJxHK3m7NAAKNYITLJ5oxS0YR.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hMh1mR2kNl8kHjpIuPh4TICTwjo.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c4EkF5JAZ83bUqNErhuSd9xw6uJ.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/79DgItjsyH5tpA3mC2xv5gU2zlZ.jpg" alt="">
    </div>
  </div>
  
  <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>

<p>Films</p>
<div class="container"> 

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/ba7hnMx1HAze0QSJSNfsTBycS8U.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c3XBgBLzB9Sh7k7ewXY2QpfH47L.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/b5rOkbQ0jKYvBqBf3bwJ6nXBOtx.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/aNsrgElf0fiKBSR8cWWEL6XUTte.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/dueiWzWc81UAgnbDAyH4Gjqnh4n.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hwNRc9ZWrakGdql22srY7DqtmRQ.jpg" alt="">
    </div>
    
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/trAOGwksvgHYNpbK4GewbjYQ1pi.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/zAIippNnm6o0gYEtjapbjQSxP8G.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/tNyJxHK3m7NAAKNYITLJ5oxS0YR.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hMh1mR2kNl8kHjpIuPh4TICTwjo.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c4EkF5JAZ83bUqNErhuSd9xw6uJ.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/79DgItjsyH5tpA3mC2xv5gU2zlZ.jpg" alt="">
    </div>
  </div>
  
  <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>

<p>Series</p>
<div class="container"> 

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/ba7hnMx1HAze0QSJSNfsTBycS8U.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c3XBgBLzB9Sh7k7ewXY2QpfH47L.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/b5rOkbQ0jKYvBqBf3bwJ6nXBOtx.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/aNsrgElf0fiKBSR8cWWEL6XUTte.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/dueiWzWc81UAgnbDAyH4Gjqnh4n.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hwNRc9ZWrakGdql22srY7DqtmRQ.jpg" alt="">
    </div>
    
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/trAOGwksvgHYNpbK4GewbjYQ1pi.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/zAIippNnm6o0gYEtjapbjQSxP8G.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/tNyJxHK3m7NAAKNYITLJ5oxS0YR.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/hMh1mR2kNl8kHjpIuPh4TICTwjo.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/c4EkF5JAZ83bUqNErhuSd9xw6uJ.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="https://image.tmdb.org/t/p/w500/79DgItjsyH5tpA3mC2xv5gU2zlZ.jpg" alt="">
    </div>
  </div>
  
  <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>


<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"></script>
<script src="./script.js"></script>



<footer>

</footer>
</html>