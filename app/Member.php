<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'cnic', 'mobile_no', 'referal_cnic', 'transaction_detail', 'hostel_registration_no'];
}
