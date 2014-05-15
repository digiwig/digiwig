<?php
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
    <title>Freelance Web Designer & Web Developer, London | Mark Wigglesworth</title>
    <meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    <meta name="apple-mobile-web-app-title" content="Digiwig">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel='stylesheet' href='_/css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' href='_/css/styles.css' type='text/css' media='all' />
	<link rel='stylesheet' href='_/css/pages.css' type='text/css' media='all' />           
</head>
<body id="home" ontouchstart="">
	<header id="header">Freelance Web Developer</header>
    <nav>
		<a id="close">digiwig</a>    
    	<a href="index.php" class="active">Home</a>
    	<a href="services.php">Services</a>
    	<a href="about.php" >About Me</a>
    	<a href="portfolio.php" >Portfolio</a>
    	<a href="blog.php" >Blog</a>
    	<a href="contact.php" >Contact</a>
        <a href="mailto:mark@digiwig.com"><img src="_/images/icons/mailto.png" width="15" height="15"/></a>
    </nav>
    <main id="main">
    	<section class="home_top">
        	<h1>Mark Wigglesworth</h1>
            <p><span>Freelance Web Developer &amp; Designer, London</span>HTML5 / CSS3 / RWD / jQuery / PHP<span>CodeIgniter / Wordpress / ExpressionEngine</span></p>
            <a class="button">View Portfolio</a>
            <img width="70%" height="auto" src="_/images/laptop.png"/>
        </section>
        <section class="home_services">
        	<h2>Services</h2>
            <p>The short and sweet of what I do,<br/>click through to read a little bit more...</p>
            <figure>
                <a href="/services.php#web" title="Web"><img width="auto" height="auto" src="_/images/web.png" alt="Web"/></a>
                <figcaption>Web</figcaption>
            </figure>
            <figure>
                <a href="/services.php#support" title="Support"><img width="auto" height="auto" src="_/images/support.png" alt="Support"/></a>
                <figcaption>Support</figcaption>
            </figure>
            <figure>
                <a href="/services.php#seo" title="SEO"><img width="auto" height="auto" src="_/images/seo.png" alt="SEO"/></a>
                <figcaption>SEO</figcaption>
            </figure>
            <figure>
                <a href="/services.php#apps" title="Apps"><img width="auto" height="auto" src="_/images/applications.png" alt="Apps"/></a>
                <figcaption>Apps</figcaption>
            </figure>
            <br/>
            <a class="button" href="services.php">More</a>
        </section>
        <section class="home_about">
        	<h2>About Me</h2>
            <p>I am 32 years old. London is my home.<br/>I work full time as a Freelance Web Developer and Designer</p>
            <img src="_/images/photo.png" width="22%" height="auto" alt="About Me"/>
            <a class="button" href="about-me">More</a>            
        </section>
		<section class="home_blog">
            <h2>Latest Blog Action!</h2>            
            <h3>Super Responsive Multi Level Navigation!</h3>
            <p>23rd Oct 2013</p>
            <a class="button">Read More</a>        
        </section>        
        <footer>
            <a href="#"><img width="8%" height="auto" src="_/images/icons/email.png"/></a>      
            <a href="#"><img width="8%" height="auto" src="_/images/icons/facebook.png"/></a>
            <a href="#"><img width="8%" height="auto" src="_/images/icons/linkedin.png"/></a>
            <a href="#"><img width="8%" height="auto" src="_/images/icons/googleplus.png"/></a>
            <a href="#"><img width="8%" height="auto" src="_/images/icons/skype.png"/></a>
            <a href="#"><img width="8%" height="auto" src="_/images/icons/instagram.png"/></a>
		</footer>

</main>    
	<script>
    (function() {
        function getScript(url,success){
            var script=document.createElement('script');
            script.src=url;
            var head=document.getElementsByTagName('head')[0],
            done=false;
            script.onload=script.onreadystatechange = function(){
            if ( !done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') ) {
                done=true;
                success();
                script.onload = script.onreadystatechange = null;
                head.removeChild(script);
            }
            };
            head.appendChild(script);
        }
        getScript("_/js/jquery-2.1.0.min.js",function(){	
            getScript("_/js/scripts.js", function() {});			
        });
    })();
    </script>   
</body>
</html>
