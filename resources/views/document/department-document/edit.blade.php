@extends('layouts.master')

@section('content')
    <div class="row">
    @if(!empty($book))
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-right">
                    <a  class="btn btn-primary" href="{{ action('Document\DepartmentDocumentsController@index') }}"> Department Document List</a>
                </div>
                {{ $book->title }}
            </div>
            {!! Form::model($book,[
                        'action'    => ['Document\DepartmentDocumentsController@update',$book->id],
                        'files'     => true,
                        'method'    => 'PUT',
                        'class'     => 'form-horizontal'

                ])
            !!}
            <div class="panel-body">
                @include('document.department-document.form')
            </div>

            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn-success btn">Save</button>
                        <a href="{{ action('Document\DepartmentDocumentsController@index') }}" class="btn-default btn">Cancel</a>
                        <button type="reset" class="btn-inverse btn">Reset</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    @endif
    </div>

@stop