@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('custom-links')
<link rel="stylesheet" href="{{asset('css/services/clasification.css?v='.time())}}">
<link rel="stylesheet" href="{{asset('css/services/presentation.css?v='.time())}}">
@endsection


@section('content')


    @component('client.sections.services.presentation')
    @endcomponent
    @component('client.sections.services.history')
    @endcomponent
    @component('client.sections.services.clasification')
    @endcomponent

@endsection

@section('custom-scripts')
<script src="{{ asset('js/services/services.js?v='.time()) }}"></script>
@endsection
