<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$sports = array(
    array(
        "id" => 1,
        "name" => "Volleyball",
        "team" => "Creamline Cool Smashers",
        "coach" => "Sherwin Meneses",
        "arena" => "Mall of Asia Arena",
        "championships" => "4 Championship"
    ),
    array(
        "id" => 2,
        "name" => "Basketball",
        "team" => "Barangay Ginebra San Miguel",
        "coach" => "Tim Cone",
        "arena" => "Smart Araneta Coliseum",
        "championships" => "13 Championship"
    ),
    array(
        "id" => 3,
        "name" => "Soccer",
        "team" => "Azkals Development Team",
        "coach" => "Scot Cooper",
        "arena" => "National Training Center (Carmona, Cavite)",
        "championships" => "has not yet won any international championships"
    ),
    array(
        "id" => 4,
        "name" => "Water Polo",
        "team" => "Ateneo Blue Tankers Team",
        "coach" => "Randy Dizon",
        "arena" => "Rizal Memorial Sports Complex",
        "championships" => "9 Championship"
    ),
    array(
        "id" => 5,
        "name" => "Hockey",
        "team" => "Philippine Ice Hockey Team",
        "coach" => "Daniel Brodan",
        "arena" => "MOA Ice Skating Rink (Pasay City)",
        "championships" => "has not yet won any international championships"
    )
);

echo json_encode($sports);
?>