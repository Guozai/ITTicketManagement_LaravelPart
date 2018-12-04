@extends('layout.master')
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>Tickets Management Center</h2>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th width="50px">No</th>
            <th width="90px">Type</th>
            <th width="150px">Name</th>
            <th>Description</th>
            <th width="90px">Status</th>
            <th width="490px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->customer->name}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->status }}</td>
                <td>
                    @if ($product->status == 'Active')
                        <a class="btn btn-warning" href="{{ route('productCRUD.edit',$product->id) }}">Deactive</a>
                    @else
                        <a class="btn btn-warning" href="{{ route('productCRUD.edit',$product->id) }}">Active</a>
                    @endif
                    <a class="btn btn-success" href="{{ route('comment',$product->id) }}">Comment</a>
                    <a class="btn btn-info" href="{{ route('productCRUD.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('productCRUD.edit',$product->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['productCRUD.destroy', $product->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $products->render() !!}
@endsection