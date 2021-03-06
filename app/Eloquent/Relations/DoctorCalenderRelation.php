<?php
namespace App\Eloquent\Relations;

use App\Eloquent\DoctorCalender;
use App\Eloquent\User;

trait DoctorCalenderRelation
{
    public function doctor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
