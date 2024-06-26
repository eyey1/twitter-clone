@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('handler.left-sidebar')
        </div>
        <div class="col-6">
            @include('handler.success-message')
            <div class="mt-3">
                @include('handler.idea-card')
            </div>
        </div>
        <div class="col-3">
            @include('handler.search-bar')
            @include('handler.follow-box')
        </div>
    </div>
@endsection
