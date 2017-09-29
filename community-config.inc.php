<?php
/**
* @author    Caspar Armster
* @copyright 2016 Caspar Armster, Freifunk Hennef/Freie Netzwerker e.V./Freifunk Lippe (www.freifunk-hennef.de / www.freie-netzwerker.de)
* @license   Licensed under GPLv3
*/

/** Texte für die 2 Stufige Auswahl einer Meta-Community.	^	
*/
    $texte = array(
        "ebene1_titel" => "Suchmethode",
        "ebene1_text" => "Bitte auswählen",
        "ebene2_titel" => "Auswahl Ort/Domäne",
        "ebene2_text" => "Bitte auswählen",
        "ebene3_titel" => "Firmware Downloader",
        "ebene3_text" => "Zur Firmware-Download Seite"
    );

/** Beispiel für eine einzelne Community. Das Array entkommentieren und ausfüllen, sowie das Array der Meta-Community löschen oder auskommentieren und der Downloader leitet dann automatisch direkt auf die Firmware Download Seite um.
*	$community = array(
*		0  => array(
*			"community_id" => 0,
*			"name" => "Freifunk Hennef",
*			"head_titel" => "Freifunk Hennef Firmware",
*			"head_text" => "Auf dieser Seite können Sie die passende Firmware für ihren Router in Hennef auswählen und herunterladen!",
*			"link_text" => "Zurück zur Startseite",
*			"link_url" => "http://www.freifunk-hennef.de/",
*			"logo_alt" => "Freifunk Hennef Logo",
*			"logo_url" => "images/Freifunk-logo-hennef-klein-200.png",
*			"lang_titel" => "Freifunk Hennef Firmware Auswahl",
*			"lang_text" => "Bitte suchen Sie den passenden Router aus, indem Sie den Hersteller, das Modell und die Version auswählen.<br />Legen Sie anschließend fest, ob sie den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wählen Sie -stable- im Entwicklungsstadium aus, wenn Sie nicht genau wissen was Sie sonst erwartet!",
*			"download_path" => "",
*			"sub_auswahl" => ""
*		)
*	);
*/

/** Beispiel für eine Meta-Community.
*/
    $community = array(
        0  => array(
            "community_id" => 0,
            "name" => "Freifunk Lippe",
            "head_titel" => "Freifunk Lippe Firmware-Wizard",
            "head_text" => "Auf dieser Seite kannst du die passende Firmware für deinen Router auswählen.",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte wähle zuerst die 'Suchmethode' aus. Du kannst zwischen dem Standard 'Nach Ortsnamen' und für Fortgeschrittene 'Nach Netzwerk-Domänen' wählen.<br /> Unter 'Auswahl Ort/Domäne' kannst du dann weiter fortfahren.<br /><br />Die gewählte Suchmethode macht keinen Unterschied zur Firmware, es ist lediglich eine andere Gliederung.<br /><br />Solltest Du Deinen Ort in der Liste nicht finden können, so wähle bitte einfach den nächstgelegenen Ort aus.",
            "download_path" => "",
            "sub_auswahl" => ""
        ),
        1  => array(
            "community_id" => 1,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Augustdorf"
        ),
        2  => array(
            "community_id" => 2,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d1/lip/",
            "sub_auswahl" => "Blomberg"
        ),
        3  => array(
            "community_id" => 3,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d4/lip/",
            "sub_auswahl" => "Bad Salzuflen"
        ),
        4  => array(
            "community_id" => 4,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Barntrup"
        ),
        5  => array(
            "community_id" => 5,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Dörentrup"
        ),
        6  => array(
            "community_id" => 6,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Detmold"
        ),
        7  => array(
            "community_id" => 7,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Extertal"
        ),
        8  => array(
            "community_id" => 8,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Horn- Bad Meinberg"
        ),
        9  => array(
            "community_id" => 9,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Kalletal"
        ),
        10  => array(
            "community_id" => 10,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Lage"
        ),
        11  => array(
            "community_id" => 11,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Lemgo"
        ),
        12 => array(
            "community_id" => 12,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d1/lip/",
            "sub_auswahl" => "Lügde"
        ),
        13  => array(
            "community_id" => 13,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d4/lip/",
            "sub_auswahl" => "Leopoldshöhe"
        ),
        14  => array(
            "community_id" => 14,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d4/lip/",
            "sub_auswahl" => "Oerlinghausen"
        ),
        15  => array(
            "community_id" => 15,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Schlangen"
        ),
        16  => array(
            "community_id" => 16,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d1/lip/",
            "sub_auswahl" => "Schieder-Schwalenberg"
        ),
        17  => array(
            "community_id" => 17,
            "name" => "Nach Ortsnamen",
            "head_titel" => "Nach Ortsnamen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d1/lip/",
            "sub_auswahl" => "Steinheim"
        ),
        18  => array(
            "community_id" => 18,
            "name" => "Nach Netzwerk-Domänen",
            "head_titel" => "Nach Netzwerk-Domänen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d1/lip/",
            "sub_auswahl" => "Domäne 1"
        ),
        19  => array(
            "community_id" => 19,
            "name" => "Nach Netzwerk-Domänen",
            "head_titel" => "Nach Netzwerk-Domänen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d2/lip/",
            "sub_auswahl" => "Domäne 2"
        ),
        20  => array(
            "community_id" => 20,
            "name" => "Nach Netzwerk-Domänen",
            "head_titel" => "Nach Netzwerk-Domänen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d3/lip/",
            "sub_auswahl" => "Domäne 3"
        ),
        21  => array(
            "community_id" => 21,
            "name" => "Nach Netzwerk-Domänen",
            "head_titel" => "Nach Netzwerk-Domänen",
            "head_text" => "Auf dieser Seite kannst Du die passende Firmware für deinen Router in Lippe auswählen und herunterladen!",
            "link_text" => "Zurück zur Startseite",
            "link_url" => "http://firmware-wizard.freifunk-lippe.de/",
            "logo_alt" => "Freifunk Lippe Logo",
            "logo_url" => "images/FF-Lippe-Hermann-Slim-11.2-reduced.png",
            "lang_titel" => "Freifunk Lippe Firmware",
            "lang_text" => "Bitte suche dir den passenden Router aus, indem du den Hersteller, das Modell und die Version auswählst.<br />Lege anschließend fest, ob du den Router zum ersten Mal mit einer Freifunk Firmware flashen und welches Entwicklungsstadium die Firmware haben soll.<br /><br />Bitte wähle -Stable- im Entwicklungsstadium aus!",
            "download_path" => "./download/images/d4/lip/",
            "sub_auswahl" => "Domäne 4"
        )
    );
