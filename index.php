<?php


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covide19 Update status</title>
    <link rel="stylesheet" href="Css/style.css">
  
</head>

<body> 
<div class="pulse1">
        <div class="pulse">
            <span></span>
            <span></span>
            <span></span>
        </div>
       
       
        <header class="menu">
            <nav>
                <div class="leftmenu">
                    <h1>Covid19 Update </h1>
    
                </div>
                
                <div class="rightmenu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#pre">Precaution</a></li>
                        <li><a href="#Co">Golbal Carona</a></li>
                        <li><a href="#map">Golbal Update</a></li>
                       
                        <li><a href="#Con">Contact Us</a></li>
                    </ul>
                </div>
                    <div class="text">
                        <h1> COVID19 REALTIME UPDATE</h1>
                    </div>
               
                
    </div>
    
    </nav>
    </header>
    <section id="pre" class="carding">
        <div class="container">
            <h1>Precaution</h1>
            <p> </p>
        </div>
        <div class="card-wrapper">
            <div class="card">
            <img src="./img/social-distancing.png" width="100" height="100" alt="">
            <h2>Maintain social distance</h2>
            </div>
            <div class="card">
              <img src="./img/no-handshake.png" width="100" height="100" alt="">
              <h2>Avoid Handshake</h2>
              </div>
              <div class="card">
                  <img src="./img/stayhome.jpg" width="100" height="100" alt="">
                  <h2>Stay Home & Stay Safe</h2>
                  </div>
                  <div class="card">
                      <img src="./img/male.png" width="100" height="100" alt="">
                      <h2>Use mask</h2>
                      </div>
                      <div class="card">
                          <img src="./img/wash-your-hands.png" width="100" height="100" alt="">
                          <h2>Wash your Hand</h2>
                          </div>
                          <div class="card">
                              <img src="./img/scoicalg.jpg" width="100" height="100" alt="">
                              <h2>Avoid social Gathering</h2>
                              </div>
          </div>
      </div>
    </section>
    <section id="Co" class="global">
        <div class="update">
            <h1>GLOBAL CARONA PANDEMIC UPDATE</h1>
        </div>
        <div>
            <p> </p>
        </div>
        <div class="case">
            <div class="test">
                <img src="./img/coronavirus.png"  width="80" height="80" alt="">
                <h2>TOTAL CASE</h2>
            </div>
            <div class="test">
                <img src="./img/bed.png"  width="80" height="80" alt="">
                <h2>TOTAL DEATH</h2>
            </div>
            <div class="test">
                <img src="./img/safety-suit.png"  width="80" height="80" alt="">
                <h2>TOTAL RECOVERED</h2>
            </div>
            <div class="test">
                <img src="./img/heartbeat.png"  width="80" height="80" alt="">
                <h2>ACTIVE CASES</h2>
            </div>
            <div class="test">
                <img src="./img/coronavirus.png"  width="80" height="80" alt="">
                <h2>TODAY CASES</h2>
            </div>
            <div class="test">
                <img src="./img/bed.png"  width="80" height="80" alt="">
                <h2>TODAY DEATHS</h2>
            </div>
            <div class="test">
                <img src="./img/medical-file.png"  width="80" height="80" alt="">
                <h2>TOTAL TEST
                </h2>
            </div>
            <div class="test">
                <img src="./img/ambulance.png"  width="80" height="80" alt="">
                <h2>SERIOUS CRITICAL</h2>
            </div>
        </div>
    </section>

    <section id="map" class="map">
        <div class="county">
            <h1>Global Update</h1>
        </div>
        <div>
            <p> </p>
        </div>
    </section>
    <section>
  <main>
        <div class="stats">
          <div class="latest-report">
            <div class="country">
              <div class="name">Loading...</div>
              <div class="change-country">change</div>
              <div class="search-country hide">
                <div class="search-box">
                  <input
                    type="text"
                    id="search-input"
                    placeholder="Search Country..."
                  />
                  <img class="close" src="./resources/img/close.svg" alt="" />
                </div>
                <div class="country-list"></div>
              </div>
            </div>
            <div class="total-cases">
              <div class="title">Total Cases</div>
              <div class="value">0</div>
              <div class="new-value">+0</div>
            </div>
            <div class="recovered">
              <div class="title">Recovered</div>
              <div class="value">0</div>
              <div class="new-value">+0</div>
            </div>
            <div class="deaths">
              <div class="title">Deaths</div>
              <div class="value">0</div>
              <div class="new-value">+0</div>
            </div>
          </div>
          <div class="chart">
            <canvas id="axes_line_chart"></canvas>
          </div>
        </div>
    </main>
</section>

      
    
    
    
<!--script Tag  -->
<script src="https://kit.fontawesome.com/aa2de22e01.js" crossorigin="anonymous"></script>
 <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script
      language="JavaScript"
      src="http://www.geoplugin.net/javascript.gp"
      type="text/javascript"
    >
    </script>
    <script src="./Js/app.js"></script>
    <script src="./Js/countries.js"></script> 
<footer>
    <div id="Con" class="footer-content">
        <h3>Covid19 Update Realtime</h3>
        <ul class="socials">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/atul-c-275510108/"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>Copyright &copy;2020 Covid19. designed by <span>Atul aka Spidey</span></p>
    </div>
</footer>
  
</body>


</html>
?>