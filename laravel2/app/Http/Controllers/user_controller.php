<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Input;
use Validator;
use App\user_model;
class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Input::except(array("token"));
        $rule = array(
            "name"=>"required",
            "pass"=>"required|min:6",
            "email"=>"required|email"
        );
        $validator = Validator::make($data,$rule);
        if($validator->fails()){
            return redirect('reg')->withErrors($validator);
        }else{
           user_model::form();
            return redirect("reg")->with("info","SUCCESSFULY REGISTRATED");

        }

        /*$this->validate($request,[
            "name"=>'required',
            "pass"=>'required|min:3',
            "email"=>'required|email'

        ]);
        $user = new user_model();
        $user->name = $request->input("name");
        $user->pass = $request->input("pass");
        $user->email = $request->input("email");
        $user->save();
        return redirect("reg")->with("info","SUCCESSFULY REGISTRATED");*/
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
}
