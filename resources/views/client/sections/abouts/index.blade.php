@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('custom-links')
@endsection


@section('content')


    @component('client.sections.abouts.presentation')
    @endcomponent
    @component('client.sections.abouts.response')
    @endcomponent
    @component('client.sections.abouts.philosophy')
    @endcomponent
    @component('client.sections.abouts.history')
    @endcomponent

@endsection