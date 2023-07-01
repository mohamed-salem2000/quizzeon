@extends('studentdashboard.layoutstudent')
@section('content')
<div class="content">
@foreach ($users as $user)
@endforeach
@foreach($subjects as $subject)
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h4 class="card-title">{{ $subject->subject_name }}</h4>
            <p class="card-text">
            {{ $subject->description }}</p>
            <p class="card-text">
            {{ $user->first_name }}<span> {{ $user->last_name }}</span> </p>
            <p class="card-text">
            section: {{ $subject->section }}</p>
            <a href="{{route('studentexam')}}" class="card-link">Enter</a>
        </div>
    </div>
    @endforeach
</div>
@endsection