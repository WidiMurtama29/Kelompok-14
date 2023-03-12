<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\UserVoucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserVoucherController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $vouchers = Voucher::all();
        $userVouchers = UserVoucher::where('user_id', $user->id)->get();

        foreach ($vouchers as $voucher) {
            $voucher['is_claimmed'] = false;
        }

        for ($i = 0; $i < count($userVouchers); $i++) {
            for ($j = 0; $j < count($vouchers); $j++) {
                if ($userVouchers[$i]['voucher_id'] == $vouchers[$j]['id']) {
                    $vouchers[$j]['is_claimmed'] = true;
                }
            }
        }

        return view('my-gifts', [
            'route' => 'my-gifts',
            'vouchers' => $vouchers,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $userVoucher = $user->vouchers->find($id);
        return response()->json($userVoucher);
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $aleradyExists = UserVoucher::where('user_id', $user->id)->where('voucher_id', $request->voucher_id)->exists();

        if (!$aleradyExists) {
            UserVoucher::create([
                'user_id' => $user->id,
                'voucher_id' => $request->voucher_id
            ]);

            return redirect()->to('my-gifts');
        }
    }
}
