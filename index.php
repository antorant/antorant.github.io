<!doctype html>
<!-- <html class="no-js" lang="en"> if using Modernizr -->
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Antony Jan Orant | Design &amp; Code | Berlin</title>
  <meta name="description"
    content="Antony Jan Orant | Design &amp; Code | Berlin">

  <meta name="viewport" content="width=device-width">

  <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header">
    <div class="header-logo">
      <?php include "img/logo.svg"; ?>
      <h1 class="header-logo__text">
        Antony Jan Orant<br/>
        Design &amp; Code
      </h1>
    </div>
  </header>
  <div class="content">
    <section class="container thin">
      <h3>About me</h3>
      <p>I'm Ant. I'm a user interface and product designer, but I also design logos, branding and print materials.</p>
      <p>I work with <a href="http://github.com/antorant">code</a> too - HTML, CSS and JavaScript in particular.</p>

      <h3>About my website</h3>
      <p>Wireframes, prototypes, JS files and roadmap documents don't look very impressive out of context, so I'm using my <a href="http://dribbble.com/antorant">Dribbble</a> profile as an improvised visual diary of my work. If you’d like to know more, please <a href="mailto:&#97;&#110;&#116;&#111;&#110;&#121;&#111;&#114;&#97;&#110;&#116;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">ask</a>.</p>
      <p>Thanks for reading.</p>
    </section>
    <section>
      <div class="container">
        <div class="shots">
          <?php if ($_SERVER['SERVER_NAME'] != "localhost") { ?>
            <?php include "images.php"; ?>
          <?php } ?>
          <pp>More on <a href="http://dribbble.com/antorant">Dribbble</a>.</p>
        </div>

      </div>
    </section>
  </div>
<?php if ($_SERVER['SERVER_NAME'] != "localhost") { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-68939750-2', 'auto');
    ga('send', 'pageview');
  </script>
<?php } ?>
</body>
</html>
