<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'title',
        'description',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'address1',
        'address2',
    ];

    // إذا كنت ترغب في استخدام التوقيت الزمني للنموذج، يمكنك إزالة هذا السطر
    public $timestamps = true;
}
