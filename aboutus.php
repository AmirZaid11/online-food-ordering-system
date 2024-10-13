<?php
session_start();
?>

<html>

  <head>
    <title> About | Ernest Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Ernest Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
  <div class="tagline">
    <span>It's not our <span style="color: #FF0000; font-weight: bold;">work life</span>, it's our <span style="color: #008000; font-weight: bold; font-style: italic;">life's work</span>.</span>
  </div>
  <h2 class="section-title">About Ernest CAFE' Food Culture</h2>
  <p class="section-description">Experience the best of local and international cuisine, delivered right to your doorstep.</p>
  <div class="section-content">
    <p>We partner with top-rated restaurants and cafes in your area to bring you a wide range of culinary options. From neighborhood favorites to popular chains, our platform offers a diverse selection of food and beverages to satisfy any craving.</p>
    <p>With no minimum order restrictions, you can order as little or as much as you'd like. Our efficient delivery network ensures that your food arrives hot and fresh, every time.</p>
  </div>
  <div class="about-us">
    <h2>Welcome to ERNEST CAFE</h2>
    <p>At ERNEST CAFE, we're passionate about serving more than just great food. We're dedicated to creating memorable experiences that nourish both body and soul.</p>
    <h3>Our Story</h3>
    <p>Founded on a simple yet profound philosophy - "Good Food is Good Mood" - ERNEST CAFE is the brainchild of food enthusiasts who believe in the transformative power of culinary delights.</p>
    <h3>Our Mission</h3>
    <p>To craft exceptional dining experiences that bring people together, foster connections, and make every day a little brighter.</p>
    <h3>Our Values</h3>
    <ul>
      <li><strong>Quality:</strong> Fresh, locally-sourced ingredients, expertly prepared.</li>
      <li><strong>Community:</strong> Welcoming spaces that foster meaningful connections.</li>
      <li><strong>Passion:</strong> Dedicated to innovation, creativity, and excellence.</li>
    </ul>
    <p><strong>Join Our Table</strong></p>
    <p>Come taste the difference at ERNEST CAFE. Let's share laughter, stories, and delicious meals together!</p>
  </div>
</div>



      <iframe src="https://www.google.com/maps/place/Le+Cafe/@11.9316155,79.8335933,17z/data=!3m1!4b1!4m5!3m4!1s0x3a53636a24873e45:0x7f1e7ad6a30982dd!8m2!3d11.9316103!4d79.835782" style="width: 250px"></iframe>
         </body>
</html>