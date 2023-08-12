<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        //
        $sliders= Slider::all();

        return view('slider.index', compact('sliders'));
    }

    public function create()
    {
        //
        return view('slider.create');
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        // $this->validate($request, [
        //     'main_title' => 'required',
        //     'description' => 'required',
        //     'maintenance_button' => 'required',
        //     'maintenance_link' => 'required',
        //     'materials_button' => 'required',
        //     'materials_link' => 'required',
        //     'question' => 'required',
        //     'whatsapp_link' => 'required',
        //     'tiktok_link' => 'required',
        //     'snapcaht_link' => 'required',
        //     'instagram_link' => 'required',
        //     'youtube_link' => 'required',
        //     'background' => 'required|mimes:jpg,jpeg,png',
        //     'logo' => 'required|mimes:jpg,jpeg,png',
        // ]);

        // معالجة رفع الملفات
        if ($request->hasfile('background')) {
            $backgroundFile = $request->file('background');
            $backgroundName = uniqid() . '.' . $backgroundFile->getClientOriginalExtension();
            $backgroundFile->move(public_path() . '/filebackgrounds/', $backgroundName);
        }

        if ($request->hasfile('logo')) {
            $logoFile = $request->file('logo');
            $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path() . '/filelogos/', $logoName);
        }

        // حفظ البيانات في قاعدة البيانات
        $slider = new Slider([
            'main_title' => [
                'ar' => request('ar')['main_title'],
                'en' => request('en')['main_title'],
            ],
            'description' => [
                'ar' => request('ar')['description'],
                'en' => request('en')['description'],
            ],
            'maintenance_button' => [
                'ar' => request('ar')['maintenance_button'],
                'en' => request('en')['maintenance_button'],
            ],
            'materials_button' => [
                'ar' => request('ar')['materials_button'],
                'en' => request('en')['materials_button'],
            ],
            'question' => [
                'ar' => request('ar')['question'],
                'en' => request('en')['question'],
            ],
            'maintenance_link' => $request->get('maintenance_link'),
            'materials_link' => $request->get('materials_link'),
            'whatsapp_link' => $request->get('whatsapp_link'),
            'tiktok_link' => $request->get('tiktok_link'),
            'snapcaht_link' => $request->get('snapcaht_link'),
            'instagram_link' => $request->get('instagram_link'),
            'youtube_link' => $request->get('youtube_link'),
            'background' => $backgroundName,
            'logo' => $logoName,
        ]);

        // حفظ الكائن في قاعدة البيانات
        $slider->save();


        if ($slider->save()) {
            return redirect()->back()->with('success', 'تمت الاضافة بنجاح!');
        } else {
            return redirect('slider/create')->with('warning', '  تحقق من صحة البيانات!');
        }

        // if ($request->hasfile('background')) {
        //     foreach ($request->file('background') as $filebackground) {
        //         $name = uniqid() . '.' . $filebackground->getClientOriginalExtension();
        //         $filebackground->move(public_path() . '/filebackgrounds/', $name);
        //         $data[] = $name;
        //     }
        // }


    }

    public function show($id)
    {
        $slider = Slider::find($id);
        return view('slider.show', compact('slider'));
    }

    // public function edit($id)
    // {
    //     $slider = Slider::findOrFail($id);


    //     return view('slider.edit', compact('slider'));
    // }
//     public function edit($id)
//     {
//         $sliders = Slider::findOrFail($id);


//         return view('slider.edit',['sliders' => $sliders]);
// }
// public function edit($locale, $slider)
// {
//     // استخدم المتغير $locale و $slider كما تحتاج في هذه الدالة

//     // قم بجلب الـ Slider المطلوب باستخدام وسيطة القيمة $slider
//     $slider = Slider::findOrFail($slider);

//     // قم بإرجاع النمط وقيمة السلايدر للعرض في واجهة المستخدم
//     return view('slider.edit', compact('locale', 'slider'));
// }
public function edit($locale, $slider)
{
    // $slider = Slider::findOrFail($slider);

    return view('slider.edit', compact('locale', 'slider'));
}

//     public function edit(Slider $slider)
//     {
//         // $slider = Slider::FindOrFail($id);


//         return view('slider.edit', ['slider' => $slider]);
// }

    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $this->validate($request, [
            'main_title' => 'required',
            'description' => 'required',
            'maintenance_button' => 'required',
            'maintenance_link' => 'required',
            'materials_button' => 'required',
            'materials_link' => 'required',
            'question' => 'required',
            'whatsapp_link' => 'required',
            'tiktok_link' => 'required',
            'snapcaht_link' => 'required',
            'instagram_link' => 'required',
            'youtube_link' => 'required',
            'background' => 'sometimes|required|mimes:jpg,jpeg,png', // للسماح بتحميل الصورة فقط في حالة إدخال صورة جديدة
            'logo' => 'sometimes|required|mimes:jpg,jpeg,png', // للسماح بتحميل الصورة فقط في حالة إدخال صورة جديدة
        ]);

        // العثور على السلايدر الحالي الذي تريد تحديثه بالاستعانة بمعرفه (id)
        $slider = Slider::find($id);
        if (!$slider) {
            return redirect('slider/create')->with('warning', 'لم يتم العثور على السلايدر المطلوب!');
        }

        // معالجة رفع الملفات
        if ($request->hasfile('background')) {
            $backgroundFile = $request->file('background');
            $backgroundName = uniqid() . '.' . $backgroundFile->getClientOriginalExtension();
            $backgroundFile->move(public_path() . '/filebackgrounds/', $backgroundName);
            // حذف الصورة القديمة إذا كانت موجودة
            if ($slider->background) {
                unlink(public_path() . '/filebackgrounds/' . $slider->background);
            }
            $slider->background = $backgroundName;
        }

        if ($request->hasfile('logo')) {
            $logoFile = $request->file('logo');
            $logoName = uniqid() . '.' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path() . '/filelogos/', $logoName);
            // حذف الصورة القديمة إذا كانت موجودة
            if ($slider->logo) {
                unlink(public_path() . '/filelogos/' . $slider->logo);
            }
            $slider->logo = $logoName;
        }

        // تحديث بقية البيانات
        $slider->main_title = $request->get('main_title');
        $slider->description = $request->get('description');
        $slider->maintenance_button = $request->get('maintenance_button');
        $slider->maintenance_link = $request->get('maintenance_link');
        $slider->materials_button = $request->get('materials_button');
        $slider->materials_link = $request->get('materials_link');
        $slider->question = $request->get('question');
        $slider->whatsapp_link = $request->get('whatsapp_link');
        $slider->tiktok_link = $request->get('tiktok_link');
        $slider->snapcaht_link = $request->get('snapcaht_link');
        $slider->instagram_link = $request->get('instagram_link');
        $slider->youtube_link = $request->get('youtube_link');

        if ($slider->save()) {
            return redirect('slider/' . $id . '/edit')->with('success', 'تم التحديث بنجاح!');
        } else {
            return redirect('slider/' . $id . '/edit')->with('warning', 'تحقق من صحة البيانات!');
        }
    }


    public function destroy($id)
    {
        // ابحث عن السلايدر المراد حذفه باستخدام المعرّف
        $slider = Slider::find($id);

        // التحقق مما إذا كان السلايدر موجودًا قبل الحذف
        if ($slider) {
            // قم بحذف السلايدر
            $slider->delete();

            return redirect()->back()->with('danger', 'تمت الحذف بنجاح!');
        } else {
            return redirect()->back()->with('danger', 'لم يتم العثور على السلايدر المحدد!');
        }
    }
}
