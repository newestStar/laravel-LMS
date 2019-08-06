@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>@lang('lesson/lessons.lessons') - {{$course->name}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @forelse ($lessons as $lesson)
                            <div id="accordion">
                                <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                <div class="card card-primary">
                                    <div class="card-header d-flex p-0">
                                        <h4 class="card-title p-3">
                                            <a  href="{{route('lessons.show', $lesson->id)}}">
                                                {{ $lesson->title }}
                                            </a>
                                        </h4>
                                        <ul class="nav nav-pills ml-auto p-2">
                                            <li class="nav-item">
                                                <a class="btn btn-primary" href="{{route('lessons.show', $lesson->id)}}">@lang('general.show')</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>@lang('lesson/lessons.not_have')</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
