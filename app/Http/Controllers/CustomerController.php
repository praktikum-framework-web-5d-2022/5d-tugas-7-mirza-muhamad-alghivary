<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Barang;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::get();
        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function take(Customer $customer){
        $barangs = Barang::get();
        return view('customer.take', compact('customer', 'barangs'));
    }

    public function store(Request $request){
        $request->validate([
            'nama'=> 'required',
        ]);
        Customer::create($request->all());

        return redirect()->route('customers.index')->with('Berhasil', 'Berhasil menambahkan Trainer');
    }

    public function takeStore(Request $request, Customer $customer){
        $barangs = Barang::find($request->barang_id);
        $customer->barangs()->sync($barangs);

        return redirect()->route('customers.index')->with('message', 'Berhasil');
    }

    public function trans(){
        $barangs = Barang::get();
        return view('trans', compact('barangs'));
    }
}
