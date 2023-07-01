@extends('dashboredinstructor.instructorlayout')
@section('content')
<style>
span {
    color: white;
}

.question-number {
    color: #e14eca;
}
</style>

<div class="content">

    <div>
        @foreach ($questionData as $index => $question)
        <div class="question-container">
            <p class="question-number">Question {{ $index + 1 }}</p>
            <p class="question-text">{!! $question['questionText'] !!}</p>
        </div>
        @if ($question['questionType'] == 1)
        <ul>
            @foreach ($question['options'] as $option)
            <div class="form-check form-check-radio">
                <label class="form-check-label"><span>{{ $option->option_text }}</span>
                    <input class="form-check-input" type="radio" name="question{{ $index + 1 }}" id="exampleRadios1"
                        value="{{ $option->id }}" id="option{{ $option->id }}">
                    <span class="form-check-sign"></span>
                </label>
            </div>
            @endforeach
        </ul>
        <hr>
        @elseif ($question['questionType'] == 2)
        <ul>
            @foreach ($question['options'] as $option)
            <div class="form-check">
                <label class="form-check-label"><span>{{ $option->option_text }}</span>
                    <input class="form-check-input" type="checkbox" id="option{{ $option->id }}"
                        name="question{{ $index + 1 }}[]" value="{{ $option->id }}">
                    <span class="form-check-sign">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
            @endforeach
        </ul>
        @elseif ($question['questionType'] == 3)
        <ul>
            @foreach ($question['options'] as $option)
            <div>
                <input type="radio" name="question{{ $index + 1 }}[]" id="option{{ $option->id }}"
                    value="{{ $option->id }}">
                <label for="option{{ $option->id }}">
                    <img src="../../{{ $option->option_text }}" alt="{{ $option->option_text }}" width="100"
                        height="100">
                </label>
            </div>
            @endforeach
        </ul>
        @endif
        @endforeach
    </div>

    @endsection