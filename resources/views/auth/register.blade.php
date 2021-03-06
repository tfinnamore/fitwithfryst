@extends('app')

@section('content')
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
          <label for="fname" class="col-md-4 control-label">First name</label>

          <div class="col-md-6">
              <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" autofocus>

              @if ($errors->has('lname'))
                  <span class="help-block">
                      <strong>{{ $errors->first('lname') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
          <label for="lname" class="col-md-4 control-label">Last name</label>

          <div class="col-md-6">
              <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}">

              @if ($errors->has('lname'))
                  <span class="help-block">
                      <strong>{{ $errors->first('lname') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
          </div>
      </div>
  </form>
@endsection
