<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Customer;

class ProductCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = Ticket::orderBy('id', 'DESC')->paginate(5);
        return view('ProductCRUD.index', compact('products'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'status' => 'required',
            'name' => 'required|min:3|max:18',
            'preferred_contact' => 'required',
            'email' => 'required|email',
            'description' => 'required|min:3',
        ]);
        Ticket::create($request->all());
        return redirect()->route('productCRUD.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Ticket::find($id);
        return view('ProductCRUD.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Ticket::find($id);
        return view('ProductCRUD.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required',
            'status' => 'required',
            'name' => 'required|min:3|max:18',
            'preferred_contact' => 'required',
            'email' => 'required|email',
            'description' => 'required|min:3',
        ]);
        Ticket::find($id)->update($request->all());
        return redirect()->route('productCRUD.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return redirect()->route('productCRUD.index')->with('success', 'Product deleted successfully');
    }

    /**
     * Function to change the status of a ticket
     */
    public function changeStatus(Request $request, $id)
    {
        Ticket::find($id)->update($request->only(['status']));
        return redirect()->route('productCRUD.index')->with('success', 'Product updated successfully');
    }
}
    //public function addComment() { }

