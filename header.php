<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Description">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
<title> <?php
  if (function_exists('is_tag') && is_tag()) {
     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
  elseif (is_archive()) {
     wp_title(''); echo ' Archive - '; }
  elseif (is_search()) {
     echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
  elseif (!(is_404()) && (is_single()) || (is_page())) {
     wp_title(''); echo ' - '; }
  elseif (is_404()) {
     echo 'Not Found - '; }
  if (is_home()) {
     bloginfo('name'); echo ' - '; bloginfo('description'); }
  else {
      bloginfo('name'); }
  if ($paged>1) {
     echo ' - page '. $paged; }
?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>
<header class="container-fluid bg1">
    <div class="container">

<nav class="navbar navbar-expand-md navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="whitkin">WHITKIN</span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PROJECTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACTS</a>
      </li>
    </ul>
  </div>
</nav>

<div class="tag">
<h1>Games Design for the future</h1>
</div>
</div> <!-- container -->
<?php wp_head(); ?> <!-- very important that this is added-->
</header>

<section class="container-fluid aboutbg text-center"> 
    <div class="container">
<h2>GAMES &amp; LEVEL DESIGNER</h2>
<p class="particle">... and particle wizard</p>
<p class="about-text">My  name is Josh Whitkin. I'm a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects.  What makes me passionate about games is the combination of technology  and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.
 I always tell a story.</p>

 <div class="blocker"></div>

    </div> <!-- container -->
</section>

<section class="container-fluid articlesbg"> 
    <div class="container">
        <h3 class="text-center">LATEST ARTICLES</h3>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="images/image%202.jpg" alt="woman">
                        <h4 class="article-title">A PORTRAIT</h4>
                        <p class="date">Friday, November 10. 2030</p>
                        <p class=article-p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and  opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                        <a class="readmore" href="#">CONTINUE READING</a>
                </div>
            <div class="col-md-4">
                    <img class="img-fluid" src="images/image%203.jpg" alt="game-model">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday, November 10. 2030</p>
                    <p class=article-p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and  opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div>
            <div class="col-md-4">
                    <img class="img-fluid" src="images/image%204.jpg" alt="terrain">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday, November 10. 2030</p>
                    <p class=article-p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and  opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<footer class="container-fluid text-center">
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="whitkin">WHITKIN</span></a>
        </div>
        <div class="col-md-6">
            <p>Terms and Conditions</p>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</footer> 
</body>
</html>