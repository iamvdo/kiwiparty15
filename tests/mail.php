<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SVG</title>
  <link rel="stylesheet" href="icomoon/style.css">
  <style>
  :root {
    background: #333;
    font: 1em Montserrat, sans-serif;
    letter-spacing: -.05em;
    word-spacing: .05em;
    color: #eee;
    text-shadow: 0 1px 1px rgba(0,0,0,.8);
    padding: 50px;
    text-align: center;
  }
  .icons {
    display: flex;
    flex-flow: row;
    justify-content: center;
  }
  .icon {
    display: inline-block;
    overflow: hidden;
    width: 100px;
    height: 100px;
    margin: 5px;
    -webkit-filter: drop-shadow(0 1px 1px rgba(0,0,0,.8));
    text-shadow: none;
    fill: #777;
    color: #777;
    /* background: rgba(255,0,0,.1); */
  }
  .icon--large {
    width: 120px;
    height: 120px;
    margin: 15px;
  }
  .icon-font {
    font-size: 100px;
  }
  .icon-font .path1::before {
    color: deeppink;
  }
  .icon-font .path2::before {
    color: #777;
  }
  </style>
</head>
<body>

  <?php 
  echo file_get_contents('icons-mail.svg');
   ?>
  
  <h1>You've got mails!</h1>

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

  <div class="icons icon-svg">
    <object class="icon" type="image/svg+xml" data="icons-mail-anim.svg"></object>
  </div>
  <p>Click on it to receive a new mail</p>

  <div class="icons icon-svg">
    <svg class="icon icon--large">
      <use xlink:href="grunticons.svg#vespa" />
    </svg>
    <svg class="icon icon--large">
      <use xlink:href="grunticons.svg#converse" />
    </svg>
    <svg class="icon icon--large">
      <use xlink:href="grunticons.svg#skate" />
    </svg>
  </div>

</body>
</html>