<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Customer;

class ProductController extends Controller
{
    public function fetch() {
        //$tickets = Ticket::orderBy('created_at', 'DESC')->get();
        $tickets = Ticket::with('Customer')->get();

        return response()->json($tickets);
    }
}
