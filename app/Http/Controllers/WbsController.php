<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wbs;
use App\Models\M_;

class WbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wbs = Wbs::latest()->paginate(10);
        return view('wbs/index', compact('wbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wbs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(count($request->site_id));
        $this->validate($request, [
            'site_id' => 'required|array',
            'site_id.*' => 'required',
            'site_name' => 'required|array',
            'site_name.*' => 'required',
            // 'project_budget' => 'required|array',
            // 'project_budget.*' => 'required',
            // 'regional' => 'required|array',
            // 'regional.*' => 'required',
            // 'site_type' => 'required|array',
            // 'site_type.*' => 'required',
            // 'survey_date' => 'required|array',
            // 'survey_date.*' => 'required',
            // 'consultant' => 'required|array',
            // 'consultant.*' => 'required',
            // 'cons_pic_name' => 'required|array',
            // 'cons_pic_name.*' => 'required',
            // 'tower' => 'required|array',
            // 'tower.*' => 'required',
            // 'tower_height' => 'required|array',
            // 'tower_height.*' => 'required',
        ]);

        // dd($validator);

        // dd($request);

        // $wbs = Wbs::create([
        //     'site_id' => $request->site_id,
        //     'site_name' => $request->site_name,
        //     'project_budget' => $request->project_budget,
        //     'regional' => $request->regional,
        //     'site_type' => $request->site_type,
        //     'survey_date' => $request->survey_date,
        //     'consultant' => $request->consultant,
        //     'cons_pic_name' => $request->cons_pic_name,
        //     'tower' => $request->tower,
        //     'tower_height' => $request->tower_height,
        // ]);
        return redirect()->route('wbs.index')->with(['success' => "Data Berhasil Disimpan!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wbs $wbs)
    {
        return view('wbs/show', compact('wbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wbs $wbs)
    {
        return view('wbs/edit', compact('wbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wbs $wbs)
    {
        $this->validate($request, [
            'site_id' => 'required|integer',
            'site_name' => 'required',
            'project_budget' => 'required',
            'regional' => 'required',
            'site_type' => 'required',
            'survey_date' => 'required',
            'consultant' => 'required',
            'cons_pic_name' => 'required',
            'tower' => 'required',
            'tower_height' => 'required',
        ]);

        $wbs->update([
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'project_budget' => $request->project_budget,
            'regional' => $request->regional,
            'site_type' => $request->site_type,
            'survey_date' => $request->survey_date,
            'consultant' => $request->consultant,
            'cons_pic_name' => $request->cons_pic_name,
            'tower' => $request->tower,
            'tower_height' => $request->tower_height,
        ]);
        return redirect()->route('wbs.index')->with(['success' => "Data Berhasil Disimpan!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wbs::find($id)->delete();

        //redirect to index
        return redirect()->route('wbs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
