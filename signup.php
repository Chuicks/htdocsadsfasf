<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login">
    <meta name="description" content="">
    <title>Sign up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Sign-up.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.15.8, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-maroon-whiteBG.svg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Sign up">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-overlap-contrast u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-3417"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="226" data-image-height="45">
          <img src="images/logo-maroon-whiteBG.svg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Login-.html" style="padding: 10px 20px;">Login </a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Page-1.html" style="padding: 10px 20px;">Page 1</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Lmogin-.htl">Login </a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-c02b">
      <h1 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Sign up</h1>
    

      <div class="u-form u-form-1">
      
        <form action="includes/signup.inc.php" method="post">
          
          <div class="form-group">
      <label for="name" class="sr-only">Full Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required autofocus>
      </div>

          <div class="form-group">
      <label for="email" class="sr-only">Email</label>
      <input type="text" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
      </div>

          <div class="form-group">
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>

  <div class="form-group">
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  </div>
  <div class="u-form-group u-label-top">
            <label for="password" class="sr-only">Re-type password</label>
            <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Re-type Password" required>
          </div>
        
          <button class="btn btn-lg btn-primary btn-block" type="submit" value="signupsubmit" name="signupsubmit">Signup</button>
          </form>
</div>
<p class="u-custom-font u-font-ubuntu u-small-text u-text u-text-variant u-text-2">Already a user?
<p class="u-custom-font u-font-ubuntu u-small-text u-text u-text-variant u-text-2"> <a href="index.php" rel="nofollow">Login<br>
        </a>
      </p>
      <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, please try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == "passwordincorrectlength") {
            echo "<p>Password must be between 5-25 characters!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
<!--
  This is the original HTML form from nicepage but it won't function properly
-->
<!--
    <section class="u-clearfix u-section-1" id="sec-c02b">
      <h1 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Sign up</h1>
      <div class="u-form u-form-1">
        <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
          <div class="u-form-group u-label-top u-form-group-1">
            <label for="text-7008" class="u-custom-font u-font-ubuntu u-form-control-hidden u-label u-label-1"></label>
            <input type="text" placeholder="Full Name" id="text-7008" name="text-1" class="u-border-2 u-border-palette-1-light-2 u-custom-font u-font-ubuntu u-input u-input-rectangle u-radius-7">
          </div>
          <div class="u-form-group u-label-top u-form-group-2">
            <label for="text-f7f7" class="u-custom-font u-font-ubuntu u-form-control-hidden u-label u-label-2"></label>
            <input type="text" placeholder="Email" id="text-f7f7" name="text-2" class="u-border-2 u-border-palette-1-light-2 u-custom-font u-font-ubuntu u-input u-input-rectangle u-radius-7">
          </div>
          <div class="u-form-group u-label-top">
            <label for="name-cd97" class="u-custom-font u-font-ubuntu u-form-control-hidden u-label u-label-3"></label>
            <input type="text" placeholder="Username" id="name-cd97" name="username" class="u-border-2 u-border-palette-1-light-2 u-custom-font u-font-ubuntu u-input u-input-rectangle u-radius-7" required="required">
          </div>
          <div class="u-form-group u-label-top">
            <label for="email-cd97" class="u-custom-font u-font-ubuntu u-form-control-hidden u-label u-label-4"></label>
            <input placeholder="Password" id="email-cd97" name="password" class="u-border-2 u-border-palette-1-light-2 u-custom-font u-font-ubuntu u-input u-input-rectangle u-radius-7" required="required" type="text">
          </div>
          <div class="u-form-group u-label-top u-form-group-5">
            <label for="text-32b8" class="u-custom-font u-font-ubuntu u-form-control-hidden u-label u-label-5"></label>
            <input type="text" placeholder="Re-type password" id="text-32b8" name="text" class="u-border-2 u-border-palette-1-light-2 u-custom-font u-font-ubuntu u-input u-input-rectangle u-radius-7">
          </div>
          <div class="u-align-right u-form-group u-form-submit u-label-top">
            <input type="submit" value="submit" class="u-form-control-hidden">
            <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-ubuntu u-hover-palette-1-base u-palette-1-light-2 u-radius-7 u-text-hover-white u-btn-1">Sign up<br>
            </a>
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
      <p class="u-custom-font u-font-ubuntu u-small-text u-text u-text-variant u-text-2">Already a user? <a href="https://nicepage.com/static-site-generator" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-light-2 u-btn-2" rel="nofollow">Login<br>
        </a>
      </p>
    </section>
-->

    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #adcce9 !important
}</style>
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 15px;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>