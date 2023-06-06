@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">About Section</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createAbout') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content 1</th>
                                    <th>Content 2</th>
                                    <th>logo</th>
                                    <th>Counter title</th>
                                    <th>Counter Number</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($abouts as $about)
                                    <tr>

                                        <td>
                                            @if ($about->image)
                                                <img src="../assets/img/about/{{ $about->image }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $about->title }}</td>
                                        <td>{!!  $about->content_one !!}</td>
                                        <td>{!!  $about->content_two !!}</td>
                                        <td>
                                            @if ($about->logo)
                                                <img src="../assets/img/logo/{{ $about->logo }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $about->counter_title }}</td>
                                        <td>{{ $about->counter }}</td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editAbout', $about->id) }}">Edit</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        @endsection
