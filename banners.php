<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        
        'nameofBanner',
        'profilerName',
        'masterCounter',
        'dailyCounter',
        'description',
        'impressionsCounter',
        'status',
        'duration',
        'size',
        'bannerPlatform',
        'bannerType',
        'image_file'
     ];
}
