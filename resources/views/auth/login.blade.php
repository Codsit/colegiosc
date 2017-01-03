@extends('template.app')

@section('main')
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif
				<hr>

            <div class="f-login">
				<div class="col-sm-3 col-lg-3">

				</div>
				<div class="col-sm-6 col-lg-6">
					<h4>{{ trans('front/login.connection') }}</h4>

					{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}
					<div class="form-group">
						<input type="text" name="log" required="required"/>
						<label class="control-label">Correo o su nombre</label><i class="bar"></i>
					</div>
					<div class="form-group">
						<input type="password" name="password" required="required"/>
						<label class="control-label">Password</label><i class="bar"></i>
					</div>
					<ul class="btn-list">
						<li><button class="btn blue sm full-width">Entrar</button></li>
						<li>{!! link_to('auth/register', trans('front/login.registering'), ['class' => 'btn blank dark sm full-width']) !!}</li>
					</ul>
					<div class="remeber-nd-forget">
						{!! link_to('password/email', trans('front/login.forget')) !!}
					</div>
					<div class="social-icons-2">
						<span>Conectarse con </span>
						<ul>
							<li><a class="fa fa-twitter-square" href="#"></a></li>
							<li><a class="fa fa-facebook-square" href="#"></a></li>
							<li><a class="fa fa-linkedin-square" href="#"></a></li>
							<li><a class="fa fa-pinterest-square" href="#"></a></li>
							<li><a class="fa fa-google-plus-square" href="#"></a></li>
							<li><a class="fa fa-github-square" href="#"></a></li>
						</ul>
					</div>
					{!! Form::close() !!}
				</div>
				<div class="col-sm-3 col-lg-3">
				</div>
			</div>


@stop

