<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MemberTab;
use Yajra\DataTables\Facades\DataTables;

class MemberTabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        if (request()->ajax()) {
            $tabs = MemberTab::query();
            return datatables::of($tabs)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn btn-info btn-sm rounded">
                            <a href="'. route('tab.edit', $item->id) .'" class="text-white">
                                Edit
                            </a>
                        </div> 
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.member.tab.index', [
            'footer' => $footer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::first();
        $tab    = MemberTab::findOrFail($id);
        return view('pages.admin.member.tab.edit', [
            'footer' => $footer,
            'tab'    => $tab
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tab = MemberTab::findOrFail($id);
        $tab->update($data);
        return redirect()->route('tab.index')->with('success', 'Ubah data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
