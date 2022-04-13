<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\News;
use App\NewsPhotos;
use App\Http\Requests\Admin\NewsPhotoRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class NewsPhotoController extends Controller
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
            $query = NewsPhotos::with(['news'])->get();
            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <form action="'. route('news-photos.destroy', $item->id) .'" method="POST">
                            '. method_field('delete') . csrf_field() .'
                            <button class="btn btn-danger btn-sm rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                Hapus
                            </button>
                        </form>                    
                    ';
                })
                ->editColumn('link', function($item) {
                    return $item->link ? '<img src="' . Storage::url($item->link) . '" style="max-height: 90px; border-radius: 12px;" />' : '';
                })
                ->rawColumns(['link', 'action'])
                ->make();
            }
        return view('pages.admin.news.photo.index', [
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
        $news = News::all();
        return view('pages.admin.news.photo.create', [
            'footer' => $footer,
            'news'   => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsPhotoRequest $request)
    {
        $data = $request->all();     
        $data['link'] = $request->file('link')->store('assets/news/photo', 'public');           
        NewsPhotos::create($data);
        return redirect()->route('news-photos.index')->with('success', 'Tambah photo berita berhasil');
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsPhotoRequest $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = NewsPhotos::findOrFail($id);
        $item->delete();
        return redirect()->route('news-photos.index')->with('success', 'Hapus photo berita berhasil');
    }
}
