@extends('layout.master')
@section('title', 'Reply To a Ticket')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Request a Service</h2>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! Form::open(['action' => 'TicketController@store']) !!}

    <div class="form-group">
        {!! Form::label('service area', 'Service Area:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-6">
            {!! Form::select('type', array('Information Techonology Services', 'Web and Digital Services',
                'Other')) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Customer Details</h3>
            </div>
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preferred', 'Preferred contact method') !!}
        {!! Form::select('preferred_contact', array('O' => ' -- None --', 'E' => 'Email', 'P' => 'Work Phone', 'M' => 'Mobile Phone')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone') !!}
        {!! Form::text('phone', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('mobile', 'Mobile') !!}
        {!! Form::text('mobile', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description of the service your request') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
    <button class="btn btn-Clear" type="reset">Clear</button>

    {!! Form::close() !!}
@endsection