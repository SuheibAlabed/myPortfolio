<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    
    <!-- Start Header -->
     <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Portfolio/assests"; 
     include($IPATH."/headernav.php") ?> 
    <!-- End Header -->
  

    <!-- Start Container -->
    <div class="container">
      <section class="Part1">
        <div class="Item1">
          <p class="Item1_1 title">Hey there,<br />It's nice to meet you.</p>
          <!-- <h2 class="title">Suheib Alabed</h2> -->
          <!-- <p class="Item1_1">A Full-Stack Developer</p> -->
          <p class="Item1_1">
            I'm currently a student at
            <a href="https://www.yu.edu.jo/">Yarmouk University</a> studying
            Computer Science.
          </p>
          <div class="info_3">
            <a href="https://www.facebook.com/suheib.alabed" target="_blank"
              ><i class="fa fa-facebook-square"></i
            ></a>

            <a
              href="http://www.linkedin.com/in/suheib-alabed/"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fa fa-linkedin-square"></i
            ></a>

            <a href="#" target="_self" rel="noopener noreferrer"
              ><i class="fa fa-instagram fa-50px"></i
            ></a>
            <a
              href="https://github.com/SuheibAlabed"
              target="_blank"
              target="_self"
              rel="noopener noreferrer"
              ><i class="fa fa-github"></i
            ></a>
          </div>

          <!-- <a href="http://www.linkedin.com/in/suheib-alabed/"> <button class="LearnMoreBtn" class="Item1_1">LEARN MORE</button></a> -->
        </div>
        <div class="Item2">
          <div class="border-image">
            <img src="Images/PFP_11.jpg" alt="" width="250px" />
          </div>
        </div>
      </section>
      <section class="Part2 show1">
        <div class="Item3" id="Work">
          <h3>WEB DESIGN</h3>
          <div>
            <a href="html/webDesign.php">view projects</a>
            <i class="fa fa-chevron-right"></i>
          </div>
        </div>
        <div class="Item4" id="Work">
          <h3>APP DESIGN</h3>
          <div>
            <a href="#">view projects</a>
            <i class="fa fa-chevron-right"></i>
          </div>
          <h2>Coming soon</h2>
        </div>
        <div class="Item5" id="Work">
          <h3>GAME DESIGN</h3>
          <div>
            <a href="#">view projects</a>
            <i class="fa fa-chevron-right"></i>
            <h2>Coming soon</h2>
          </div>
        </div>
      </section>
      <section class="Part3 show" id="About">
        <div class="mySlides Item6">
          <h3>CUPS OF COFFEE</h3>
          <div class="border-image">
            <h2 id="value1Coffee">100</h2>
          </div>
        </div>
        <div class="mySlides Item7">
          <h3>PROJECTS</h3>
          <div class="border-image">
            <h2 id="value2Project">10</h2>
          </div>
        </div>
        <div class="mySlides Item8">
          <h3>LINE OF CODE</h3>
          <div class="border-image">
            <h2 id="value3line">100</h2>
          </div>
        </div>
        <button id="readMoreBtn"><i class="fa fa-long-arrow-right"></i></button>
      </section>
      <!-- <section class="Part4"></section> -->
    </div>
    <!-- End Container -->



    <!-- Start Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Portfolio/assests"; 
     include($IPATH."/footernav.php") ?> 
    <!-- End Footer -->
    <script src="js/main.js"></script>
  </body>
</html>
