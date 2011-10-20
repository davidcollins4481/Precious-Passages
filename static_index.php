#!/usr/bin/php -q


<?php

if ($handle = opendir('application/views/static')) {
    
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
        if ($file == "." || $file == "..") {
            continue;
        }

        $start_delimiter = "<!-- unique -->";
        $end_delimiter   = "<!-- \/unique -->"; 

        $output = file_get_contents("application/views/static/" . $file);
    
        $flattened_file = flatten($output);
        
        preg_match("/$start_delimiter(.*)$end_delimiter/", $flattened_file, $matches);
        
        
        $content = $matches[1];
        
        // strip html
        $content = strip_tags($content);

        echo $file . "," . $content, "\n";
    }

    closedir($handle);
}


function flatten($string) {
  return (string)preg_replace(array("/\r/", "/\r\n/", "/\n/", "/\s\s+/"), '', $string);
}

?>
