<?php



$list = array(
    "https://idfg.idaho.gov/d7/sites/all/themes/bison/2.1/css/bison.css",
    "https://idfg.idaho.gov/d7/sites/all/themes/bison/2.1/js/login-menu.min.js",
    "https://idfg.idaho.gov/d7/sites/all/themes/bison/logo.png",
    "https://idfg.idaho.gov/d7/sites/all/themes/bison/shield.png",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/idaho-mtn-white.png",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/usa-map.svg",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/footer-bg.svg",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/idaho-mtn-white.png",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/usa-map.svg",
    "https://idfg.idaho.gov/d7/sites/all/themes/burbot/img/footer-bg.svg",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/twitter.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/youtube.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/flickr.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/rss.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyHuntPlanner.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyFishPlanner.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinySoldHere.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyHuntEd.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/HunterReportLogo64px.svg",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyIFWF.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/ConservationBadge.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/ifwis_roadkill.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyVolunteer.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/youtube.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/rss.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinySoldHere.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/flickr.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/twitter.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyHuntPlanner.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyHuntEd.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/HunterReportLogo64px.svg",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyIFWF.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyVolunteer.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/ifwis_roadkill.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/ConservationBadge.png",
    "https://idfg.idaho.gov/d7/sites/all/modules/custom/idfg_components/images/tinyFishPlanner.png",
);




foreach($list as $item) {
    $url = $item;
    $item = parse_url($item);
    $items = explode("/", $item['path']);
    $assets = array_pop($items);
    $path = implode("/", $items);
    if (!is_dir("./" . $path)) {
        mkdir("./" . $path, 0777, true);
    }

    $file_name = basename($url);
    if (file_put_contents( "./" . $path . "/" . $file_name, file_get_contents($url))) {
        echo $file_name . " downloaded successfully. <br/>";
    } else {
        echo $file_name . " downloading failed. <br/>";
    }
}

