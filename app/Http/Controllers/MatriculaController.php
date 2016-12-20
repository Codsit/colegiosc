<?php

namespace App\Http\Controllers;

use App\Repositories\AlumnoRepository;
use App\Repositories\ApoderadoRepository;
use App\Repositories\DocMatriculaRepository;
use App\Repositories\MatriculaRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class MatriculaController extends Controller
{

    protected $AlumRepo;
    protected $ApodRepo;
    protected $DocMRepo;

    public function __construct(MatriculaRepository $matriculaRep,AlumnoRepository $alumnoRep,ApoderadoRepository $apoderadoRep, DocMatriculaRepository $docMatriRep)
    {
        $this->AlumRepo =$alumnoRep;
        $this->ApodRepo =$apoderadoRep;
        $this->DocMRepo = $docMatriRep;
    }
    public function index()
    {
        return "index Matricula";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.matricula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return response()->json($request);
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
        //
    }
    public function fileUpload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $url = '/uploads/'.$input['imagename'];
        $image->move($destinationPath, $input['imagename']);
        return response()->json($url);
    }
}
