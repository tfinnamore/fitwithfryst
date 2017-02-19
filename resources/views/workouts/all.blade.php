@extends('app')

@section('content')


  @foreach ($workouts->workouts as $wo)
    <p>
      Name: {{ $wo->name }}  Date: {{ $wo->date }}

    </p>
  @endforeach




@endsection

@section('scripts')

@endsection
