<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\news;
use App\NewsPhotos;
use App\NewsVideo;

use App\Http\Requests\Admin\NewsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
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
            $news = News::with(['user']);
            return Datatables::of($news)
                ->addColumn('action', function($item) {
                    return '
                        <div class="d-inline-flex">
                            <div class="btn btn-info btn-sm mr-1 rounded">
                                <a href="'. route('news.edit', $item->id) .'" class="text-white">
                                    Edit
                                </a>
                            </div>
                            <form action="'. route('news.destroy', $item->id) .'" method="POST">
                                '. method_field('delete') . csrf_field() .'
                                <button class="btn btn-danger btn-sm ml-1 rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                    Hapus
                                </button>
                            </form>                    
                        </div>                       
                    ';
                })->rawColumns(['action'])->make();
        }
        return view('pages.admin.news.index', [
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
        return view('pages.admin.news.create', [
            'footer' => $footer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->title);
        News::create($data);

        return redirect()->route('news.index')->with('success', 'Tambah berita berhasil');
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
        $news = News::findOrFail($id);
        return view('pages.admin.news.edit', [
            'footer' => $footer,
            'news'   => $news     
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        $item = News::findOrFail($id);        
        $data['slug'] = Str::slug($request->title);  
        $data['users_id'] = Auth::user()->id;
        $item->update($data);
        return redirect()->route('news.index')->with('success', 'Ubah berita berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::findOrFail($id);
        // $item = News::with(['photo', 'video'])->findOrFail($id);
        $item->delete();
        // $photo = NewsPhotos::findOrfail($id);
        // $video = NewsVideo::findOrfail($id);
        // $photo->delete();
        // $video->delete();

        return redirect()->route('news.index')->with('success', 'Hapus berita berhasil');
    }
}
