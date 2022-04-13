<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Activity;
use App\Footer;
use Illuminate\Notifications\Action;
use Yajra\DataTables\Facades\DataTables;

class ActivityController extends Controller
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
            $level = Activity::query();
            return datatables::of($level)
                ->addColumn('action', function($item) {
                    return '
                    <div class="d-inline-flex">
                    <div class="btn btn-info btn-sm mr-1 rounded">
                        <a href="'. route('activities.edit', $item->id) .'" class="text-white">
                            Edit
                        </a>
                    </div>
                    <form action="'. route('activities.destroy', $item->id) .'" method="POST">
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
        return view('pages.admin.activity.index', [
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
        return view('pages.admin.activity.create', [
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
        Activity::create($data);
        return redirect()->route('activities.index')->with('success', 'Tambah aktivitas berhasil');
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
        $activity = Activity::findOrFail($id);
        $footer = Footer::first();
        return view('pages.admin.activity.edit', [
            'activity' => $activity,
            'footer'   => $footer
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
        $activity = Activity::findOrFail($id);
        $activity->update($data);
        return redirect()->route('activities.index')->with('success', 'Ubah aktivitas berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Activity::findOrFail($id);
        $data->delete();
        return redirect()->route('activities.index')->with('success', 'Hapus aktivitas berhasil');
    }
}
