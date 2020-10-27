<?php

namespace App\Http\Controllers;

use App\Category;
use App\Framework;
use App\PostTutorial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFrameworkPost;

class FrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frameworks = Framework::orderBy('created_at','desc')->paginate(4);
        return view('dashboard/framework/index',['frameworks'=>$frameworks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','name');
        return view('dashboard/framework/create',['framework'=> new Framework(),'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFrameworkPost $request)
    {
        Framework::create($request->validated());
        return back()->with('status','Post creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Framework $framework)
    {
        return view('dashboard.framework.show',["framework" => $framework]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Framework $framework)
    {
        
        $categories = Category::pluck('id','name');
        return view('dashboard.framework.edit',["framework" => $framework,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFrameworkPost $request, Framework $framework)
    {
        $framework->update($request->validated());
        return back()->with('status','Post actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Framework $framework)
    {
        $framework->delete();
        return back()->with('status','eliminado con exito');
    }
    public function tutorial(request $request,Framework $framework)
    {
        $request->validate([
            'tutorial' => 'required|mimes:pdf|max:10240',
        ]);

        $filename = time() . "." . $request->tutorial->extension();

        $request->tutorial->move(public_path('tutorials'), $filename);
        echo "Subio la imagen ".$filename;
        PostTutorial::create(['tutorial'=>$filename, 'framework_id'=>$framework->id]);
        return back()->with('status','tutorial cargado con exito');
    }
}
