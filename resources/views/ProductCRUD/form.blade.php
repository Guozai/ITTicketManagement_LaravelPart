<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('service area', 'Service Area:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-6">
                {!! Form::select('area', array('Information Techonology Services', 'Web and Digital Services',
                    'Other')) !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {!! Form::textarea('details', null, array('placeholder' => 'Details','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>