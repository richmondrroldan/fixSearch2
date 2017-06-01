@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>{{ $skill->title }}</h1>
            </div>
            <div class="pull-right"><a class="btn btn-success" href="/skills"> Back</a></div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Expertise</th>
                    <th>Credentials</th>
                </tr>
            @foreach ($skill->mentors as $mentor)
            <tr>
                <td>{{ $mentor->name}}</td>
                <td>{{ $skill->title}}</td>
                <td>{{ $mentor->shortBio}}</td>
                
            </tr>
            @endforeach
            </table>
        </div>

    </div>
@endsection
