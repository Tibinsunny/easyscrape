# EasyScrape 🚀
Easyscrape is a simple php library which allows you to scrape website based on the DOM elements. All you need to know is the exact HTML elements in which the data is displayed.

## Installation 💻
`composer require tibinsunny/easyscrape`  
## Usage 🔨
``` use easyScrape\easyScrape;     
   $instance = new easyScrape();
   $result=$instance->scrapeNow(URL,STARTING_TAG,ENDING_TAG); 
```
URL should have http/https protocol

## Sample Code ⚙
```
<?php
// require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . './src/easyscrape.php';

use easyScrape\easyScrape;


$instance = new easyScrape();

$result=$instance->scrapeNow('https://www.google.com','<title>','</title>');
var_dump($result)
?>
```
The above code dumps an array which contains the title "Google" as the function is asked to scrape the "TITLE" tag of google.com
