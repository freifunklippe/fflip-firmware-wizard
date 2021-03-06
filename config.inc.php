<?php
/**
* @author    Caspar Armster
* @copyright 2016 Caspar Armster, Freifunk Hennef/Freie Netzwerker e.V. (www.freifunk-hennef.de / www.freie-netzwerker.de)
* @license   Licensed under GPLv3
*/

    $entwicklung = array(
        "beta",
        "broken",
        "experimental",
        "stable"
    );
    $installation = array(
        "factory",
        "sysupgrade"
    );

    for ($i = 0; $i < count($entwicklung); $i++) {
        for ($j = 0; $j < count($installation); $j++) {
            $variante[$entwicklung[$i]][$installation[$j]] = 0;
        }
    }

    $hersteller = array(
        array(
            "name" => "8devices",
            "filename" => "8devices",
            "offset_modell" => 9,
            "offset_version" => 4
        ),
        array(
            "name" => "Alfa",
            "filename" => "alfa",
            "offset_modell" => 5,
            "offset_version" => 4
        ),
        array(
            "name" => "Allnet",
            "filename" => "allnet",
            "offset_modell" => 7,
            "offset_version" => 4
        ),
        array(
            "name" => "Buffalo",
            "filename" => "buffalo",
            "offset_modell" => 8,
            "offset_version" => 4
        ),
        array(
            "name" => "D-Link",
            "filename" => "d-link",
            "offset_modell" => 7,
            "offset_version" => -1
        ),
        array(
            "name" => "GL-Inet",
            "filename" => "-gl-",
            "offset_modell" => 3,
            "offset_version" => 4
        ),
        array(
            "name" => "GL-Inet (alt)",
            "filename" => "gl-inet",
            "offset_modell" => 8,
            "offset_version" => -1
        ),
        array(
            "name" => "LeMaker",
            "filename" => "lemaker",
            "offset_modell" => 8,
            "offset_version" => 4
        ),
        array(
            "name" => "Linksys",
            "filename" => "linksys",
            "offset_modell" => 8,
            "offset_version" => 4
        ),
        array(
            "name" => "Meraki",
            "filename" => "meraki",
            "offset_modell" => 7,
            "offset_version" => 4
        ),
        array(
            "name" => "Netgear",
            "filename" => "netgear",
            "offset_modell" => 8,
            "offset_version" => 4
        ),
        array(
            "name" => "Onion",
            "filename" => "onion",
            "offset_modell" => 6,
            "offset_version" => 4
        ),
        array(
            "name" => "Openmesh",
            "filename" => "openmesh",
            "offset_modell" => 9,
            "offset_version" => 4
        ),
        array(
            "name" => "TP-Link",
            "filename" => "tp-link",
            "offset_modell" => 8,
            "offset_version" => -1
        ),
        array(
            "name" => "Ubiquiti",
            "filename" => "ubiquiti",
            "offset_modell" => 9,
            "offset_version" => 4
        ),
        array(
            "name" => "Western Digital",
            "filename" => "-wd-",
            "offset_modell" => 3,
            "offset_version" => 4
        )
    );
    $anzahl_hersteller = count($hersteller);

    $offset_sysupgrade = array(
        0 => 0,
        1 => 11
    );
