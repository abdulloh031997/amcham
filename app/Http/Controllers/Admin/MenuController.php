<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Brian2694\Toastr\Facades\Toastr;
use DB;
class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('menus')->get();
        $order = Menu::latest()->first();
        return view('backend.menus.index',[
            'result' => $result,
            'order' => $order,
            'is_active' => 'menus',
        ]);
    }
    public function search(Request $request)
    {
            $order = Menu::latest()->first();
            $result = DB::table('menus')->get();

                if($request->name)
                    {
                        $result = Menu::where('name','LIKE','%'.$request->name.'%')->get();
                    }
                    // search by status
                    if($request->status)
                    {
                        $result = Menu::where('status','LIKE','%'.$request->status.'%')->get();
                    }
                    if($request->position)
                    {
                        $result = Menu::where('position','LIKE','%'.$request->position.'%')->get();
                    }
                    // search by name and role name
                    if($request->name && $request->status && $request->position)
                    {
                        $result = Menu::where('name','LIKE','%'.$request->name.'%')
                                        ->where('status','LIKE','%'.$request->status.'%')
                                        ->where('position','LIKE','%'.$request->position.'%')
                                        ->get();
                    }

            // echo "<pre>";
            // print_r($results);
            // echo "<pre>";
            return view('backend.menus.index',[
                'result'=>$result,
                'order'=>$order
            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $order = Menu::latest()->first();
        return view('backend.menus.create', [
            'menus' => $menus,
            'order' => $order,
            'is_active' => 'menus',
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
        $request->validate([
            'name' => 'required|string',
            'position'=>'required'
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->url = $request->url;
        $menu->parent = $request->get('parent');
        $menu->position = $request->get('position');
        $menu->order_by = $request->order_by;
        $menu->save();
        Toastr::success('Create new account successfully :)','Success');
        return redirect()->route('menus.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }
}
