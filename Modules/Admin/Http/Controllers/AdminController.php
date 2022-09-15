<?php

namespace Modules\Admin\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use App\Models\User;
use App\Models\Contact;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use DataTables;
use Illuminate\Database\QueryException;





class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(Auth::check()){
            return view('admin::index');
        }
        else{
            return redirect('admin_login');
        }
    }
    function user_msg(Request $request)
    {
        if ($request->ajax()) {
            $data = Contact::select('*')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin::message');
            
    }
    function upload(Request $request)
    {
        $request->validate([
            'file'=>'required'
        ]);
       $db = new Image();
       $file = $request->file;
       
        $filename = str_replace(' ','',date("F d Y.", filemtime($file))).$file->getClientOriginalExtension();
        $request->file->move(public_path('./uploads'),$filename);
        try{
            $db->image = $filename;
            $result = $db->save();
            if($result>0)
            {
                return back()->with('success','Images Uploaded Successfully');
            }
            else{
                return back()->with('fail','Something went wrong...Try again !!!');
            }
        }
        catch(Exception $e){
            return back()->with('fail','Duplicate image name are not allowed..');
        }
            
    }
    function update_profile(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'pass'=>'required|max:10'
        ]);
       $db = new User();
       
        try{
            $result = User::where('id',Auth::user()->id)->update(['name'=>$request->name,'password'=>Hash::make($request->pass)]);

            
            if($result>0)
            {
                return back()->with('success','Profile Updated Successfully');
            }
            else{
                return back()->with('fail','Something went wrong...Try again !!!');
            }
        }
        catch(Exception $e){
            return back()->with('fail','Duplicate image name are not allowed..');
        }
            
    }
    function get_img()
    {
        
        return Image::all();
    }
    function delete_img(Request $req)
    {
        // return "true";÷
        $result = Image::where('id', $req->id)->delete();
        
        if($result>0)
        {
            return "true";
        } 
        else{
            return "false";
        }
    }
}