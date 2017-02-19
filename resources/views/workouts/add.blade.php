@extends('app')

@section('content')
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/workout/create') }}">
      {{ csrf_field() }}
      <h2 class="text-center">Add a Workout</h2>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" class="col-md-4 control-label">Workout Name</label>

          <div class="col-md-6">
              <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
          <label for="date" class="col-md-4 control-label">Date</label>

          <div class="col-md-6">
              <input id="date" type="date" class="form-control" name="date">

              @if ($errors->has('date'))
                  <span class="help-block">
                      <strong>{{ $errors->first('date') }}</strong>
                  </span>
              @endif
          </div>
      </div>


      <div class="form-group">
          <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Add Workout
              </button>
          </div>
      </div>
  </form>


@endsection

@section('scripts')
  <script>
$( function() {
  $( "#date" ).datepicker().val(new Date().toLocaleDateString("en-US"));
} );
</script>
@endsection
