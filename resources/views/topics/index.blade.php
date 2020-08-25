@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Topics Index') }}</div>

                    <div class="card-body">
                        @foreach($topics as $topic)
                            <h4>   <a href="{{ route('hasManyShow', $topic) }}">{{ $topic->title }}</a>({{ $topic->posts->count() }})</h4>
                            <p>by {{ $topic->user->name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
