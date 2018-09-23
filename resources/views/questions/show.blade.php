@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$question->title}}
                    @foreach($question->topics as $topic)
                        <span class="topic">{{ $topic->name }}</span>
                        @endforeach
                    </div>

                    <div class="card-body">
                        {!! $question->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
