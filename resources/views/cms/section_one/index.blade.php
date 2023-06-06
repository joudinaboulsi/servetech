@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Section One</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createSectionOne') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subitle</th>
                                    <th>Link 1</th>
                                    <th>Link 2</th>
                                    <th>logo</th>
                                    <th>Counter title</th>
                                    <th>Counter Number</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($section_one as $s)
                                    <tr>

                                        <td>
                                            @if ($s->image_one)
                                                <img src="../assets/img/section1/{{ $s->image_one }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $s->title }}</td>
                                        <td>{{ $s->subtitle }}</td>
                                        <td>{{ $s->link_one }}</td>
                                        <td>{{ $s->link_two }}</td>
                                        <td>
                                            @if ($s->logo)
                                                <img src="../assets/img/logo/{{ $s->logo }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $s->counter_title }}</td>
                                        <td>{{ $s->counter }}</td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editSectionOne', $s->id) }}">Edit</a>

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
