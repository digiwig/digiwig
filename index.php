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
</head>
<body>
	<header></header>
    <nav>
    	<a>Home</a>
    	<a>Services</a>
    	<a>About Me</a>
    	<a>Portfolio</a>
    	<a>Blog</a>
    	<a>Contact</a>
    </nav>
    <main class="menu">
    	<section></section>
        <section></section>
        <section></section>
        <footer></footer>
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
