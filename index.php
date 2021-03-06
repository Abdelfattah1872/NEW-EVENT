<?php include("inc/theme/header.php");?>
<?php include("inc/Database/db.php");?>
<!-- ###################################-------------------Start Content-------------------############################################################# -->
<!-- #####################################           NAV BAR             ################################################################# -->
<title>Event / Home</title>
<section class="navbar-wrap" id="NvBar">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;" id="navbar_top">
  <div class="container">
  <img src="./Assets/images/event logo.png" style="width: 100px; height: 100px;" class="navbar-brand" alt="">
  <!-- <span class="logo-text">MFN FAMILY'S 8th EVENT-2021</span> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-left" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item">
        <a class="nav-link" href="#NvBar" style="border: 1px solid orange;"><span>HOM</span>E</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#video" style="border: 1px solid orange;"><span>ABO</span>UT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#eventIn" style="border: 1px solid orange;"><span>EVEN</span>TS</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#schedule" style="border: 1px solid orange;"><span>SCHEDU</span>LE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fees" style="border: 1px solid orange;"><span>FE</span>ES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#hotels" style="border: 1px solid orange;"><span>HOTE</span>LS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sponser" style="border: 1px solid orange;"><span> BE SPONSE</span>R</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="border: 1px solid orange;"><span>CONTA</span>CT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php" style="border: 3px solid orange;background-color: white !important;color: black">REGISTRATION</a>
        </li>
      </ul>
     </div>
    </div>
  </nav>
</section>
<!-- ####################################          TOP BUTTON           ################################################################## -->
<button id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<!-- ####################################          ANIMATION WAVE       ################################################################## -->
<section class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
      <img src="./Assets/images/mfn logo.png" style="width: 500px;" alt="">
    </div>
      <!--Waves Container-->
    <div class="anim">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="orange"/>
        <use xlink:href="#gentle-wave" x="48" y="3" fill="orange" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="orange" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="white" />
      </g>
    </svg>
    </div>
  </section>
<!-- ######################################          HEADER SECTION        ################################################################ -->
<section class="content flex" style="background-color: orange;">
      <h3 style="font-family: 'century gothic';color: black;font-weight: bold;">Dear freight forwarders,
          We invite you to attend the 8th event in 
            <span style="color: white;font-weight: bold;font-size: 35px;">Bangkok, Thailand</span></h3>
      </section>
<!-- #####################################           ONE 2 ONE            ################################################################# -->
<section class="one-one mt-2" id="event">
        <div class="container d-flex">
          <div class="left-side my-3">
            <img src="./Assets/images/4Y9A7018.png" class="img-fluid">
          </div>

          <div class="right-side w-75 mx-4 my-auto text-left">
            <h3 class="mt-5 text-left">FREIGHT FORWARDERS EVENT
              MFN Family ONE 2 ONE Event</h3>
              <p class="text-left">MEET OVER 200+ RESPECTABLE AND PROMINENT FREIGHT FORWARDERS & LOGISTICS COMPANIES 
                FROM THE WHOLE GLOBE IN ONE PLACE, AS WE OFFER AN EXCELLENT PLAT FORM FOR FUTURE 
                COLLABORATIONS AND EXCLUSIVE NETWORKING OPPORTUNITIES IN ONE-2-ONE MEETINGS.</p>
          </div>
        </div>
      </section>
<!-- #########################################       VIDEO OF EVENT           ############################################################# -->
<section class="mt-2" id="video">
        <video autoplay muted loop id="myVideo">
          <source src="./Assets/videos/1.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        
        <div class="contente">
          <div class="container">
            <h1>WHO WE ARE?</h1>
            <p class="loader" id="loader"></p>
            <button id="myBtne" onclick="myFunction()">Pause</button>
          </div>
          </div>
      </section>
<!-- #######################################          EVENTS                ############################################################### -->
<section class="events mt-2 m-auto" id="eventIn">
        <div class="container mb-2 text-center">
          <h2 class="p-5 last-event">Our Last Events</h2>
            <div class="card-deck" style="justify-content: center;">
              <img src="./Assets/images/event/Layer 6.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 7.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 8.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 9.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 10.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 12.png" class="w-20 m-3" alt="">
              <img src="./Assets/images/event/Layer 13.png" class="w-20 m-3" alt="">
                </div>
              </div>
      </section>
<!-- ####################################             schedule           ################################################################## -->
<section class="schedule mt-2" id="schedule">
        <div class="container">
          <div class="schad-header w-50 m-auto text-center">
            <h1 style="color:white;">Ev<span style="color: orange;">ent Sche</span>dule</h1>
              <p style="color: white;">Everyday has a new, So enjoy every day</p>
          </div>
          <ul class="nav my-5">
            <li class="nav-item mx-auto">
              <button class="nav-link colo" id="first-butn" style="outline:none !important;">1st day</button>
            </li>
            <li class="nav-item mx-auto">
              <button class="nav-link"  id="second-butn" style="outline:none !important;">2nd day</button>
            </li>
            <li class="nav-item mx-auto">
              <button class="nav-link" id="third-butn" style="outline:none !important;">3rd day</button>
            </li>
            <li class="nav-item mx-auto">
              <button class="nav-link" id="forth-butn" style="outline:none !important;">4th day</button>
            </li>
          </ul>

          <div class="img-content my-2 w-100 mx-auto">
            <!-- first-day -->
            <div class="first-day" id="firstDay">
              <div class="whole-day d-flex">
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day1/registeration.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>REGISTRATION</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day1/communication.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>COCKTAIL RECEPTION</p></h4>
                </div>
              </div>
            </div>
            <!-- second,third-day -->
            <div class="first-day" id="secondDay">
              <div class="whole-day d-flex">

                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/meeting.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p> ONE-2-ONE MEETINGS</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/Coffee-Break-Quiz.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>COFFEE BREAK</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/StaffFeedbackMeetings_NewSite_1200x940_v2.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p> ONE-2-ONE MEETINGS</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/coffee-break.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>COFFEE BREAK</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/one-on-one-meeting.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p> ONE-2-ONE MEETINGS</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/coffee-break-500.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>COFFEE BREAK</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/lunch.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>LUNCH</p></h4>
                </div>
                <div class="first-cont-schd my-3" id="first-img"> 
                  <img src="./Assets/images/schad/day2&3/gala3.png" class="w-50" alt="" style="border: 2px solid orange;">
                  <h4 class="w-50 mx-auto">9 AM - 11 AM <p>GALA DINNER</p></h4>
                </div>
              </div>
            </div>
          <!-- forth-day -->
          <div class="first-day" id="forthDay">
            <div class="whole-day d-flex">
              <div class="first-cont-schd my-3" id="first-img"> 
                <img src="./Assets/images/schad/day4/cert6.png" class="w-50" alt="" style="border: 2px solid orange;">
                <h4 class="w-50 mx-auto">9 AM - 11 AM <p>10 AM - 2 PM CERTIFIED FREIGHT & LOGISTICS COURSES BY. THOMAS S</p></h4>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
<!-- ###################################               COURCES          ################################################################### -->
<section class="course mt-2 one-one" id="event">
        <div class="container d-flex">
          <div class="left-side m-auto w-75 mx-3 mb-3" id="thomas-img">
            <img src="./Assets/images/schad/thomas.png" class="img-fluid mb-2" alt="Responsive image">
          </div>

          <div class="right-side w-75 m-3">
            <h2 class="mt-5 text-left">FREIGHT & LOGISTICS COURSE</h2>
              <p class="text-left">Certified By Mr.Thomas Sim
                The diploma is a world-wide recognized vocational 
                certificate and has an excellent reputation 
                in the industry. It develops the knowledge and skills required 
                for the freight forwarders business and equip the students 
                with the advanced techniques in the industry.</p>
          </div>
        </div>
      </section>
<!-- ###################################                FEES            ################################################################### -->
<section class="FEES mt-2 m-auto" id="fees">
    <div class="container text-center">
        <h2 class="p-5 last-event packeg" style="font-size: 70px !important; border-bottom: 3px solid orange;">PACKAGES</h2>
        <div class="card-deck w-100" style="justify-content: center;">
            <!--     MEMBER RATE       -->
            <h4 class="p-3 last-event">MFN Family <span>Members</span> Rates</h4>
            <h2 class="p-5 last-event packeg" style="font-size: 70px !important;">WITH ACCOMNDATION</h2>
            <!--     WITH ACCOMENDATION       -->
            <div class="mfnRate d-flex">
                <div class="card mb-3 w-100 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/bed+wine.jpg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">3DAYS-2NIGHTS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span> 700$/<span style="text-decoration-line:line-through;color: red">800 $</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span> 500$/<span style="text-decoration-line:line-through;color: red">550 $</span</P>
                                <P class="card-text"><span style="color: white">EACH KID UNDER 12 YEARS: </span> 300$/<span style="text-decoration-line:line-through;color: red">400 $</span</P>
                                <P class="card-text"><span style="color: white">SPOUSE: </span>150$/<span style="text-decoration-line:line-through;color: red">200 $</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
                <div class="card mb-3 w-100 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/bed+wine.jpg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">4DAYS-3NIGHTS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span> 1050$/<span style="text-decoration-line:line-through;color: red">1200$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span> 750$/<span style="text-decoration-line:line-through;color: red">800$</span</P>
                                <P class="card-text"><span style="color: white">EACH KID UNDER 12 YEARS: </span> 450$/<span style="text-decoration-line:line-through;color: red">500$</span</P>
                                <P class="card-text"><span style="color: white">SPOUSE: </span>300$/<span style="text-decoration-line:line-through;color: red">350$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
            </div>
            <h2 class="p-5 last-event packeg" style="font-size: 70px !important;">WITHOUT ACCOMNDATION</h2>
            <!--     WITHOUT ACCOMENDATION       -->
            <div class="mfnRate d-flex">
                <div class="card mb-3 w-75 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/wine.jpeg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">3DAYS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>500$/<span style="text-decoration-line:line-through;color: red">600$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>350$/<span style="text-decoration-line:line-through;color: red">400$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
                <div class="card mb-3 w-75 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/wine.jpeg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">4DAYS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>650$/<span style="text-decoration-line:line-through;color: red">750$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>500$/<span style="text-decoration-line:line-through;color: red">600$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
            </div>
            <!--     NON MEMBER RATE       -->
            <h4 class="p-3 last-event">MFN Family <span>NON-Members</span> Rates</h4>
            <h2 class="p-5 last-event packeg" style="font-size: 70px !important;">WITH ACCOMNDATION</h2>
            <!--     WITH ACCOMENDATION       -->
            <div class="mfnRate d-flex">
                <div class="card mb-3 w-100 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/bed+wine.jpg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">3DAYS-2NIGHTS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>800$<span style="text-decoration-line:line-through;color: red">900$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>600$/<span style="text-decoration-line:line-through;color: red">650$</span</P>
                                <P class="card-text"><span style="color: white">EACH KID UNDER 12 YEARS: </span>400$/<span style="text-decoration-line:line-through;color: red">450$</span</P>
                                <P class="card-text"><span style="color: white">SPOUSE: </span>200$/<span style="text-decoration-line:line-through;color: red">250$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
                <div class="card mb-3 w-100 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/bed+wine.jpg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">4DAYS-3NIGHTS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>1150$/<span style="text-decoration-line:line-through;color: red">1250$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>850$/<span style="text-decoration-line:line-through;color: red">900$</span</P>
                                <P class="card-text"><span style="color: white">EACH KID UNDER 12 YEARS: </span>500$/<span style="text-decoration-line:line-through;color: red">550$</span</P>
                                <P class="card-text"><span style="color: white">SPOUSE: </span>325$/<span style="text-decoration-line:line-through;color: red">400$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
            </div>
            <h2 class="p-5 last-event packeg" style="font-size: 70px !important;">WITHOUT ACCOMNDATION</h2>
            <!--     WITHOUT ACCOMENDATION       -->
            <div class="mfnRate d-flex">
                <div class="card mb-3 w-75 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/wine.jpeg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">3DAYS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>550$/<span style="text-decoration-line:line-through;color: red">600$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>450$/<span style="text-decoration-line:line-through;color: red">500$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
                <div class="card mb-3 w-75 m-auto" style="background-color: black;border: 5px solid orange">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="./Assets/images/fees/members/wine.jpeg"style="height: 100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-left my-auto">
                                <h1 class="card-title" style="color: white">4DAYS</h1>
                                <P class="card-text"><span style="color: white">BASE PACKAGE: </span>750$/<span style="text-decoration-line:line-through;color: red">50$</span></P>
                                <P class="card-text"><span style="color: white">EXTRA DELGETE: </span>600$/<span style="text-decoration-line:line-through;color: red">650$</span</P>
                            </div>
                        </div>
                        <a class="card-text buttonre type1 w-100 mx-auto mb-3" href="registration.php" style="outline: none;text-decoration: none">REGISTER</a>
                    </div>
                </div>
            </div>
</section>
<!-- ##################################                 HOTEL            ################################################################## -->
<section class="mt-2" id="hotels">
  <h2 class="text-center m-auto display-2" style="color: white;background-color: black; font-weight: bold;">HOTEL</h2>
  <div class="container">
    <div class="card mt-3 text-white w-75 mx-auto">
      <img src="./Assets/images/HOTEL.png" class="card-img">
      <a href="" class="p-4 my-2 w-50 show-more mx-auto text-center">Show More</a>
  </div>
  </div>
</section>
<!-- ##################################                 BE SPONSER          ############################################################### -->
<section class="spons mt-2" id="sponser">
  <h2 class="text-center m-auto display-2 w-100" style="color: black;background-color: white; font-weight: bold;">BE SPONSER</h2>
  <div class="container">
    <div class="card mt-3 text-white w-75 mx-auto">
      <img src="./Assets/images/sps.png" class="card-img">
      <a href="./sponser.php" class="p-4 my-2  show-more mx-auto text-center">Get More About Our Packages</a>
  </div>
  </div>
</section>
<!-- ###################################                FOOTER             ################################################################ -->
<footer id="support" class="footer-distributed mt-0">
    <div class="container">
      <div class="footer-left mx-4 my-auto text-center" style="letter-spacing: unset;">
        <img src="./Assets/images/YourLogo.png" style="width: 200px;" alt="">
        <p class="footer-links">
            <a href="#NvBar">HOME</a>

            <a href="#video">ABOUT</a>
            
            <a href="#eventIn">EVENTS</a>
            
            <a href="#schedule">SCHEDULE</a>
            
            <a href="#fees">FEES</a>
            
            <a href="#hotels">HOTELS</a>
            
            <a href="#sponser">SPONSERS</a>
            
            <a href="contact.php">CONTACT</a>
            
            <a href="registration.php">REGISTRATION</a>
        </p>
      </div>
      
      <div class="footer-center text-center mx-4 my-5" style="letter-spacing: unset;">
    
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>99 Sakr Quraysh</span>Sheraton Heliopolis,Cairo</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a type="email" class="env-mail">info@mfnfamily.com</a></p>
        </div>
      </div>
    
      <div class="footer-right mx-4 text-left">
    
        <p class="footer-company-about" style="letter-spacing: unset;">
          <span>WHO WE ARE?</span>
          MFN family is a private owned network for all companies size. We are different from most of the other networks in the market as we offer to our members the revolution of freight forwarders network services.
        </p>
    
        <div class="footer-icons">
          <a href="https://www.facebook.com/MFNFamily" target="_blank"><img src="./Assets/images/social/iconfinder_square-facebook_317727.png" style="width: 30px;height: 30px;" alt=""></a>
            <a href="https://twitter.com/mfnfamily" target="_blank"><img src="./Assets/images/social/iconfinder_twitter_386736.png" style="width: 30px;height: 30px;" alt=""></a>
            <a href="https://www.linkedin.com/in/mfnfamily/"target="_blank"><img src="./Assets/images/social/iconfinder_social_media_applications_14-linkedin_4102586.png" style="width: 30px;height: 30px;" alt=""></a>
            <a href="https://www.instagram.com/mfn_family/" target="_blank"><img src="./Assets/images/social/iconfinder_social-instagram-new-square2_1164347.png" style="width: 30px;height: 30px;" alt=""></a>
            <a href="https://www.behance.net/mfnfamily" target="_blank"><img src="./Assets/images/social/iconfinder_behance__social__media_2986188.png" style="width: 30px;height: 30px;" alt=""></a>
        </div>

        </div>
      </div>
      <p class="footer-company-name text-center mt-5 w-50" style="font-size: 20px;"><span style="border-bottom: 3px solid orange;">MFN FAMILY EVNENT 2020 © All Rights Reserved</span></p>
        </footer>
<!-- ###################################-------------------End Content-------------------############################################################# -->
<?php include("inc/theme/footer.php")?>
<script src="./js/home.js"></script>
    </body>
</html>

