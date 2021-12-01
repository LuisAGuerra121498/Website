<!DOCTYPE html>
<html>
<title>Houston Elite</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://assets.simpleviewinc.com/simpleview/image/upload/c_fill,f_jpg,h_1080,q_50,w_1920/v1/clients/houston/downtownskyline_dusk_2200x1458_fb275565-0b6b-482b-8d06-43c2cb3f03fd.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">Houston Elite </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="Entertainment.html" class="w3-bar-item w3-button"><i class="fa fa-ticket"></i>Entertainment</a>
      <a href="Food.html" class="w3-bar-item w3-button"><i class="fa fa-cutlery"></i> Food</a>
      <a href="Hotels.html" class="w3-bar-item w3-button"><i class="fa fa-suitcase"></i> Hotel</a>
      <a href="Developers.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Developers</a>
      <a href="Contact_us.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact Us</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="Entertainment.html" onclick="w3_close()" class="w3-bar-item w3-button">Entertainment</a>
  <a href="Food.html" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="Hotels.html" onclick="w3_close()" class="w3-bar-item w3-button">Hotel</a>
  <a href="Developers.html" onclick="w3_close()" class="w3-bar-item w3-button">Developers</a>
  <a href="Contact_us.html" onclick="w3_close()" class="w3-bar-item w3-button">Contact Us</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small w3-white w3-padding-large w3-margin-top w3-opacity w3-hover-opacity-off ">Start having fun in Houston</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium w3-white w3-padding-large w3-margin-top w3-opacity w3-hover-opacity-off">Start having fun in Houston</span><br>
    <span class="w3-large w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Stop wasting valuable time looking what to do in your own.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">We will help you to find a place to have fun in Houston.</a></p>
  </div> 
</header>

<!-- About Section -->
<div class="w3-container w3-black" style="padding:128px 16px" id="about">
  <h3 class="w3-center">What is Houston Elite</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-ticket w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Entertainment</p>
      <p>Our website will suggest locations around Houston.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cutlery w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Food</p>
      <p>Looking to eat something? Don't worry, we got you. We will provide you with quality restaurants where you can eat.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-suitcase w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Hotel</p>
      <p>We also provide with a place to stay, all around Houston.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-user w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Developers</p>
      <p>We the developers have been making easier for you. So you can enjoy more about Houston.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-dark-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Houston</h3>
      <p>Houston is the second largest city of the United States. There's many stuff to do and we can help you with it.</p>
      <p><a href="#places" class="w3-button w3-black"><i class="fa fa-th"> </i> What to do in Houston.</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://res.cloudinary.com/culturemap-com/image/upload/ar_4:3,c_fill,g_faces:center,w_980/v1531405883/photos/278213_original.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.cnet.com/a/img/iraQIWvynvMS2xUd15C2q25Ewv4=/1200x675/2021/07/08/b8b0ec19-8d86-4052-8e80-08cda7921965/queen-euro-social-crop.png" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Queen Elizabeth</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>CEO & Founder of many companies for about 200 years. She is known to help Colombus to develop his website "America".</p>
          <p><a href="Contact_us.html" onclick="w3_close()"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://theartgorgeous.com/wp-content/uploads/2018/06/Feature_ArtCritics_theartgorgeous-1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Danny DaVito</h3>
          <p class="w3-opacity">Art Designer</p>
          <p>His art has inspired famous influencers like Hercules and even helped bring sunshine to Philadelphia. His most famous piece is “EGG”.</p>
          <p><a href="Contact_us.html" onclick="w3_close()"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://newfastuff.com/wp-content/uploads/2019/06/BQQxBtV.png" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Harold</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Web Designer that has been working for 14 years. He very well known in the internet and his last name is unknown.</p>
          <p><a href="Contact_us.html" onclick="w3_close()"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://bit.ly/2ZdOrh7" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Wendy</h3>
          <p class="w3-opacity">Harold's Mother</p>
          <p>Best designer, she know what she's doing. She deserver that champagne.</p>
          <p><a href="Contact_us.html" onclick="w3_close()"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- place Section -->
<div class="w3-container w3-grey" style="padding:128px 16px" id="places">
  <h3 class="w3-center">Places to go.</h3>
  <p class="w3-center w3-large">Choose what you want to try in Houston.</p>

  <div class="w3-row-padding" style="margin-top:64px">
  <div class="w3-col l3 m6">
      <a href = "Entertainment.html">
        <img src="https://www.marqehouston.com/public/EdwardsCinema.jpg" width = "80%" class="w3-hover-opacity" alt="Entertainment" width="100" height="175">
        <button style = "width:80%" class="w3-button w3-light-grey w3-block"><i class="fa fa-cutlery"></i> Entertainment</button>
      </a> 
    </div>
    <div class="w3-col l3 m6">
      <a href="Food.html">
      <img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_12/1418790/the-cheese-cake-factory-today-main-190319.jpg" width = "70%" hight = "100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Food">
      <button style = "width:70%" class="w3-button w3-light-grey w3-block"><i class="fa fa-cutlery"></i> Food</button></a>
    </div>
    <div class="w3-col l3 m6">
      <a href="Hotels.html">
        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2020/10/JW-Marriott-Houston-Downtown.jpg" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hotel" height="155">
        <button style ="width:80%" class="w3-button w3-light-grey w3-block"><i class="fa fa-cutlery"></i> Hotels</button></a>
    </div>
    <div class="w3-col l3 m6">
      <a href=Developers.html>
        <img src="https://www.seekpng.com/png/detail/86-860567_join-dev-team.png" style="width:80%" class="w3-hover-opacity" alt="Developers" width="100" height="155">
        <button style = "width:80%" class="w3-button w3-light-grey w3-block"><i class="fa fa-cutlery"></i> Developers</button></a>
    </div>
  </div>
  </div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
</body>
</html>
