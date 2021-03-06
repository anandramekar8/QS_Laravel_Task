<?php

namespace App\Http\Controllers;

use App\Models\user_detail;
use Illuminate\Http\Request;



class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_create');
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
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function show(user_detail $user_detail)
    {
        return view ('user_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(user_detail $user_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_detail $user_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_detail $user_detail)
    {
        //
    }
}
