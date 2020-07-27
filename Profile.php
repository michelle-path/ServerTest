<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        
        'username',
        'password',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'zip'
     ];
}
