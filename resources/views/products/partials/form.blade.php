<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__('Name')}}:</strong>
            {!! Form::text('name', null, array('placeholder' => __('Name'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__('Details')}}:</strong>
            {!! Form::textarea('detail', null, [
                'class' => 'form-control', 
                'rows' => '4',
                'name' => 'detail',
                'placeholder' => __('Details'),
                ]) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'] )  !!}
    </div>
</div>