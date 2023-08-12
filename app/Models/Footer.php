<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    protected $fillable = [
        'logo',
        'description',
        'link_down',
        'link_contact',
        'address',
        'image',
        'link1',
        'link2',
        'link3',
        'link4',
        'link5',
        'link6',
        'link7',
    ];

    // إذا كنت ترغب في استخدام التوقيت الزمني للنموذج، يمكنك إزالة هذا السطر
    public $timestamps = true;
}