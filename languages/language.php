<?php
/**
 * USER'S BROWSER LANGUAGE
 *
 * With this file we retrieve the language of the user's browser in order to
 * display the correct tersion of the site. If the first 2 letters are of
 * $_SERVER['HTTP_ACCEPT_LANGUAGE'] are "fr", then we display the french
 * localization. Else, we display in english. Taking only the first 2 letters
 * allows us to choose fr for all variants : fr-FR, fr-BE, fr-CA...
 */
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($lang) {
    case 'fr':
        //French
        $lang_file = 'lang-FR.php';
        break;
    default:
        $lang_file = 'lang-EN.php';
}
include_once $lang_file;
?>