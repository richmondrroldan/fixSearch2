@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>{{ $skill->title }}</h1>
            </div>
            <div class="pull-right"><a class="btn btn-success" href="/skillsA"> Back</a></div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Expertise</th>
                    <th>Credentials</th>
                    <th>Action</th>
                </tr>
            @foreach ($skill->mentors as $mentor)
            <tr>
                <td>{{ $mentor->name}}</td>
                <td>{{ $skill->title}}</td>
                <td>{{ $mentor->shortBio}}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('mentorsCRUD.edit',$mentor->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['mentorsCRUD.destroy', $mentor->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
                
            </tr>
            @endforeach
            </table>
        </div>

    </div>
@endsection
