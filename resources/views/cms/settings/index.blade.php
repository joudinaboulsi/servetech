@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Settings</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createSettings') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>PHONE ONE</th>
                                    <th>PHONE two</th>
                                    <th>ADDRESS</th>
                                    <th>EMAIL</th>
                                    <th>WORKING DAYS</th>
                                    <th>WORKING HOURS</th>
                                    <th>Closed Days</th>
                                    <th>Main</th>
                                    <th>Map</th>
                                    <th>Brochuure</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($settings as $s)
                                    <tr>
                                        <td>{{ $s->phone_one }}</td>
                                        <td>{{ $s->phone_two }}</td>
                                        <td>{{ $s->address }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->working_days }}</td>
                                        <td>{{ $s->working_hours }}</td>
                                        <td>{{ $s->days_closed }}</td>
                                        <td>{{ $s->closed }}</td>
                                        <td>{{ $s->map }}</td>
                                        <td>{{ $s->brochure }}</td>

                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editSettings', $s->id) }}">Edit</a>

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
