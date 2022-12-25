<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Comments\StoreRequest;
use App\Models\CommentModel;

class Comments extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        $data = CommentModel::where('active', '=', 1)->orderBy('created_at', 'desc')->get();
        return view('comments', ['data' => $data]);
    }


    /**
     * @param StoreRequest $request
     * @return Application|Factory|View
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            $comment = new CommentModel();
            $comment->name = $data['name'];
            $comment->text = $data['text'];
            $comment->save();
        }

        return $this->show();
    }
}
