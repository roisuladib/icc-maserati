<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\News;
use App\NewsVideo;
use App\Http\Requests\Admin\NewsVideoRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class NewsVideoController extends Controller
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
            $query = NewsVideo::with(['news']);
            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <form action="'. route('news-videos.destroy', $item->id) .'" method="POST">
                            '. method_field('delete') . csrf_field() .'
                            <button class="btn btn-danger btn-sm rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                Hapus
                            </button>
                        </form>                    
                    ';
                })
                ->editColumn('link', function($item) {
                    return $item->link ? $item->link : 'Mohon Refresh';
                })
                ->rawColumns(['link', 'action'])
                ->make();
            }
        return view('pages.admin.news.video.index', [
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
        return view('pages.admin.news.video.create', [
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
    public function store(NewsVideoRequest $request)
    {
        $data = $request->all();     
        // $data['link'] = $request->file('link')->store('assets/news/video', 'public');           
        NewsVideo::create($data);
        return redirect()->route('news-videos.index');
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
    public function update(NewsVideoRequest $request, $id)
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
        $item = NewsVideoRequest::findOrFail($id);
        $item->delete();
        return redirect()->route('news-videos.index');
    }
}
