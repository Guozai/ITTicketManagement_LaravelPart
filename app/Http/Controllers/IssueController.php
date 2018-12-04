<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Ticket;

class IssueController extends Controller
{
    public function create()
    {
        $ticket = Ticket::all();
        return view('issue.create', ['tickets' => $ticket ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            //'type' => 'required',
            //'status' => 'required',
            'area' => 'required',
            'name' => 'required|min:3|max:18',
            'preferred_contact' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric|min:8',
            'mobile' => 'digits:10',
            'description' => 'required|min:3',
        ]);

        $allRequest = $request->all();
        $customer = new Customer();
        $customer->name = $allRequest['name'];
        $customer->preferred_contact = $allRequest['preferred_contact'];
        $customer->phone = $allRequest['phone'];
        $customer->mobile = $allRequest['mobile'];
        $customer->email = $allRequest['email'];
        $customer->save();

        $ticket = new Ticket();
        $ticket->type = 'Issue';
        $ticket->status = 'Active';
        $ticket->area = $allRequest['area'];
        $ticket->description = $allRequest['description'];
        $ticket->customer_id = $customer->id;
        $ticket->save();

        /*
         * Using sessions
         * */
        //$request->session()->put('Ticket', $ticket->id);
        //$request->session()->put('name', $ticket->customer->name);

        return redirect()->route('productCRUD.index');
    }
}
