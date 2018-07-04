<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\HanghoaRequest;
use App\models\admin;
use App\models\loaihang;
use App\models\hanghoa;
use Carbon;
use GuzzleHttp\Client;
class BanhangController extends Controller
{
    //
    public function Get_login()
    {
        return view('login');
    }
    public function Post_login(Request $request)
    {
        $auth=array('email'=>$request->email,'password'=>$request->pass);
        if(Auth::guard('admin')->attempt($auth,false))
        {
            return redirect()->route('g-insert');
        }
        else
        {
            return redirect()->back()->with(['errormessage'=>'Email hoặc password không đúng!']);
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function Get_ProductList(Request $request)
    {
        $type=loaihang::all();
        if($request->search && $request->search != '')
        {
            $data=hanghoa::where('tenhang','like','%'.$request->search.'%')->orWhere('id',$request->search)
            ->paginate(10)->withPath('?search='.$request->search);
            return view('modules.ProductList',compact('data','type'));        
        }
        else if($request->loaihang_id)
        {
            $data=hanghoa::where('loaihang_id',$request->loaihang_id)
            ->paginate(10)->withPath('?loaihang_id='.$request->loaihang_id);
            return view('modules.ProductList',compact('data','type'));
        }
        else{
            $data=hanghoa::all();
            return view('modules.ProductList',compact('data','type'));
        }
    }

    public function Get_insert_pro()
    {
        $data=loaihang::all();
        return view('modules.Insertproduct',compact('data'));
    }
    public function Post_insert_pro(HanghoaRequest $request)
    {
        //return $request->all();
         try{
           
            $file=$request->file('img');
            $name=$file->getClientOriginalName();
            $file->move(public_path('/hinhanh'),$name);
            hanghoa::create([
                'tenhang'=>$request->tenhang,
                'donvitinh'=>$request->donvitinh,
                'dongia'=>$request->dongia,
                'soluong'=>$request->soluong,
                'hinhanh'=>$name,
                'loaihang_id'=>intval($request->loaihang_id) 
            ]);
           return redirect()->route('pro-list');
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return redirect()->back();
        } 
    }
    public function Get_Update($id)
    {
        $data=loaihang::all();
        $info=hanghoa::find($id);
        return view('modules.UpdateProduct',compact('data','info'));
    }
    public function Post_Update(Request $request,$id)
    {
        try{
            $file=$request->file('img');
            $name=$file->getClientOriginalName();
            $file->move(public_path('/hinhanh'),$name);
            hanghoa::find($id)->update([
                'tenhang'=>$request->tenhang,
                'donvitinh'=>$request->donvitinh,
                'dongia'=>$request->dongia,
                'soluong'=>$request->soluong,
                'hinhanh'=>$name,
                // 'loaihang_id'=>intval($request->loaihang_id) 
            ]);
            return redirect()->route('pro-list');
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return redirect()->back();
        } 
    }
    public function Remove_Pro(Request $request)
    {
        if($request->ajax()){
            // return $request->id;
            try
            {
                hanghoa::find($request->id)->delete();
                return 'ok';
            }
            catch(\Illuminate\Database\QueryException $ex){ 
               return 'error';
            }
        }
    }
    public function Get_insert_type()
    {
        $data=loaihang::all();
        return view('modules.InsertType',compact('data'));
    }
    public function Post_insert_type(Request $request)
    {
        try{
            loaihang::create(['tenloai'=>$request->tenloai]);
            return redirect()->route('g-type')->with(['message'=>'Thêm thành công!']);        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return redirect()->back();
        }  
    }

    public function Get_View_Pro(Request $request)
    {
        $data=hanghoa::all();
        if($request->ajax())
        {
            return view('modules.ViewProduct',compact('data'));
        }
            
    }

    public function Get_Index()
    {
        $data=hanghoa::all();
        return view('user-modules.user-index',compact('data'));
    }
}
