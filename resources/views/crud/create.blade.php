@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Creste New Data...</b></div>
                <div class="panel-body">
                @if ($errors->first('name'))
                        <div class="alert alert-danger">
                            {{ $errors->first('name')}}
                        </div>
                    @endif
                    <form class="form-horizontal" method='POST' action='/crud'>
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="name"  name="name" placeholder="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name='info' id="info"></textarea>
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
