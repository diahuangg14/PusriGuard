<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Http\Requests\StoreCodeRequest;
use App\Http\Requests\UpdateCodeRequest;
use App\Models\Pusri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function add_code(Request $request)
    {
        $validatedData = $request->validate([
            'practice_code' => 'required',
            'activities' => 'required',
            'evidence' => 'required',
            'project_id' => 'required',
            'code_id' => 'required',
        ]);

        $code = Pusri::create($validatedData);

        return redirect()->back()->with('success', 'Anda berhasil menambahkan data baru');
    }

    public function upload_attachment(Request $request)
    {
        $validatedData = $request->validate([
            'attachment' => 'required',
            'date' => 'required',
           
        ]);

        $code = Pusri::find($request->id);
        return $code;

            $imageName = time() . '.' . $request->attachment->extension();
            $request->attachment->storeAs('public/', $imageName);

            $validatedData['attachment'] = 'storage/' . $imageName;

        $code->update($validatedData);

        return redirect()->back()->with('success', 'Anda berhasil mengupload data');
    }

    public function add_code2(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'description' => 'required',
            'project_id' => 'required',
        ]);

        $code = Code::create($validatedData);

        return redirect()->back()->with('success', 'Anda berhasil menambahkan code baru');
    }

    public function upload_file(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'attachment' => 'required|mimes:pdf|max:2048',
        ]);

        $pusri = Pusri::find($request->id);

        if ($request->hasFile('attachment')) {
            $imageName = time() . '.' . $request->attachment->extension();
            $request->attachment->storeAs('public/', $imageName);

            $validatedData['attachment'] = 'storage/' . $imageName;
        }

        $pusri->update($validatedData);

        return redirect()->back()->with('success', 'Anda berhasil menambahkan file');
    }

    public function edit_code(Request $request)
    {
        $validatedData = $request->validate([
            'practice_code' => 'required',
            'activities' => 'required',
            'evidence' => 'required',
            'date' => 'required',
            'attachment' => 'nullable|mimes:pdf|max:2048',
        ]);

        $pusri = Pusri::find($request->id);

        if ($request->hasFile('attachment')) {
            Storage::delete('public/' . $pusri->attachment);

            $imageName = time() . '.' . $request->attachment->extension();
            $request->attachment->storeAs('public/', $imageName);

            $validatedData['attachment'] = 'storage/' . $imageName;
        }

        $pusri->update($validatedData);

        return redirect()->back()->with('success', 'Anda berhasil mengedit data');
    }

    public function delete_code($id)
    {
        $item = Pusri::where('id', $id)->first();
        $item->delete();
        return redirect()->back()->with('success', 'Anda berhasil menghapus data');

    }
}