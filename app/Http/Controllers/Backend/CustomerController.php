<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function CreateCustomer()
    {
        $customer = Customer::latest()->get();
        return view('backend.customers.create',compact('customer'));
    }

    public function StoreCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:customers|max:11',
            'email' => 'required|unique:customers'
        ]);

        Customer::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $notification = array(
            'message' => 'Customer Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('create.customer')->with($notification);
    }

    public function EditCustomer($id)
    {
        $types = Customer::findOrFail($id);
        return view('backend.customers.edit_customer',compact('types'));
    }

    public function UpdateCustomer(Request $request)
    {
        $pid = $request->id;

        Customer::findOrFail($pid)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $notification = array(
            'message' => 'Customer Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('create.customer')->with($notification);
    }

    public function DeleteCustomer($id)
    {
        Customer::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}