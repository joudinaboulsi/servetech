@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateService', $service->id) }}">
                            @csrf
                            @method('post')


                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control"
                                            id="defaultFormControlInput" value="{{ $service->title }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Subtitle </label>
                                        <input type="text" name="subtitle" class="form-control"
                                            id="defaultFormControlInput" value="{{ $service->subtitle }}"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

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
@endsection
