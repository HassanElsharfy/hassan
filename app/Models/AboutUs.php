<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    protected $fillable = [
        'main_title',
        'description',
        'address',
        'images',
    ];

    // إذا كنت ترغب في استخدام التوقيت الزمني للنموذج، يمكنك إزالة هذا السطر
    public $timestamps = true;
}