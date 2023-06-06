@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col">
                <div class="card mb-4">
                    <h5 class="card-header">Create</h5>
                    <div class="card-body">
                        <div class="col-md-6">

                            <form method="POST" action="{{ route('storeFooter') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label for="defaultFormControlInput" class="form-label">Title </label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        placeholder="Title" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="defaultFormControlInput" class="form-label">Subtitle </label>
                                    <input type="text" name="subtitle" class="form-control" id="defaultFormControlInput"
                                        placeholder="Subtitle" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="defaultFormControlInput" class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control" id="defaultFormControlInput"
                                        placeholder="Link" aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-4">
                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
