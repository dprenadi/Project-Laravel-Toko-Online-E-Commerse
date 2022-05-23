<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionDetailController extends Controller
{
    public function index()
    {
        $transactions = TransactionDetail::with(['transaction.user','product.galleries'])
                            ->whereHas('product', function($product){
                                $product->where('users_id', Auth::user()->id);
                            });

        // $buyTransactions = Transaction::with('user')->where('users_id', Auth::user()->id)->latest()->paginate(4);

        $buyTransactions = TransactionDetail::with(['transaction.user','product.galleries'])
                            ->whereHas('transaction', function($transaction){
                                $transaction->where('users_id', Auth::user()->id);
                            })->latest()->paginate(4);

        // $revenue = $transactions->get()->reduce(function ($carry, $item) {
        //     return $carry + $item->price;
        // });

        // $customer = User::count();

        return view('pages.transaction',[
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->get(),
            // 'transaction_count' => Transaction::count(),
            // 'transaction_data' => Transaction::get(),
            'buyTransactions' => $buyTransactions
            // 'revenue' => $revenue,
            // 'customer' => $customer,
        ]);
    }

    public function detail(Request $request, $id)
    {
        // $transactions_id
        // $transaction = TransactionDetail::with(['transaction.user','product.galleries'])->where('transactions_id', $transactions_id)->get();
        
        $transaction = TransactionDetail::with(['transaction.user','product.galleries'])->findOrFail($id);
        return view('pages.transaction-detail',[
            'transaction' => $transaction
        ]);
    }

    // public function update(Request $request, $id)
    // {
    //     $data = $request->all();

    //     $item = TransactionDetail::findOrFail($id);

    //     $item->update($data);

    //     return redirect()->route('dashboard-transaction-details', $id);
    // }
}
