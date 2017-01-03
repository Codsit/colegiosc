@extends('template.app')

@section('main')
			<div class="col-lg-8 col-lg-offset-2">
				@if(session()->has('status'))
      				@include('partials/error', ['type' => 'success', 'message' => session('status')])
				@endif
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif	
				<hr>	
				<h2 class="intro-text text-center">{{ trans('front/password.title') }}</h2>
				<hr>
				<p>{{ trans('front/password.info') }}</p>		
				{!! Form::open(['url' => 'password/email', 'method' => 'post', 'role' => 'form']) !!}	

					<div class="col-lg-6">
						<div class="form-group">
							<input type="text" name="email" required="required"/>
							<label class="control-label">{{trans('front/password.email')}}</label><i class="bar"></i>
						</div>
						{!! Form::submit(trans('front/form.send'), ['col-lg-3']) !!}

					</div>

				{!! Form::close() !!}

			</div>
@stop