<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>{block name=header}Jumbotron Template · Bootstrap{/block}</title>
  <!--load bootstrap & other -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
  <!--load fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
      font-family: "Montserrat";
      font-weight: 300;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
  <!-- nav -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
  <a class="navbar-brand" style="font-family: 'Spartan'; letter-spacing: 0.15em; margin-left: 10%;"href="{rel_url action='main'}">serenity .</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto" style = "margin-right: 10em;">
     
      <li class="nav-item">
        <a class="nav-link" href="{rel_url action='admin'}">Admin Panel</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{rel_url action='browseBands'}">Bands</a>
          <a class="dropdown-item" href="{rel_url action='browseAlbums'}">Albums</a>
        </div>
      </li>
    </ul>
    <form class="form-inline">
    <button class="btn btn-sm btn-outline-secondary" style ="margin-right: 1em;"type="button">sign in</button>
    <button class="btn btn-sm btn-outline-secondary" style ="margin-right: 1em;background-color:#dbdbdb;" type="button">sign up</button>
  </form>
  {*  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>*}
  </div>
</nav>
   <main role="main">
         <div class="jumbotron" style="background-color: #f5f5f5;">
  <!-- inside -->
{block name = content} Domyślna treść zawartości .. {/block}
         </div>
   </main>
<footer class="container">
    <p>&copy; Serenity. - Ewa Zielonka, 2020<br/> Created using <b><a href="http://amelia-framework.eu">Amelia</a></b> framework, by <a href="http://kudlacik.eu">Przemysław Kudłacik.</a><br/> Homepage Illustration: <a href="https://pl.freepik.com/pikisuperstar">pikisuperstar</a>, <a href="https://pl.freepik.com/darmowe-wektory/motyw-ilustracyjny-z-ludzmi-sluchajacymi-muzyki_5778617.htm#page=1&query=headphones&position=26">designed by freepic.</a></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
