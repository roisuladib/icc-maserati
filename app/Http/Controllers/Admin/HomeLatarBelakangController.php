<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\HomeLatarBelakang;
use App\Http\Requests\Admin\HomeLatarBelakangRequest;

use Yajra\DataTables\Facades\DataTables;

class HomeLatarBelakangController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        if (request()->ajax()) {
            $query = HomeLatarBelakang::query();
            return datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn btn-info btn-sm rounded">
                            <a href="'. route('latar-belakang.edit', $item->id) .'" class="text-white">
                                Edit
                            </a>
                        </div> 
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.home.latar_belakang.index', [
            'footer' => $footer
        ]);
    }
    public function edit($id)
    {
        $footer = Footer::first();
        $latar = HomeLatarBelakang::findOrFail($id);
        return view('pages.admin.home.latar_belakang.edit', [
            'footer' => $footer,
            'latar'  => $latar
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $latar = HomeLatarBelakang::findOrFail($id);
        $latar->update($data);
        return redirect()->route('latar-belakang.index')->with('success', 'Ubah data berhasil');
    }
}
