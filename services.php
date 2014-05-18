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
<body id="services" ontouchstart="">
	<header id="header">Freelance Web Developer</header>
    <nav>
		<a id="close">digiwig</a>    
    	<a href="index.php">Home</a>
    	<a href="services.php" class="active">Services</a>
    	<a href="about.php" >About Me</a>
    	<a href="portfolio.php" >Portfolio</a>
    	<a href="blog.php" >Blog</a>
    	<a href="contact.php" >Contact</a>
        <a href="mailto:mark@digiwig.com"><img src="_/images/icons/mailto.png" width="15" height="15"/></a>
    </nav>
    <main id="main">
    	<h1>Services</h1>
        <section id="what">
        	<h2>What Do I Do Exactly?</h2>
            <p>I design and develop bespoke websites, and provide a range of support services for organisations large or small.</p>
        </section>
        <section>
            <figure id="web">
                    <img width="auto" height="auto" src="_/images/web.png" alt="Web"/>
                    <h3>Web</h3>
                    <figcaption>Design, Mobile, CMS, Ecommerce</figcaption>                                    
                    <article>Like it says on the tin, I build websites and web applications, for all businesses of all types and sizes. A network of associates and I collaborate across projects and all avenues of design and development. If you have a design, or even an idea, send it my way and I'll provide an altogether excellent service.</article>
                    <a class="button">Open</a>
            </figure>
            <figure id="seo">
                    <img width="auto" height="auto" src="_/images/seo.png" alt="Web"/>
                    <h3>SEO</h3>
                    <figcaption>Visibility, Strategy, Presence</figcaption>                    
                    <article>I know the tricks of the trade. Search engines are constantly updating their algorithms. I work full time within this industry, so let me help you gain better visibility on the web.</article>
            		<a class="button">Open</a>
            </figure>
        </section>
        <section>
            <figure id="support">
                    <img width="auto" height="auto" src="_/images/support.png" alt="Web"/>
                    <h3>Support</h3>
                    <figcaption>Reliable, Dependable, Reponsive</figcaption>
                    <article>Offering professional support on all aspects of web development. Whether that be debugging issues or monthly updates to your website, with a support contract problems are addressed quickly and effectively. A contract can be designed to suit your business and your needs, or you may choose to pay as you go.</article>
            		<a class="button">Open</a>
            </figure>
            <figure id="apps">
                    <img width="auto" height="auto" src="_/images/applications.png" alt="Web"/>
                    <h3>Apps</h3>
                    <figcaption>Bespoke, Secure, Efficient</figcaption>
                    <article>Application development can be a wash out of different ideas merging all into a single function of pointlessness without a clearly defined set of goals and requirements. UX Design and information architecture are integral fields of research and development, and are vital in delivering practical and feasible functionality. Sound understanding stems a sophisticated product. Get your application off to the right start and get in touch.</article>
            		<a class="button">Open</a>
            </figure> 
        </section>
        <section id="rates">
        	<h4>How Much Do I Cost?</h4>
            <p>That depends on the project!<br/>My typical hourly rates are very competitive, and I'm always open to negotiate for trustworthy clients.</p>
            <a class="button" href="mailto:mark@digiwig.com">Get in Touch</a>
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
