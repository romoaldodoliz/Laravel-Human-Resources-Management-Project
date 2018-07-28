@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Department
            </div>
            <div class="card-body">
                <a class="btn btn-primary pull-right" href="/departments" style="margin-bottom: 15px;"><i
                            style="color: #1c7430" class="fa fa-reply"></i>Go Back</a>

                {!! Form::model($department,['method'=>'PATCH','action'=>['DepartmentController@update',$department->id]]) !!}
                @include('departments.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection()