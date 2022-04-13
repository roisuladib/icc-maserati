<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HomeTab;
use Yajra\DataTables\Facades\DataTables;

class HomeTabController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        if (request()->ajax()) {
            $query = HomeTab::query();
            return datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn btn-info btn-sm rounded">
                            <a href="'. route('tabs.edit', $item->id) .'" class="text-white">
                                Edit
                            </a>
                        </div> 
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.home.tab.index', [
            'footer' => $footer
        ]);
    }

    public function edit($id)
    {
        $footer = Footer::first();
        $tabs = HomeTab::findOrFail($id);
        return view('pages.admin.home.tab.edit', [
           'footer' => $footer,
            'tabs' => $tabs
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tabs = HomeTab::findOrFail($id);
        $tabs->update($data);

        return redirect()->route('tabs.index')->with('success', 'Tambah data berhasil');
    }
}
