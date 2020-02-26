@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Customer</div>
                    <div class="card-body">
                        <a href="{{ route('post.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      <form method="POST" action="{{ route('post.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                       <div class="form-group">
                        <label for="comment" class="control-label">{{ 'Comment' }}</label>
                        <input class="form-control" name="comment" type="text" id="comment">
                        {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                     </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Create">
                    </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
