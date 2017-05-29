@extends('layouts.default')
@section('content')

    @if(Auth::user())
    </br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mentor Master List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mentorsCRUD.create') }}"> Create New Mentor</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Skill No.</th>
            <th>Short Bio</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($skills as $skill)
    <tr>
        <td>{{ $skill->title}}</td>
        <td>{{ $mentor->skills_id}}</td>
        <td>{{ $mentor->shortBio}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('mentorsCRUD.show',$mentor->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('mentorsCRUD.edit',$mentor->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['mentorsCRUD.destroy', $mentor->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-success" href="/home"> Back</a>
    </div>
    {!! $mentors->render() !!}
    @else
    @include('mentorCRUD.skills')



    @endif
    
@endsection