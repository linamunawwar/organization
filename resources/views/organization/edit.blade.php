@extends('layouts.app')

@section('content')
{{ Form::model( $organization, ['route' => ['organization.update', $organization->id], 'method' => 'post', 'role' => 'form'] ) }}
    <div class="form-group">
		{{Form::label('name', 'Name')}}
    	{{ Form::text('name') }}
   	</div>
   	<div class="form-group">
    	{{Form::label('phone', 'Phone')}}
		{{ Form::text('phone') }}<br>
	</div>
	<div class="form-group">
		{{Form::label('email', 'Email')}}
		{{ Form::text('email') }}<br>
	</div>
	<div class="form-group">
		{{Form::label('website', 'Website')}}
		{{ Form::text('website') }}<br>
	</div>
	<div class="form-group">
		{{ Form::button('Save', ['type' => 'submit']) }}
	</div>
{{ Form::close() }}
@endsection