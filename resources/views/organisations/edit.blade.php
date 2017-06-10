@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit organisation</div>
                
                <div class="panel-body">
                    {!! Form::model($organisation, ['method' => 'PATCH', 'route' => ['organisations.update', $organisation->id]]) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'organisation Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('phone', 'Phone') }}
                        {{ Form::text('phone', null, ['class' => 'form-control']) }}
                    </div>                        
                   <div class="form-group">
                        {!! Html::linkRoute('organisations.show', 'Cancel', [$organisation->id], ['class' => "btn btn-default"]) !!}
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
