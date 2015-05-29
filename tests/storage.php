<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SVG</title>
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
  .text {
    display: inline-block;
    padding: 20px;
    margin: 20px;
    font-weight: bold;
    /*
    border: 1px solid rgba(0,0,0,.5);
    border-radius: 20px;
    background: rgba(0,0,0,.1);
    box-shadow: 0 1px 0 rgba(255,255,255,.1), inset 0 1px 0 rgba(255,255,255,.1);
    */
  }
  .text * {
    vertical-align: middle;
  }
  .icon {
    width: 40px;
    height: 40px;
    -webkit-filter: drop-shadow(0 1px 1px rgba(0,0,0,.8));
    fill: #777;
    /* background: rgba(255,0,0,.1); */
  }
  .text--low {
    color: #27ae60;
  }
  .text--medium {
    color: #f39c12;
  }
  .text--high {
    color: #d35400;
  }
  .text--max {
    color: #e74c3c;
  }
  </style>
</head>
<body>

  <?php 
  echo file_get_contents('storage.svg');
   ?>
  
  <h1>Your actual storage</h1>
  
  <div class="texts">
    <div class="text text--low">
      <svg class="icon">
        <use xlink:href="#low" />
      </svg>
      Everything is OK
    </div>

    <div class="text text--medium">
      <svg class="icon">
        <use xlink:href="#medium" />
      </svg>
      Half full, half empty
    </div>

    <div class="text text--high">
      <svg class="icon">
        <use xlink:href="#high" />
      </svg>
      Soon out of storage
    </div>

    <div class="text text--max">
      <svg class="icon">
        <use xlink:href="#max" />
      </svg>
      Get more storage!
    </div>
  </div>

  <div class="texts">
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

  <object class="icon" type="image/svg+xml" data="storage-image.svg" style="--remaining: 45;"></object>

  <img class="icon" src="storage-image.svg" alt="" style="--remaining: 45;">

  <h2>Scriptable</h2>
  <input type="range" id="range" min="0" max="100">
  <script>

var value = 50;

function createSVG () {
  var NS = 'http://www.w3.org/2000/svg';
  // svg element
  var svg = document.createElementNS(NS, 'svg');
      svg.setAttribute('class', 'icon');
      svg.setAttributeNS(null, 'viewBox', '0 0 100 100');
  // g element
  var g = document.createElementNS(NS, 'g');
      g.setAttributeNS(null, 'clip-path', 'url(#clip)');
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
  document.body.appendChild(svg);
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

</body>
</html>