<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers =  User::whereIn('role_id', [3])->get();
        return view('dashboard.drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ' required|unique:users',
            'phone' => 'required',
            'password' => 'required',

        ], [
            'first_name.required' => 'رجاءاً ادخل الاسم الاول',
            'last_name.required' => 'رجاءاً ادخل الاسم الثاني ',
            'email.required' => 'رجاءاً أعد إدخال البريد الإلكتروني',
            'email.unique' => 'البريد الإلكتروني مأخوذ',
            'phone.required' => 'رجاءاً أعد إدخال رقم الجوال',
            'password.required' => 'رجاءاً أختار أدخل كلمة السر ',

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()]);
        }
        // if (!$validator->passes()) {
        //     return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        // } 

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => 3
        ]);
        return response()->json(['status' => 1, 'msg' => 'تم انشاء مشرف جديد', 'url' => route('drivers.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = User::findOrFail($id);
        return view('dashboard.drivers.edit', compact('driver'));
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
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ' required',
            'phone' => 'required',


        ], [
            'first_name.required' => 'رجاءاً ادخل الاسم الاول',
            'last_name.required' => 'رجاءاً ادخل الاسم الثاني ',
            'email.required' => 'رجاءاً أعد إدخال البريد الإلكتروني',
            'email.unique' => 'البريد الإلكتروني مأخوذ',
            'phone.required' => 'رجاءاً أعد إدخال رقم الجوال',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()]);
        }
        // return($validator->data) ;
        $admin = User::findOrFail($id);

        if ($request->password == null) {
            $admin->first_name = $request->first_name;
            $admin->last_name = $request->last_name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->save();
        } else {
            $admin->first_name = $request->first_name;
            $admin->last_name = $request->last_name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->password = $request->password;
            $admin->save();
        }

        // return back();
        return response()->json(['status' => 1, 'msg' => 'data saved']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
}
