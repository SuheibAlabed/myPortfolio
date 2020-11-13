<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Design</title>
    <link rel="stylesheet" href="../style/style.css" />
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
    <div class="containerWeb" >
      <section class="Part1Web" >
        <h1>Web Design</h1>
        <p>we build website that serve as powerful marketing tools</p>
        <p>and bring memorable brand experiences.</p>
      </section>

      <section class="cards">
        <!-- Start Cart1 -->
        <article class="card1_1 card1">
          <a href="https://alimama00-75df0b.ingress-baronn.easywp.com/?_ga=2.231209433.771227905.1604687901-31905298.1604513777" target="_blank">
          <div class="descriptionCard">
            <h3>E-commerce website</h3>
            <p>
              E-commerce website<br />
              In WordPress
            </p>
            
          </div>
        </a>
        </article>
        <!-- End Cart1 -->

        <!-- Start Cart2 -->
        <article class="card1 card1_2" id="Work" >
          <a href="https://social-media-dashboard-with-theme-switcher-master-tawny.vercel.app/" target="_blank">
          <div class="descriptionCard" >
            <h3>Social-Media-Dashboard</h3>
            <p>
              Social media dashboard <br />
              with theme switcher
            </p>            
          </div>
        </a>
        </article>
        <!-- End Cart2 -->

        <!-- Start Cart3 -->
        <article class="card1 card1_3">
          <div class="descriptionCard">
            <a href="https://room-homepage-master-two.vercel.app/" target="_blank">
            <h3>Room-Homepage-Master</h3>
            <p>
              E-commerce homepage <br />
              for Room.
            </p>
          </div>
        </a>
        </article>
        <!-- End Cart3 -->
       
        <!-- Start Cart4 -->
        <article class="card1 card1_4" >
          <a href="https://testimonials-grid-section-murex.vercel.app/" target="_blank">
          <div class="descriptionCard">
            <h3>Testimonials-grid-section</h3>
            <p>Testimonials grid section</p>
          </div>
        </a>
        </article>
        <!-- End Cart4 -->

        <!-- Start Cart5 -->
        <article class="card1 card1_5">
          <div class="descriptionCard">
            <h3>None</h3>
            <p>Coming Soon..</p>
          </div>
        </article>
        <!-- End Cart5 -->

        <!-- Start Cart6 -->
        <article class="card1 card1_6">
          <div class="descriptionCard">
            <h3>none</h3>
            <p>Coming Soon..</p>
          </div>
        </article>
        <!-- End Cart6 -->

        <!-- Start Cart7 -->
        <article class="card1 card1_7">
          <div class="descriptionCard">
            <h3>None</h3>
            <p>Coming Soon..</p>
          </div>
        </article>
        <!-- End Cart7-->

        <!-- Start Cart8 -->
        <article class="card1 card1_8">
          <div class="descriptionCard">
            <h3>None</h3>
            <p>Coming Soon..</p>
          </div>
        </article>
        <!-- End Cart8 -->
      </section>
    </div>
    <!-- End Container -->

    <section class="Part2Web">
      <div class="Item4">
        <h3>APP DESIGN</h3>
        <a href="#">view projects</a>
      </div>
      <div class="Item5">
        <h3>GAME DESIGN</h3>
        <a href="#">view projects</a>
      </div>
    </section>

    <!-- Start Footer -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Portfolio/assests"; 
     include($IPATH."/footernav.php") ?> 
    <!-- End Footer -->
    <script src="../js/main.js"></script>
  </body>
</html>
