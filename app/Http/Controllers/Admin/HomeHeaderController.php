<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\HomeHeader as HomeHeaderRequest;
use App\HomeHeader;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class HomeHeaderController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        if (request()->ajax()) {
            $query = HomeHeader::query();
            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="d-inline-flex">
                            <div class="btn btn-info btn-sm mr-1 rounded">
                                <a href="'. route('headers.edit', $item->id) .'" class="text-white">
                                    Edit
                                </a>
                            </div>
                            <form action="'. route('headers.destroy', $item->id) .'" method="POST">
                                '. method_field('delete') . csrf_field() .'
                                <button class="btn btn-danger btn-sm ml-1 rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                    Hapus
                                </button>
                            </form>                    
                        </div>
                    ';
                })
                ->editColumn('photo', function($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 90px;" />' : '';
                })
                ->rawColumns(['photo', 'action'])
                ->make();
        }
        return view('pages.admin.home.header.index', [
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
        return view('pages.admin.home.header.create', [
            'footer' => $footer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeHeaderRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/owners', 'public');
        HomeHeader::create($data);
        return redirect()->route('headers.index')->with('success', 'Tambah data berhasil');
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
        $header = HomeHeader::findOrFail($id);
        return view('pages.admin.home.header.edit', [
            'footer' => $footer,
            'header' => $header            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeHeaderRequest $request, $id)
    {
        $data = $request->all(); 
        $data['photo'] = $request->file('photo')->store('assets/owners', 'public');
        $user = HomeHeader::findOrFail($id);
        $user->update($data);
        return redirect()->route('headers.index')->with('success', 'Ubah data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HomeHeader::findOrFail($id);
        $data->delete();
        return redirect()->route('headers.index')->with('success', 'Hapus data berhasil');
    }
}
