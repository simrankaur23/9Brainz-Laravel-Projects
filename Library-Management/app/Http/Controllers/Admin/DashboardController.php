<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use DataTables;
class DashboardController extends Controller
{
    // public function registered(){
    //     $users = User::all();
    //     return view('admin.register')->with('users',$users);
    // }
    // public function getUsers(){
    //     $users = User::select(['id', 'usertype']);
    //     return DataTables::of(User::query())
    //     ->addColumn('action', function ($users) {
    //         return '<a href="/role-edit/'.$users->id.'" class="btn btn-primary">Edit</a>';
    //     })
    //     ->addColumn('delete', function ($users) {
    //         return '<a href="" class="btn btn-danger">Reject</a>';
    //     })
    //     ->rawColumns(['delete' => 'delete','action' => 'action'])
    //     ->editColumn('id', 'ID: {{$id}}')
    //      ->make(true);
    // }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = User::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'"  data-toggle="modal" data-target="#myModal" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete"  id="'.$data->id.'"  class="delete  btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.register');
    }

   
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);
            // dd($data);   
            return response()->json(['result' => $data]);
        }
    }

    public function update(Request $request, User $user)
    {
        $rules = array(
            // 'name'        =>  'required',
            'email'        =>  'required',
            'usertype'        =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'name'    =>  $request->name,
            'email'     =>  $request->email,
            'usertype'     =>  $request->usertype,
        );
        

        User::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);

    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
       
        $data->delete();
    }


   
}
