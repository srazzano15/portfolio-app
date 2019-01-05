@extends('layouts.app')

@section('content')
<div id="main">
    <div class="jumbotron jumbotron-fluid shadow  rounded">
        <div class="container">
            <h1 class="display-4">Welcome to My Portfolio!</h1>
            <p class="lead">@{{ messageFirst }}</p>
            <p> @{{ messageScnd }} </p>
            <p> @{{ messageThird }} </p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src=" {{ asset( 'js/app.js' ) }} " defer></script>
@endpush