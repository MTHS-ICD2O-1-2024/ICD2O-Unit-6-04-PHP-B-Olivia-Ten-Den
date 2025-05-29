<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Sphere, with query strings in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Olivia Ten Den" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href=".ko/css/style.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Volume of a Sphere, with query strings in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere, with query strings in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/sphere.png" alt="image of a sphere with it's radius labeled" />
      </div>
      <br />
      <div class="page-content">Enter the radius in cm.</div>
      <br />
      <div class="page-content-answer">
        <?php
        echo $radius = $_GET['radius'];

        if ($radius == null) {
          $radius = 0;
        }

        $volume = 4 / 3 * M_PI * $radius ** 3;
        $roundedVolume = round($volume, 2);

        echo "<p>If the radius = " . $radius . " cm</p>";
        echo "<p>The volume is: " . $roundedVolume . "cm³</p>";

        ?>
        <div id="volume">
        </div>
      </div>
    </main>
  </div>
</body>

</html>