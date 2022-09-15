<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('admin/dashboard');
    }
    public function insert_message(Request $req)
    {
        $req->validate([
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'mob'=>'required|numeric',
            'msg'=>'required'
        ]);
        $db = new Contact();
        $db->name = $req->name;
        $db->mobile = $req->mob;
        $db->message = $req->msg;
        $db->date = date("d/m/Y") ;
        $result = $db->save();
        if($result >0)
        {
            return back()->with('success',"Response Submited Successfully,We will contact you soon...");
        }
        else{
            return back()->with('fail',"Something went wrong..Try again after some time !!");
           
        }

    }
    public function load_img()
    {
        return Image::orderby('id','desc')->get();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}