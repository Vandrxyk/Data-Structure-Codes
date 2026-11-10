<?php

$profiles = [
    ["id" => 1, "Name" => "Kiel"],
    ["id" => 2, "Course" => "BSIS"],
    ["id" => 3, "Student Number" => 260457]
];

$json = json_encode($profiles);

echo "Student Name : " . $profiles[0]["Name"] . "<br>";
echo "Course : " . $profiles[1]["Course"] . "<br>";
echo "Student Name : " . $profiles[2]["Student Number"] . "<br>";

