<?php 

use app\Classes\BloodBank;
use app\Classes\VolunteerDonor;
use app\Classes\ProfessionalDonor;

include 'autoloader.php';

$donor1 = new VolunteerDonor("Alice", "A+", 25);
$donor2 = new VolunteerDonor("Bob", "B-", 30);
$donor3 = new ProfessionalDonor("Charlie", "O+", 35);


$bloodBank = new BloodBank();

$bloodBank->receivedBlood($donor1);
$bloodBank->receivedBlood($donor2);
$bloodBank->receivedBlood($donor3);


echo "\n";
// Display donor information and perform blood tests
$bloodBank->displayDonors();

// Get donors by blood group
echo "Donors with Blood Group A+:\n";

$aPlusDonors = $bloodBank->getDonorByBloodGroup( "A+" );

foreach( $aPlusDonors as $donor ){
    $donor->displayDonorInfo();
}

// Demonstration of polymorphism

echo "polymorphism\n";

$donors = [$donor1, $donor2, $donor3];

foreach( $donors as $donor ){
    $donor->donateBlood();
}