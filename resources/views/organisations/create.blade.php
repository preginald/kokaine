@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Create New Organisation</div>

            <div class="panel-body">
                {!! Form::open(['route' => 'organisations.store']) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Organisation Name') }}
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
                   {{ Form::submit('Create Organisation', ['class' => 'btn btn-success btn-block']) }} 
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
