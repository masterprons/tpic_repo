<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "tpic_c";
$route['404_override'] = '';

//TPIC Projects
$route['tpic'] = "tpic_c";
$route['cele-saree'] = "celeSaree_c";
$route['scary-images'] = "scaryImages_c";
$route['car-wallpapers'] = "carWallpapers_c";
$route['bike-wallpapers'] = "bikeWallpapers_c";
$route['car-girls'] = "carGirls_c";
$route['bike-babes'] = "bikeBabes_c";
$route['bold-babes'] = "boldBabes_c";
$route['album-animals'] = "albumAnimals_c";
$route['beach-babes1'] = "beachBabes_c";
$route['setup_pr'] = "SetupPR_c";


// Cele Saree - Temp31Pics (URL: 31)
$route['cele-saree'] = "celeSaree_c";
$route['cele-saree/Priyamani-hot-sexy-saree-images'] = "celeSaree_c/pg1";
$route['cele-saree/actress-bhavana-photo-shoot-in-saree'] = "celeSaree_c/pg2";
$route['cele-saree/Actress-Bhama-New-Photoshoot-Stills-photoshoot'] = "celeSaree_c/pg3";
$route['cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-Saree'] = "celeSaree_c/pg4";
$route['cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-red-velvet-saree'] = "celeSaree_c/pg5";
$route['cele-saree/Shriya-Saran-Hot-backless-Stills-photoshoot'] = "celeSaree_c/pg6";
$route['cele-saree/Anushka-Shetty-backless-saree-photoshoot'] = "celeSaree_c/pg7";
$route['cele-saree/Shriya-Saran-Hot-backless-Stills-in-red-ghagara-and-blouse'] = "celeSaree_c/pg8";
$route['cele-saree/Vidya-Balan-hot-sexy-photoshoot'] = "celeSaree_c/pg9";
$route['cele-saree/Hot-sexy-Katrina-Kaif-in-pink-saree-and-blouse'] = "celeSaree_c/pg10";
$route['cele-saree/Anushka-Sharma-in-red-Saree-and-blouse'] = "celeSaree_c/pg11";
$route['cele-saree/Hot-sexy-Shriya-Saran-in-pink-saree-and-bouse'] = "celeSaree_c/pg12";
$route['cele-saree/Veena-Malik-hot-sexy-cleavage-in-yellow-blouse-and-saree'] = "celeSaree_c/pg13";
$route['cele-saree/Vidya-balan-in-pink-saree-and-blouse'] = "celeSaree_c/pg14";
$route['cele-saree/Priyanka-Kothari-wet-photo-in-white-saree'] = "celeSaree_c/pg15";
$route['cele-saree/Kajal-Agarwal-backless-saree-photo'] = "celeSaree_c/pg16";
$route['cele-saree/Anushka-Shetty-in-blue-saree'] = "celeSaree_c/pg17";
$route['cele-saree/Anushka-Shetty-Saree-Photoshoot'] = "celeSaree_c/pg18";
$route['cele-saree/Yami-Gautam-in-Orange-saree'] = "celeSaree_c/pg19";
$route['cele-saree/Anushka-Shetty-in-Indian-Bride-look-photo'] = "celeSaree_c/pg20";
$route['cele-saree/Madhurima-posing-in-light-pink-saree'] = "celeSaree_c/pg21";
$route['cele-saree/Kareena-Kapoor-Saree-Images'] = "celeSaree_c/pg22";
$route['cele-saree/Aishwarya-Rai-as-Indian-Bride'] = "celeSaree_c/pg23";
$route['cele-saree/Amisha-Patel-in-red-saree'] = "celeSaree_c/pg24";
$route['cele-saree/Rakul-Prit-Singh-in-red-saree'] = "celeSaree_c/pg25";
$route['cele-saree/Nayanthara-Saree-Photoshoot'] = "celeSaree_c/pg26";
$route['cele-saree/Mona-Lisa-in-red-saree'] = "celeSaree_c/pg27";
$route['cele-saree/Charmy-Kaur-in-red-saree'] = "celeSaree_c/pg28";
$route['cele-saree/Tamanna-Bhatia-in-saree'] = "celeSaree_c/pg29";
$route['cele-saree/Tollywood-Actress-Trisha-in-white-saree'] = "celeSaree_c/pg30";

// Scary Images - TempHP101Pics (URL: 101)
$route['scary-images'] = "scaryImages_c";
$route['scary-images/1'] = "scaryImages_c/pg1";
$route['scary-images/2'] = "scaryImages_c/pg2";
$route['scary-images/3'] = "scaryImages_c/pg3";
$route['scary-images/4'] = "scaryImages_c/pg4";
$route['scary-images/5'] = "scaryImages_c/pg5";
$route['scary-images/6'] = "scaryImages_c/pg6";
$route['scary-images/7'] = "scaryImages_c/pg7";
$route['scary-images/8'] = "scaryImages_c/pg8";
$route['scary-images/9'] = "scaryImages_c/pg9";
$route['scary-images/10'] = "scaryImages_c/pg10";
$route['scary-images/11'] = "scaryImages_c/pg11";
$route['scary-images/12'] = "scaryImages_c/pg12";
$route['scary-images/13'] = "scaryImages_c/pg13";
$route['scary-images/14'] = "scaryImages_c/pg14";
$route['scary-images/15'] = "scaryImages_c/pg15";
$route['scary-images/16'] = "scaryImages_c/pg16";
$route['scary-images/17'] = "scaryImages_c/pg17";
$route['scary-images/18'] = "scaryImages_c/pg18";
$route['scary-images/19'] = "scaryImages_c/pg19";
$route['scary-images/20'] = "scaryImages_c/pg20";
$route['scary-images/21'] = "scaryImages_c/pg21";
$route['scary-images/22'] = "scaryImages_c/pg22";
$route['scary-images/23'] = "scaryImages_c/pg23";
$route['scary-images/24'] = "scaryImages_c/pg24";
$route['scary-images/25'] = "scaryImages_c/pg25";
$route['scary-images/26'] = "scaryImages_c/pg26";
$route['scary-images/27'] = "scaryImages_c/pg27";
$route['scary-images/28'] = "scaryImages_c/pg28";
$route['scary-images/29'] = "scaryImages_c/pg29";
$route['scary-images/30'] = "scaryImages_c/pg30";
$route['scary-images/31'] = "scaryImages_c/pg31";
$route['scary-images/32'] = "scaryImages_c/pg32";
$route['scary-images/33'] = "scaryImages_c/pg33";
$route['scary-images/34'] = "scaryImages_c/pg34";
$route['scary-images/35'] = "scaryImages_c/pg35";
$route['scary-images/36'] = "scaryImages_c/pg36";
$route['scary-images/37'] = "scaryImages_c/pg37";
$route['scary-images/38'] = "scaryImages_c/pg38";
$route['scary-images/39'] = "scaryImages_c/pg39";
$route['scary-images/40'] = "scaryImages_c/pg40";
$route['scary-images/41'] = "scaryImages_c/pg41";
$route['scary-images/42'] = "scaryImages_c/pg42";
$route['scary-images/43'] = "scaryImages_c/pg43";
$route['scary-images/44'] = "scaryImages_c/pg44";
$route['scary-images/45'] = "scaryImages_c/pg45";
$route['scary-images/46'] = "scaryImages_c/pg46";
$route['scary-images/47'] = "scaryImages_c/pg47";
$route['scary-images/48'] = "scaryImages_c/pg48";
$route['scary-images/49'] = "scaryImages_c/pg49";
$route['scary-images/50'] = "scaryImages_c/pg50";


$route['scary-images/51'] = "scaryImages_c/pg51";
$route['scary-images/52'] = "scaryImages_c/pg52";
$route['scary-images/53'] = "scaryImages_c/pg53";
$route['scary-images/54'] = "scaryImages_c/pg54";
$route['scary-images/55'] = "scaryImages_c/pg55";
$route['scary-images/56'] = "scaryImages_c/pg56";
$route['scary-images/57'] = "scaryImages_c/pg57";
$route['scary-images/58'] = "scaryImages_c/pg58";
$route['scary-images/59'] = "scaryImages_c/pg59";
$route['scary-images/60'] = "scaryImages_c/pg60";
$route['scary-images/61'] = "scaryImages_c/pg61";
$route['scary-images/62'] = "scaryImages_c/pg62";
$route['scary-images/63'] = "scaryImages_c/pg63";
$route['scary-images/64'] = "scaryImages_c/pg64";
$route['scary-images/65'] = "scaryImages_c/pg65";
$route['scary-images/66'] = "scaryImages_c/pg66";
$route['scary-images/67'] = "scaryImages_c/pg67";
$route['scary-images/68'] = "scaryImages_c/pg68";
$route['scary-images/69'] = "scaryImages_c/pg69";
$route['scary-images/70'] = "scaryImages_c/pg70";
$route['scary-images/71'] = "scaryImages_c/pg71";
$route['scary-images/72'] = "scaryImages_c/pg72";
$route['scary-images/73'] = "scaryImages_c/pg73";
$route['scary-images/74'] = "scaryImages_c/pg74";
$route['scary-images/75'] = "scaryImages_c/pg75";
$route['scary-images/76'] = "scaryImages_c/pg76";
$route['scary-images/77'] = "scaryImages_c/pg77";
$route['scary-images/78'] = "scaryImages_c/pg78";
$route['scary-images/79'] = "scaryImages_c/pg79";
$route['scary-images/80'] = "scaryImages_c/pg80";
$route['scary-images/81'] = "scaryImages_c/pg81";
$route['scary-images/82'] = "scaryImages_c/pg82";
$route['scary-images/83'] = "scaryImages_c/pg83";
$route['scary-images/84'] = "scaryImages_c/pg84";
$route['scary-images/85'] = "scaryImages_c/pg85";
$route['scary-images/86'] = "scaryImages_c/pg86";
$route['scary-images/87'] = "scaryImages_c/pg87";
$route['scary-images/88'] = "scaryImages_c/pg88";
$route['scary-images/89'] = "scaryImages_c/pg89";
$route['scary-images/90'] = "scaryImages_c/pg90";
$route['scary-images/91'] = "scaryImages_c/pg91";
$route['scary-images/92'] = "scaryImages_c/pg92";
$route['scary-images/93'] = "scaryImages_c/pg93";
$route['scary-images/94'] = "scaryImages_c/pg94";
$route['scary-images/95'] = "scaryImages_c/pg95";
$route['scary-images/96'] = "scaryImages_c/pg96";
$route['scary-images/97'] = "scaryImages_c/pg97";
$route['scary-images/98'] = "scaryImages_c/pg98";
$route['scary-images/99'] = "scaryImages_c/pg99";
$route['scary-images/100'] = "scaryImages_c/pg100";


// Beach Babes 1 - TempBB100 (URL: 100)
$route['beach-babes1'] = "beachBabes1_c";
$route['beach-babes1/1'] = "beachBabes1_c/pg1";
$route['beach-babes1/2'] = "beachBabes1_c/pg2";
$route['beach-babes1/3'] = "beachBabes1_c/pg3";
$route['beach-babes1/4'] = "beachBabes1_c/pg4";
$route['beach-babes1/5'] = "beachBabes1_c/pg5";
$route['beach-babes1/6'] = "beachBabes1_c/pg6";
$route['beach-babes1/7'] = "beachBabes1_c/pg7";
$route['beach-babes1/8'] = "beachBabes1_c/pg8";
$route['beach-babes1/9'] = "beachBabes1_c/pg9";
$route['beach-babes1/10'] = "beachBabes1_c/pg10";
$route['beach-babes1/11'] = "beachBabes1_c/pg11";
$route['beach-babes1/12'] = "beachBabes1_c/pg12";
$route['beach-babes1/13'] = "beachBabes1_c/pg13";
$route['beach-babes1/14'] = "beachBabes1_c/pg14";
$route['beach-babes1/15'] = "beachBabes1_c/pg15";
$route['beach-babes1/16'] = "beachBabes1_c/pg16";
$route['beach-babes1/17'] = "beachBabes1_c/pg17";
$route['beach-babes1/18'] = "beachBabes1_c/pg18";
$route['beach-babes1/19'] = "beachBabes1_c/pg19";
$route['beach-babes1/20'] = "beachBabes1_c/pg20";
$route['beach-babes1/21'] = "beachBabes1_c/pg21";
$route['beach-babes1/22'] = "beachBabes1_c/pg22";
$route['beach-babes1/23'] = "beachBabes1_c/pg23";
$route['beach-babes1/24'] = "beachBabes1_c/pg24";
$route['beach-babes1/25'] = "beachBabes1_c/pg25";
$route['beach-babes1/26'] = "beachBabes1_c/pg26";
$route['beach-babes1/27'] = "beachBabes1_c/pg27";
$route['beach-babes1/28'] = "beachBabes1_c/pg28";
$route['beach-babes1/29'] = "beachBabes1_c/pg29";
$route['beach-babes1/30'] = "beachBabes1_c/pg30";
$route['beach-babes1/31'] = "beachBabes1_c/pg31";
$route['beach-babes1/32'] = "beachBabes1_c/pg32";
$route['beach-babes1/33'] = "beachBabes1_c/pg33";
$route['beach-babes1/34'] = "beachBabes1_c/pg34";
$route['beach-babes1/35'] = "beachBabes1_c/pg35";
$route['beach-babes1/36'] = "beachBabes1_c/pg36";
$route['beach-babes1/37'] = "beachBabes1_c/pg37";
$route['beach-babes1/38'] = "beachBabes1_c/pg38";
$route['beach-babes1/39'] = "beachBabes1_c/pg39";
$route['beach-babes1/40'] = "beachBabes1_c/pg40";
$route['beach-babes1/41'] = "beachBabes1_c/pg41";
$route['beach-babes1/42'] = "beachBabes1_c/pg42";
$route['beach-babes1/43'] = "beachBabes1_c/pg43";
$route['beach-babes1/44'] = "beachBabes1_c/pg44";
$route['beach-babes1/45'] = "beachBabes1_c/pg45";
$route['beach-babes1/46'] = "beachBabes1_c/pg46";
$route['beach-babes1/47'] = "beachBabes1_c/pg47";
$route['beach-babes1/48'] = "beachBabes1_c/pg48";
$route['beach-babes1/49'] = "beachBabes1_c/pg49";
$route['beach-babes1/50'] = "beachBabes1_c/pg50";

$route['beach-babes1/51'] = "beachBabes1_c/pg51";
$route['beach-babes1/52'] = "beachBabes1_c/pg52";
$route['beach-babes1/53'] = "beachBabes1_c/pg53";
$route['beach-babes1/54'] = "beachBabes1_c/pg54";
$route['beach-babes1/55'] = "beachBabes1_c/pg55";
$route['beach-babes1/56'] = "beachBabes1_c/pg56";
$route['beach-babes1/57'] = "beachBabes1_c/pg57";
$route['beach-babes1/58'] = "beachBabes1_c/pg58";
$route['beach-babes1/59'] = "beachBabes1_c/pg59";
$route['beach-babes1/60'] = "beachBabes1_c/pg60";
$route['beach-babes1/61'] = "beachBabes1_c/pg61";
$route['beach-babes1/62'] = "beachBabes1_c/pg62";
$route['beach-babes1/63'] = "beachBabes1_c/pg63";
$route['beach-babes1/64'] = "beachBabes1_c/pg64";
$route['beach-babes1/65'] = "beachBabes1_c/pg65";
$route['beach-babes1/66'] = "beachBabes1_c/pg66";
$route['beach-babes1/67'] = "beachBabes1_c/pg67";
$route['beach-babes1/68'] = "beachBabes1_c/pg68";
$route['beach-babes1/69'] = "beachBabes1_c/pg69";
$route['beach-babes1/70'] = "beachBabes1_c/pg70";
$route['beach-babes1/71'] = "beachBabes1_c/pg71";
$route['beach-babes1/72'] = "beachBabes1_c/pg72";
$route['beach-babes1/73'] = "beachBabes1_c/pg73";
$route['beach-babes1/74'] = "beachBabes1_c/pg74";
$route['beach-babes1/75'] = "beachBabes1_c/pg75";
$route['beach-babes1/76'] = "beachBabes1_c/pg76";
$route['beach-babes1/77'] = "beachBabes1_c/pg77";
$route['beach-babes1/78'] = "beachBabes1_c/pg78";
$route['beach-babes1/79'] = "beachBabes1_c/pg79";
$route['beach-babes1/80'] = "beachBabes1_c/pg80";
$route['beach-babes1/81'] = "beachBabes1_c/pg81";
$route['beach-babes1/82'] = "beachBabes1_c/pg82";
$route['beach-babes1/83'] = "beachBabes1_c/pg83";
$route['beach-babes1/84'] = "beachBabes1_c/pg84";
$route['beach-babes1/85'] = "beachBabes1_c/pg85";
$route['beach-babes1/86'] = "beachBabes1_c/pg86";
$route['beach-babes1/87'] = "beachBabes1_c/pg87";
$route['beach-babes1/88'] = "beachBabes1_c/pg88";
$route['beach-babes1/89'] = "beachBabes1_c/pg89";
$route['beach-babes1/90'] = "beachBabes1_c/pg90";
$route['beach-babes1/91'] = "beachBabes1_c/pg91";
$route['beach-babes1/92'] = "beachBabes1_c/pg92";
$route['beach-babes1/93'] = "beachBabes1_c/pg93";
$route['beach-babes1/94'] = "beachBabes1_c/pg94";
$route['beach-babes1/95'] = "beachBabes1_c/pg95";
$route['beach-babes1/96'] = "beachBabes1_c/pg96";
$route['beach-babes1/97'] = "beachBabes1_c/pg97";
$route['beach-babes1/98'] = "beachBabes1_c/pg98";
$route['beach-babes1/99'] = "beachBabes1_c/pg99";
$route['beach-babes1/100'] = "beachBabes1_c/pg100";


// Car Wallpapers - Temp50pics (URL: 51)
$route['car-wallpapers'] = "carWallpapers_c";
$route['car-wallpapers/Superb-Model-of-Car-in-yellow'] = "carWallpapers_c/pg1";
$route['car-wallpapers/Gray-Two-Seater-Car-Hd-Wallpaper'] = "carWallpapers_c/pg2";
$route['car-wallpapers/Cool-Car-Background-and-Wallpaper'] = "carWallpapers_c/pg3";
$route['car-wallpapers/Awesome-Blue-glossy-car-wallpaper'] = "carWallpapers_c/pg4";
$route['car-wallpapers/Fantastic-orange-black-racing-car-hd-wallpaper'] = "carWallpapers_c/pg5";
$route['car-wallpapers/Red-Glossy-shining-car-hd-wallpaper'] = "carWallpapers_c/pg6";
$route['car-wallpapers/Car-Image-Collection'] = "carWallpapers_c/pg7";
$route['car-wallpapers/Red-Farari-like-car-wallpaper'] = "carWallpapers_c/pg8";
$route['car-wallpapers/Awesome-Design-of-car-in-yellow-and-black-color'] = "carWallpapers_c/pg9";
$route['car-wallpapers/Classic-car-hd-wallpaper-for-pc'] = "carWallpapers_c/pg10";
$route['car-wallpapers/Black-car-wallpaper-at-premises'] = "carWallpapers_c/pg11";
$route['car-wallpapers/Red-glossy-car-hd-wallpapers'] = "carWallpapers_c/pg12";
$route['car-wallpapers/Cool-red-color-car-hd-wallpaper-in-night-background'] = "carWallpapers_c/pg13";
$route['car-wallpapers/Red-Color-running-car-wallpaper-in-motion'] = "carWallpapers_c/pg14";
$route['car-wallpapers/Silver-Color-open-roof-car-hd-wallpaper'] = "carWallpapers_c/pg15";
$route['car-wallpapers/TiseeJlKCI-Car-Model-hd-wallpaper'] = "carWallpapers_c/pg16";
$route['car-wallpapers/Autoracer-orange-car-hd-wallpaper'] = "carWallpapers_c/pg17";
$route['car-wallpapers/Orange-red-car-wallpaper'] = "carWallpapers_c/pg18";
$route['car-wallpapers/Black-car-demo-model-high-resolution-image'] = "carWallpapers_c/pg19";
$route['car-wallpapers/RC-908-car-hd-wallpaper'] = "carWallpapers_c/pg20";
$route['car-wallpapers/Car-hd-wallpaper-collection'] = "carWallpapers_c/pg21";
$route['car-wallpapers/Silver-Color-car-hd-wallpaper'] = "carWallpapers_c/pg22";
$route['car-wallpapers/Awesome-car-with-upper-flip-opening-door'] = "carWallpapers_c/pg23";
$route['car-wallpapers/Honda-sport-car-model-hd-wallpaper'] = "carWallpapers_c/pg24";
$route['car-wallpapers/1967-Pontiac-GTO-purpul-car-hd-wallpaper'] = "carWallpapers_c/pg25";
$route['car-wallpapers/High-resolution-red-car-wallpaper'] = "carWallpapers_c/pg26";
$route['car-wallpapers/White-gray-stylish-car-wallpaper'] = "carWallpapers_c/pg27";
$route['car-wallpapers/Black-car-with-golden-spark-color-image'] = "carWallpapers_c/pg28";
$route['car-wallpapers/White-Guini-car-hd-wallpaper-in-city-night-background'] = "carWallpapers_c/pg29";
$route['car-wallpapers/White-car-wallpaper-hd'] = "carWallpapers_c/pg30";
$route['car-wallpapers/Awesome-car-images-and-wallpaper'] = "carWallpapers_c/pg31";
$route['car-wallpapers/Sport-car-lamborghini-sesto-elemento-2013-model-hd-wallpaper'] = "carWallpapers_c/pg32";
$route['car-wallpapers/Unique-car-model-wallpaper'] = "carWallpapers_c/pg33";
$route['car-wallpapers/Beautiful-red-car-hd-wallpaper'] = "carWallpapers_c/pg34";
$route['car-wallpapers/Running-motion-car-hd-wallpaper'] = "carWallpapers_c/pg35";
$route['car-wallpapers/Black-brown-car-wallpaper'] = "carWallpapers_c/pg36";
$route['car-wallpapers/Orange-Dark-color-car-hd-wallpaper'] = "carWallpapers_c/pg37";
$route['car-wallpapers/Hot-yellow-car-wallpaper'] = "carWallpapers_c/pg38";
$route['car-wallpapers/Yelow-Car-Images'] = "carWallpapers_c/pg39";
$route['car-wallpapers/Graphical-Car-model-image'] = "carWallpapers_c/pg40";
$route['car-wallpapers/White-silver-car-wallpaper'] = "carWallpapers_c/pg41";
$route['car-wallpapers/Silver-white-open-roof-car-hd-wallpaper'] = "carWallpapers_c/pg42";
$route['car-wallpapers/Very-awesome-red-and-black-color-car-wallpaper'] = "carWallpapers_c/pg43";
$route['car-wallpapers/Stylish-orange-car-hd-wallpaper'] = "carWallpapers_c/pg44";
$route['car-wallpapers/hd-car-collection'] = "carWallpapers_c/pg45";
$route['car-wallpapers/Sport-cars-wallpapers'] = "carWallpapers_c/pg46";
$route['car-wallpapers/Graphic-car-wallpaper'] = "carWallpapers_c/pg47";
$route['car-wallpapers/Sport-Cars-images'] = "carWallpapers_c/pg48";
$route['car-wallpapers/Brown-purple-car-graphic-wallpaper'] = "carWallpapers_c/pg49";
$route['car-wallpapers/Awesome-blue-police-car-hd-wallpaper'] = "carWallpapers_c/pg50";


// Bike Wallpapers - Temp50pics (URL: 51)
$route['bike-wallpapers'] = "bikeWallpapers_c";
$route['bike-wallpapers/Bike-Wallpapers-for-Desktop'] = "bikeWallpapers_c/pg1";
$route['bike-wallpapers/Yamaha-bike-hd-wallpaper'] = "bikeWallpapers_c/pg2";
$route['bike-wallpapers/KTM-Electric-scooter-hd-wallpaper-for-pc'] = "bikeWallpapers_c/pg3";
$route['bike-wallpapers/Hd-bike-images'] = "bikeWallpapers_c/pg4";
$route['bike-wallpapers/MV-Agusta-brutale-wallpaper'] = "bikeWallpapers_c/pg5";
$route['bike-wallpapers/Awesome-bike-wallpapers'] = "bikeWallpapers_c/pg6";
$route['bike-wallpapers/Yamaha-Bike-collection'] = "bikeWallpapers_c/pg7";
$route['bike-wallpapers/Red-American-chopper-bike-wallpaper'] = "bikeWallpapers_c/pg8";
$route['bike-wallpapers/Thunder-chopper-wallpaper'] = "bikeWallpapers_c/pg9";
$route['bike-wallpapers/Yellow-honda-cbr-hd-images'] = "bikeWallpapers_c/pg10";
$route['bike-wallpapers/Honda-CB-900-hornet-bike-wallpaper'] = "bikeWallpapers_c/pg11";
$route['bike-wallpapers/Honda-CB-600-Hornet-bike-images'] = "bikeWallpapers_c/pg12";
$route['bike-wallpapers/Stylish-Bike-images'] = "bikeWallpapers_c/pg13";
$route['bike-wallpapers/Desktop-bike-wallpaper'] = "bikeWallpapers_c/pg14";
$route['bike-wallpapers/Heavy-bikes-images-and-wallpapers'] = "bikeWallpapers_c/pg15";
$route['bike-wallpapers/Awesome-chopper-bike-wallpaper'] = "bikeWallpapers_c/pg16";
$route['bike-wallpapers/Heavy-Stylish-ducati-images'] = "bikeWallpapers_c/pg17";
$route['bike-wallpapers/Golden-bike-hd-wallpapers'] = "bikeWallpapers_c/pg18";
$route['bike-wallpapers/Pulsar-Bikes-images'] = "bikeWallpapers_c/pg19";
$route['bike-wallpapers/Blue-honda-bike-image'] = "bikeWallpapers_c/pg20";
$route['bike-wallpapers/Honda-VTX-1800-bike-look-like-BMW'] = "bikeWallpapers_c/pg21";
$route['bike-wallpapers/Suzuki-Bikes-wallpapers'] = "bikeWallpapers_c/pg22";
$route['bike-wallpapers/Honda-VTR-racing-bike-wallpapers'] = "bikeWallpapers_c/pg23";
$route['bike-wallpapers/Honda-XL-230-Vintage-bike-wallpaper'] = "bikeWallpapers_c/pg24";
$route['bike-wallpapers/Honda-created-bike-look-like-BMW-Bike'] = "bikeWallpapers_c/pg25";
$route['bike-wallpapers/Kawasaki-Dirt-Bike-wallpapers'] = "bikeWallpapers_c/pg26";
$route['bike-wallpapers/HD-Bikes'] = "bikeWallpapers_c/pg27";
$route['bike-wallpapers/Latest-BMW-Scooter-images'] = "bikeWallpapers_c/pg28";
$route['bike-wallpapers/Ducati-748-hd-wallpapers'] = "bikeWallpapers_c/pg29";
$route['bike-wallpapers/Desktop-bike-wallpapers'] = "bikeWallpapers_c/pg30";
$route['bike-wallpapers/Sport-bike-images-and-wallpapers'] = "bikeWallpapers_c/pg31";
$route['bike-wallpapers/Motorcycle-Wallpapers'] = "bikeWallpapers_c/pg32";
$route['bike-wallpapers/Honda-CBR-1000-Wide-images-and-wallpapers'] = "bikeWallpapers_c/pg33";
$route['bike-wallpapers/Orange-bike-hd-wallpaper-pc-and-mobile'] = "bikeWallpapers_c/pg34";
$route['bike-wallpapers/Amazing-futeristic-bike-wallpapers'] = "bikeWallpapers_c/pg35";
$route['bike-wallpapers/Best-bike-wallpapers'] = "bikeWallpapers_c/pg36";
$route['bike-wallpapers/New-bike-launch-images'] = "bikeWallpapers_c/pg37";
$route['bike-wallpapers/Bike-wallpapers-and-images'] = "bikeWallpapers_c/pg38";
$route['bike-wallpapers/Suzuki-Bikes-wallpapers'] = "bikeWallpapers_c/pg39";
$route['bike-wallpapers/HOnda-Bikes-wallpapers'] = "bikeWallpapers_c/pg40";
$route['bike-wallpapers/BMW-Bike-wallpapers'] = "bikeWallpapers_c/pg41";
$route['bike-wallpapers/Free-BMW-images-and-wallpaeprs'] = "bikeWallpapers_c/pg42";
$route['bike-wallpapers/Cobra-Bike-wallpapers'] = "bikeWallpapers_c/pg43";
$route['bike-wallpapers/Latest-bike-designs-wallpapers'] = "bikeWallpapers_c/pg44";
$route['bike-wallpapers/KTM-1190-RC8-black-hd-wallpaper'] = "bikeWallpapers_c/pg45";
$route['bike-wallpapers/Hd-bike-and-car-wallpapers-and-images'] = "bikeWallpapers_c/pg46";
$route['bike-wallpapers/KTM-RC8-hd-wallpaper'] = "bikeWallpapers_c/pg47";
$route['bike-wallpapers/KTM-Sport-bikes-wallpapers'] = "bikeWallpapers_c/pg48";
$route['bike-wallpapers/Download-bike-images-and-wallpapers'] = "bikeWallpapers_c/pg49";
$route['bike-wallpapers/Free-download-bike-hd-images-and-hd-wallpapers'] = "bikeWallpapers_c/pg50";


// Car Girls - Temp50pics (URL: 51)
$route['car-girls'] = "carGirls_c";
$route['car-girls/1'] = "carGirls_c/pg1";
$route['car-girls/2'] = "carGirls_c/pg2";
$route['car-girls/3'] = "carGirls_c/pg3";
$route['car-girls/4'] = "carGirls_c/pg4";
$route['car-girls/5'] = "carGirls_c/pg5";
$route['car-girls/6'] = "carGirls_c/pg6";
$route['car-girls/7'] = "carGirls_c/pg7";
$route['car-girls/8'] = "carGirls_c/pg8";
$route['car-girls/9'] = "carGirls_c/pg9";
$route['car-girls/10'] = "carGirls_c/pg10";
$route['car-girls/11'] = "carGirls_c/pg11";
$route['car-girls/12'] = "carGirls_c/pg12";
$route['car-girls/13'] = "carGirls_c/pg13";
$route['car-girls/14'] = "carGirls_c/pg14";
$route['car-girls/15'] = "carGirls_c/pg15";
$route['car-girls/16'] = "carGirls_c/pg16";
$route['car-girls/17'] = "carGirls_c/pg17";
$route['car-girls/18'] = "carGirls_c/pg18";
$route['car-girls/19'] = "carGirls_c/pg19";
$route['car-girls/20'] = "carGirls_c/pg20";
$route['car-girls/21'] = "carGirls_c/pg21";
$route['car-girls/22'] = "carGirls_c/pg22";
$route['car-girls/23'] = "carGirls_c/pg23";
$route['car-girls/24'] = "carGirls_c/pg24";
$route['car-girls/25'] = "carGirls_c/pg25";
$route['car-girls/26'] = "carGirls_c/pg26";
$route['car-girls/27'] = "carGirls_c/pg27";
$route['car-girls/28'] = "carGirls_c/pg28";
$route['car-girls/29'] = "carGirls_c/pg29";
$route['car-girls/30'] = "carGirls_c/pg30";
$route['car-girls/31'] = "carGirls_c/pg31";
$route['car-girls/32'] = "carGirls_c/pg32";
$route['car-girls/33'] = "carGirls_c/pg33";
$route['car-girls/34'] = "carGirls_c/pg34";
$route['car-girls/35'] = "carGirls_c/pg35";
$route['car-girls/36'] = "carGirls_c/pg36";
$route['car-girls/37'] = "carGirls_c/pg37";
$route['car-girls/38'] = "carGirls_c/pg38";
$route['car-girls/39'] = "carGirls_c/pg39";
$route['car-girls/40'] = "carGirls_c/pg40";
$route['car-girls/41'] = "carGirls_c/pg41";
$route['car-girls/42'] = "carGirls_c/pg42";
$route['car-girls/43'] = "carGirls_c/pg43";
$route['car-girls/44'] = "carGirls_c/pg44";
$route['car-girls/45'] = "carGirls_c/pg45";
$route['car-girls/46'] = "carGirls_c/pg46";
$route['car-girls/47'] = "carGirls_c/pg47";
$route['car-girls/48'] = "carGirls_c/pg48";
$route['car-girls/49'] = "carGirls_c/pg49";
$route['car-girls/50'] = "carGirls_c/pg50";

// Bike Babes - Temp50pics (URL: 51)
$route['bike-babes'] = "bikeBabes_c";
$route['bike-babes/Bike-Babe-sexy-posing-hd-wallpaper-with-suzukin-bike'] = "bikeBabes_c/pg1";
$route['bike-babes/Girl-in-black-bikini-near-bike-hd-wallpaper'] = "bikeBabes_c/pg2";
$route['bike-babes/Three-hot-sexy-girls-washing-red-bike-in-black-bikini-together'] = "bikeBabes_c/pg3";
$route['bike-babes/Hot-slim-sexy-female-bike-rider-in-white-top-and-blue-tattered-style-jeans-on-bike-backside-view'] = "bikeBabes_c/pg4";
$route['bike-babes/Hot-sexy-undress-girl-slept-on-bike-holding-a-python-around-her-body'] = "bikeBabes_c/pg5";
$route['bike-babes/Black-and-white-hd-wallpaper-of-girl-bikini-bike-rider-with-stunt-sport-bike'] = "bikeBabes_c/pg6";
$route['bike-babes/Hot-sexy-girls-at-on-bike-hd-wallpaper'] = "bikeBabes_c/pg7";
$route['bike-babes/Hot-sexy-chopper-bike-girl-hd-wallpaper'] = "bikeBabes_c/pg8";
$route['bike-babes/Bike-babe-slept-on-bike-in-blue-bikini-hd-wallpaper'] = "bikeBabes_c/pg9";
$route['bike-babes/Hot-beautiful-sport-female-bike-rider-hd-wallpaper-from-front-view'] = "bikeBabes_c/pg10";
$route['bike-babes/Hot-sexy-girl-hd-wallpaper-on-red-ducati-bike'] = "bikeBabes_c/pg11";
$route['bike-babes/Very-hot-sexy-chopper-girls-in-tiny-bikini-with-bike'] = "bikeBabes_c/pg12";
$route['bike-babes/Blue-bike-with-blue-girl-hd-wallpaper'] = "bikeBabes_c/pg13";
$route['bike-babes/Supreb-bike-babe-model-posing-decent-hd-wallpaper'] = "bikeBabes_c/pg14";
$route['bike-babes/Hot-beautiful-bikini-girl-on-witor-bike-hd-wallpaper'] = "bikeBabes_c/pg15";
$route['bike-babes/Girl-in-black-top-and-skirt-posing-with-RCB-Bike'] = "bikeBabes_c/pg16";
$route['bike-babes/Norton-irl-in-white-top-and-blue-skirt-posing-with-bike-wallpaper'] = "bikeBabes_c/pg17";
$route['bike-babes/Hot-sexy-bike-babe-in-yellow-dress-lied-down-and-posing-with-suzuki-bike'] = "bikeBabes_c/pg18";
$route['bike-babes/Sexy-bikini-babe-with-bike'] = "bikeBabes_c/pg19";
$route['bike-babes/Mila-Kuns-hot-sexy-photoshoot-with-chopper-bike'] = "bikeBabes_c/pg20";
$route['bike-babes/Lucy-Falconer-sitting-posed-on-small-kids-toy-bike-in-yellow-bikini'] = "bikeBabes_c/pg21";
$route['bike-babes/Hot-sexy-skirt-girl-sensual-pose-with-bike-hd-wallpaper'] = "bikeBabes_c/pg22";
$route['bike-babes/Tire-Chopper-and-sexy-model-wallpaper'] = "bikeBabes_c/pg23";
$route['bike-babes/Chopper-black-bike-posing-by-sexy-female-model'] = "bikeBabes_c/pg24";
$route['bike-babes/Hot-sexy-babe-in-jacket-sat-on-bike-hd-wallpaper'] = "bikeBabes_c/pg25";
$route['bike-babes/Hot-sexy-topless-model-slept-on-red-Honda-CBR-1000-in-black-panty'] = "bikeBabes_c/pg26";
$route['bike-babes/Girl-in-helmet-on-bike-hd-wallpaper'] = "bikeBabes_c/pg27";
$route['bike-babes/Hot-bikini-model-photo-shoot-with-honda'] = "bikeBabes_c/pg28";
$route['bike-babes/Red-bikini-babe-with-red-bike-hd-wallpaper'] = "bikeBabes_c/pg29";
$route['bike-babes/Red dragon bike and-sexy-bike-babe-images'] = "bikeBabes_c/pg30";
$route['bike-babes/Hot-lingerie-girl-posing-with-bike'] = "bikeBabes_c/pg31";
$route['bike-babes/Black-bike-babe-on-black-bike-with-black-background-wallpaper'] = "bikeBabes_c/pg32";
$route['bike-babes/Bike-babe-posing-with-red-gilera-bike'] = "bikeBabes_c/pg33";
$route['bike-babes/Beautiful-white-girl-posing-with-sport-bike'] = "bikeBabes_c/pg34";
$route['bike-babes/Hot-bike-model-hd-wallpaper'] = "bikeBabes_c/pg35";
$route['bike-babes/Hot-sexy-bike-babe-image-collection'] = "bikeBabes_c/pg36";
$route['bike-babes/Hot-girl-in-pink-tshirt-with-bike'] = "bikeBabes_c/pg37";
$route['bike-babes/Girls-on-bike'] = "bikeBabes_c/pg38";
$route['bike-babes/Hot-spicy-bike-babe-pictures'] = "bikeBabes_c/pg39";
$route['bike-babes/Bikini-babes-on-bike-hd-wallpaper'] = "bikeBabes_c/pg40";
$route['bike-babes/Blonde-babes-with-bike-hd-image'] = "bikeBabes_c/pg41";
$route['bike-babes/Hot-posing-female-on-four-wheeler-bike'] = "bikeBabes_c/pg42";
$route['bike-babes/Hot-wet-girl-washing-bike-in-red-bikini'] = "bikeBabes_c/pg43";
$route['bike-babes/Female-model-posing-for-ducati-1098-hd-wallpaper'] = "bikeBabes_c/pg44";
$route['bike-babes/Chopper-girl-on-bike-in-bra-and-pant'] = "bikeBabes_c/pg45";
$route['bike-babes/exy-motorcycle-model-hd-pic'] = "bikeBabes_c/pg46";
$route['bike-babes/Chopper-bikini-bike-babe-wallpaper'] = "bikeBabes_c/pg47";
$route['bike-babes/3D-chopper-bike-babes'] = "bikeBabes_c/pg48";
$route['bike-babes/Blonde-bike-girl-images'] = "bikeBabes_c/pg49";
$route['bike-babes/Female-bike-sales-models-in-bike-shop-hd-photo'] = "bikeBabes_c/pg50";

// Bold Babes - Temp50pics (URL: 51)
$route['bold-babes'] = "boldBabes_c";
$route['bold-babes/1'] = "boldBabes_c/pg1";
$route['bold-babes/2'] = "boldBabes_c/pg2";
$route['bold-babes/3'] = "boldBabes_c/pg3";
$route['bold-babes/4'] = "boldBabes_c/pg4";
$route['bold-babes/5'] = "boldBabes_c/pg5";
$route['bold-babes/6'] = "boldBabes_c/pg6";
$route['bold-babes/7'] = "boldBabes_c/pg7";
$route['bold-babes/8'] = "boldBabes_c/pg8";
$route['bold-babes/9'] = "boldBabes_c/pg9";
$route['bold-babes/10'] = "boldBabes_c/pg10";
$route['bold-babes/11'] = "boldBabes_c/pg11";
$route['bold-babes/12'] = "boldBabes_c/pg12";
$route['bold-babes/13'] = "boldBabes_c/pg13";
$route['bold-babes/14'] = "boldBabes_c/pg14";
$route['bold-babes/15'] = "boldBabes_c/pg15";
$route['bold-babes/16'] = "boldBabes_c/pg16";
$route['bold-babes/17'] = "boldBabes_c/pg17";
$route['bold-babes/18'] = "boldBabes_c/pg18";
$route['bold-babes/19'] = "boldBabes_c/pg19";
$route['bold-babes/20'] = "boldBabes_c/pg20";
$route['bold-babes/21'] = "boldBabes_c/pg21";
$route['bold-babes/22'] = "boldBabes_c/pg22";
$route['bold-babes/23'] = "boldBabes_c/pg23";
$route['bold-babes/24'] = "boldBabes_c/pg24";
$route['bold-babes/25'] = "boldBabes_c/pg25";
$route['bold-babes/26'] = "boldBabes_c/pg26";
$route['bold-babes/27'] = "boldBabes_c/pg27";
$route['bold-babes/28'] = "boldBabes_c/pg28";
$route['bold-babes/29'] = "boldBabes_c/pg29";
$route['bold-babes/30'] = "boldBabes_c/pg30";
$route['bold-babes/31'] = "boldBabes_c/pg31";
$route['bold-babes/32'] = "boldBabes_c/pg32";
$route['bold-babes/33'] = "boldBabes_c/pg33";
$route['bold-babes/34'] = "boldBabes_c/pg34";
$route['bold-babes/35'] = "boldBabes_c/pg35";
$route['bold-babes/36'] = "boldBabes_c/pg36";
$route['bold-babes/37'] = "boldBabes_c/pg37";
$route['bold-babes/38'] = "boldBabes_c/pg38";
$route['bold-babes/39'] = "boldBabes_c/pg39";
$route['bold-babes/40'] = "boldBabes_c/pg40";
$route['bold-babes/41'] = "boldBabes_c/pg41";
$route['bold-babes/42'] = "boldBabes_c/pg42";
$route['bold-babes/43'] = "boldBabes_c/pg43";
$route['bold-babes/44'] = "boldBabes_c/pg44";
$route['bold-babes/45'] = "boldBabes_c/pg45";
$route['bold-babes/46'] = "boldBabes_c/pg46";
$route['bold-babes/47'] = "boldBabes_c/pg47";
$route['bold-babes/48'] = "boldBabes_c/pg48";
$route['bold-babes/49'] = "boldBabes_c/pg49";
$route['bold-babes/50'] = "boldBabes_c/pg50";


/* End of file routes.php */
/* Location: ./application/config/routes.php */