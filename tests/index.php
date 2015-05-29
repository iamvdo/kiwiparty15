<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SVG</title>
  <style>
  .icon {
    display: block;
    width: 100px;
    height: 100px;
    background: rgba(255,0,0,.1);
  }
  </style>
</head>
<body>

  <?php 
  $content = file_get_contents('svg.svg');
   ?>

  <h1>Démos</h1>
  <ul>
    <li><a href="mail.php">Mail</a></li>
    <li><a href="storage.php">Storage</a></li>
    <li><a href="rwd.php">RWD</a></li>
    <li><a href="retina.svg">SVG Retina</a></li>
  </ul>

  <h1>Images</h1>
  <img src="kiwi-64.png" alt="">
  <img src="kiwi-128.png" alt="">

  <h1>Méthodes d'inclusion de SVG</h1>

  <h3>Inline <code>&lt;svg></code></h3>
  <!-- CSS :hover OK, CSS Animations OK, JS OK-->
  <?php echo $content; ?>

  <h3>With <code>&lt;use></code></h3>
  <!-- CSS :hover NOK (OK only SVG), CSS Animations NOK, JS NOK-->
  <svg class="icon">
    <use xlink:href="svg.svg#svg" />
  </svg>

  <h3>With <code>&lt;object></code></h3>
  <!-- CSS :hover OK, CSS Animations OK, JS OK, + fallback-->
  <object class="icon" type="image/svg+xml" data="svg.svg"></object>

  <h3>With <code>&lt;object></code> in data-uri</h3>
  <!-- CSS :hover OK, CSS Animations OK, JS OK, + fallback-->
  <object class="icon" type="image/svg+xml" data="data:image/svg+xml;base64,<?php echo base64_encode($content); ?>"></object>

  <h3>With <code>&lt;img></code></h3>
  <!-- CSS :hover NOK, CSS Animations OK, JS NOK-->
  <img class="icon" src="svg.svg" alt="">

  <h3>With <code>background-image</code></h3>
  <!-- CSS :hover NOK, CSS Animations OK, JS NOK-->
  <div class="icon" style="background-image: url(svg.svg)"></div>

</body>
</html>