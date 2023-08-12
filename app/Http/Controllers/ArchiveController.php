<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class ArchiveController extends Controller
{


    public function index(Request $request)
    {
        // $archive = Archive::all();
        $archive = Archive::cursor();
        // $archive = Archive::orderBy('created_at', 'desc')->get();

        return view('archive.index', compact('archive'));
    }



    public function create()
    {
        // ->sortByDesc('created_at')
        $archive = Archive::all();
        return view('archive.create', compact('archive'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required',
            'title' => 'required',
            'num_Ministry' => 'required',
            'date' => 'required',
            'files.*' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,DWG,DXF,DWF'
        ]);
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                // $name = $file->getClientOriginalName();
                $name = uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/uploads/', $name);
                $data[] = $name;
            }
        }

        $archive = new Archive([
            'number' => $request->get('number'),
            'title' => $request->get('title'),
            'num_Ministry' => $request->get('num_Ministry'),
            'date' => $request->get('date'),
            'files' => json_encode($data)
        ]);

        if ($archive->save()) {
            return redirect('archive/create')->with('success', 'تمت الاضافة بنجاح!');
        } else {
            return redirect('archive/create')->with('warning', '  تحقق من صحة البيانات!');
        }
    }


    public function show($id)
    {
        $archive = Archive::find($id);
        return view('archive.show', compact('archive'));
    }


    public function edit($id)
    {
        //
        $archive = Archive::find($id);
        return view('archive.edit', compact('archive'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'number' => 'required',
            'title' => 'required',
            'num_Ministry' => 'required',
            'date' => 'required',
            'files.*' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,xlsx|max:2048'
        ]);

        if ($request->hasfile('files')) {
            $data = [];
            foreach ($request->file('files') as $file) {
                // $name = $file->getClientOriginalName();
                $name = uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/uploads/', $name);
                $data[] = $name;
            }
        }

        $archive = Archive::find($id);
        $archive->number = $request->get('number');
        $archive->title = $request->get('title');
        $archive->num_Ministry = $request->get('num_Ministry');
        $archive->date = $request->get('date');

        if (isset($data)) {
            $archive->files = json_encode($data);
        }

        if ($archive->save()) {
            return redirect('archive')->with('info', 'تمت التعديل بنجاح!');
        } else {
            return redirect('archive')->with('warning', '  تحقق من صحة البيانات!');
        }
    }

    public function destroy($id)
    {
        //
        Archive::destroy($id);
        return redirect('archive')->with('danger', 'تمت الحذف بنجاح!');
    }
}