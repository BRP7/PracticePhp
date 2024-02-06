<?php
$age = 18;

// If Statement
if ($age >= 18) {
    echo "You are eligible to vote. <br>";
}

// If-Else Statement
$age = 16;

if ($age >= 18) {
    echo "You are eligible to vote. <br>";
} else {
    echo "You are not eligible to vote yet. <br>";
}

// If-Elseif-Else Statement
$age = 21;

if ($age < 18) {
    echo "You are underage. <br>";
} elseif ($age >= 18 && $age < 21) {
    echo "You are eligible to vote, but not allowed to drink.<br> ";
} else {
    echo "You are eligible to vote and allowed to drink. <br>";
}

// Nested If Statements
$isCitizen = true;
$isResident = true;

if ($isCitizen) {
    if ($isResident) {
        echo "You are a citizen and a resident.<br> ";
    } else {
        echo "You are a citizen but not a resident.<br> ";
    }
} else {
    echo "You are not a citizen.<br> ";
}

//Nested If

$age = 20;
$isCitizen = true;

// Nested If Statements for Vote Eligibility
if ($age >= 18) {
    // Person is 18 years or older
    echo "You are eligible to vote. <br>";

    // Nested If to check citizenship status
    if ($isCitizen) {
        // Person is a citizen
        echo "You are a citizen and can participate in the elections.";
    } else {
        // Person is not a citizen
        echo "You are not a citizen and cannot vote in the elections.";
    }
} else {
    // Person is under 18
    echo "You are not eligible to vote until you turn 18 years old.";
}




?>
