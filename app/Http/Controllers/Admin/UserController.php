<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\User;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
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
            $query = User::query();
            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="d-inline-flex">
                            <div class="btn btn-info btn-sm mr-1 rounded">
                                <a href="'. route('users.edit', $item->id) .'" class="text-white">
                                    Edit
                                </a>
                            </div>
                            <form action="'. route('users.destroy', $item->id) .'" method="POST">
                                '. method_field('delete') . csrf_field() .'
                                <button class="btn btn-danger btn-sm ml-1 rounded" onclick="return confirm(`Apakah data akan dihapus ?`)">
                                    Hapus
                                </button>
                            </form>                    
                        </div>
                    ';
                })
                ->editColumn('photo', function($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 45px; border-radius: 100%;" />' : '';
                })
                ->rawColumns(['photo', 'action'])
                ->make();
        }
        return view('pages.admin.user.index', [
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
        return view('pages.admin.user.create', [
            'footer' => $footer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();       
        $data['photo'] = $request->file('photo')->store('assets/user', 'public');  
        $data['password'] = bcrypt($request->password);       
        User::create($data);
        return redirect()->route('users.index')->with('success', 'Tambah user berhasil');
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
        $user = User::findOrFail($id);
        return view('pages.admin.user.edit', [
            'footer' => $footer,
            'user' => $user            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();        
        $user = User::findOrFail($id);
        // $data['photo'] = $request->file('photo')->move('assets/user', 'public'); 
        $data['photo'] = $request->file('photo')->store('assets/user', 'public'); 
        if ($request->password) {
            $data['password'] = bcrypt($request->password); 
        }
        else {
            unset($data['password']);
        }
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Ubah user berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect()->route('users.index')->with('success', 'Hapus user Berhasil');
    }
}
