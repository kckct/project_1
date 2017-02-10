@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新增留言</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/post', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '標題']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => '請輸入留言']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('送出', ['class' => 'btn btn-default']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
