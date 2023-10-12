<?php 

namespace app\Classes;
use app\Interface\ReceivedBlood;
use app\Traits\BloodTestingTrait;

class BloodBank implements ReceivedBlood
{
    use BloodTestingTrait;


    private $donors = [];
    public function receivedBlood(BloodDonor $donor)
    {
       $this->donors[] = $donor;
       echo "Blood Recive from Donor Name: " . $donor->getName() . "\n";
    }


    public function getDonorByBloodGroup($bloodGroup){
        
        $matchingDonors = [];

       foreach($this->donors as $donor){
           if($donor->getBloodGroup() === $bloodGroup){
               $matchingDonors[] = $donor;
           }
       }
       return $matchingDonors;
        
    }


    public function displayDonors(){
        echo "list of Blood Donors: \n";

        foreach($this->donors as $donor){
            $donor->displayDonorInfo();
            $this->testBloodGroup( $donor );
            

            echo "\n";
        }
    }
}