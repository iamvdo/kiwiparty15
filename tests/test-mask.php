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
    border: 1px solid rgba(0,0,0,.5);
    border-radius: 20px;
    background: rgba(0,0,0,.1);
    box-shadow: 0 1px 0 rgba(255,255,255,.1), inset 0 1px 0 rgba(255,255,255,.1);
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

  <svg id="new" viewBox="0 0 100 100" width="100" height="100">
    <clipPath id="clip">
      <ellipse id="part4" cx="50" cy="19.724" rx="30" ry="11.262" />
    </clipPath>
    <g clip-path="url(#clip)">
      <rect width="100" height="100" fill="#777" />
      <rect width="100" height="100" fill="#f00" />
    </g>
  </svg>

</body>
</html>