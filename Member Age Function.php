<?php
function Agecalc($dateOfBirth) {
    $birthDate = new DateTime($dateOfBirth);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;
    return $age;
}
?>
