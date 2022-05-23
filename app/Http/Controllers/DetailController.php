<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    // public function index()
    // {
    //     return view('pages.detail');
    // }
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries','user'])->where('slug', $id)->firstOrFail();
        $comment = Comment::where('product_id',$product->id)->with('user')->get();
        // $countComment = Comment::with('user')->where('product_id', $product->id)->count();

        return view('pages.detail', [
            'product' => $product,
            'comment' => $comment
            // 'countcomment' => $countComment
        ]);
    }

    public function add(Request $request, $id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
            'qty' => $request->qty
        ];

        Cart::create($data);

        return redirect()->route('cart');
    }

    
    // public function postComment(Request $request)
    // {
    //     $request->request->add(['users_id' => auth()->user()->id]);
    //     Comment::create($request->all());

    //     return back()->with('success', 'Comments Has Added');
    // }
}
