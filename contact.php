<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="" href="Pics/Logo1.jpg">
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title> Muia Mwanzia & Co. Advocates </title>
</head>
<body>
<button onclick="topFunction()" id="Scroll-button" title="Go to top">Top</button>


<!--                Header sections starts here-->
<section class="Contact-Header1">
    <!--    <hr class="closure">-->

    <nav>
        <a href="index.php"><img src="Pics/Logo1.jpg" alt="" height="70"></a>
        <div class="logo">
            <ul>
                <!--                <li><a href="">Muia Mwanzia <br> <span> & </span>  <br> Co. Advocates</a></li>-->
                <li><a href="index.php"> Muia Mwanzia & Co. Advocates <br>
                        <span> - justice be our shield and defender - </span> </a></li>
            </ul>
        </div>
        <div class="nav-links" id="navlink">
            <i class="fa fa-times-circle-o" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About US</a></li>
                <li><a href="practice.php">Practice Areas</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="our_team.php">Our Team</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="displayMenu()"></i>
    </nav>
    <h1> Contact Us </h1>
</section>

<!--                Contact Us sections starts here-->

        <section class="find-us">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8170172650057!2d37.65097611404908!3d0.0463069643908277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178821e9062a5bed%3A0x63990a4615bd7da!2sGhana%20St%2C%20Meru!5e0!3m2!1sen!2ske!4v1658064641770!5m2!1sen!2ske"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

<section class="contact-us">
                <div class="row">
                    <div class="contact-col">
                        <div>
                            <i class="bi bi-building"></i>
                            <span>
                                <h3> Edfri Green House, 2nd floor </h3>
<!--                                <p> Meru County </p>-->
                            </span>
                        </div>
                        <div>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>
                                <h3> Ghana Street, Meru County </h3>
<!--                                <p> Meru County </p>-->
                            </span>
                        </div>
                        <div>
                            <i class="bi bi-envelope"></i>
                            <span>
                                <h3> muiamwanzia@yahoo.com </h3>
<!--                                <p> Meru County </p>-->
                            </span>
                        </div>
                        <div>
                            <i class="bi bi-telephone-fill"></i>
                            <span>
                                <h3> +254 733 678 889 </h3>
<!--                                <p> Meru  County </p>-->
                            </span>
                        </div>
                        <div>
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>
                                <h3>Mon - Fri  08:00AM - 05:00PM <br> Closed Sun & Public Holidays </h3>
<!--                                <p> Meru County </p>-->
                            </span>
                        </div>
                    </div>
                    <div class="contact-col">

<!--                        Contact form-->
                        <form action="form.php" method="post">
                            <input type="text" name="name" placeholder="Enter Your Name:" required>
                            <input type="email" name="email" placeholder="Enter Your Email Address:" required>
                            <input type="text" name="subject" placeholder="Subject / Title:" required>
                            <textarea rows="10" name="message" placeholder="Type Your Message Here:" required></textarea>
                            <button type="submit" class="Learn-btn"> Send Message </button>
<!--                            <button type="reset" class="Learn-btn"> Clear Form </button>-->
                        </form>

                    </div>
                </div>
</section>


<!--                Footer starts here-->
<section class="Footer">
    <h4> Muia Mwanzia & Co. Advocates <br>
        — Justice Be Our Shield & Defender — <br>
        <!--        <i class= "fa fa-gavel">  </i> -->
    </h4>
    <p> EFFICIENCY . COMMITMENT . INTEGRITY
        <br> We take pride in offering personalised legal services to our adverse clientele. <br>
        Get in touch with us.


    </p>
    <div class="Social2">
        <p class="Footer-Con">  Advocates of The High Court of Kenya <br> <span class="dot"> </span>  Commissioner for Oaths  <span class="dot"> </span>
            <br> Legal Consultants  </p>
<!--        <i class= "fa fa-phone"> <br> <span class="Soc"> +254 733 333 333 </span> </i>-->
<!--        <span class="dot2"> </span>-->
<!--        <i class= "fa fa-envelope"> <br> <span class="Soc"> muiamwanzia@yahoo.com </span>  </i>-->
<!--        <span class="dot2"> </span>-->
<!--        <i class= "fa fa-building"> <br>  <span class="Soc"> Edfri Green House, 2nd Floor </span>  </i>-->
<!--        <span class="dot2"> </span>-->
<!--        <i class= "fa fa-street-view"> <br> <span class="Soc"> Ghana Street </span> </i>-->
<!--        <span class="dot2"> </span>-->
<!--        <i class= "fa fa-map-marker"> <br> <span class="Soc"> Meru County </span>  </i>-->
    </div>
    </div>
<!--    <div class="Social">-->
<!--        <a href="https://www.facebook.com/MuiaMwanziaAndCo.Advocates"><i class= "fa fa-facebook"></i></a>-->
<!--        <i class= "fa fa-twitter"></i>-->
<!--        <a href="https://www.linkedin.com/company/muia-mwanzia-co-advocates/"><i class= "fa fa-linkedin"></i></a>-->
<!--        <i class= "fa fa-youtube"></i>-->
<!--        <i class= "fa fa-instagram"></i>-->
<!--        <a href="https://www.linkedin.com/company/muia-mwanzia-co-advocates/"><i class= "fa fa-whatsapp"></i></a>-->
<!---->
<!--    </div>-->

<!--    <p class="Credits"> &copy Copyright 2022 . Muia Mwanzia & Co. Advocates . All Rights Reserved <br> Website by <a class="Cre" href="https://www.linkedin.com/company/techware-scope-solutions/">Techware Scope Solutions.</a>-->
<!--        </p>-->

    <hr class="closure">
</section>

<section class="Footer_Test">
    <div class="roww">
        <div class="coll">
            <!--                               <img src="Pics/Logo1.jpg" alt=""class="roww2">-->
            <h3> About <div class="under"> <span></span> </div> </h3>
            <p>
                Muia Mwanzia & Co. Advocates is a law firm based in Meru County.
                The Firm was founded by Muia Mwanzia on 28th August 2008.
                We take pride in offering personalised legal counsel and representation to our adverse clientele.
                <br>
                Our ability to provide unparalleled legal services to our clients
                inspires us to offer efficient and cost-effective legal solutions in the areas we practice.

            </p>
            <br>
            <div class="social_items">

                <p>
                    <i class= "fa fa-facebook"></i>
                    <i class= "fa fa-twitter"></i>
                    <i class= "fa fa-linkedin"></i>
                    <i class= "fa fa-youtube"></i>
                    <i class= "fa fa-instagram"></i>
                    <i class= "fa fa-whatsapp"></i>

                </p>

            </div>

        </div>

        <div class="coll">
            <h3> Office <div class="under"> <span></span> </div></h3>
            <p> <i class= "fa fa-building"> </i> Edfri Green House, 2nd Floor (Opposite Magunas Downtown) </p>
            <p> <i class= "fa fa-street-view"> </i> Ghana Street </p>
            <p> <i class= "fa fa-map-marker"> </i>  Meru County </p>
            <p class="email_id"> <i class= "fa fa-envelope"> </i> muiamwanzia@yahoo.com </p>
            <p> <i class= "fa fa-phone"> </i> +254 733 678 889 </p>

            <br>
        </div>

        <div class="coll">
            <h3> Quick Links <div class="under"> <span></span> </div> </h3>
            <p>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="about.php"> About Us </a></li>
                <li><a href="practice.php"> Practice </a></li>
                <li><a href="news.php"> News </a></li>
                <li><a href="our_team.php"> Our Team </a></li>
                <li><a href="contact.php"> Contact Us </a></li>
            </ul>
            </p>
        </div>

        <!--                           <div class="coll">-->
        <!--                             <h3> Our Principles </h3>-->
        <!--                               <div class="social_items">-->
        <!--                                   <p>  EFFICIENCY  </p>-->
        <!--                                   <p>  COMMITMENT  </p>-->
        <!--                                   <p>  INTEGRITY  </p>-->


        <!--                                       <img src="Pics/Logo2.jpg" alt="" width="70">-->
        <!--                                       <i class= "fa fa-facebook"></i> <br>-->
        <!--                                       <i class= "fa fa-twitter"></i> <br>-->
        <!--                                       <i class= "fa fa-linkedin"></i> <br>-->
        <!--                                       <i class= "fa fa-youtube"></i> <br>-->
        <!--                                       <i class= "fa fa-instagram"></i> <br>-->
        <!--                                       <i class= "fa fa-whatsapp"></i>-->

        </p>

    </div>
    </div>
    </div>
    <hr class="line">
    <p class="close">
        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2022 . Muia Mwanzia & Co. Advocates . All Rights Reserved <br> Website by <a href="https://www.linkedin.com/company/techware-scope-solutions/">Techware Scope Solutions</a>
    </p>
</section>


<!--------------JS for Toggle Menu for small screens----------------->
<script>
    var navlink = document.getElementById("navlink");
    function displayMenu(){
        navlink.style.right = "0";
    }
    function hideMenu(){
        navlink.style.right = "-250px";
    }
</script>

<!--------------JS for Timeline Journey for small screens----------------->

<script>
    $(".step").click( function() {
        $(this).addClass("active").prevAll().addClass("active");
        $(this).nextAll().removeClass("active");
    });

    $(".step01").click( function() {
        $("#line-progress").css("width", "3%");
        $(".discovery").addClass("active").siblings().removeClass("active");
    });

    $(".step02").click( function() {
        $("#line-progress").css("width", "25%");
        $(".strategy").addClass("active").siblings().removeClass("active");
    });

    $(".step03").click( function() {
        $("#line-progress").css("width", "50%");
        $(".creative").addClass("active").siblings().removeClass("active");
    });

    $(".step04").click( function() {
        $("#line-progress").css("width", "75%");
        $(".production").addClass("active").siblings().removeClass("active");
    });

    $(".step05").click( function() {
        $("#line-progress").css("width", "100%");
        $(".analysis").addClass("active").siblings().removeClass("active");
    });

</script>

<!--------------JS for Scroll-button----------------->

<script>
    //Get the button
    var mybutton = document.getElementById("Scroll-button");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

</body>
</html>

