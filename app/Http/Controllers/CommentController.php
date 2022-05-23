<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Product;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // public function countComment($product_id)
    // {

    //     $countComment = Comment::where('product_id',$product_id)->where('users_id', auth()->user()->id)->first();
    //     if ($countComment) {
    //         $countComment->delete();
    //         return back();
    //     } else {
    //         Comment::create([
    //             'product_id' => $product_id,
    //             'user_id' => auth()->user()->id
    //         ]);
    //         return back();
    //     }

    // }
    public function comment(Request $request)
    {

        // dd($request->all());
        Comment::create([
            'users_id' => request()->user_id,
            'product_id' => request()->product_id,
            'comment' => request()->comment,
        ]);

        // $product = Product::with(['galleries', 'user'])->findOrFail(request()->product_id);
        return back()->with('success','Komentar Success !!');
    }
}
