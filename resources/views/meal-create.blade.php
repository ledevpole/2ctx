@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meal</div>

                <div class="card-body">

                    'name','description','photo','quantityInStock','buyPrice','salePrice','tauxTVA','restaurant_id','user_id'

                    {{ Form::open(array('url' => 'meal')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'description') }}
                        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('photo', 'photo') }}
                        {{ Form::text('photo',Input::old('photo'), array('class' => 'form-control')) }}
                    </div>

                    {{ Form::submit('Create the Meal!', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection