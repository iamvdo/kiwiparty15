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

    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet'> -->
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
          <h2>Hello, c'est <a href="http://twitter.com/iamvdo">@iamvdo</a></h2>
          <ul class="vcard">
            <li>Formateur web <a href="http://www.ensg.eu" title="Ecole Nationale des Sciences Géographiques">ENSG Géomatique</a></li>
            <li>Je fais du CSS
              <ul>
                <li><a href="http://css3create.com">CSS3Create</a>, <a href="http://iamvdo.me">iamvdo</a>, <a href="http://pleeease.io">Pleeease</a></li>
                <li>Livre <a href="http://livre-css3.fr">CSS3 Le design web moderne</a></li>
              </ul>
            </li>
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
          <p class="Jumbo-title">Beaucoup d'icones</p>
          <p class="Jumbo-title Jumbo-title--big fragment">SPRITES FTW</p>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/sprite-google.png" alt="">
          <p class="Showcase-text Image-legend">Sprite utilisé par Google Documents</p>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">Retina, HD</p>
        </section>

        <section data-state="showcase">
          <img class="Image Image--unstyled" src="iamvdo/images/retina.png" alt="" width="600">
          <p class="Showcase-text Image-legend">Ecran faible densité vs. écran haute densité</p>
        </section>

        <section data-state="showcase">
          <img class="Image Image--unstyled Image--side Image--fakealign" src="iamvdo/images/kiwi-64.png" alt="">
          <img class="Image Image--unstyled Image--side" src="iamvdo/images/kiwi-128.png" alt="">
          <p class="Showcase-text Image-legend">Création d'images adaptées: <code>kiwi.png</code>, <code>kiwi@2x.png</code>, <code>kiwi@2.6x.png</code>, etc...</p>
          <p class="Showcase-text Image-legend">Icones par <a href="http://www.freepik.com/free-vector/fruits-collection_785792.htm">Freepik</a></p>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">Ce n'est pas viable</p>
          <p class="Jumbo-title fragment">Surtout pour des sprites !</p>
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
  font-family: myIcons; src: url(myIcons.woff);
}
.element { font-family: myIcons; }
</code></pre>
          <div class="demo fragment">
            <style>
              .reveal .demo {
                margin: 1em;
              }
              @font-face {
                font-family: 'myIcons';
                src: url('iamvdo/fonts/icon.woff') format('woff');
              }
              .reveal .demo-icon {
                font-family: 'myIcons';
                font-size: 1.4em;
                text-rendering: optimizeLegibility;
                margin: 1em;
              }
              .reveal .demo-icon--home:before {
                content: "home";
              }
              .reveal .demo-icon--camera:before {
                content: "camera";
              }
              .reveal .demo-icon--music:before {
                content: "music";
              }
            </style>
            <span class="demo-icon demo-icon--home"></span>
            <span class="demo-icon demo-icon--camera"></span>
            <span class="demo-icon demo-icon--music"></span>
          </div>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title">Concrètement, c'est un hack!</p>
        </section>

        <section>
          <h2>SVG</h2>
          <ul>
            <li class="fragment">Format d'image <span class="fragment">vectoriel</span></li>
            <li class="fragment">C'est du XML</li>
          </ul>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg viewBox="0 0 100 100">
  &lt;circle cx="50" cy="50" r="50" fill="yellow" />
  &lt;rect width="50" height="50" x="50" y="50" fill="blue" />
&lt;/svg>
</code></pre>
          <div class="demo fragment">
            <svg width="300" height="150" viewBox="0 0 100 100">
              <circle cx="50" cy="50" r="50" fill="yellow" />
              <rect width="50" height="50" x="50" y="50" fill="blue" />
            </svg>
          </div>
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
            <tr class="Points">
              <td class="Point"></td>
              <td class="Point" style="background: yellowgreen">WIN</td>
            </tr>
          </table>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">KTHXBYE</p>
          <p class="Jumbo-title fragment">Bon, allons plus loin…</p>
        </section>

        <section data-state="part">
          <h1>Utilisation<br>Création</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Utilisation</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>
                <ul>
                  <li>Nombreux set d'icones prêt à l'emploi</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>De plus en plus : <a href="https://icomoon.io/app">icomoon</a>, <a href="http://fontastic.me/">fontastic</a>, etc.</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point Point--plus"></td>
              <td class="Point"></td>
            </tr>
          </table>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Création</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul>
                  <li>Complexe</li>
                  <li>Des outils (<a href="http://icomoon.io">icomoon.io</a>), mais nécessite un SVG</li>
                  <li>Donc…</li>
                </ul></td>
              <td>
                <ul>
                  <li>N'importe quel outil vectoriel</li>
                  <li>On peut apprendre le SVG : c'est du XML</li>
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

        <section data-state="part">
          <h1>Intégration</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Intégration</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>1 seule méthode d'inclusion</li></ul></td>
              <td>
                <ul>
                  <li>6 méthodes d'inclusion
                    <ul>
                      <li>Inline</li>
                      <li><code>&lt;object></code>, <code>&lt;iframe></code>, <code>&lt;embed></code></li>
                      <li><code>&lt;img></code>, <code>background-image</code></li>
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

        <section data-state="part">
          <h1>Support<br>Fallback</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Support</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>IE6+</li><li>Pas Opera Mini</li></ul></td>
              <td><ul><li>IE9+</li><li>Opera Mini</li></ul></td>
            </tr>
            <tr class="Points fragment">
              <td class="Point Point--plus"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Fallback</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>
                <ul>
                  <li><a href="http://www.filamentgroup.com/lab/bulletproof_icon_fonts.html">Fallback complexe</a></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="http://www.grunticon.com">Fallback plus simple</a></li>
                  <li>A11y simplifiée</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
            <tr class="fragment">
              <td>
                <ul>
                  <li><a href="http://kudakurage.com/ligature_symbols/">Ligatures</a></li>
                </ul>
                <div class="demo">
                  <span class="demo-icon" contenteditable>Zone de test</span>
                </div>
              </td>
              <td>
                <ul>
                  <li class="fragment">Ligatures dans SVG</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point Point--plus"></td>
              <td class="Point"></td>
            </tr>
          </table>
        </section>

        <section data-state="part">
          <h1>Forme<br>Couleur</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Forme, couleur</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Une seule forme</li></ul></td>
              <td><ul><li>Plusieurs formes indépendantes et réutilisables</li></ul></td>
            </tr>
            <tr class="fragment">
              <td><ul><li>Une seule couleur</li></ul></td>
              <td><ul><li>Plusieurs couleurs et styles avancés</li></ul></td>
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
          <p class="Showcase-text Image-legend">En haut: police d'icones, en bas: SVG</p>
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
          <p class="Showcase-text Image-legend">Images <a href="http://grunticon.com">grunticon.com</a></p>
        </section>

        <section data-state="part">
          <h1>Réutilisabilité des formes</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Réutilisabilité des formes</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Faible et complexe</li></ul></td>
              <td><ul><li>Facile</li><li>Partie intégrante du SVG</li></ul></td>
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

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">Plusieurs <code>&lt;symbol></code><br>==<br>Sprites SVG</p>
        </section>

        <section data-state="part">
          <h1>Positionnement<br>Alignement<br>Taille</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Positionnement, Alignement, Taille</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td>
                <ul>
                  <li>Propriétés de texte
                    <ul>
                      <li><code>font-family</code>, <code>font-size</code>, <code>font-weight</code>, <code>line-height</code>, <code>vertical-align</code>, etc.</li>
                    </ul>
                  </li>
                  <li>Métrique de la police
                    <ul>
                      <li>ligne de base, hauteur d’x, aspect ratio, ascendante, descendante, etc.</li>
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

        <section data-state="showcase">
          <img src="iamvdo/images/font-awesome-weird.png" alt="">
          <p class="Showcase-text Image-legend">Icones <a href="http://fortawesome.github.io/Font-Awesome/">fontawesome.com</a></p>
        </section>

        <section data-state="jumbo">
          <p class="Jumbo-title Jumbo-title--big">TEXTE != FORME</p>
          <p class="Jumbo-title fragment">Personne n'aime modifier le line-height</p>
        </section>

        <section data-state="part">
          <h1>Interactions<br>Animations</h1>
        </section>

        <section data-state="showcase">
          <img src="iamvdo/images/icon-construction.gif" alt="">
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">Interactions, animations</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Pas vraiment</li></ul></td>
              <td>
                <ul>
                  <li>Intégrées</li>
                  <li>Animations SMIL (même si…)</li>
                  <li>Animations CSS</li>
                  <li>JavaScript</li>
                </ul>
              </td>
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
            font-family: Atipo Bold, sans-serif;
            font-weight: bold;
          }
          .reveal .stopwatch-image {
            display: block;
            margin: auto;
            width: 200px;
            margin-bottom: 20px;
          }
          .reveal .stopwatch-text {
            font-size: 2.2em;
            letter-spacing: -.04em;
            color: #f63752;
          }
          .reveal .stopwatch-text small {
            font-family: Atipo Light, sans-serif;
            font-weight: 100;
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
          #mail-with-anim .icon {
            width: 256px;
            height: 256px;
          }
          </style>
          <div id="mail-with-anim" class="icons icon-svg">
            <object class="icon" data="iamvdo/demos/icons-mail-anim.svg" type="image/svg+xml"></object>
          </div>
          <p class="u-small u-aligncenter u-margin">Cliquez pour recevoir un mail</p>
        </section>

        <section data-state="part">
          <h1>CSS avancées</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">CSS avancées</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Pas vraiment</li></ul></td>
              <td>
                <ul>
                  <li>Dégradés CSS</li>
                  <li>Masques, filtres, mode de fusion, etc.</li>
                  <li>Propriétés custom CSS (variables)</li>
                </ul>
              </td>
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
              svgs[i].parentNode.addEventListener('focus', animMask.bind(this, mask, true));
              svgs[i].addEventListener('mouseleave', animMask.bind(this, mask, false));
              svgs[i].parentNode.addEventListener('blur', animMask.bind(this, mask, false));
            };
          </script>
        </section>

        <section data-state="showcase">
          <div class="texts">
            <?php  echo file_get_contents('iamvdo/demos/storage-vars.svg'); ?>
            <svg class="icon">
              <use xlink:href="#new" style="--remaining: 80;" />
            </svg>
            <svg class="icon">
              <use xlink:href="#new" style="--remaining: 65;" />
            </svg>
            <svg class="icon">
              <use xlink:href="#new" style="--remaining: 45;" />
            </svg>
            <svg class="icon">
              <use xlink:href="#new" style="--remaining: 35;" />
            </svg>
            <svg class="icon">
              <use xlink:href="#new" style="--remaining: 0;" />
            </svg>
          </div>
          <p class="Showcase-text Image-legend">Propriétés custom (variables) supportées par Firefox</p>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg>
  &lt;style>
  .symbol--low { --remaining: 80; }
  &lt;/style>
  &lt;use xlink:href="#symbol" class="symbol--low" />
&lt;/svg></code></pre>
<pre class="fragment"><code class="language-markup" contenteditable="" spellcheck="false">&lt;svg>
  &lt;symbol id="symbol" clip-path="url(#clip)">
    &lt;style>
    .remaining {
      fill: hsl(var(--remaining), 100%, 50%);
      transform: translateY(calc(var(--remaining) * 1px));
    }
    &lt;/style>
    &lt;path class="remaining" d="..." />
  &lt;/symbol>
&lt;/svg></code></pre>
        </section>

        <section data-state="part">
          <h1>JavaScript</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">JavaScript</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Non, pas vraiment</li></ul></td>
              <td>
                <ul>
                  <li>Oui</li>
                  <li>Inclus dans l'icone</li>
                  <li>Accès au SVG DOM</li>
                </ul>
              </td>
            </tr>
            <tr class="Points fragment">
              <td class="Point"></td>
              <td class="Point Point--plus"></td>
            </tr>
          </table>
        </section>

        <section data-state="showcase">
          <style>
          #storage-dyn .icon {
            width: 256px;
            height: 256px;
          }
          </style>
          <div id="storage-dyn"></div>
          <input type="range" id="range" min="0" max="100">
          <p class="Showcase-text Image-legend">Icone SVG entièrement créée via JavaScript</p>
          <script>
          var value = 50;

          function createSVG () {
            var NS = 'http://www.w3.org/2000/svg';
            // svg element
            var svg = document.createElementNS(NS, 'svg');
                svg.setAttribute('class', 'icon');
                svg.setAttributeNS(null, 'viewBox', '0 0 100 100');
                svg.innerHTML = '<defs><clipPath id="clip-storage-dyn"><use xlink:href="#part4" /><use xlink:href="#part3" /><use xlink:href="#part2" /><use xlink:href="#part1" /></clipPath></defs>';
            // g element
            var g = document.createElementNS(NS, 'g');
                g.setAttributeNS(null, 'clip-path', 'url(#clip-storage-dyn)');
            // rect element
            var rect = document.createElementNS(NS, 'rect');
                rect.setAttribute('width', 100);
                rect.setAttribute('height', 100);
                rect.setAttributeNS(null, 'fill', '#777');
            // path element
            var path = document.createElementNS(NS, 'path');
                path.setAttribute('id', 'PATH');
                path.setAttributeNS(null, 'd', 'M100,100H0V-19.5h18.333C18.333-2.333,32.843,0.167,50,0.167S82.167-2.167,82.167-19.5H100V100z');
            // set 
            setStylePath(value, path);

            // append elements
            g.appendChild(rect);
            g.appendChild(path);
            svg.appendChild(g);
            document.getElementById('storage-dyn').appendChild(svg);
          }

          createSVG();

          var range = document.getElementById('range');
          range.addEventListener('input', changeValue);

          function changeValue (e) {
            value = e.target.value;
            setStylePath(value);
          }

          function setStylePath (value, path) {
            path = path || document.getElementById('PATH');
            value = 100 - value;
            // SVG way
            path.setAttributeNS(null, 'fill', 'hsl(' + value + ', 100%, 50%)');
            path.setAttributeNS(null, 'transform', 'translate(0, ' + value + ')');
            // CSS way
            // path.style.fill = 'hsl(' + value + ', 100%, 50%)';
            // path.style.transform = 'translateY(' + value + 'px)';
          }
          </script>
        </section>

        <section data-state="part">
          <h1>RWD</h1>
        </section>

        <section>
          <h2 class="Subtitle Subtitle--discreet">RWD</h2>
          <div class="Score">
            <div class="Score-icon Score-icon--font"></div>
            <div class="Score-icon Score-icon--SVG"></div>
          </div>
          <table>
            <tr>
              <th>Icon-font</th>
              <th>SVG</th>
            </tr>
            <tr>
              <td><ul><li>Non</li></ul></td>
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

        <section data-state="showcase">
          <style>
          #rwd-container {
            width: 200px;
            height: 200px;
            overflow: hidden;
            resize: both;
            margin: auto;
            background: url(iamvdo/demos/rwd.svg) center / contain no-repeat;
          }
          </style>
          <div id="rwd-container"></div>
          <p class="Image-legend">Icones <a href="https://useiconic.com">useiconic.com</a></p>
        </section>

        <section>
          <h2 class="Subtitle">Bénéfices SVG</h2>
          <ul>
            <li>(Assez) facile à créer</li>
            <li>Réutilisable</li>
            <li>Multi-effets</li>
            <li>Positionnement simplifié</li>
            <li>Dégradation gracieuse</li>
            <li>Meilleure a11y</li>
            <li>CSS + JS</li>
          </ul>
          <div class="fragment">
            <h2 class="Subtitle">Inconvénients</h2>
            <ul>
              <li>Pas (beaucoup) de sets prêts à l'emploi</li>
              <li>Workflow complet pas évident</li>
              <li>Compatibilité navigateur non homogène</li>
              <li>Parait plus complexe</li>
            </ul>
          </div>
        </section>

        <section class="me">
          <h2>Merci, <span>questions?</span></h2>
          <p class="u-aligncenter">Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a></p>
          <p class="u-aligncenter"><a href="http://slides.iamvdo.me/kiwiparty15">slides.iamvdo.me/kiwiparty15</a></p>
        </section>

        <section>
          <h2 class="Subtitle">Ressources</h2>
          <ul>
            <li>Articles / Blog
              <ul>
                <li><a href="http://betravis.github.io/icon-methods/svg-sprite-sheets.html">SVG Sprite / Icon Stack</a></li>
                <li><a href="http://fvsch.com/code/svg-sprite/">Using an external SVG sprite from HTML</a></li>
                <li><a href="https://vimeo.com/99828116">Chris Coyier talk on SVG</a></li>
                <li><a href="http://www.smashingmagazine.com/2014/11/03/styling-and-animating-svgs-with-css/4/">Styling and animating SVG</a></li>
                <li><a href="http://svgontheweb.com">SVG on the web, a practical guide</a></li>
              </ul>
            </li>
            <li>Sets de polices d'icones
              <ul>
                <li><a href="http://fortawesome.github.io/Font-Awesome/">FontAwesome</a></li>
                <li><a href="http://forecastfont.iconvau.lt/">Multi-layered icon font</a></li>
                <li><a href="http://fontello.com/">Fontello, générateur à partir de plusieurs sets</a></li>
              </ul>
            </li>
            <li>Sets mixte (SVG & icon-font)
              <ul>
                <li><a href="https://useiconic.com/open/">Iconic</a></li>
                <li><a href="https://icomoon.io/app">Icomoon</a></li>
                <li><a href="http://fontastic.me/">Fontastic</a></li>
                <li><a href="http://google.github.io/material-design-icons/">Material Design Google</a></li>
              </ul>
            </li>
            <li>Ligatures
              <ul>
                <li><a href="http://kudakurage.com/ligature_symbols/">http://kudakurage.com/ligature_symbols/</a></li>
                <li><a href="http://timepiece.inostudio.de/">http://timepiece.inostudio.de/</a></li>
                <li><a href="http://intridea.github.io/stately/">http://intridea.github.io/stately/</a></li>
              </ul>
            </li>
            <li>Outils
              <ul>
                <li><a href="http://grunticon.com">Grunticon</a></li>
                <li><a href="https://github.com/jonathantneal/svg4everybody">Polyfill pour external <code>&lt;use></code> svg4everybody</a></li>
                <li>Optimiseur: <a href="https://github.com/svg/svgo">SVGO</a>, <a href="https://jakearchibald.github.io/svgomg/">SVGOMG</a></li>
                <li><a href="http://lukewhitehouse.co.uk/blog/svg-icon-workflow/">Creating an SVG icon workflow</a></li>
                <li><a href="https://github.com/jkphl/svg-sprite">Automatic SVG sprites</a></li>
              </ul>
            </li>
          </ul>
        </section>

      </div>

    </div>

    <div class="info-overlay" id="info-twitter"><a href="https://twitter.com/iamvdo">@iamvdo</a></div>
    <div class="info-overlay" id="info-slides"><a href="http://slides.iamvdo.me/kiwiparty15">slides.iamvdo.me/kiwiparty15</a></div>

    <script src="lib/js/head.min.js"></script>
    <script src="js/reveal.min.js"></script>
    <script>
        // update score
        
        /*
        var allPoints = document.querySelectorAll('.Points');
        [].forEach.call(allPoints, function (pts) {
          if (pts.firstElementChild.classList.contains('Point--plus')) {
            pts.firstElementChild.innerHTML = 'WIN';
            points[0]++;
          }
          if (pts.firstElementChild.nextElementSibling.classList.contains('Point--plus')) {
            pts.firstElementChild.nextElementSibling.innerHTML = 'WIN';
            points[1]++;
          }
          pts.firstElementChild.innerHTML += ' (' + points[0] + ')';
          pts.firstElementChild.nextElementSibling.innerHTML += ' (' + points[1] + ')';
        });
        */
        function initScore () {
          var points = [0,0];
          updateScore(points);
          return points;
        }
        function getScore (event) {
          if (event.fragment.classList.contains('Points')) {
            var points = initScore();
            var allPoints = document.querySelectorAll('.Points');
            for (var i = 0; i < allPoints.length; i++) {
              var pts = allPoints[i];
              if (pts.firstElementChild.classList.contains('Point--plus')) {
                pts.firstElementChild.innerHTML = 'WIN';
                points[0]++;
              }
              if (pts.firstElementChild.nextElementSibling.classList.contains('Point--plus')) {
                pts.firstElementChild.nextElementSibling.innerHTML = 'WIN';
                points[1]++;
              }
              if (event.type === 'fragmenthidden' && pts === event.fragment) {
                if (pts === allPoints[0]) {
                  points = initScore();
                  updateScore(points);
                }
                break;
              }
              updateScore(points);
              if (event.type === 'fragmentshown' && pts === event.fragment) {
                break;
              }
            }
          }
        }
        function updateScore (points) {
          var allScores = document.querySelectorAll('.Score');
          [].forEach.call(allScores, function (scores) {
            scores.firstElementChild.innerHTML = 'Font<span>' + points[0] + '</span>';
            scores.firstElementChild.nextElementSibling.innerHTML = 'SVG<span>' + points[1] + '</span>';
            if (points[1] > points[0]) {
              scores.firstElementChild.classList.remove('Score-icon--win');
              scores.firstElementChild.nextElementSibling.classList.add('Score-icon--win');
            } else {
              scores.firstElementChild.nextElementSibling.classList.remove('Score-icon--win');
              scores.firstElementChild.classList.add('Score-icon--win');
            }
          });
        }
        initScore();
        Reveal.addEventListener('fragmentshown', function(event) {
          getScore(event);
        });
        Reveal.addEventListener('fragmenthidden', function(event) {
          getScore(event);
        });
        </script>

    <script>

      // master?
      var file = 'client';
      var secret = null;
      if (window.location.pathname.indexOf('master') !== -1) {
        file = 'master';
        secret = '1434571494108689500';
      }

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
        //
        multiplex: {
          secret: secret,
          id: '6f426e34f39fc844',
          url: 'revealjs.jit.su:80'
        },

        // Optional libraries used to extend on reveal.js
        dependencies: [
          { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
          { src: 'plugin/prismjs/prism.js', async: true, callback: function () {
            Prism.highlightAll();
          } },
          { src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
          { src: 'plugin/prefixfree/prefixfree.js', async: true },
          { src: 'plugin/live-coding/live-coding.js', async: true, condition: function() { return !!document.body.classList; }},
          { src: 'plugin/nav/nav.js', async: true},
          { src: '//cdnjs.cloudflare.com/ajax/libs/socket.io/1.0.6/socket.io.min.js', async: true },
          { src: 'plugin/multiplex/' + file + '.js', async: true }
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
