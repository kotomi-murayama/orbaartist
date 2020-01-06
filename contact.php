<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Orba Artist</title>
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/lightbox.css" media="screen"/>
  <link href="/favicon.ico" rel="icon" type="image/x-icon" />


  <script src="javascripts/modernizr.foundation.js"></script>
  
  
  
  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
  

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2HGQSrS86BEzKUNKPaS41LplSnNCIOKM';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52949334-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
 
<nav>

     <div class="twelve columns header_nav">
     <div class="row">
      
         <ul id="menu-header" class="nav-bar horizontal">
      
          <li class="has-flyout">
            <a class="artwork">Artwork</a><a class="flyout-toggle artwork"></a>
            <ul class="flyout"><!-- Flyout Menu -->
            <li class="has-flyout"><a href="portfolio.html">Portfolio</a></li>
            <li class="has-flyout"><a href="oil.html">Oil</a></li>
            <li class="has-flyout"><a href="watercolour.html">Watercolour</a></li>
            <li class="has-flyout"><a href="sketches.html">Sketches</a></li>
            <li class="has-flyout"><a target="prints" href="http://www.redbubble.com/people/orba-artist/shop">Prints</a></li>
         </ul> 
          </li><!-- END Flyout Menu -->
      
          <li class=""><a href="theartist.html">The Artist</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
      
        </ul>
        
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      </div>  
      </div>
      
</nav>
     
        
        <header>
              <h1 class="welcome_text">Contact</h1>    
        </header>

      
      <section class="section_light">
      
      <div class="row">
		<div class="twelve columns contactformholder">
		
 <p class="enquirestext">If you have any enquires please get in touch.</p>

          <!-- Row Layout for forms -->
          <form name="contactform" method="post">

            <input  type="text" class="formfield" name="first_name" maxlength="50" size="30" placeholder="First Name"/>

            <input  type="text" class="formfield" name="last_name" maxlength="50" size="30" placeholder="Last Name"/>
            
            <input  type="text" name="email" class="formfield" maxlength="80" size="30" placeholder="Email Address"/>

            <input  type="text" class="formfield" name="telephone" maxlength="30" size="30" placeholder="Telephone Number" />

            <textarea  name="comments" class="messagefield" maxlength="1000" cols="60" rows="6" placeholder="Message"></textarea>
            
            <input type="submit" id="submit" name="sendemail" class="sendemail" value="Send">

          </form>
      <p class="enquirestext">    
<?php
if(isset($_POST['email'])) {
     
    $email_to = "barbara@orba-artist.com";
    $email_subject = "Orba Artist enquiry";
     
    function died($error) {
        // error code
        echo "Below is a list of the errors found with the form you submitted:<br /><br />";
        echo $error."<br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation data
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Unfortunately there seems to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Please enter a valid Email Address.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Please enter a valid First Name.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Please enter a valid Last Name.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'Please write a longer Message.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
      </p>
<!-- success html -->
 
<p class="enquirestext">Thank you for contacting Orba Artist, we will reply shortly.</p>
 
<?php
}
?>

        </div>
		</div>
		
		
        </section>
        
		<!-- end section -->
        
      
<footer>

      <div class="row">
      
          <div class="twelve columns cf">

<p class="copyright">&copy; Orba-Artist.com</p><a class="footerlink" href="http://uk.linkedin.com/in/dmunday" target="davidmundaylinkedin"> website by David Munday</a>
          </div>
          
</footer>	
        
        
		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript">
		</script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript">
		</script>
		<!-- Masonry for galleries -->
		<script src="javascripts/masonry.js" type="text/javascript">
		</script>


	<script src="js/lightbox-2.6.min.js"></script>

		<script type="text/javascript">
//<![CDATA[
      $(function(){
        var $container = $('#container');
        $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector : '.box',
                        isFitWidth: true,
                        isAnimated: true
          });
        });
      });
  //]]>
  </script>
		<!-- END Masonry -->
		</body>
		</html>