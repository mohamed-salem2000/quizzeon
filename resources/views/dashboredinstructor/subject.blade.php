@extends('dashboredinstructor.instructorlayout')
@section('content')

<div class="content">
    @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
    @endif

    <script>
    setTimeout(function() {
        document.getElementById('success-message').remove();
    }, 3000);
    </script>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Subject</th>
                <th>time created</th>
                <th>time update</th>
                <th class="text-right">Section</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td class="text-center">{{ $subject->id }}</td>
                <td>{{ $subject->subject_name }}</td>
                <td>{{ $subject->created_at }}</td>
                <td>{{ $subject->updated_at }}</td>
                <td class="text-right">{{ $subject->section}}</td>
                <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon" data-toggle="modal"
                            data-target=".bd-example-modal-sm"
                            onclick="setSubjectId('{{ $subject->id }}', '{{ $subject->subject_name }}', '{{ $subject->section }}', '{{ $subject->description }}')">
                            <i class="tim-icons icon-settings"></i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon" data-toggle="modal"
                            data-target="#exampleModal" onclick="getSubjectId('{{ $subject->id }}')">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-info">Add Subject</h4>
        <div class="card-body">
            <p class="card-text">Here you can add your subject to add exam to this subject .</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add
                Subject</button>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('subject.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subject name:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Subject name" name="name">
                            <small id="emailHelp" class="form-text text-muted">choice a good name .</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                                placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">section</label>
                            <input type="text" class="form-control" id="section" name="section" placeholder="section">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <form id="subjectForm" action="{{ route('subject.update', [':subject']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="exampleInputPassword1">Id</label>
                            <input type="text" class="form-control" id="subjectIdInput" name="id" placeholder="id"
                                disabled="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">subject name:</label>
                            <input type="text" class="form-control" id="subjectName" aria-describedby="emailHelp"
                                placeholder="Subject name" name="name">
                            <small id="emailHelp" class="form-text text-muted">choice a good name .</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="subjectDescription" name="description"
                                placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">section</label>
                            <input type="text" class="form-control" id="subjectSection" name="section"
                                placeholder="section">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Note! you will delete a subject </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
            <div class="modal-body" >
                <div class="card">
                    <div class="card-body">
                        <form id="subjectFormdestroy" action="{{ route('subject.destroy', [':subject']) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="subjectId" name="id" placeholder="id">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function setSubjectId(subjectId, subjectName, subjectSection, subjectDescription) {
    $('#subjectIdInput').val(subjectId);
    $('#subjectName').val(subjectName);
    $('#subjectDescription').val(subjectDescription);
    $('#subjectSection').val(subjectSection);
    var formAction = "{{ route('subject.update', [':subject']) }}";
    formAction = formAction.replace(':subject', subjectId);
    $('#subjectFormdestroy').attr('action', formAction);
}
</script>
<script>
function getSubjectId(subjecId) {
    $('#subjectId').val(subjectId);
    var formAction = "{{ route('subject.destroy', [':subject']) }}";
    formAction = formAction.replace(':subject', subjectId);
    $('#subjectFormdestroy').attr('action', formAction);

    // Set the subjectId value in the hidden input field
    $('#subjectIdInput').val(subjectId);
}
</script>

<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    Creative Tim
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    About Us
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    Blog
                </a>
            </li>
        </ul>
        <div class="copyright">
            ©
            <script>
            document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
</div>
</div>

@endsection