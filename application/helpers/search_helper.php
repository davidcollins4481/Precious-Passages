<?php if (!defined('BASEPATH')) exit('No direct script access allowed.');

function contextualize_results($results, $search_term, $url_prefix = "") {
    $processed_results = array();

    $more_indicator = '[...]';

    foreach ($results as $result) {
        $entry = $result->entry;
        $point = strpos($entry, $search_term);

        if ($point) {
            $length = strlen($entry);

            $count_from_start = $length - ($length - $point);

            // how many chars in front and back to be shown
            /*
             * This logic is a bit of a disaster
             */
            $context_length = 200;
            $start;
            $end;

            if ($count_from_start - ($context_length/2) < 0) {
                $start = 0;
                $end = $point + strlen($search_term) + ($context_length / 2);
            } else if ($point + strlen($search_term) + ($context_length/2) >= $length) {
                $distance_to_end = $point + strlen($search_term) + ($context_length/2) - $length;
                $start = $point - ($context_length/2) + $distance_to_end;
                $end = $length;
            } else {
                $start = $point - ($context_length/2);
                $end = $point + strlen($search_term) + ($context_length/2);
            }

            $context = substr($entry, $start, $end - $start);

            if ($start > 0) {
                $context = $more_indicator . $context;
            }

            if ($end < $length) {
                $context = $context . $more_indicator;
            }

            array_push($processed_results, array(
                'url'             => $url_prefix . $result->url_title,
                'title'           => $result->title,
                'context_segment' => $context
            ));
        }
    }
    
    return $processed_results;

}

?>
