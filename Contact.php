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
    <title> Muia Mwanzia & Co. Advocates </title>
</head>
<body>
<button onclick="topFunction()" id="Scroll-button" title="Go to top">Top</button>


<!--                Header sections starts here-->
<section class="Contact-Header1">
    <!--    <hr class="closure">-->

    <nav>
        <a href="H1.php"><img src="Pics/Logo1.jpg" alt="" height="70"></a>
        <div class="logo">
            <ul>
                <!--                <li><a href="">Muia Mwanzia <br> <span> & </span>  <br> Co. Advocates</a></li>-->
                <li><a href="H1.php"> Muia Mwanzia & Co. Advocates <br>
                        <span> - justice be our shield and defender - </span> </a></li>
            </ul>
        </div>
        <div class="nav-links" id="navlink">
            <i class="fa fa-times-circle-o" onclick="hideMenu()"></i>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="About.php">About US</a></li>
                <li><a href="Practise_A.php">Practice Areas</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Our_Team.php">Our Team</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
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
<!--                Footer starts here-->
<section class="Footer">
    <h4> Muia Mwanzia & Co. Advocates <br>
        - Justice Be Our Shield & Defender - <br>
        <!--        <i class= "fa fa-gavel">  </i> -->
    </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut, <br>
        commodi consequatur corporis exercitationem, <br> ipsam iste maiores modi mollitia nostrum omnis pariatur
    </p>
    <div class="Social2">
        <p class="Footer-Con"> - Advocates of The High Court of Kenya   <span class="dot"> </span>   Commissioner for Oaths   <span class="dot"> </span>   Legal Services - </p>
        <i class= "fa fa-phone"> <br> <span class="Soc"> +254 733 333 333 </span> </i>
        <span class="dot2"> </span>
        <i class= "fa fa-envelope"> <br> <span class="Soc"> muiamwanzia@yahoo.com </span>  </i>
        <span class="dot2"> </span>
        <i class= "fa fa-building"> <br>  <span class="Soc"> Edfri Green House 2nd Floor </span>  </i>
        <span class="dot2"> </span>
        <i class= "fa fa-street-view"> <br> <span class="Soc"> Ghana Street </span> </i>
        <span class="dot2"> </span>
        <i class= "fa fa-map-marker"> <br> <span class="Soc"> Meru County </span>  </i>
    </div>
    </div>
    <div class="Social">
        <i class= "fa fa-facebook"></i>
        <i class= "fa fa-twitter"></i>
        <i class= "fa fa-linkedin"></i>
        <i class= "fa fa-youtube"></i>
        <i class= "fa fa-instagram"></i>
    </div>
    <p class="Credits"> Website Designed by <br> <a class="Cre" href="">Techware Scope Solutions</a>
        <br> &copy 2022. </p>
    <hr class="closure">
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

