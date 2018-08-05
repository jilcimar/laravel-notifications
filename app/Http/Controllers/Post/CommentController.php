<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\StoreCommentFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreCommentFormRequest $request)
    {
        $request->user()->comments()->create($request->all());
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
