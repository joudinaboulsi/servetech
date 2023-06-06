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

                            <form method="POST" action="{{ route('storeSectionOne') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        placeholder="Title" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="defaultFormControlInput"
                                        placeholder="Subtitle" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Link_one</label>
                                    <input type="text" name="link_one" class="form-control" id="defaultFormControlInput"
                                        placeholder="Link_one" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Link two</label>
                                    <input type="text" name="link_two" class="form-control" id="defaultFormControlInput"
                                        placeholder="Link two" aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image_one" id="formFile" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">logo</label>
                                    <input class="form-control" type="file" name="logo" id="formFile" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Counter Title</label>
                                    <input type="text" name="counter_title" class="form-control"
                                        id="defaultFormControlInput" placeholder="Title"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" name="counter" value="0"
                                            id="html5-number-input" />
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
    </div>
@endsection
