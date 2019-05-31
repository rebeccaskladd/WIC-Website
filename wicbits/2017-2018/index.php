<!DOCTYPE html>
<html>
<head>
    <title>MSU Women in Computing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="../../assets/images/logos/icon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900" rel="stylesheet">

    <!-- JavaScript -->
    <script src="../../assets/js/wic.js"></script>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</head>

<body>

    <!-- Navigation Bar -->

    <div class="navbar navbar-default navbar-inverse navbar-fixed-top nav-menu" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="nav-wic" href="../../">
                    <img class="nav-logo" src="../../assets/images/logos/new_icon.png" alt="WIC logo" height="300"
                        width="300">
                </a>
                <a class="nav-wic" href="../../">MSU Women In Computing</a>
            </div>

            <div class="collapse navbar-collapse" id="main-header">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button">About Us <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../../eboard.html">E-Board</a>
                            </li>
                            <li>
                                <a href="../../sponsors.html">Our Sponsors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button">Get Involved
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../../outreach.html">Outreach</a>
                            </li>
                            <li>
                                <a href="http://www.spartangwc.org" target="_blank">Girls Who Code</a>
                            </li>
                            <li>
                                <a href="http://technovation.cse.msu.edu" target="_blank">Technovation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="../../news.html">News</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../../events.html">Events</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../../alumni.html">Alumni</a>
                    </li>
                    <li>
                        <a class="nav-link nav-link-last" href="../../join.html">Join</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- WIC Bits by Month and Year -->

    <div class="wicbits-page">
        <div class="section">
            <a class="back-page back-wicbits" href="../../wicbits"><i class="icon-back fas fa-long-arrow-alt-left"></i>Back to WICBITS</a>
            <h2>WicBits 2017-2018</h2>
            <div class="wicbits-section">
                <?php
                $directory = "";
                $root = "../../wicbits/2017-2018";
                $files = glob($directory . "*.pdf");

                $january = array();
                $february = array();
                $march = array();
                $april = array();
                $may = array();
                $september = array();
                $october = array();
                $november = array();
                $december = array();

                /* Insert PDFs into respective array for month */
                foreach($files as $file)
                {
                    if (substr($file, 0, 2) == "01")
                    {
                        array_push($january, $file);
                    }
                    else if (substr($file, 0, 2) == "02")
                    {
                        array_push($february, $file);
                    }
                    else if (substr($file, 0, 2) == "03")
                    {
                        array_push($march, $file);
                    }
                    else if (substr($file, 0, 2) == "04")
                    {
                        array_push($april, $file);
                    }
                    else if (substr($file, 0, 2) == "05")
                    {
                        array_push($may, $file);
                    }
                    else if (substr($file, 0, 2) == "09")
                    {
                        array_push($september, $file);
                    }
                    else if (substr($file, 0, 2) == "10")
                    {
                        array_push($october, $file);
                    }
                    else if (substr($file, 0, 2) == "11")
                    {
                        array_push($november, $file);
                    }
                    else if (substr($file, 0, 2) == "12")
                    {
                        array_push($december, $file);
                    }
                }

                /* Display months and each PDF */
                echo "<h3 class=\"wicbits-month\">September 2017</h3>";
                foreach ($september as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">October 2017</h3>";
                foreach ($october as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">November 2017</h3>";
                foreach ($november as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">December 2017</h3>";
                foreach ($december as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">January 2018</h3>";
                foreach ($january as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">February 2018</h3>";
                foreach ($february as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">March 2018</h3>";
                foreach ($march as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }

                echo "<h3 class=\"wicbits-month\">April 2018</h3>";
                foreach ($april as $file)
                {
                    echo "<a class=\"wicbits-file\" href=\"$root/$file\">$file</a>";
                }
                ?>
            </div>
        </div>
    </div>

<!-- Footer -->

    <footer>
        <div class="footer-container">
            <a class="footer-social" href="https://www.facebook.com/MSUWomenInComputing/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="footer-social" href="mailto:msuwic@cse.msu.edu">
                <i class="fas fa-envelope"></i>
            </a>
            <p>Michigan State University Women in Computing</p>
        </div>
    </footer>

</body>

</html>
