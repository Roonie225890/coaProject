<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Feature Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('feature', 'Feature:') !!}
    {!! Form::textarea('feature', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_place', 'Sale Place:') !!}
    {!! Form::text('sale_place', null, ['class' => 'form-control']) !!}
</div>

<!-- Produce Org Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produce_org', 'Produce Org:') !!}
    {!! Form::text('produce_org', null, ['class' => 'form-control']) !!}
</div>

<!-- Spec And Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spec_and_price', 'Spec And Price:') !!}
    {!! Form::text('spec_and_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_tel', 'Contact Tel:') !!}
    {!! Form::text('contact_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::textarea('img', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_count', 'View Count:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
