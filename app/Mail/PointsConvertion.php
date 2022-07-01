<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PointsConvertion extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $hospital_name;
     public $donor_name;
     public $donor_email;
     public $points_converted;
    public function __construct($hospital_name,$donor_name,$donor_email,$points_converted)
    {
        //

        $this->hospital_name = $hospital_name;
        $this->donor_name = $donor_name;
        $this->donor_email = $donor_email;
        $this->points_converted = $points_converted;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.conversion_points');
    }
}
