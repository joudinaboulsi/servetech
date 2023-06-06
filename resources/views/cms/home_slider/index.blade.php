@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Home Slider</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createHomeSlider') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>COntent</th>
                                    <th>SubTitle</th>
                                    <th>Image</th>
                                    <th>link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($home_sliders as $home_slider)
                                    <tr>
                                        <td>{{ $home_slider->title }}</td>
                                        <td>{!! $home_slider->content  !!}</td>
                                        <td>{{ $home_slider->subtitle }}</td>

                                        <td>
                                            @if ($home_slider->image)
                                                <img src="../assets/img/homeSlider/{{ $home_slider->image }}"
                                                    width="100">
                                            @endif
                                        </td>
                                        <td>{{ $home_slider->link }}</td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editHomeSlider', $home_slider->id) }}">Edit</a>
                                            
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
