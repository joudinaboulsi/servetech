@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col">
                <div class="card mb-4">

                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <div class="col-md-6">

                            <form method="POST" action="{{ route('updateSectionTwo') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->title }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">main Title</label>
                                    <input type="text" name="main_title" class="form-control"
                                        id="defaultFormControlInput" value="{{ $section->main_title }}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->subtitle }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text">content </span>
                                        <textarea class="form-control" name="content" aria-label="With textarea">{!! $section->content !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">link</label>
                                    <input type="text" name="link" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->link }} aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                    <div class="mb-3 mt-4">
                                        @if ($section->image_one)
                                            <img src="../assets/img/section2/{{ $section->image_one }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="image_one" id="formFile" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">image two</label>
                                    <div class="mb-3 mt-4">
                                        @if ($section->image_two)
                                            <img src="../assets/img/section2/{{ $section->image_two }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="image_two" id="formFile" />
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
