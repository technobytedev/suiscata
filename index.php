<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUISCATA RANDOM QUOTES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Rubik Doodle Shadow;
        }
        #wrapper {
            height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(to right top, #5A6469, #566573, #5A6469, #5A6469, #566573);
    

        }

        .card {
            max-width: 500px;
            max-height: auto;
        }

        .subtitle {
        text-align: right;
        }

        img {
            max-width: 300px;
            margin: auto;
        }
    </style>

</head>
<body>


<?php

// API endpoint
$apiEndpoint = 'https://api.quotable.io/random';

// Fetch data from the API
$response = file_get_contents($apiEndpoint);

// Check if the request was successful
if ($response === false) {
    die('Failed to fetch data from the API');
}

// Decode JSON response
$data = json_decode($response, true);

// Check if JSON decoding was successful
if ($data === null) {
    die('Failed to decode JSON');
}

// Extract values from the data
$quote = $data['content'];
$author = $data['author'];



?>

<div id="wrapper" class="p-5 ">

<div class="card " style="background-color: black;">
  <div class="card-content">
    <center><img src="suis.jpg" alt="" class="mt-2">
    <p class="title has-text-white mt-5">
      “<?= $quote ?>”
    </p>
    </center>
    <p class="subtitle has-text-white mb-2">
    - <?= $author ?>
    </p>
  </div>
  <footer class="card-footer">
    <p class="card-footer-item">
      <span class="">
        <a class="has-text-white" href="fb://page/100582242960046"><img src="fb.png" alt=""  style="max-width: 20px;margin-bottom:-4px!important"> Follow Suiscata </a>
      </span>
    </p>
  </footer>
</div>
</div>


    
</body>
</html>