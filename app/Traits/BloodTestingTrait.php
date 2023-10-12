<?php 
namespace app\Traits;

use app\Classes\BloodDonor;

trait BloodTestingTrait{


    public function testBloodGroup(BloodDonor $donor){
        
        echo "Blood Group: " . $donor->getBloodGroup() . "\n";
        echo "Name: " . $donor->getName() . "\n";
        echo "Result:  Blood Group is Suitable". "\n";
        
    }
}