<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $like;
    public function __construct(Like $like)
    {
        $this->like = $like;
    }
    public function index()
    {
        //
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
    public function store($post_id)
    {
        //
        $this->like->user_id = Auth::id();
        $this->like->post_id = $post_id;
        $this->like->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        //
        $this->like->where('user_id',Auth::id())->where('post_id',$post_id)->delete();

        return redirect()->back();
    }
}
