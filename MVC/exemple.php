
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le Foutoir des Boubous">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>BoubouSquad</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <script type="text/javascript">
      function LoadBg(){
        // alert("nick ta soeur le fond");
        let arrayjs = [];
        arrayjs = <?= $finalarray ;?>;
        let randomjs = Math.floor(Math.random() * arrayjs.length);
        console.log(arrayjs[randomjs]);
        let string = "wallpaper/"+arrayjs[randomjs];
        // document.body.style.backgroundImage = "url(string)";
        document.body.style.backgroundImage = "url("+string+")";

      }
    </script>


    <!-- Bootstrap core CSS -->

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/dist/css/custome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- <link href="blog.css" rel="stylesheet"> -->
  </head>
  <body onload="LoadBg()">

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="/">accueil</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>
</div>

<main class="container">
  <div class="centered p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div  class="col-md-6 text-center ">
      <h1 id="text" class="display-6">Le Foutoir du BoubouSquad</h1>
      <p class="lead my-3">Consultez les placards !!!! .</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">et quelques contenus divers...</a></p>
    </div>
  </div>

  <div class="row mb-2">

    <div class="col-md-4">
      <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        <?php include 'file.php';?>
        </div>
       </div>
    </div>

    <div class="col-md-4">
      <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3><strong class="morris d-inline-block mb-2 text-primary">Wallpaper</strong></h3>
          <h3 class="mb-0">Selection de papier peint</h3>
          <div class="mb-1 text-muted">2021</div>
           <a href="wallpaper/" class="stretched-link">Clique ici </a>
        </div>
       </div>
    </div>

    <div class="col-md-4">
      <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3><strong class="morris d-inline-block mb-2 text-primary">Audio</strong></h3>
          <h3 class="mb-0">Ecoutez les sons</h3>
          <div class="mb-1 text-muted">2021</div>
          <a href="mp3/" class="stretched-link">Clique ici </a>
        </div>
       </div>
    </div>

  </div>

  <div class="row g-5">
    <div class="col-md-8">
    <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">
        Rammassage des ordures Quartier: mon caprice / concessions / condé / ligne bambous
      </h3>
      <a class="text-center" href="rammasse.php" class="stretched-link">Clique ici </a>
    </div>
   </div>
   <div class="col-md-8">
    <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">
        Campagne de JDR en cours!
      </h3>
      <h4>Le Donjon de Naheulbeuk</h4>
      <img src="http://www.penofchaos.com/warham/bd/images/Integ3tomes-Volume2-couvpreview.jpg" alt="Naheulbeuk cover" />
    </div>
   </div>



    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">A propos</h4>
          <p class="morris mb-0">La boubou Squad ? Qu'est ce que c'est ? c'est une team de rolistes et de fans d'univers fantasy, nous racontons et postons quelques une de nos aventures ainsi que quelques contenus. Une derniere info : pourquoi <strong>Boubou</strong> ? parce qu'on a tendance a bouder quand nos jets de dés sont pourrit, bonne visite!.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <div class="whited row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
          </div>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="whited blog-footer">
  <p class="">Powered By Kazentoile <a href="https://wanalike.fr/">Wanalike</a> by <a href="https://wanalike.fr/">@DrRedfish</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>



<script type="text/javascript" src="assets/dist/js/custome.js"></script>


  </body>
</html>
