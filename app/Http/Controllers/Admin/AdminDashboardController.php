<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Models\TransactionDetail;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $customer = User::count();
        // $revenue = Transaction::where('transaction_status', 'SUCCESS')->sum('total_price');
        $revenue = Transaction::sum('total_price');
        $transactions = Transaction::count();
        $buyTransactions = Transaction::with('user', 'transaction_detail');
        // $transaction_count = Transaction::with('transaction_detail')->where('transactions_id', $id)->count();
        // $trans = TransactionDetail::with(['transaction.user','product.galleries'])
        //                     ->whereHas('product', function($product){
        //                         $product->where('users_id', Auth::user()->id);
        //                     });
        return view('pages.admin.admin-dashboard', [
            'customer' => $customer,
            'revenue' => $revenue,
            'transactions' => $transactions,
            // 'buyTransactions' => $buyTransactions,
            // 'trans' => $trans
            // 'transaction_count' => $transaction_count,
            'transaction_data' => $buyTransactions
            ->latest()->paginate(4),
        ]);
    }

    public function cetakPdf(Request $request, $tglawal, $tglakhir)
    {
        // dd(["Tgl Awal : ".$tglawal, "Tgl Akhir : ".$tglakhir]);
        $cetakPdf = Transaction::where('created_at',[$tglawal, $tglakhir])->get();
        return view('pages.admin.cetakPdf', [
            'cetakPdf' => $cetakPdf,
            'tglawal' => $request->tglawal,
            'tglakhir' => $request->tglakhir
        ]);
    }
}
