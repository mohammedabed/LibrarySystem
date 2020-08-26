@extends('library')
@section('title')
	Register -- {{ $common['app'] }}
@stop
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{trans ('greet.reg')}}</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-vertical" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.fname') }}</label>
									<input type="text" class="form-control input-lg" name="firstName" value="{{ old('firstName') }}"
										   maxlength="50" required placeholder="First Name">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.lname') }}</label>
									<input type="text" class="form-control input-lg" name="lastName" value="{{ old('lastName') }}"
										   maxlength="50" required placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.email') }}</label>
									<input type="email" class="form-control" name="email" value="{{ old('email') }}"
									maxlength="30" required placeholder="Email">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12"></div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.gender') }}</label>
									<select class="form-control" name="gender" required>
										<option>{{ trans ('greet.mgender') }}</option>
										<option>{{ trans ('greet.fgender') }}</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.birth') }}</label>
									<input type="text" class="form-control date-picker" name="dateOfBirth"
										   	value="{{ old('dateOfBirth') }}" maxlength="50" required
											placeholder="Date Of Birth">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.pass') }}</label>
									<input type="password" class="form-control" name="password" required maxlength="20">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label class="control-label">{{ trans ('greet.cpass') }}</label>
									<input type="password" class="form-control" name="password_confirmation"
									required maxlength="20">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12 text-right">
								<button type="submit" class="btn btn-primary">
									{{trans ('greet.Register')}}								</button>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
