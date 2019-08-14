<?php

$output = '';

if (isset($_POST['hashtag_text'])) {
    $tag_text = $_POST['hashtag_text'];
    
    function scrape_insta_hash($tag)
    {
        $insta_source = file_get_contents('https://www.instagram.com/explore/tags/' . $tag . '/'); // instagrame tag url
        $shards       = explode('window._sharedData = ', $insta_source);
        $insta_json   = explode(';</script>', $shards[1]);
        $insta_array  = json_decode($insta_json[0], TRUE);
        return $insta_array; // this return a lot things print it and see what else you need
    }
    
    $tag           = $tag_text;
    $results_array = scrape_insta_hash($tag);
    
    $limit = 9; // provide the limit thats important because one page only give some images then load more have to be clicked
    
    for ($i = $limit; $i >= 0; $i--) {
        if (array_key_exists($i, $results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]["edge_hashtag_to_media"]["edges"])) {
            $latest_array = $results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]["edge_hashtag_to_media"]["edges"][$i]["node"];
            
            $newPosting = $latest_array['display_url'];
        }
        foreach ((array) $newPosting as $row) {
            $output .= '             
         <div class="img-block"><img src=' . $row . '></img></div>';
        }
    }
}

?>