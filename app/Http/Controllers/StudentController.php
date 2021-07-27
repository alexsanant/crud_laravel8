<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{

  /**
  * Muestra el listado de los registros
  */

  public function index(){

      $student = Student::all();
      return view('index', compact('student'));
  }

  /**
  * Muestra el formulario para crear un registro
  * @return \Illuminate\Http\Response
  */

  public function create(){

    return view('create');
  }

    /**
    * Almacena un nuevo registro en la BBDD
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request) {

      $storeData = $request->validate([

        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required|numeric',
        'password' => 'required|max:255',
      ]);

      $student = Student::create($storeData);

      return redirect('/students')->with('completed', 'Student has been saved!');
    }


    /**
    * Muestra el registro especificado por el id
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id){

      //
    }


    /**
    * Muestra el formulario de editar el registro especificado
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */

    public function edit ($id){

      $student = Student::findOrFail($id);
      return view('edit', compact('student'));
    }


    /**
    * Actualiza el registro especificado en la BBDD
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){

      $updateData = $request->validate([

        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required|max:255',
        'password' => 'required|max:255',
      ]);

      Student::whereId($id)->update($updateData);
      return redirect('/students')->with('completed', 'Student has been updated!');
    }

    /**
    * Elimina el registro especificado de la BBDD
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){

      $student = Student::findOrFail($id);
      $student->delete();

      return redirect('/students')->with('completed', 'Student has been deleted');
    }
}
