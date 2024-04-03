@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('handler.left-sidebar')
        </div>
        <div class="col-6">
            @include('handler.success-message')
            @include('handler.submit-me')
            <hr>
            @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('handler.idea-card')
                </div>
            @endforeach
            <div class="mt-2">{{ $ideas->links() }}</div>
        </div>
        <div class="col-3">
            @include('handler.search-bar')
            @include('handler.follow-box')
        </div>
    </div>
@endsection
