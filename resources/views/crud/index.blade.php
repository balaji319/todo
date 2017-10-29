@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Simple CRUD in Laravel 5.4</b></div>
            
                 <!-- Display Total No. Of Songs -->
                <br>  <span class="badge">Current Available    {{count($obj_data )}}</span><a href="crud/create"> <button type="button" class="btn btn-primary" style="float:right;margin-right: 31px">Add New </button></a><br><br>
                <!-- Display message -->
                     @if (session('meassage'))
                        <div class="alert alert-success alert-dismissable">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <b><i>{{ session('meassage') }}</i></b>
                        </div>         
                    @endif
                <div class="panel-body">
                    <ul class="list-group">

                        @foreach($obj_data as $data)

                        <li class="list-group-item">
                            <div class="edit_div">
                                <a href="crud/{{ $data->id}}/edit"   style="float:right" ><span  class="btn btn-warning">edit</span></a>
                                    <form action="crud/{{ $data->id}}" method="POST" style="float: right;margin-right: 33px">
                                              {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">
                                            <span >delete</span>
                                            
                                        </button>
                                    </form>
                            </div>
                           
                            {{$data->song_name}}
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
