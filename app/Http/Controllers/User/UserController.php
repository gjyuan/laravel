<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        echo "hello world!";
        //var_dump($request);
//        var_dump(response('cookie')->withCookie(cookie('u','gjyuandecookid',100000)));
//        $name = $request->all();
//        $url = $request->url();
//        $isMethod = $request->method();
//        $cookie = $request->cookie("u");
//        var_dump($name,$url,$isMethod,$cookie);
        $list = \DB::table('User')->where('uid','>=',2)->get();
        var_dump($list);
        $res = \DB::table('User')->where('uid',3)->update(array('name'=>"xiezhixin"));

        return view('user.login',array('name'=>'gjyuan','company'=>'github.com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
