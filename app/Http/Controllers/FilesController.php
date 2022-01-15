<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $allFiles =  Files::all();
        return view('files.index')->with('allFiles' , $allFiles);
    }

    public function create()
    {
        return view('files.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tittle'=>'required|max:20',
            'inputFile'=>'required|file|max:10000|mimes:pdf|unique',
            'description'=>'required|max:50|min:10'
        ]);
        $files = new Files();
        $files->tittle = $request->tittle;
        $files->description = $request->description;
        $input_all_file = $request->file('inputFile'); //عشان اخد الفايل كامل 
        $file_name = $input_all_file->getClientOriginalName(); //عشان اخد اسم الفايل
        $input_all_file->move(public_path(). '/upload/' , $file_name); //  عشان اخزن الفايل في فولدر 
        $files->file = $file_name;
        $files->save();
        return redirect('files')->with('msg' , "$file_name uploaded .....");
    }
    public function show($id)
    {
        $file = Files::find($id);
        return view('files.show')->with('file' , $file);
    }
    public function edit($id)
    {  
         $file = Files::find($id);
        return view('files.edit')->with('file' , $file);
    }
    public function update(Request $request, $id)
    {
        $file = Files::find($id);
        $file->tittle = $request->tittle;
        $file->description = $request->description;
        $file->save();
        return redirect('files')->with('msg' , "$file->file Updated .....");  
    }
    public function destroy($id)
    {
        $file = Files::find($id);
        $file->delete();
        return redirect('files')->with('msg' , "$file->file Deleted Successfully..");
    }
    public function download($id){
        $file = Files::where("id" , "=" , $id)->firstOrFail();
        $file_path = public_path('upload/'. $file->file);
        return response()->download($file_path);
    }
}
