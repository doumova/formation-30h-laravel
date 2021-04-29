<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Etudiant;
use Illuminate\Support\Facades\DB;
class ControllerEtudiants extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants= Etudiant::all();
        //dd($etudiants);
             return view('index',compact('etudiants',$etudiants));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etudiant = new Etudiant();
        return view('create',compact('etudiants',$etudiant));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //methods we use with request
        //guessExtension for founding the image extension
        //getClientOriginalName
        //getMimeType
        //move
        //storeAs
        //storePublicly
        //getSize
        // $test=$request->file('image')->getSize();
        // dd($test);

        $newImageName = time(). '-' .$request->nom. '.' .$request->image->extension();
        $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
    
        

        $etudiant= Etudiant::create([
            'nom' =>$request->input('nom'),
            'prenom' =>$request->input('prenom'),
            'telephone'=>$request->input('telephone'),
            'email'=>$request->input('email'),
            'image_path'=>$newImageName,
            
        ]);
        // $input = $request->all();

        // if($request->hasFile('image'))
        // {
        //     $destination_path='public/images/etudiants';
        //     $image= $request->file('image');
        //     $image_name=$image->getClientOriginalName();
        //     $path = $request->file('image')->storeAs($destination_path,$image_name);
        //     $input['image']=$image_name;
        // }
   
        // $etudiant = new Etudiant();
        // $etudiant->nom = $request->nom; 
        // $etudiant->prenom = $request->prenom;
        // $etudiant->telephone = $request->telephone;
        // $etudiant->email = $request->email;
        $etudiant->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant=Etudiant::find($id);
        return view('detail',compact('etudiant',$etudiant));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view ('edit',compact('etudiants',$etudiant));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Etudiant $etudiant)
    {
         $etudiant->update([
            'nom'=>$request->nom,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'prenom'=>$request->prenom,
            'image_path'=>$request->image_path,
            'created_at'=>now(),
         ]);
       
        return redirect()->route('etudiant.index')->with('success','this student has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
        
        return redirect('/')->with('success','this student has been deleted successfully');
    }
}
