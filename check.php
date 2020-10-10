<?php include("inc/theme/header.php");?>
<?php include("inc/Database/db.php");?>
<?php include("inc/theme/func.php");?>
<!--########################################################################--------- START CONTENT------- ###############################################-->
<!-- #####################################           NAV BAR             ############################################################## -->
<div class="navbar-wrap" id="NvBar">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;" id="navbar_top">
        <div class="container">
            <img src="./Assets/images/event logo.png" style="width: 100px; height: 100px;" class="navbar-brand" alt="">
            <!-- <span class="logo-text">MFN FAMILY'S 8th EVENT-2021</span> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-left" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php" style="border: 1px solid orange;"><span>HOM</span>E</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- #####################################           Registration            ############################################################## -->
<section id="regestration my-2">
    <div class="container">
        <h2 class="text-center m-auto display-2" style="color: black;background-color: white; font-weight: bold;border-bottom: 3px solid orange">CONFIRM YOUR REQUEST</h2>
            <div class="final-reset d-block mt-5">
                <table class="table table-dark comp-data">
                    <h6>Company information :</h6>
                    <thead>
                    <tr>
                        <th scope="col">MFN member :</th>
                        <th scope="col">Company Name:</th>
                        <th scope="col">Company Phone:</th>
                        <th scope="col">Company Country:</th>
                        <th scope="col">Company City:</th>
                        <th scope="col">Company Address:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <!-- Before Check delgete info  -->
                <table class="table table-dark dele-data">
                    <h6>Delgete information :</h6>
                    <thead>
                    <tr>
                        <th scope="col">Delgete Name:</th>
                        <th scope="col">Delgete Phone:</th>
                        <th scope="col">Delgete Email:</th>
                        <th scope="col">Delgete Position:</th>
                        <th scope="col">Number of Extra Delgete :</th>
                        <th scope="col">Number of Kids :</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <!-- Before Check delgete info  -->
                <table class="table table-dark dele-data w-25 mx-auto text-center">
                    <h6 class="text-center">Coast :</h6>
                    <thead>
                    <tr>
                        <th scope="col">total Fees :</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <form class="text-center my-4" action="" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1">Extra Information :</label>
                <textarea class="form-control text-center" placeholder="For Example : Extra Delgete Information, Kids, Special Message For Us , ...etc." style="height: 200px"></textarea>
            </div>
            <button type="submit" class="btn w-25 p-3" style="background-color: orange;color: black;font-weight: bold;border: none;outline: none">CONFIRM</button>
        </form>
        </div>
</section>
<!-- ###################################                FOOTER             ############################################################## -->
<footer id="support" class="footer-distributed mt-0">
    <div class="container">
        <div class="footer-left mx-4 my-auto text-center" style="letter-spacing: unset;">
            <img src="./Assets/images/YourLogo.png" style="width: 200px;" alt="">
            <p class="footer-links">
                <a href="./index.php">HOME</a>
            </p>
        </div>

        <div class="footer-center text-center mx-4 my-5" style="letter-spacing: unset;">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>99 Sakr Quraysh</span>Sheraton Heliopolis,Cairo</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="abdo200010002@gmail.com" class="env-mail">info@mfnfamily.com</a></p>
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
<!--########################################################################----------- END CONTENT------- ###############################################-->
<?php include("inc/theme/footer.php")?>
<script src="./js/main.js"></script>
</body>
</html>
