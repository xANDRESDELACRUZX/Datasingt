<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Models\Departamento;
use App\Models\User;
use App\Models\Rol;
use App\Models\TipoIdentificacion;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function index()
    {
        return view("layouts.login");
    }

    public function index2()
    {   
        $data = User::all();
        return view("layouts.admin-user-list",compact("data"));
    }


    public function create()
    {
        return view("layouts.register");
    }

  
    public function store(Request $request)
    {
        $data["pri_nombre"]=$request->get("pri_nombre");
        $data["seg_nombre"]=$request->get("seg_nombre");
        $data["pri_apellido"]=$request->get("pri_apellido");
        $data["seg_apellido"]=$request->get("seg_apellido");
        $data["fecha_nacimiento"]=$request->get("fecha_nacimiento");
        $data["email"]=$request->get("email");
        $data["password"]=Hash::make($request->get("password"));
        $data["rol_id"]="1";
        User::create($data);
        return redirect("login")->with("mensaje", "Cuenta Creada Sactisfactoriamente")
                                 ->with("tipo", "success")
                                 ->with("icono", "<i class='far fa-check-square'></i>"); 
    }

    public function store2(Request $request)
    {
        $data["email"]=$request->get("email");
        $data["password"]=$request->get("password") ;
     
    if (Auth::attempt($data)) {
        $request->session()->regenerate();
        return redirect()->intended('pagePrincipal');
     }
       return back()->with("mensaje", "No Estas Logeado")
                    ->with("tipo", "danger")
                    ->with("icono", "<i class='fas fa-exclamation-triangle'></i>");
           
        
     }

     public function logout()
     {
          Auth::logout();
          return redirect('login');
     }

    
    public function show($id)
    {
        $data = User::find($id);
        $rol = Rol::all();
        return view("layouts.admin-user-edit", compact("data","rol"));
    }


    public function edit($id)
    {
        $data = User::find($id);
        $Ti = TipoIdentificacion::all();
        $departamentos = Departamento::all();
        return view("layouts.admin-profile", compact("data", "Ti","departamentos",));
    }

 
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            "rol_id" => $request->get("rol")]);
            return redirect("UserList");
    }
    public function update2(Request $request, $id)
    {
        User::find($id)->update([
            "pri_nombre" => $request->get("pri_nombre"), "seg_nombre" => $request->get("seg_nombre"),
            "pri_apellido" => $request->get("pri_apellido"), "seg_apellido" => $request->get("seg_apellido"),
            "fecha_nacimiento" => $request->get("fecha_nacimiento"), "email" => $request->get("email"),
            "password" => Hash::make($request->get("password")),"tipo_identificacion_id" => $request->get("TipoIdentificacion"),
            "departamento_id" => ($request->get("departamentos")),"ciudad_id" => $request->get("ciudades"),
            "num_identificacion" => $request->get("num_identificacion"), "num_telefono" => $request->get("num_telefono")
        ]);    
            return redirect("pagePrincipal");
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect("UserList");
    }
    public function ciudades($id){

        $ciudades = Ciudad::where('departamento_id', $id)->get()->toJson();
        return $ciudades;
    }

    public function security($id){

        $data = User::find($id);
        return view("layouts.admin-security", compact("data"));
    }
    public function ResetPassword(Request $request ,$id){

        $datos=Hash::make($request->get("oldpassword"));
        if (User::where('password',$datos)->get()) {
          User::find($id)->update(["password"=> Hash::make($request->get("newpassword"))]);
          return view("layouts.admin-security" );
        }else{
            return view("layouts.admin-security" );  
        }

           
        
    }
    
}


