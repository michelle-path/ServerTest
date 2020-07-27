<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimator extends Model
{
    protected $table = 'estimators';

    protected $fillable = [
        'user',
        'isflooring',
        'flooringtype',
        'iswindows',
        'windowcount',
        'isdoor',
        'isappliances',
        'appliancetype1',
        'appliancetype2',
        'appliancetype3',
        'appliancetype4',
        'appliancetype5'
     ];
}