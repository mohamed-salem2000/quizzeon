@extends('studentdashboard.layoutstudent')
@section('content')
<div class="content">

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">StudentID</th>
                <th>student name</th>
                <th>exam name</th>
                <th>mark</th>
                <th class="text-right">subject</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="text-center">{{$user->student_id}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->exam_name}}</td>
                <td>{{$mark}}/{{$correctAnswersCount}}</td>
                <td class="text-right">{{$user->subject_name}}</td>
                <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon" data-bs-toggle="modal"
                        data-bs-target="#myModal" data-id="{{$user->student_id}}">
                        <i class="tim-icons icon-notes"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="modal" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><b>Student Name:</b> {{$user->user_name}}</h4>
                <h4 class="modal-title"><b>Exam Name:</b> {{$user->exam_name}}</h4>
            </div>
            <div style="color:black;"></div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="modal-body-content">

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@endsection
