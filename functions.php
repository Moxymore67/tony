<?php
/**
 * FUNCTIONS
 */

/**
 * Dynamic generation of my age, taking into account my birthday
 */
function cvMyAge($date) { // Y-m-d format
    $now = explode("-", date('d-m-Y'));
    $dob = explode("-", $date);
    $dif = $now[2] - $dob[2];
    if ($dob[1] > $now[1]) { // birthday month has not hit this year
        $dif -= 1;
    }
    elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
        if ($dob[2] > $now[2]) {
            $dif -= 1;
        }
        elseif ($dob[2] == $now[2]) { // Happy Birthday!
            $dif=$dif;
        }
    }
    return $dif;
}

/**
 * Multiple spaces and new lines replaced with a single space
 */
function cvOneSpaceOnlyForString($string) {
    return preg_replace('/\s+/', ' ', trim($string));
}


/**
 * RSS Fetcher from httpx://www.quesacode.fr
 */
function cvRssFetch() {
    $rssObj = simplexml_load_file("https://www.quesacode.fr/feed/");
    foreach ($rssObj[0]->channel[0]->item as $item){
        $descArray = explode('<-|->', $item->description);
        $imgUrl = $descArray[0];
        $descText = $descArray[1]; ?>
        <a href="<?php echo $item->link; ?>" target="_blank">
            <figure class="single-img-container image-hover img-shadow-1">
                <?php echo cvOneSpaceOnlyForString('<img src="' . $imgUrl
                    . '" alt="Image de l\'article ' . $item->title . '">'); ?>
                <div class="anti-overlay">
                    <h3><?php echo $item->title; ?></h3>
                    <p class="date"><?php echo $item->pubDate; ?></p>
                </div>
                <div class="overlay">
                    <p><?php echo $descText; ?></p>
                </div>
            </figure>
        </a><?php
    }
}
