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
        $search = array ("'<script[^>]*?>.*?</script>'si",  // Strip out javascript 
                 "'<[/!]*?[^<>]*?>'si",          // Strip out HTML tags 
                 "'([rn])[s]+'",                // Strip out white space 
                 "'&(quot|#34);'i",                // Replace HTML entities 
                 "'&(amp|#38);'i", 
                 "'&(lt|#60);'i", 
                 "'&(gt|#62);'i", 
                 "'&(nbsp|#160);'i", 
                 "'&(iexcl|#161);'i", 
                 "'&(cent|#162);'i", 
                 "'&(pound|#163);'i", 
                 "'&(copy|#169);'i",
                 "'&#(d+);'e"); 

            $replace = array ("", 
                 "", 
                 "\1", 
                 "\"", 
                 "&", 
                 "<", 
                 ">", 
                 " ", 
                 chr(161), 
                 chr(162), 
                 chr(163), 
                 chr(169), 
                 "chr(\1)"); 

        
        $content = preg_replace($search, $replace, $content);

        echo $content;        
    }

    closedir($handle);
}


function flatten($string) {
  return (string)preg_replace(array("/\r/", "/\r\n/", "/\n/", "/\s\s+/"), '', $string);
}

?>
