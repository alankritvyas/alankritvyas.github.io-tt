<!DOCTYPE html>
<html>
<title>Alankrit Vyas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
a {text-decoration: none;}

html{
  scroll-behavior: smooth;
}
  


button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


.r{
  margin-right: 2%;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 31%;
  padding: 0 10px;
  
}
.mgs{
  margin-left: 3%;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: black;
}

</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="image/logo.png" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-photo w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#music" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-music w3-xxlarge"></i>
    <p>PLAYLIST</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#music" class="w3-bar-item w3-button" style="width:25% !important">Playlist</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Alankrit Vyas.</h1>
    <p>Photographer and Web Designer.</p>
    <img src="image/Me.jpg" alt="boy" class="w3-image" width="500" height="500">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Alankrit Vyas</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Hey everyone, this is Alankrit Vyas. 
        I am currently pursuing computer and communication engineering in Bacherlors degree at Manipal University Jaipur. 
        I love to click photographs a lot even though i am not a professional nor i have a "DSLR" camera but i still click because i just like to do so. 
        Besides clicking photos i love drawing sketches like something sci-fi or a scenery.
        Instrumental songs are my jam i like only those, it's not that i don't like lyrical bit i prefer Instrumental than lyrical.
    </p>
    
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Photography</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">C++</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">C</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">MySQL</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Java</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:45%"></div>
    </div><br>
    
    <h3 class="w3-padding-16 w3-text-light-grey">Education</h3>
    <div class="w3-row w3-center w3-padding-16 w3-section ">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">Secondary</span><br>
          Smt.Sulochanadevi Singhania School
          <br>
          Student Batch:2005-2017
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">High School</span><br>
          New Horizon Scholars School
          <br>
          Science Stream
          <br>
          Student Batch:2017-2019
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">Under Graduate</span><br>
          Manipal University Jaipur
          <br>
          Student Batch: 2019-2023
          <br>
          Current Sem: III
        </div>
        
      </div>

   
    
   

    
    <h3 class="w3-padding-24 w3-text-light-grey">My Projects</h3>  
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="image/ss.png" width="250" height="250" frameborder="0" allowtransparency="true" allow="encrypted-media">
          <p>Weather</p>
          <p><a href="https://alankritvyas.me/alankritvyas21.github.io-weather/" >Go to site</a></p>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="image/desunchlogos.png" class="mgs" width="250" height="250" frameborder="0" allowtransparency="true" allow="encrypted-media">
          
          <p>Gaming Blog</p>
          <p><a href="https://desynchronized21.github.io/" >Go to site</a></p>
        </div>
      </div>
   
    </div>
  
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Photos</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="image/Candle.jpeg" style="width:100%">
       
     
      </div>

      <div class="w3-half">
        <img src="image/nahargarh.jpeg" style="width:100%">
        
      
      </div>
      <button class="w3-button  w3-padding-large w3-section">
        <i class="fa fa-photo"></i><a href="photo.html"> View More</a>
      </button>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
<div class=" w3-padding-64 w3-content w3-text-grey " id="music">
  <h2 class="w3-text-light-grey">My Top 5</h2>
  <hr style="width:200px" class="w3-opacity">
  <h3 class="w3-padding-24 w3-text-light-grey">Assassin's Creed</h3>  
    <iframe class="r" src="https://open.spotify.com/embed/track/3ATBKK03AP6mRqd4sUVvHW" width="250" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <iframe class="r" src="https://open.spotify.com/embed/track/20cl2GKkPPFb6bbXcXjnwv" width="250" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <iframe class="r" src="https://open.spotify.com/embed/track/0QI1IQbCigfH2kkSdNfvpO" width="250" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <iframe class="r" src="https://open.spotify.com/embed/track/5wNLSF0W0NZyu9eRpufdqn" width="250" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <iframe class="r" src="https://open.spotify.com/embed/track/4m5gJuQlo2byPHRQamL6dd" width="250" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <button class="w3-button  w3-padding-large w3-section">
      <i class="fa fa-spotify"></i><a href="spotify:playlist:7fYETaUvdphuCp8noDizir"> Full Playlist</a>
    </button>
   
  </div>
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">
<br>
    <a href="mailto:av3h.vyas@gmail.com " class="fa fa-envelope w3-xxlarge w3-margin-right w3-hover-opacity "></a>
    <a href="https://www.facebook.com/profile.php?id=100007428494855" class="fa fa-facebook-official w3-margin-right w3-xxlarge w3-hover-opacity"></a>
    <a href="https://www.instagram.com/i_alanvyas/" class="fa fa-instagram w3-xxlarge w3-margin-right w3-hover-opacity"></a>
    <a href="https://twitter.com/AlankritVyas" class="fa fa-twitter w3-xxlarge w3-margin-right w3-hover-opacity"></a>
    <a href="https://www.linkedin.com/in/alankrit-vyas-667063190/" class="fa fa-linkedin w3-xxlarge w3-margin-right w3-hover-opacity"></a>
    
    </div>

    
 
    <a href="logout.php">Logout</a>

   
  
    <footer class="w3-large w3-center w3-margin-right ">
      <p>Copyright (c) 2020 Alankrit Vyas</p>
    </footer>
  <!-- End footer -->
 

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
