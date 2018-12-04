@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @if ($product->type === 'Service')
                    <h2> Show Service </h2>
                @elseif ($product->type === 'Issue')
                    <h2> Show Issue </h2>
                @else
                    <h2> Show Ticket </h2>
                @endif
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $product->status}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Area:</strong>
                @if ($product->area === 'I')
                    <strong> Information Technology Services </strong>
                @elseif ($product->area === 'W')
                    <strong> Web and Digital Services </strong>
                @else
                    <strong> Other </strong>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>Customer Details</h4>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->customer->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $product->customer->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preferred contact method:</strong>
                @if ($product->customer->preferred_contact == 'P')
                    <h5> Work Phone </h5>
                @elseif ($product->customer->preferred_contact == 'M')
                    <h5> Mobile Phone </h5>
                @elseif ($product->customer->preferred_contact == 'E')
                    <h5> Email </h5>
                @else
                    <strong> Error method input </strong>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->description}}
            </div>
        </div>
    </div>
@endsection