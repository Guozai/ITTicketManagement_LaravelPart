<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class commentAPIController extends Controller
{
    public function update(Request $request, $ticket_id) {
        $comment = $request->json()->all();

        $ticket_id = $comment['ticket_id'];
    }
}
