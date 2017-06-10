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
				<a href="{{ route('organisations.deleted') }}" >
					 Show deleted
				</a>
			</div>

        </div>
    </div>
</div>
@endsection
