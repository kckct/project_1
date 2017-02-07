@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">留言板</div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <div>
                                <p>#{{ $post->id }}. {{ $post->title }}</p>
                                <p>{{ $post->message }}</p>
                            </div>
                            <hr>
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
