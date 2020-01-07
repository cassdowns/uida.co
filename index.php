<?php
/*
 * ================
 * Error reporting.
 * ================
 */
error_reporting(E_ALL);
ini_set('display_errors', 0); // SET IT TO 0 ON A LIVE SERVER !!!

/*
 * ==================================================================
 * Execute operations upon form submit (store form data in date.csv).
 * ==================================================================
 */
include 'php/create-csv.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->
        
        <title>User Interface Design Association</title>
    	<meta name="description" content="">
        <meta name="keywords" content="user, interface, design, association, uida, visual, designer, product, group, organisation, digital, screen, designers, melbourne, events, information, resources, case, studies, learn">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
        <link rel="manifest" href="/fav/site.webmanifest">
        <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148032595-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-148032595-1');
        </script>

    </head>
    <body>
        <div id="wrapper">
        
            <div id="mainDiv">
                
                <div id="header">
                    <div class="logo">
            	        <a href="http://uida.co"><img src="img/UIDA-LogoMaster-01.svg" height="72px"></a>
                    </div>
                    <div id="headerRight"></div>
                </div>
                <div class="break40"></div>
                <div class="content">
                    <h1>Excuse us while we get ourselves ready.</h1>
                    <div class="break40"></div>
                    <h2>The idea of an association <strong>just</strong> for UI designers is being developed. We're talking about events that provide value, inspiration and education. Resources to enhance your already expertly niche knowledge. Visibility of other champions in our industry, all over the world.</h2>
                    <div class="break80"></div>
                    <div id="emailCap">
                        <form action="" method="post">
                            <h3>Want to know more?</h3>
                            <p>We just need an email</p>
                            <input required type="email" name="femail" id="femail">
                            <div class="break24"></div>
                            <input type="submit" name="submit" id="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
    	    <div class="break80"></div>
    	    <div id="bottomDiv">
    	    
        	    <div id= "footer">
            	    <div id="footerLogo">
            	        <img src="img/UIDA-LogoAlt-02.svg" height="40px" padding-right="64px">
            	    </div>
            	    <div id="footerLeft">
            	        <h6>User Interface Design Association<br>© 2019</h6>
            	    </div>
            	    <div id="footerRight">
            	        <div class="menu>">
                	        <a href="mailto:hello@uida.co">Get in touch</a>
                	    </div>
            	    </div>
            	</div>
    	    </div>
        </div>
    </body>
</html>