<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Character;
use App\Models\User;
use App\Models\Account;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use RegistersUsers;
    
    public function login2(Request $request){
        return $request;
    }
     
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario=new User;
        $pass=Hash::make($request->password);
            $usuario->name=$request->nombre;
            $usuario->email=$request->email;
            $usuario->password=$pass;
        
        if($usuario->save()){
            $cuenta=new Account;
                $cuenta->login=$request->email;
                $cuenta->password=md5($request->password);
                $cuenta->access_level=0;
            $cuenta->save();
        }
        
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
