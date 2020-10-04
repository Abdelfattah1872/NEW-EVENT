<?php include("inc/theme/header.php");?>
<?php include("inc/Database/db.php");?>
<?php include("inc/theme/func.php");?>
<?php
// send Message to DataBase
if(isset($_POST['send'])) {
    $name = santString($_POST['name']);
    $comp= santString($_POST['name']);
    $email = santEmail($_POST['email']);
    $phone = $_POST["phone"];
    $message = santString($_POST['message']);
    if(requiredInput($name) &&  requiredInput($email) &&  requiredInput($comp) ) {
        if(minInput($name,3) && maxInput($password,150)) {
            if(validEmail($email)) {
                $sql = "INSERT INTO `contact` (`name`,`company_name`,`phone_number`,`Email`,`message`)
                        VALUES ('$name','$comp','$phone','$email','$message')  ";
                $result = mysqli_query($conn,$sql);

                if($result) {
                    $success = "Thanks for your message :)";
                    $page = $_SERVER['PHP_SELF'];
                    $sec = "3";
                    header("Refresh: $sec; url=$page");
                }
            } else {
                $error = "Please Type Valid Email !";
            }
        } else {
            $error = "Name Must Be Grater Than 3 Chars / Message Must Be Less Than 150 Chars";
        }
    } else {
        $error =  "Please Fill All  Fields !";
    }
} ?>
<!--######################################################################## START CONTENT ###############################################-->
<title>Event / Contact US</title>
<button id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
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
<!-- ###################################                CONTACT US        ################################################################# -->
<h2 class="text-center m-auto display-2" style="color: black;background-color: white; font-weight: bold;" id="contactt">CONTACT</h2>
<!--Error-->
<?php if($error): ?>
<h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
<?php endif;  ?>
<!--Success-->
<?php if($success): ?>
<h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
<?php endif;  ?>
<section class="mailer mt-2" id="contact">
    <form class="mail-form w-50 m-auto text-left" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name"><h3>Name <sup>* </sup></h3></label>
        <input type="text" id="name" name="name" placeholder="For Example: John Smith" required>

        <label for="company"><h3>Company <sup>*</sup></h3></label>
        <input type="text" id="company" name="company" placeholder="For Example: Company or Municipality name">

        <label for="phone"><h3>Phone Number <sup>*</sup></h3></label>
        <input type="phone" id="phone" name="phone" placeholder="For Example: +12345678"  required/>

        <label for="email"><h3>E-mail <sup>*</sup></h3><h6></h6></label>
        <input type="email" id="email" name="email" placeholder="For Example: info@mfnfamily.com" required>


        <label for="message"><h3>Message <sup>*</sup></h3></label>
        <textarea name="message" id="message" placeholder="Please Enter Your Message Here :)" class="text-center" style="border:solid 3px black;height:200px;background-color: darkgray;"></textarea>

        <input type="submit" name="send" value="Send Message" class="my-3 sub" style="background-color: orange;color: black;">

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
<!--######################################################################## END CONTENT ###############################################-->
<?php include("inc/theme/footer.php")?>
<script src="./js/main.js"></script>
</body>
</html>

