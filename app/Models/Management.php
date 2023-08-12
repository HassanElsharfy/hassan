<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table = 'management';
    protected $fillable = [
        'main_title',
        'description',
        'logo',
        'logo_title',
        'short_title_logo',
        'long_title_logo',
        'images',
        'email',
        'phone',
        'link1',
        'link2',
    ];

    // إذا كنت ترغب في استخدام التوقيت الزمني للنموذج، يمكنك إزالة هذا السطر
    public $timestamps = true;
}