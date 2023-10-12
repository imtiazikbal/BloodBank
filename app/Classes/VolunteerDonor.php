<?php 


namespace app\Classes;

use app\Classes\BloodDonor;

class VolunteerDonor extends BloodDonor
{
   public function donateBlood(){
       echo "Donating Blood\n";
   }
}