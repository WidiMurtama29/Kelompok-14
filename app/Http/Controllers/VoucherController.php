<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $voucher = Voucher::all();
        return response()->json($voucher);
    }

    public function show($id)
    {
        $voucher = Voucher::find($id);
        return response()->json($voucher);
    }

    public function store(Request $request)
    {
        $voucher = Voucher::create($request->all());
        return response()->json($voucher);
    }

    public function update($id, Request $request)
    {
        $voucher = Voucher::find($id);
        $voucher->update($request->all());
        return response()->json($voucher);
    }

    public function delete($id)
    {
        $voucher = Voucher::find($id);
        $voucher->delete();
        return response()->json('deleted');
    }
}
