@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Topics Index') }}</div>

                    <div class="card-body">
                        @foreach($topics as $topic)
                            <a href="{{ route('hasManyShow', $topic) }}"><h4>{{ $topic->title }}</h4></a>
                            <p>by {{ $topic->created_at->diffForHumans() }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

