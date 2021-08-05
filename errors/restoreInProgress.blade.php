{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.error')

@section('title')
    Backup In Progress
@endsection

@section('content-header')
@endsection

@section('content')
<div class="row mt--7">
    <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-warning" style="font-size: 160px !important;font-weight: 100 !important;">Backup Restore In Progress</h1>
                <p class="text-muted">Backup restore in progress! Please wait...</p>
            </div>
            <div class="card-footer">
                <a href="{{ URL::previous() }}"><button class="btn btn-sm btn-danger">&larr; @lang('base.errors.return')</button></a>
                <a href="/"><button class="btn btn-sm btn-primary">@lang('base.errors.home')</button></a>
            </div>
        </div>
    </div>
</div>
@endsection