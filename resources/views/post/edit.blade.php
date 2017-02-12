@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">修改留言</div>

                    <div class="panel-body">
                        <form method="POST" action="/post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="標題" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="請輸入留言">{{ $post->message }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">修改</button>
                                <a href="{{ url()->previous() }}" class="btn btn-default">返回</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
