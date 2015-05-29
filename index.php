<?php 

if (!isset($root)) {
  $root = '.';
}

 ?>
<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <base href="<?php echo $root; ?>">

    <title>KiwiParty 2015</title>

    <meta name="description" content="">
    <meta name="author" content="Vincent De Oliveira">
    <link rel="icon" href="http://iamvdo.me/images/favicon.png"/>

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400' rel='stylesheet'>

    <link rel="stylesheet" href="css/reveal.min.css">
    <link rel="stylesheet" href="plugin/prismjs/prism.css">
    <link rel="stylesheet" href="iamvdo/theme.css" id="theme">
    <link rel="stylesheet" href="iamvdo/meetup.css">
    <link rel="stylesheet" href="plugin/nav/nav.css">

    <!-- If the query includes 'print-pdf', include the PDF print sheet -->
    <script>
      if( window.location.search.match( /print-pdf/gi ) ) {
        var link = document.createElement( 'link' );
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = 'css/print/pdf.css';
        document.getElementsByTagName( 'head' )[0].appendChild( link );
      }
    </script>

    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body class="language-css">

    <div class="reveal iamvdo">

      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides">
        <section>
          <h1>Icon-font vs SVG</h1>
          <h2>Fight !</h2>
          <p class="u-aligncenter u-small u-margin">
            Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a>
          </p>
        </section>

        <section class="me">
          <h2>Vincent De Oliveira</h2>
          <ul class="vcard">
            <li>Formateur web <a href="http://www.ensg.eu" title="Ecole Nationale des Sciences Géographiques">ENSG Géomatique</a></li>
            <li><a href="http://twitter.com/iamvdo">@iamvdo</a></li>
            <li><a href="http://css3create.com">CSS3Create</a>, <a href="http://iamvdo.me">iamvdo</a>, <a href="http://pleeease.io">Pleeease</a></li>
            <li>Livre <a href="http://livre-css3.fr">CSS3 Le design web moderne</a></li>
          </ul>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-titre">Des icones ?</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/icon-90s.png" alt="">
          <p class="Showcase-text Info">yahoo.com <small>(20 décembre 1996)</small>, fnac.com <small>(11 mai 2000)</small>, amazon.com <small>(9 juin 2000)</small>, System 1 Mac <small>(1984)</small></p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/icon-construction.gif" alt="">
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-titre">Genre beaucoup ?</p>
          <p class="Jumbo-titre fragment">SPRITES FTW</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/sprite-google.png" alt="">
          <p class="Showcase-text Info">Sprite utilisé par Google Documents</p>
        </section>

        <section data-state="part">
          <h1>Titre</h1>
        </section>

        <section data-state="showcase">
          <h1>Titre</h1>
<pre class="small"><code class="liveCoding css" data-livecoding-id="e1" contenteditable="" spellcheck="false">/* CSS */
a {
  color: deepskyblue;
}
</code></pre>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre questions-titre--big">Texte</p>
        </section>

        <section class="me">
          <h2>Merci, <span>questions?</span></h2>
          <p class="u-aligncenter">Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a></p>
          <p class="u-aligncenter"><a href="http://slides.iamvdo.me/kiwiparty15">slides.iamvdo.me/kiwiparty15</a></p>
        </section>

      </div>

    </div>

    <div class="info-overlay" id="info-twitter"><a href="https://twitter.com/iamvdo">@iamvdo</a></div>
    <div class="info-overlay" id="info-slides"><a href="http://slides.iamvdo.me/kiwiparty15">slides.iamvdo.me/kiwiparty15</a></div>

    <script src="lib/js/head.min.js"></script>
    <script src="js/reveal.min.js"></script>

    <script>

      // Full list of configuration options available here:
      // https://github.com/hakimel/reveal.js#configuration
      Reveal.initialize({
        controls: true,
        progress: false,
        history: true,
        center: false,

        transitionSpeed: 'slow',

        theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
        transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

        // Parallax scrolling
        //parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
        //parallaxBackgroundSize: '2100px 900px',

        // Optional libraries used to extend on reveal.js
        dependencies: [
          { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
          { src: 'plugin/prismjs/prism.js', async: true, callback: function () {
            Prism.highlightAll();
          } },
          { src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
          { src: 'plugin/prefixfree/prefixfree.js', async: true },
          { src: 'plugin/live-coding/live-coding.js', async: true, condition: function() { return !!document.body.classList; }},
          { src: 'plugin/nav/nav.js', async: true}
        ]
      });

    </script>
    
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17376769-7']);
    _gaq.push(['_setDomainName', 'iamvdo.me']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
    

  </body>
</html>
