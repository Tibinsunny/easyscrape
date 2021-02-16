# EasyScrape 🚀
Easyscrape is a simple php library which allows you to scrape website based on the DOM elements. All you need to know is the exact HTML elements in which the data is displayed.

## Installation
`composer require tibinsunny/easyscrape`  
## Usage
``` use easyScrape\easyScrape;     
   $instance = new easyScrape();
   $result=$instance->scrapeNow(URL,STARTING_TAG,ENDING_TAG); 
```

