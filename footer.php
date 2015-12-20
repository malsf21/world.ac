<?php
$rando = rand(1,2);
if($rando == 1){
	$teamNames = "<b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b> and <b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b>";
}
elseif($rando == 2){
	$teamNames = "<b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b> and <b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b>";
}

?>

<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse navbar-footer hidden-xs" style="background-color:transparent; ">
  <div class="container-fluid navbar-footer" style ="text-algin:center">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="footer-navbar" >
      <ul class="nav navbar-nav">
        <li><a href="#"><b>REGISTER</b></a></li>
        <li><a href="about_us.php"><b>WAC TEAM</b></a></li>
        <li><a href="contact_us.php"><b>CONTACT US</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text" style =" vertical-align:middle; display:table-cell;">Developed by this year's WAC web design team, <?php echo $teamNames; ?>
      </ul>
    </div>
  </div>
</nav>

