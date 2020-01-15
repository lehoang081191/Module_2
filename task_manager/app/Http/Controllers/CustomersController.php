<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')->get();

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = trim($request->name);
        $phone = trim($request->phone);
        $email = trim($request->email);

        $result = DB::table('customers')->insert(['name' => $name, 'phone' => $phone, 'email' => $email]);
        if($result){
            $message = 'Customer Added';
        }

        return redirect()->route('customer.index')->with('message', $message);
    }

    public function search(Request $request)
    {
        $key = trim($request->key);

        $customers = DB::table('customers')->where('name', 'like', '%'. $key .'%')->get();
        return view('customers.showSearchResult', compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = DB::table('customers')->find($id);

        return view('customers.showCustomer', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = DB::table('customers')->find($id);

        return view('customers.edit', compact('customer'));
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
        $name = trim($request->name);
        $phone = trim($request->phone);
        $email = trim($request->email);

        $result = DB::table('customers')->where('id', $id)->update(['name' => $name, 'phone' => $phone, 'email' => $email]);
        if($result){
            $message = "Customer Updated";
        }else {
            $message = null;
        }

        return redirect()->route('customer.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('customers')->where('id', $id)->delete();
        if($result){
            $message = 'Customer Removed';
        }

        return redirect()->route('customer.index')->with('message', $message);
    }
}
