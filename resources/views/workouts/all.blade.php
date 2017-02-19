@extends('app')

@section('content')


  @foreach ($workouts->workouts as $wo)
    <p>
      Name: <a href={{ route('showWorkout', ['workout' => $wo->id]) }}>{{ $wo->name }}</a>  Date: {{ $wo->date }}

    </p>
  @endforeach




@endsection

@section('scripts')

@endsection
