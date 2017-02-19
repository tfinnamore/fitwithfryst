@extends('app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>Welcome!!!!</h2>
                    <p>
                      Hello! Please begin by adding a workout by clicking on the link below
                    </p>
                    <a href={{ route('addWorkout') }}>Add Workout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
