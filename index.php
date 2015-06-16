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
          <p class="Jumbo-title">Des icones ?</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/icon-90s.png" alt="">
          <p class="Showcase-text Image-legend">yahoo.com <small>(20 décembre 1996)</small>, fnac.com <small>(11 mai 2000)</small>, amazon.com <small>(9 juin 2000)</small>, System 1 Mac <small>(1984)</small></p>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">Genre beaucoup ?</p>
          <p class="Jumbo-title fragment">SPRITES FTW</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/sprite-google.png" alt="">
          <p class="Showcase-text Image-legend">Sprite utilisé par Google Documents</p>
        </section>

        <section data-state="showcase">
          <img class="Image Image--unstyled" src="iamvdo/images/retina.svg" alt="" width="600">
          <p class="Showcase-text Image-legend">Densité de pixels</p>
        </section>

        <section data-state="showcase">
          <img class="Image Image--unstyled Image--side Image--fakealign" src="iamvdo/images/kiwi-64.png" alt="">
          <img class="Image Image--unstyled Image--side" src="iamvdo/images/kiwi-128.png" alt="">
          <p class="Showcase-text Image-legend"><code>kiwi.png</code>, <code>kiwi@2x.png</code>, <code>kiwi@2.6x.png</code>, etc...</p>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">Ce n'est pas viable</p>
          <ul>
            <li>Trop d'assets à créer / maintenir</li>
            <li>Sprites trop complexe</li>
          </ul>
          <p class="Jumbo-title">La solution ?</p>
        </section>

        <section data-state="part">
          <h1>Les icones vectorielles</h1>
          <img class="Image Image--unstyled" src="iamvdo/images/icon-font-vs-svg.png" alt="">
        </section>

        <section>
          <h2>Icon-font</h2>
          <ul>
            <li class="fragment">Police de caractères</li>
            <li class="fragment">Rendu possible grâce à <code>@font-face</code></li>
          </ul>
<pre class="fragment"><code class="css" contenteditable="" spellcheck="false">@font-face {
  font-family: myIcons;
  src: url(myIcons.woff);
}
.element {
  font-family: myIcons;
}
</code></pre>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">Basically, it's a hack!</p>
        </section>

        <section>
          <h2>SVG</h2>
          <ul>
            <li class="fragment">Format d'image vectoriel</li>
            <li class="fragment">C'est du XML</li>
          </ul>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg>
  &lt;circle cx="50" cy="50" r="10" />
  &lt;rect width="30" height="10" x="45" y="50" />
&lt;/svg>
</code></pre>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">SVG: Scalable Vector Graphics</p>
          <p class="Jumbo-title Jumbo-title--big fragment current-visible">Scalable.</p>
          <p class="Jumbo-title Jumbo-title--big fragment current-visible">Vector.</p>
          <p class="Jumbo-title Jumbo-title--big fragment current-visible">Graphics!!!</p>
        </section>

        <section>
          <h2>Comparatif</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>C'est un hack</td>
              <td>C'est son rôle</td>
            </tr>
          </table>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">KTHXBYE</p>
          <p class="Jumbo-title fragment">Bon, allons plus loin…</p>
        </section>

        <section data-state="part">
          <h1>Utilisation<br>Intégration</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Utilisation, intégration</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>1 seule méthode d'inclusion</td>
              <td>6 méthodes d'inclusion</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="part">
          <h1>Support<br>Fallback</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Support, fallback</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>IE6+</td>
              <td>IE9+</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point Point--plus"></td>
              <td class="Point"></td>
            </tr>
            <tr class="fragment">
              <td>
                <ul>
                  <li>Fallback complexe</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Fallback plus simple</li>
                  <li>A11y simplifiée</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="part">
          <h1>Forme<br>Couleur</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Forme, couleur</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Une seule forme</td>
              <td>Plusieurs formes indépendantes et réutilisables</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
            <tr class="fragment">
              <td>Une seule couleur</td>
              <td>Plusieurs couleurs et styles avancés</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="showcase">
          <?php  echo file_get_contents('iamvdo/demos/icons-mail.svg'); ?>
          <style>
          @import url(iamvdo/demos/icomoon/style.css);
          .reveal .icons {
            display: flex;
            flex-flow: row;
            justify-content: center;
          }
          .reveal .icon {
            display: inline-block;
            overflow: hidden;
            width: 100px;
            height: 100px;
            margin: 5px;
            -webkit-filter: drop-shadow(0 1px 1px rgba(0,0,0,.8));
            text-shadow: none;
            fill: #777;
            color: #777;
          }
          .reveal .icon--large {
            width: 120px;
            height: 120px;
            margin: 15px;
          }
          .reveal .icon-font {
            font-size: 100px;
          }
          .reveal .icon-font .path1::before {
            color: deeppink;
          }
          .reveal .icon-font .path2::before {
            color: #777;
          }
          </style>

          <div class="icons icons-font">
            <div class="icon icon-font icon-icon_mail"></div>
            <div class="icon icon-font icon-icon_mail-with-notif"></div>
            <div class="icon icon-font icon-icon_mail-with-notif-color">
              <span class="path1"></span><span class="path2"></span>
            </div>
          </div>

          <div class="icons icon-svg">
            <svg class="icon">
              <use xlink:href="#mail" />
            </svg>
            <svg class="icon">
              <use xlink:href="#mail-with-notif" />
            </svg>
            <svg class="icon">
              <use xlink:href="#mail-with-notif-color" />
            </svg>
          </div>
        </section>

        <section data-state="showcase">
          <?php  echo file_get_contents('iamvdo/demos/grunticons.svg'); ?>
          <div class="icons icon-svg">
            <svg class="icon icon--large">
              <use xlink:href="#vespa" />
            </svg>
            <svg class="icon icon--large">
              <use xlink:href="#converse" />
            </svg>
            <svg class="icon icon--large">
              <use xlink:href="#skate" />
            </svg>
          </div>
        </section>

        <section data-state="part">
          <h1>Réutilisabilité</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Réutilisabilité</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Faible et complexe</td>
              <td>Facile</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="showcase">
          <?php  echo file_get_contents('iamvdo/demos/storage.svg'); ?>
          <style>
          .reveal .text {
            display: inline-block;
            padding: 20px;
            font-weight: bold;
            font-size: 1rem;
            letter-spacing: -.05em;
            word-spacing: .05em;
          }
          .reveal .text * {
            vertical-align: middle;
          }
          .reveal .texts .icon {
            /*width: 40px;
            height: 40px;*/
            color: inherit;
          }
          .reveal .text--low {
            color: #27ae60;
          }
          .reveal .text--medium {
            color: #f39c12;
          }
          .reveal .text--high {
            color: #d35400;
          }
          .reveal .text--max {
            color: #e74c3c;
          }
          </style>
          <div class="texts">
            <div class="text text--low">
              <svg class="icon">
                <use xlink:href="#low" />
              </svg>
              <br>Everything is OK
            </div>

            <div class="text text--medium">
              <svg class="icon">
                <use xlink:href="#medium" />
              </svg>
              <br>Half full, half empty
            </div>

            <div class="text text--high">
              <svg class="icon">
                <use xlink:href="#high" />
              </svg>
              <br>Soon out of storage
            </div>

            <div class="text text--max">
              <svg class="icon">
                <use xlink:href="#max" />
              </svg>
              <br>Get more storage!
            </div>
          </div>
        </section>

        <section>
          <h2><code>&lt;defs></code> et <code>&lt;use></code></h2>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg>
  &lt;defs>
    &lt;circle id="forme" cx="50" cy="50" r="10" />
  &lt;/defs>
  
  &lt;use xlink:href="#forme" />
  &lt;use xlink:href="#forme" style="..." />
&lt;/svg></code></pre>
        </section>

        <section>
          <h2><code>&lt;symbol></code></h2>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg>
  &lt;defs>
    &lt;circle id="forme" cx="50" cy="50" r="10" />
  &lt;/defs>
  
  &lt;symbol id="icon" viewBox="0 0 100 100">
    &lt;use xlink:href="#forme" style="..." />
  &lt;/symbol>

  &lt;use xlink:href="#icon" style="..." />
&lt;/svg></code></pre>
        </section>

        <section data-state="part">
          <h1>Positionnement<br>Alignement<br>Taille</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Positionnement, Alignement, Taille</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>
                <ul>
                  <li>Propriétés de texte, de ligne, de polices
                    <ul>
                      <li><code>font-family</code>, <code>font-size</code>, <code>font-weight</code>, etc.</li>
                      <li><code>line-height</code>, <code>vertical-align</code>, etc.</li>
                      <li>ligne de base, hauteur d’x, aspect ratio, etc.</li>
                    </ul>
                  </li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Suit le box model
                    <ul>
                      <li><code>width</code>, <code>height</code>, etc.</li>
                    </ul>
                  </li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">TEXTE != FORME</p>
          <p class="Jumbo-title fragment">Personne n'aime modifier le line-height</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/font-awesome-weird.png" alt="">
          <p class="Showcase-text Image-legend">Icones fontawesome.com</p>
        </section>

        <section data-state="part">
          <h1>Animations</h1>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/icon-construction.gif" alt="">
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Animations</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Pas vraiment</td>
              <td>Oui, via CSS et JS</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="showcase">
          <style>
          .reveal .stopwatch {
            color: yellow;
          }
          .reveal .stopwatch-image {
            display: block;
            margin: auto;
            width: 100px;
            margin-bottom: 20px;
          }
          .reveal .stopwatch-text {
            color: #f63752;
          }
          </style>
          <div class="stopwatch">
            <object class="stopwatch-image" data="iamvdo/demos/stopwatch.svg" type="image/svg+xml"></object>
            <p class="u-aligncenter stopwatch-text">StopWatch'App
            <br><small>Save time. Now.</small></p>
          </div>
        </section>

        <section data-state="showcase">
          <style>
          </style>
          <div class="icons icon-svg">
            <object class="icon" data="iamvdo/demos/icons-mail-anim.svg" type="image/svg+xml"></object>
          </div>
          <p class="u-small u-aligncenter u-margin">Cliquez pour recevoir un mail</p>
        </section>

        <section data-state="part">
          <h1>Styles avancés</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Styles avancés</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Pas vraiment</td>
              <td>Dégradés CSS<br>Masques, filtres, mode de fusion, etc.</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-background="linear-gradient(to bottom right, white -50%, mediumvioletred 20%, black 160%)">
          <style>
          #ex10 {
          }
          #ex10 .menu {
            text-align: center;
            margin: 100px auto;
          }
          #ex10 .icon {
            width: 4em;
            height: 4em;
            margin: 0 30px;
            display: inline-block;
            color: rgba(0,0,0,.5);
            font-weight: 700;
            border: none;
          }
          #ex10 .icon svg {
            fill: #fff;
            width: 100%;
            height: 100%;
          }
          #ex10 .svg-icon-color {
            fill: #fff;
          }
          #ex10 .icon .svg-icon-mask {
            fill: orange;
          }
          #ex10 .icon--twitter .svg-icon-mask {
            fill: #55acee;
          }
          #ex10 .icon--conf .svg-icon-mask {
            fill: yellowgreen;
          }
          #ex10 .svg-icon-shadow {
            fill: rgba(0,0,0,.5);
          }
          </style>
          <div id="ex10">
            <?php  echo file_get_contents('iamvdo/demos/icons.svg'); ?>
            <nav class="menu u-right" role="navigation">
              <a class="menu-item icon icon--blog image" href="/blog">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="20 20 60 60" width="50" height="50" class="svg-icon svg-icon--blog" role="img" aria-label="Blog">
                  <use xlink:href="#svg-blog" class="svg-icon-shadow" filter="url(#blur)" transform="translate(0, 1)"/>
                  <clipPath id="clip-blog">
                    <use xlink:href="#svg-blog"></use>
                  </clipPath>
                  <g clip-path="url(#clip-blog)">
                    <rect class="svg-icon-color" width="120" height="120" x="-10" y="-10"></rect>
                    <path class="svg-icon-mask" d="M88.5,95.5H69H49.5H30H10.5V76V56.5V37V17.5c0,0,5.9-4,19.5-4s19.5,4,19.5,4s4.4,4,19.5,4s19.5-4,19.5-4V37v19.5V76V95.5z" transform="translate(0,70)"/>
                  </g>
                </svg>
              </a>
              <a class="menu-item icon icon--conf image" href="/conf">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="20 20 60 60" width="50" height="50" class="svg-icon svg-icon--conf" role="img" aria-label="Conférences">
                  <use xlink:href="#svg-conf" class="svg-icon-shadow" filter="url(#blur)" transform="translate(0, 1)"/>
                  <clipPath id="clip-conf">
                    <use xlink:href="#svg-conf"></use>
                  </clipPath>
                  <g clip-path="url(#clip-conf)">
                    <rect class="svg-icon-color" width="120" height="120" x="-10" y="-10"></rect>
                    <path class="svg-icon-mask" d="M88.5,95.5H69H49.5H30H10.5V76V56.5V37V17.5c0,0,5.9-4,19.5-4s19.5,4,19.5,4s4.4,4,19.5,4s19.5-4,19.5-4V37v19.5V76V95.5z" transform="translate(0,70)"/>
                  </g>
                </svg>
              </a>
              <a class="menu-item icon icon--twitter image" href="http://twitter.com/iamvdo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="20 20 60 60" width="50" height="50" class="svg-icon svg-icon--twitter" role="img" aria-label="Twitter">
                  <use xlink:href="#svg-twitter" class="svg-icon-shadow" filter="url(#blur)" transform="translate(0, 1)"/>
                  <clipPath id="clip-twitter">
                    <use xlink:href="#svg-twitter"></use>
                  </clipPath>
                  <g clip-path="url(#clip-twitter)">
                    <rect class="svg-icon-color" width="120" height="120" x="-10" y="-10"></rect>
                    <path class="svg-icon-mask" d="M88.5,95.5H69H49.5H30H10.5V76V56.5V37V17.5c0,0,5.9-4,19.5-4s19.5,4,19.5,4s4.4,4,19.5,4s19.5-4,19.5-4V37v19.5V76V95.5z" transform="translate(0,70)"/>
                  </g>
                </svg>
              </a>
            </nav>
          </div>
          <script src="iamvdo/demos/lib/snap.js"></script>
          <script>
            var cubicBezier = function (x1, y1, x2, y2, epsilon) {
              var curveX = function(t){
                var v = 1 - t;
                return 3 * v * v * t * x1 + 3 * v * t * t * x2 + t * t * t;
              };
              var curveY = function(t){
                var v = 1 - t;
                return 3 * v * v * t * y1 + 3 * v * t * t * y2 + t * t * t;
              };
              var derivativeCurveX = function(t){
                var v = 1 - t;
                return 3 * (2 * (t - 1) * t + v * v) * x1 + 3 * (- t * t * t + 2 * v * t) * x2;
              };
              return function (t) {
                var x = t, t0, t1, t2, x2, d2, i;
                // First try a few iterations of Newton's method -- normally very fast.
                for (t2 = x, i = 0; i < 8; i++){
                  x2 = curveX(t2) - x;
                  if (Math.abs(x2) < epsilon) return curveY(t2);
                  d2 = derivativeCurveX(t2);
                  if (Math.abs(d2) < 1e-6) break;
                  t2 = t2 - x2 / d2;
                }
                t0 = 0, t1 = 1, t2 = x;
                if (t2 < t0) return curveY(t0);
                if (t2 > t1) return curveY(t1);
                // Fallback to the bisection method for reliability.
                while (t0 < t1){
                  x2 = curveX(t2);
                  if (Math.abs(x2 - x) < epsilon) return curveY(t2);
                  if (x > x2) t0 = t2;
                  else t1 = t2;
                  t2 = (t1 - t0) * .5 + t0;
                }
                // Failure
                return curveY(t2);
              };
            };
            var duration = 1000;
            var epsilon = (1000 / 60 / duration) / 4;
            var svgs = document.querySelectorAll('#ex10 .svg-icon');
            function animPath (e) {
              e.animate(
                {d: 'M88.5,95.5H69H49.5H30H10.5V76V56.5V37V17.5c0,0,5.9,6,19.5,6s19.5-6,19.5-6s4.4-6,19.5-6s19.5,6,19.5,6V37v19.5V76V95.5z'},
                300,
                function () {
                  e.animate(
                    {d: 'M88.5,95.5H69H49.5H30H10.5V76V56.5V37V17.5c0,0,5.9-4,19.5-4s19.5,4,19.5,4s4.4,4,19.5,4s19.5-4,19.5-4V37v19.5V76V95.5z'},
                    300,
                    function () {
                      animPath(e);
                    });
                }
              )
            }
            var timingFunction = cubicBezier(.1,.1,.1,1, epsilon);
            function animMask (e, direction) {
              var value = 0;
              if (!direction) {
                value = 70;
              }
              e.animate(
                {transform: 'translate(0,' + value + ')'},
                1800,
                timingFunction)
            }
            for (var i = 0; i < svgs.length; i++) {
              var s = Snap(svgs[i]);
              var path = s.select('.svg-icon-mask');
              animPath(path);
              var mask = s.select('.svg-icon-mask');
              svgs[i].addEventListener('mouseenter', animMask.bind(this, mask, true));
              svgs[i].addEventListener('mouseleave', animMask.bind(this, mask, false));
            };
          </script>
        </section>

        <section data-state="part">
          <h1>Scriptable</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Scriptable</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Non, pas vraiment</td>
              <td>Oui<br>Génération d'icones contextuelles à la volée</td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="showcase">
          <style>
          </style>
          <p>Storage dynamique ?</p>
        </section>

        <section data-state="part">
          <h1>RWD</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">RWD</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>Non</td>
              <td>
                <ul>
                  <li>Véritablement responsive</li>
                  <li>L'image embarque les différentes «versions»</li>
                  <li>C'est le parent qui est le viewport</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-background="cyan">
          <style>
          .reveal .container {
            width: 100px;
            height: 100px;
            overflow: hidden;
            resize: both;
            margin: auto;
            background: url(iamvdo/demos/rwd.svg) center / contain no-repeat;
          }
          </style>
          <div class="container"></div>
        </section>

        <section data-state="part">
          <h1>Création</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Création</h2>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul>
                  <li>Complexe</li>
                  <li>Des outils, mais nécessite un SVG</li>
                  <li>Donc…</li>
                </ul></td>
              <td>
                <ul>
                  <li>N'importe quel outil vectoriel</li>
                  <li>C'est du XML</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title ">Créer un SVG avec AI, c’est comme créer du HTML avec Dreamweaver</p>
        </section>

        <section>
          <h2 class="Subtitle">Bénéfices SVG</h2>
          <ul>
            <li>Facile à créer</li>
            <li>Réutilisable</li>
            <li>Multi-effets</li>
            <li>Positionnement simplifié</li>
            <li>Meilleure a11y</li>
            <li>CSS + JS</li>
          </ul>
          <p class="fragment">Inconvénients :</p>
          <ul class="fragment">
            <li>Workflow complet pas évident</li>
            <li>Compatibilité navigateur non homogène</li>
            <li>Parait plus complexe</li>
          </ul>
        </section>

        <section class="me">
          <h2>Merci, <span>questions?</span></h2>
          <p class="u-aligncenter">Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a></p>
          <p class="u-aligncenter"><a href="http://slides.iamvdo.me/kiwiparty15">slides.iamvdo.me/kiwiparty15</a></p>
        </section>

        <script>
        // update score
        var points = [0,0];
        var allPoints = document.querySelectorAll('.Points');
        console.log(allPoints);
        [].forEach.call(allPoints, function (pts) {
          if (pts.firstElementChild.classList.contains('Point--plus')) {
            points[0]++;
          }
          if (pts.firstElementChild.nextElementSibling.classList.contains('Point--plus')) {
            points[1]++;
          }
          pts.firstElementChild.innerHTML = points[0];
          pts.firstElementChild.nextElementSibling.innerHTML = points[1];
        });
        </script>

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
