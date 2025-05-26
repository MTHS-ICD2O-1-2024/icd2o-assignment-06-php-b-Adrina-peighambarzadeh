<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random Motivational Quotes, with JS (API)" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Random Motivational Quotes, with PHP (API)</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Random Motivational Quotes, with PHP (API)</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <br />
      <div class="page-content-answer">
        <?php
        $apiUrl = 'https://gomezmig03.github.io/MotivationalAPI/en.json';
        $dataFromApi = file_get_contents($apiUrl);

        if ($dataFromApi !== false) {
          $jsonData = json_decode($dataFromApi, true);

          // pick a random quote from the array
          $randomIndex = array_rand($jsonData);
          $randomQuote = $jsonData[$randomIndex];

          $quoteText = $randomQuote['text'];
          $quoteAuthor = $randomQuote['author'];

          // output using original style, no htmlspecialchars
          echo '<b>Quote:</b> "' . $quoteText . '"<br />';
          echo '<b>Author:</b> ' . $quoteAuthor . '<br />';
        } else {
          echo 'Error fetching data.';
        }
        ?>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
