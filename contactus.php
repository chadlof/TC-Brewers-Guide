
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    
    { 
    ?> 
<!DOCTYPE html>
<html>
    <head>
       <title>Contact Us</title>
         <link rel="shortcut icon" href="img/mn_craft_brews.jpg">
        <meta charset="UTF-8">
        <meta name="description" content="Twin Cities Craft brew's Guide">
        <meta name="keywords" content="Twin Cities Craft brew's Guide">
        <meta name="author" content="Chad Lofgren">
        <link href="style.css" rel="stylesheet" type="text/css" />
        
         <style type="text/css">
          
            
             #article{
                 border: 2px solid white;
                 height: 200px;
                 width: 50%; 
                 padding: 5em;
                 clear: both;
                 margin: auto;
                 margin-top: 20px;     
             }
             form{
                 color: darkgray;
             }label {
                margin: 51px 40px 0 0; 
                font-size: 16px; color: #b3aba1;
                text-transform: uppercase; 
                text-shadow: 0px 1px 0px #fff;
            }
            input[type=text], textarea {
                font: 14px normal normal uppercase helvetica, arial, sans-serif;
                color: #7c7873;background:none;
                width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
                border:1px solid #f8f5f1;
                -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
                -moz-box-shadow: inset 0px 0px 1px #726959;
                        -webkit-box-shadow:  inset 0px 0px 1px #b3a895; 
                        box-shadow:  inset 0px 0px 1px #b3a895;
            }
            #img{
                 width: 100%;
                 height: 100%;
                     
             }
           
    
        </style>
    </head>

    <body>
        
       <div id="wrapper">
       
            <header id="header">
                <div id="logo">
                    <a href="assignment8.html"><img src="img/mn_brew_wide2.png" alt="brew logo" height="100" width="170" title="site logo"></a>
                </div><!--logo-->
                <div id="name">
                    <h1>Twin Cities Craft Brewer's Guide</h1>
                </div><!--mame-->
                
            </header>
       
                    <nav id="navbox">
                        <ul>
                            <li class="listructure"><a href="assignment8.html">Home</a></li>
                            <li class="listructure"><a href="about.html">About</a></li>
                            <li class="listructure"><a class="current" href="contactus.php">Contact Us</a></li>
                            <li class="listructure"><a href="brewcation.html">Brewcations</a></li>
                            <li class="listructure"><a href="ontap.html">On Tap</a></li>
                            <li class="listructure"><a href="events.html">Events</a></li>
                        </ul>
                    </nav>
                
        <div id="contentwrapper">
            <section id="maincontent">
                <div id=banner>
                    <img id="img" src="img/banner_mailinglist.jpg" alt="Mailing list banner" title="Mailing list banner" height="200" width="900">
                
                </div><!--banner-->
                <article id="article">
           
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input name="action" value="submit" type="hidden"> Your name:<br>
                    <input name="name" size="30" type="text"><br> Your email:<br>
                    <input name="email" size="30" type="text"><br> Your message:<br>
                    <textarea name="message" rows="7" cols="30">
                    </textarea><br>
                    <input value="Send email" type="submit">
                    </form>
                
                </article><!--article-->
            </section><!--mainconten5-->
        </div><!--contentwrapper-->
  
        <footer class="footer">

			<p class="footer-company-motto">Twin Cities: Good people,Good beer!</p>

			<p class="footer-links">
				
                            <a href="assignment8.html">Home</a>·
                            <a href="about.html">About</a>·
                            <a href="contactus.php">Contact Us</a>·
                            <a href="brewcation.html">Brewcations</a>·
                            <a href="ontap.html">On Tap</a>·
                            <a href="events.html">Events</a>·
       
				
			</p>

			<p class="footer-company-name">Twin Cities Craft Brewer's Guide &copy; 2016</p>

		</footer>
        </div><!--wrapper-->   
        
<!--javascript-->
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>        
    </body>

             
</html>
    <?php 
    }  
else            
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("lofchaa@dunwoody.edu", $subject, $message, $from); 
        header("Location: http://www.dunwoody.edu");
     
        } 
    }   
?> 