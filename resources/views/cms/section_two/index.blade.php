@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Section Two</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createSectionTwo') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>main title</th>
                                    <th>Subitle</th>
                                    <th>content</th>
                                    <th>Link</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($section_two as $s)
                                    <tr>


                                        <td>{{ $s->title }}</td>
                                        <td>{{ $s->main_title }}</td>
                                        <td>{{ $s->subtitle }}</td>
                                        <td>{{ $s->content }}</td>
                                        <td>{{ $s->link }}</td>
                                        <td>
                                            @if ($s->image_one)
                                                <img src="../assets/img/section2/{{ $s->image_one }}" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($s->image_two)
                                                <img src="../assets/img/section2/{{ $s->image_two }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $s->counter_title }}</td>
                                        <td>{{ $s->counter }}</td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editSectionTwo', $s->id) }}">Edit</a>

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
