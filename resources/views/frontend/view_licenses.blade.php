@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')

    <div class="card">
        <div class="card-body">
            <div class="container">
                <h2>{{$license_details->license_name}}</h2> <br>
                <p>{{$license_details->license_agreement}}</p>
            </div>
        </div>
    </div>




@endsection
