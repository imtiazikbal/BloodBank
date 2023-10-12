<?php 

namespace app\Interface;

use app\Classes\BloodDonor;

interface ReceivedBlood
{
    public function receivedBlood(BloodDonor $donor);
}