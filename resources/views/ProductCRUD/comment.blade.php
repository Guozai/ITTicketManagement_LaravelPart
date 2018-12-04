@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Comment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>



    <div class="form-group">
        {!! Form::label('Comment', 'I have something to say...') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
    <button class="btn btn-Clear" type="reset">Clear</button>




    {!! Form::close() !!}
@endsection