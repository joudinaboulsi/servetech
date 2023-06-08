@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col">
                <div class="card mb-4">

                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <div class="col-md-12">

                            <form method="POST" action="{{ route('updateSectionOne') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->title }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->subtitle }}"aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Link 1</label>
                                    <input type="text" name="link_one" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->link_one }}"aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Link</label>
                                    <input type="text" name="link_two" class="form-control" id="defaultFormControlInput"
                                        value="{{ $section->link_two }}"aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                    <div class="mb-3 mt-4">
                                        @if ($section->image_one)
                                            <img src="../assets/img/section1/{{ $section->image_one }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="image_one" id="formFile" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">logo</label>
                                    <div class="mb-3 mt-4">
                                        @if ($section->logo)
                                            <img src="../assets/img/logo/{{ $section->logo }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="logo" id="formFile" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Counter Title</label>
                                    <input type="text" name="counter_title" class="form-control"
                                        id="defaultFormControlInput" value="{{$section->counter_title}}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" name="counter" value="{{$section->counter}}"
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