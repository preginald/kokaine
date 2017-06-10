@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">Organisations
					<a href="{{ route('organisations.create') }}" class="pull-right">
						Add New organisation
					</a>
				</div>

				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						@foreach ($organisations as $organisation)
							<tr>
								<td>{{ $organisation->id }}</td>
								<td><a href="{{ route('organisations.show', $organisation->id) }}">{{ $organisation->name }}</a></td>
								<td>{{ $organisation->email }}</td>
								<td>{{ $organisation->phone }}</td>
								<td><span class="pull-right"><a href="{{ route('organisations.show', $organisation->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('organisations.edit', $organisation->id) }}" class="btn btn-sm btn-default">Edit</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					{!! $organisations->links() !!}
				</div>
			</div>
			@if (count($deleted))
            <div class="panel panel-default">
				<div class="panel-heading">
					Deleted Organisations
				</div>

				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						@foreach ($deleted as $delete)
							<tr>
								<td>{{ $delete->id }}</td>
								<td><a href="{{ route('organisations.show', $delete->id) }}">{{ $delete->name }}</a></td>
								<td>{{ $delete->email }}</td>
								<td>{{ $delete->phone }}</td>
								<td><span class="pull-right">
                    {!! Form::open(['route' => ['organisations.restore', $delete->id],'method' => 'POST']) !!}
                    {!! Form::submit('Restore', ['class' => "btn btn-link btn-xs pull-right"]) !!}
                    {!! Form::close() !!}
</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@endif
        </div>
    </div>
</div>
@endsection
