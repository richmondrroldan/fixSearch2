@extends('layouts.default')
 
@section('content')

    <div class="row">
             
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Expertise</h2>
            
            <div>
            <table class="table table-bordered">
        @foreach($skills as $skill)
        
        <tr>
                <th><a class="btn btn-info" href="skills/{{$skill->id}}">{{$skill->title}}</a>
                </br>
            </th>
        </tr>

 @endforeach
        </table>
           

           <div class="pull-right">
               <a class="btn btn-info" href="/">Back
               </a>
            </div>
    </div>
@endsection
