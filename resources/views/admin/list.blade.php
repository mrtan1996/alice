@extends('admin.master')

@section('content')
	<h1>
		List Users
	</h1>
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($listUser as $user)
									<tr class="gradeA even" role="row">
									<td class="sorting_1">
										{{ $user->name }}
									</td>
									<td>{{ $user->email }}
									</td>
									<td>
									<!-- duong dan dung asset -->
									<!-- <a href="{{ asset('user/edit/'. $user->id)}}"></a> -->
									<a href="{{ action('UserController@create',['id'=> $user->id]) }}">		<button type="button" class="btn btn-success">New</button>
									</a>
									<form method="POST" action = {{ route('users.destroy',[ $user->id]) }}>
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									
									<a href="{{ action('UserController@edit',['id'=> $user->id]) }}">		
									<button type="button" class="btn btn-primary">Edit</button>
									<button type="submit" class="btn btn-danger">Delete</button>
									<!-- <button onclick="return confirm_delete()"></button> -->
									</a>
									</form>
									
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>

@endsection