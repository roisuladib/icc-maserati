<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MemberLevel;
use Yajra\DataTables\Facades\DataTables;

class MemberLevelController extends Controller
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
            $level = MemberLevel::query();
            return datatables::of($level)
                ->addColumn('action', function($item) {
                    return '
                        <div class="d-inline-flex">
                        <div class="btn btn-info btn-sm mr-1 rounded">
                            <a href="'. route('level.edit', $item->id) .'" class="text-white">
                                Edit
                            </a>
                        </div>
                        <form action="'. route('level.destroy', $item->id) .'" method="POST">
                            '. method_field('delete') . csrf_field() .'
                            <button class="btn btn-danger btn-sm ml-1 rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                Hapus
                            </button>
                        </form>                    
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.member.level.index', [
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
        $footer = Footer::first();
        return view('pages.admin.member.level.create', [
            'footer' => $footer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        MemberLevel::create($data);
        return redirect()->route('level.index')->with('success', 'Simpan data berhasil');
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
        $level = MemberLevel::findOrFail($id);
        return view('pages.admin.member.level.edit', [
            'footer'=> $footer,
            'level' => $level
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
        $level = MemberLevel::findOrFail($id);
        $level->update($data);
        return redirect()->route('level.index')->with('success', 'Ubah data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MemberLevel::findOrFail($id);
        $data->delete();
        return redirect()->route('level.index')->with('success', 'Hapus data berhasil');
    }
}
