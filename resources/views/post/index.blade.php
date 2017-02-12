@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 pull-left">留言板</div>
                                <div class="pull-right">
                                    <a href="/post/create" class="btn btn-default">新增</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <div class="row">
                                <div class="col-md-12">
                                    #{{ $post->id }}. <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                                </div>
                            </div>
                            <hr style="margin: 10px;">
                        @endforeach
                        <div class="text-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
