<?php

// if (!function_exists("gettext")) {
//     echo "gettext is not installed\n";
// } else {
//     echo "gettext is installed\n";
// }

// if (isset($_GET["locale"])) {
//     $locale = $_GET["locale"];
// } elseif (isset($_SESSION["locale"])) {
//     $locale = $_SESSION["locale"];
// } else {
//     $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// }

session_start();

if (isset($_GET["locale"])) {
    $locale = $_GET["locale"];
} else if (isset($_SESSION["locale"])) {
    $locale = $_SESSION["locale"];
} else {
    $locale = "en_UK";
}
putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);

$domain = "en_US";
bindtextdomain($domain, "Locale");
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

echo _("환영합니다");

// the original of this code can be found on:
// http://www.mind-it.info/2010/02/22/a-simple-approach-to-localization-in-php/
// function localize($phrase)
// {
//     /* Static keyword is used to ensure the file is loaded only once */
//     static $translations = null;
//     if (is_null($translations)) {
//         $lang_file = 'lang/' . $_SESSION["locale"] . '.txt';
//         /* If no instance of $translations has occured load the language file */
//         if (!file_exists($lang_file)) {
//             $lang_file = 'lang/' . 'ko.txt';
//         }
//         $lang_file_content = file_get_contents($lang_file);
//         /* Load the language file as a JSON object
//         and transform it into an associative array */
//         $translations = json_decode($lang_file_content, true);
//     }
//     return $translations[$phrase];
// }

// print localize('INTRO') . localize('lang');
