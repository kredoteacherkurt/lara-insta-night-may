<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    private $follow;
    /**
     * Display a listing of the resource.
     */
    public function __construct(Follow $follow)
    {
        //
        $this->follow = $follow;
    }


    public function store($following_id)
    {
        //
        $this->follow->follower_id = Auth::id();
        $this->follow->following_id = $following_id;
        $this->follow->save();

        return redirect()->back();
    }



    public function destroy($following_id)
    {
        //
        $this->follow->where('follower_id',Auth::id())->where('following_id',$following_id)->delete();

        return redirect()->back();
    }
}
