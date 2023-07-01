@extends('studentdashboard.layoutstudent')
@section('content')
<div class="content">

    <div class="section">
        @foreach ($exams as $exam)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{$exam->image}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$exam->exam_name}}</h4>
                <p class="card-text">Date: {{$exam->date}}</p>
                <p class="card-text">Time: {{$exam->time}} clock</p>
                @php
                $currentDateTime = date('Y-m-d H:i:s');
                $examDateTime = date('Y-m-d H:i:s', strtotime($exam->date . ' ' . $exam->time));
                $timeDifference = strtotime($currentDateTime) - strtotime($examDateTime);
                $minutesDifference = round($timeDifference / 60); // Convert time difference to minutes
                @endphp
                <p>{{$currentDateTime}}</p>
                @if ($currentDateTime >= $examDateTime)
                
                    @if ($minutesDifference <= 5)
                        <a href="{{ route('question', $exam->id ) }}" type="button" rel="tooltip"
                            class="btn btn-success btn-sm btn-icon">
                            <i class="tim-icons icon-settings"></i>
                        </a>
                    @else
                        <p>Sorry, you are past the allowed time to enter the exam.</p>
                    @endif
                @else
                <p>The exam has not started yet.</p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
