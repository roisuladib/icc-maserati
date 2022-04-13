<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Requests\Admin\FooterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
class FooterController extends Controller
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
            $query = Footer::query();
            return Datatables::of($query) 
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn btn-info btn-sm rounded">
                            <a href="'. route('footer.edit', $item->id) .'" class="text-white">
                                Edit
                            </a>
                        </div> 
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.footer.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterRequest $request)
    {
        
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
        $footer = Footer::findOrFail($id);
        return view('pages.admin.footer.edit', [
            'footer' => $footer            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FooterRequest $request, $id)
    {
        $data = $request->all();        
        $footer = Footer::findOrFail($id);
        $footer->update($data);
        return redirect()->route('footer.index')->with('success', 'Ubah Footer berhasil');
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
