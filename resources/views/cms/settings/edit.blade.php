@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('updateSettings', $settings->id) }} "enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Phone one </label>
                                        <input type="text" name="phone_one" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->phone_one }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Phone two </label>
                                        <input type="text" name="phone_two" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->phone_two }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Address </label>
                                        <input type="text" name="address" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->address }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->email }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">working days </label>
                                        <input type="text" name="working_days" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->working_days }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">working hours </label>
                                        <input type="text" name="working_hours" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->working_hours }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">closed days </label>
                                        <input type="text" name="closed_days" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->closed_days }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">main </label>
                                        <input type="text" name="closed" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->closed }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Map </label>
                                        <input type="text" name="map" class="form-control"
                                            id="defaultFormControlInput" value="{{ $settings->map }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="formFile" class="form-label">Brochure</label>
@if($settings->brochure)
<embed name="plugin" src="../assets/{{ $settings->brochure }}" type="application/pdf">
                                          
@endif
                                        <input class="form-control" type="file" name="brochure"
                                            id="formFile" />
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <button type="submit" class="btn btn-outline-primary">update</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
