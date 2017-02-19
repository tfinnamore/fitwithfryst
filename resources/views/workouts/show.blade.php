  @extends('app')

  @section('content')

    <p>
      "YARRRRRRRR!!!!!!! THAR BE WORKOUT DETAILS HERE!!!!!!!";
    </p>
  <p>
    Name: {{ $workout->name }}
  </p>
  <p>
    Date: {{ $workout->date }}
  </p>

  @endsection

  @section('scripts')

  @endsection
