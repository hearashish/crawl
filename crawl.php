<?php
require_once('database.php');

function crawlWebPage($sourceURL="https://en.wikipedia.org/wiki/Main_Page")
{
   global $conn;
   $content=file_get_contents($sourceURL);
   $content = strip_tags($content,"<a>");

   $subString = preg_split("/<\/a>/",$content);
   foreach ( $subString as $val ){
       if( strpos($val, "<a href=") !== FALSE ){
         $val = preg_replace("/.*<a\s+href=\"/sm","",$val);
         $val = preg_replace("/\".*/","",$val);
         $data[]['url'] = $val;
         #print $val."<br/>";


         $sql = 'INSERT INTO search_links(url) VALUES(:url)';
         $statement = $conn->prepare($sql);
         foreach($data as $row) {
            $statement->execute($row); 
         }
       }
   }
}
function deleteResultsBasedOnTime()
{
   global $conn;
   sql = 'DELETE FROM search_links';
   $statement = $conn->prepare($sql);
   $statement->execute($row); 
}

if(isset($_POST['crawl_button'])) {
   print_r($_POST);
    // Delete temporary stored results based on time
    deleteResultsBasedOnTime();

    // Crawl the home webpage
    crawlWebPage('https://en.wikipedia.org/wiki/Main_Page'); // Replace with your home webpage URL

    // Display the crawl results
    // displayCrawlResults()
}