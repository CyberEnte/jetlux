<?php
// CORS-Header erlauben Zugriff von anderen Ursprüngen
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, OPTIONS");
$jets = [
    [
        "name" => "Gulfstream G700",
        "manufacturer" => "Gulfstream Aerospace",
        "range_km" => 13890,
        "speed_mach" => 0.925,
        "capacity" => 19,
        "price" => number_format(750000000, 2, ',', '.'),
        "pros" => "Modernste Technologie, Reichweite, Luxus",
        "cons" => "Sehr teuer",
        "image" => "/backend/images/gulfstream_g700_exterior.jpg"
    ],
    [
        "name" => "Bombardier Global 7500",
        "manufacturer" => "Bombardier",
        "range_km" => 14260,
        "speed_mach" => 0.925,
        "capacity" => 19,
        "price" => number_format(730000000, 2, ',', '.'),
        "pros" => "Rekordreichweite, Kabinenkomfort",
        "cons" => "Hohe Betriebskosten",
        "image" => "/backend/images/global7500.jpg"
    ],
    [
        "name" => "Dassault Falcon 10X",
        "manufacturer" => "Dassault Aviation",
        "range_km" => 13900,
        "speed_mach" => 0.925,
        "capacity" => 19,
        "price" => number_format(7500000000, 2, ',', '.'),
        "pros" => "Größter Innenraum seiner Klasse, französisches Design",
        "cons" => "Noch nicht ausgeliefert (Einführung 2025)",
        "image" => "/backend/images/falcon_10x.jpg"
    ],
    [
        "name" => "Embraer Praetor 600",
        "manufacturer" => "Embraer",
        "range_km" => 7441,
        "speed_mach" => 0.83,
        "capacity" => 12,
        "price" => number_format(210000000, 2, ',', '.'),
        "pros" => "Sehr effizient, modernes Cockpit, gute Reichweite",
        "cons" => "Nicht für interkontinentale Strecken",
        "image" => "/backend/images/praetor_600.jpg"
    ],
    [
        "name" => "Cessna Citation Longitude",
        "manufacturer" => "Textron Aviation",
        "range_km" => 6482,
        "speed_mach" => 0.84,
        "capacity" => 12,
        "price" => number_format(280000000, 2, ',', '.'),
        "pros" => "Zuverlässig, gute Kosten-Nutzen-Relation, solide Technik",
        "cons" => "Etwas kleiner als Konkurrenz",
        "image" => "/backend/images/citation_longitude.jpg"
    ],
    [
        "name" => "HondaJet Elite II",
        "manufacturer" => "Honda Aircraft Company",
        "range_km" => 2625,
        "speed_mach" => 0.65,
        "capacity" => 5,
        "price" => number_format(6895000.95, 2, ',', '.'),
        "pros" => "Kompakt, leise, innovatives Flügeldesign",
        "cons" => "Sehr kleine Kabine, keine Stehhöhe",
        "image" => "/backend/images/hondajet_elite_ii.jpg"
    ],
    [
        "name" => "Pilatus PC-24",
        "manufacturer" => "Pilatus Aircraft (Schweiz)",
        "range_km" => 3700,
        "speed_mach" => 0.74,
        "capacity" => 8,
        "price" => number_format(11000000, 2, ',', '.'),
        "pros" => "Startet auf unbefestigten Pisten, robust, sehr flexibel",
        "cons" => "Langsamer als andere Jets, kleinere Kabine",
        "image" => "/backend/images/pilatus_pc24.jpg"
    ],
    [
        "name" => "Learjet 75 Liberty",
        "manufacturer" => "Bombardier",
        "range_km" => 3778,
        "speed_mach" => 0.81,
        "capacity" => 8,
        "price" => number_format(90000000, 2, ',', '.'),
        "pros" => "Kompakt, schnelle Steigrate, bekanntes Markenmodell",
        "cons" => "Produktion eingestellt seit 2021",
        "image" => "/backend/images/learjet_75.jpg"
    ],
    [
        "name" => "Beechcraft King Air 360",
        "manufacturer" => "Textron Aviation",
        "range_km" => 3345,
        "speed_mach" => 0.52,
        "capacity" => 9,
        "price" => number_format(8000000, 2, ',', '.'),
        "pros" => "Robust, kurze Startstrecke, bewährt seit Jahrzehnten",
        "cons" => "Propellerflugzeug, langsamer als Jets",
        "image" => "/backend/images/king_air_360.jpg"
    ],
    [
        "name" => "Airbus ACJ TwoTwenty",
        "manufacturer" => "Airbus Corporate Jets",
        "range_km" => 10500,
        "speed_mach" => 0.82,
        "capacity" => 18,
        "price" => number_format(80000000, 2, ',', '.'),
        "pros" => "Extrem viel Platz, VIP-Ausstattung auf Linienfliegerbasis",
        "cons" => "Sehr groß, teure Wartung, hoher Treibstoffverbrauch",
        "image" => "/backend/images/acj_twowenty.jpg"
    ]
];

echo json_encode($jets, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>