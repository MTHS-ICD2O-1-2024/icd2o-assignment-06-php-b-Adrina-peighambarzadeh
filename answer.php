<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Motivational Phrases, with PHP (API)" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-deep_orange.min.css" />
  <title>Motivational Phrases, with PHP (API)</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Motivational Phrases, with PHP (API)</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <br />
      <div class="page-content-answer" style="padding: 16px;">
        <?php
        $apiUrl = 'https://gomezmig03.github.io/MotivationalAPI/en.json';
        $dataFromApi = file_get_contents($apiUrl);

        if ($dataFromApi !== false) {
          $jsonData = json_decode($dataFromApi, true);

          if (is_array($jsonData) && count($jsonData) > 0) {
            $randomIndex = array_rand($jsonData);
            $randomQuote = $jsonData[$randomIndex];

            $quotePrase = $randomQuote['phrase'];
            $quoteAuthor = $randomQuote['author'];

            echo '<b>Quote:</b> "' . $quotePrase . '"<br />';
            echo '<b>Author:</b> ' . $quoteAuthor . '<br />';
          }
        }
        ?>
      </div>
      <a href="./index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Return to Home Now
      </a>
  </div>
  </main>
  </div>
</body>

</html>