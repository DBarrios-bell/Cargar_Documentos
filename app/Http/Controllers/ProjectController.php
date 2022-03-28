<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; //no olvidar hee hee
use App\Models\project;
use App\Models\user;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\MessageController;
use App\Http\Requests\SaveProjectRequest;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'show');
        $this->middleware(function($request,$next){
            if (session('success')) {
                Alert::success(session('success'));
            }
            if (session('error')) {
                Alert::error(session('error'));
            }
            return $next($request);
        });
    }

    public function index() {
        if( Auth::user()->nivel == 'Administrador'){
            return view('projects.index', [
                'projects' => Project::select()->get()
            ]);
        }else{
            return view('projects.index', [
                'projects' => Project::select()->where('user_id' , Auth::user()->id)->get()
            ]);
        }
    }

    public function create()
    {
        return view('projects.create', [
            'users' => User::latest()->get(),
            'project'=> new Project
        ]);
    }


    public function store(SaveProjectRequest $request)
    {
        /*select users.email from projects
        inner join users on projects.user_id=users.id where user_id = 4*/
        $reg=new Project;
        $reg->user_id= $request->get('user_id');
        $reg->nombre= $request->get('nombre');
        $reg->observacion= $request->get('observacion');
        if($request->hasFile('archivo')){
            $nombre = uniqid();
                $pdf = $request->file('archivo');
                $extension = $this->obtenerExtension($pdf->getClientOriginalExtension());
                $pdf->move(public_path().'/Archivos/' , $nombre . $extension);
                $reg->archivo = $nombre . $extension;
               }
        $reg->save();

         $d_email = (Project::select('email')
        ->join('users','projects.user_id','users.id')
        ->where('projects.user_id',$request->user_id)->first())['email'];
        MessageController::sendCorreo("Valida",$d_email);

        return redirect()->back()->with('success', 'Documento Cargado con Exito!');
    }

    public function show(Project $project)
    {
        return view ('projects.show', [
            'project'=> $project
        ]);

    }

    public function edit(Project $project)
    {
        return view ('projects.edit', [
            'users' => User::latest()->get(),
            'project'=> $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $file =public_path('Archivos/'.$project->archivo);
        if(file_exists($file)){
            unlink($file);
        }
            // $pdf = $request->hasFile('archivo');
            // $pdf->move(public_path().'/Archivos/');
            // $request->archivo = $pdf->getClientOriginalName();

        $project->update($request->validated());
        return redirect()->route('projects.index' , $project)->with('success' , 'El proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $file =public_path('Archivos/'.$project->archivo);
        if(file_exists($file)){
            unlink($file);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('error' , 'Documento Eliminando con exito!');
    }

    public function obtenerExtension($nombre_archivo)
    {
        $array = explode(".",$nombre_archivo);
        return '.' . $array[sizeof($array)-1];# code...
    }

}

