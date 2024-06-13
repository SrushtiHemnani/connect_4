<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreGameResultRequest;

/**
 *
 */
class Connect4Controller extends Controller
{

    public function index()
    {
        return view('connect4.index');
    }

    public function storeResult(StoreGameResultRequest $gameResultRequest)
    {
        $user = auth()->user();

        $user->gameResult()->create($gameResultRequest->validated());
        // return jsson reponse ok
        return response()->json([ 'message' => 'Game result stored successfully' ]);
    }

}
