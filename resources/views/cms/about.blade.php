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
                            <form method="POST" action="{{ route('update_path') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        value="{{ $about->title }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="defaultFormControlInput" class="form-label">Content One</label>
                                        <textarea class="form-control" name="content_one" aria-label="With textarea">{!! $about->content_one !!}</textarea>
                                  
                                </div>
                                <div class="mb-3 mt-4">
                                  <label for="defaultFormControlInput" class="form-label">Content Two</label>
                                        <textarea class="form-control" name="content_two" aria-label="With textarea">{!! $about->content_two !!}</textarea>
                            
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                    <div class="mb-3 mt-4">
                                        @if ($about->image)
                                            <img src="../assets/img/about/{{ $about->image }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="image" id="formFile" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">logo</label>
                                    <div class="mb-3 mt-4">
                                        @if ($about->logo)
                                            <img src="../assets/img/logo/{{ $about->logo }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="logo" id="formFile" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Counter Title</label>
                                    <input type="text" name="counter_title" class="form-control"
                                        id="defaultFormControlInput" value="{{ $about->counter_title }}"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" name="counter"
                                            value="{{ $about->counter }}" id="html5-number-input" />
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
