@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-sm-6">
							<h4>Organisation Details</h4>
						</div>
						<div class="col-sm-6">
							{!! Html::linkRoute('organisations.edit', 'Edit', [$organisation->id], ['class' => "btn btn-default pull-right"]) !!}
						</div>
					</div><!-- end of row -->
				</div><!-- end of panel-heading -->

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Name:</dt
                                <dd>{{ $organisation->name }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Email:</dt>
                            <dd>{{ $organisation->email }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Phone:</dt>
                            <dd>{{ $organisation->phone }}</dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-body -->
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                        Created: {{ $organisation->created_at }}
                    </div>
                    <div class="col-sm-5">
                        Updated: {{ $organisation->updated_at }}
                    </div>
                    <div class="col-sm-2">
                    {!! Form::open(['route' => ['organisations.destroy', $organisation->id],'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => "btn btn-link btn-xs pull-right"]) !!}
                    {!! Form::close() !!}
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-footer -->

        </div>
    </div>
</div>
@endsection
