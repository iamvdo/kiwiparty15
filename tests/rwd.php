<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SVG</title>
  <style>
  :root {
    background: #eee;
    font: 1em Montserrat, sans-serif;
    letter-spacing: -.05em;
    word-spacing: .05em;
    color: #eee;
    text-shadow: 0 1px 1px rgba(0,0,0,.8);
    padding: 50px;
    text-align: center;
  }
  .icon {
    width: 256px;
    height: 256px;
    -webkit-filter: drop-shadow(0 1px 1px rgba(0,0,0,.8));
    fill: #777;
    /* background: rgba(255,0,0,1); */
  }
  .container {
    width: 256px;
    height: 256px;
    overflow: hidden;
    resize: both;
  }
  .container--md,
  .icon--md {
    width: 128px;
    height: 128px;
  }
  .container--sm,
  .icon--sm {
    width: 64px;
    height: 64px;
  }
  .container img {
    width: 100%;
  }
  .container--bg {
    margin: auto;
    width: 50px;
    height: 50px;
    background: url(rwd.svg) center / contain no-repeat;
  }

  </style>
</head>
<body>

  <img class="icon" src="rwd.svg" alt="" >
  <img class="icon icon--md" src="rwd.svg" alt="" >
  <img class="icon icon--sm" src="rwd.svg" alt="" >

  <div class="container">
    <img src="rwd.svg" alt="">
  </div>
  <div class="container container--md">
    <img src="rwd.svg" alt="">
  </div>
  <div class="container container--sm">
    <img src="rwd.svg" alt="">
  </div>

  <div class="container container--bg"></div>

</body>
</html>