@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <h5 class="card-header">Edit </h5>
                    <div class="card-body">

                        <form method="POST" action="{{ route('updateContact') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="mb-3 mt-3 col-6">
                                    <label for="defaultFormControlInput" class="form-label">Title </label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        value="{{ $contact->title }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="defaultFormControlInput" class="form-label">Title Contact</label>
                                    <input type="text" name="title_contact" class="form-control"
                                        id="defaultFormControlInput" value="{{ $contact->title_contact }}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>
                            </div>
                            <div class="row">

                                <div class="mb-3 mt-3 col-6">

                                    <label for="defaultFormControlInput" class="form-label">Title Address</label>
                                    <input type="text" name="title_address" class="form-control"
                                        id="defaultFormControlInput" value="{{ $contact->title_address }}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="defaultFormControlInput" class="form-label">Title Working</label>
                                    <input type="text" name="title_working" class="form-control"
                                        id="defaultFormControlInput" value="{{ $contact->title_working }}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Title Message</label>
                                <input type="text" name="title_message" class="form-control" id="defaultFormControlInput"
                                    value="{{ $contact->title_message }}" aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Map</label>
                                <input type="text" name="map" class="form-control" id="defaultFormControlInput"
                                    value="{{ $contact->map }}" aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="mb-3 mt-4">
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
