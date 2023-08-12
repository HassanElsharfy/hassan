<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Slider extends Model
{
    use HasFactory;
    use HasTranslations;

    // اسم الجدول في قاعدة البيانات
    protected $table = 'sliders';
    public $translatable = ['main_title', 'description', 'maintenance_button', 'materials_button', 'question'];



    protected $guarded = ['id'];

    // الأعمدة التي يمكن ملؤها بقيم
    protected $fillable = [
        'background',
        'logo',
        'main_title',
        'description',
        'maintenance_button',
        'maintenance_link',
        'materials_button',
        'materials_link',
        'question',
        'whatsapp_link',
        'tiktok_link',
        'snapcaht_link',
        'instagram_link',
        'youtube_link'
    ];
    // تاريخ إنشاء وتحديث السجل
    public $timestamps = true;
}
