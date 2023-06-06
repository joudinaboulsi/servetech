@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Create</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('storeClient') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control"
                                            id="defaultFormControlInput" placeholder="Title"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                  <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="defaultFormControlInput" class="form-label">subTitle</label>
                                        <input type="text" name="mini_title" class="form-control"
                                            id="defaultFormControlInput" placeholder="SubTitle"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" id="formFile" />
                                    </div>
                                </div>

                                <div class="mb-3 mt-4">
                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
    </div>
@endsection
