@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Contact Section</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createContact') }}" class="btn btn-outline-primary">Add </a>

                        </div>

                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>Title Contact</th>
                                    <th>Title Address</th>
                                    <th>Title Working</th>
                                    <th>Title Message</th>
                                    <th>Map</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->title }}</td>
                                        <td>{{ $contact->title_contact }}</td>
                                        <td>{{ $contact->title_address }}</td>
                                        <td>{{ $contact->title_working }}</td>
                                        <td>{{ $contact->title_message }}</td>
                                        <td>{{ $contact->map }}</td>

                                        <td>
                                            <a href="{{ route('editContact', $contact->id) }}"
                                                class="btn btn-outline-dark">Edit </a>
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
