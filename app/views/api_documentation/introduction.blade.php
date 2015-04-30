@extends('layouts.documentation'))

{{-- Web site Title --}}
@section('title')
HRSwift API Documentation
@stop

{{-- Content --}}
@section('content')
<aside class="col-lg-2 col-md-2 col-sm-2 hidden-xs sidebar">
    <div class="sidebar-title-container">
        <h4><i class="glyphicon glyphicon-th-list is-hidden"></i> Introduction</h4>
    </div>
</aside>

<section>
    <div id="authentication" class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-12 section-container">
        <h3>Introduction</h3>

        <p class="section-description">
            Welcome to the HRSwift API Version 1.0! You can use the API to access HRSwift API endpoints, which can get various information from our database.   
        </p>
    </div>
</section>

<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs" style="height: 500px;"></div>
@stop