@extends('default')
@section('mian')
<div class="login_width">
{{ Form::open(array('action' => 'AuthController@postLogin')) }}
	<div>
		{{ Form::text('username', '', array('class' => 'form-control','placeholder'=>'Username')) }}
	</div>
	<div>
		{{ Form::password('password', array('class' => 'form-control','placeholder'=>'Password')) }}
	</div>
	<div>
		<input type="checkbox" value="remember-me"> Remember me
	</div>
	<div class="submit">
		{{ Form::submit('Login', array('class' => 'btn btn-sm btn-primary btn-block')) }}
	</div>
{{ Form::close() }}


</div>