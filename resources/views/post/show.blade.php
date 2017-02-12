@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #{{ $post->id }}. {{ $post->title }}
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            {{ $post->message }}
                        </div>
                        <div class="form-group">
                            <a href="/post/{{ $post->id }}/edit" class="btn btn-default">修改</a>
                            <a href="#modal-delete" class="btn btn-default" data-toggle="modal">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">確認刪除</h3>
                </div>
                <div class="modal-body">
                    <p>您確定要刪除此資料？</p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="/post/{{ $post->id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">刪除</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
