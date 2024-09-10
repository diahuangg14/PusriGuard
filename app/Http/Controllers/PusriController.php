<?php

namespace App\Http\Controllers;

use App\Models\Pusri;
use App\Http\Requests\StorePusriRequest;
use App\Http\Requests\UpdatePusriRequest;
use App\Models\Code;
use App\Models\Project;
use Illuminate\Http\Request;

class PusriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('dashboard.index', [
            "projects" => Project::all(),
            "codes" => Code::all(),
        ]);
    }
    public function tables($project_id, $code_id)
    {
        return view('dashboard.tables', [
            "projects" => Project::all(),
            "codes" => Code::all(),
            "pusris" => Pusri::where('project_id', $project_id)->where('code_id', $code_id)->get(),
            "project_id" => $project_id,
            "code_id" => $code_id
        ]);

    }
    public function code($project_id)
    {
        return view('dashboard.code', [
            "projects" => Project::all(),
            "project" => Project::where('id', $project_id)->first(),
            "codes" => Code::where('project_id', $project_id)->get(),
            "project_id" => $project_id,
        ]);
    }
    public function add_project(Request $request)
    {
        $validatedData = $request->validate([
            'project' => 'required',
        ]);

        $project = Project::create($validatedData);

        $codes = ['APO06', 'APO07', 'APO09', 'APO10', 'BAI02', 'BAI03', 'BAI04', 'BAI06','BAI07',
        'BAI10','BAI11','DSS01', 'DSS02', 'DSS04', 'DSS05', 'MEA01',];

        $descriptions = ['Managed Budget and Costs', 'Managed Human Resources', 'Managed Service Agreements',
        'Managed Vendors', 'Managed Requirements Definition', 'Managed Solutions Identification and Build', 
        'Managed Availability and Capacity', 'Managed IT Changes', 'Managed IT Change Acceptance and Transitioning',
        'MManaged Configuration', 'Managed Projects', 'Managed Operations','Managed Service Requests and Incidents',
        'Managed Continuity', 'Managed Security Services','Managed Performance and Conformance Monitoring',];

        foreach ($codes as $index => $code) {
            Code::create([
                'project_id' => $project->id,
                'code' => $code,
                'description' => $descriptions[$index]
            ]);
        }
        return redirect()->back()->with('success', 'Anda berhasil menambahkan project baru');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePusriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pusri $pusri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pusri $pusri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePusriRequest $request, Pusri $pusri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pusri $pusri)
    {
        //
    }
}
