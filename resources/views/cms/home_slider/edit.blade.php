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

                            <form method="POST" action="{{ route('updateHomeSlider', $home->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        value="{{ $home->title }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                  <div class="mb-3 mt-4 col-12">
                                    <label for="defaultFormControlInput" class="form-label">Content</label>
                                    <input type="text" name="content" class="form-control" id="defaultFormControlInput"
                                        value="{{ $home->content }}" aria-describedby="defaultFormControlHelp" />
                                </div>

                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle"
                                        value="{{ $home->subtitle }}" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <div class="mb-3 mt-4">
                                        @if ($home->image)
                                            <img src="../assets/img/homeSlider/{{ $home->image }}" width="100">
                                        @endif
                                    </div>
                                    <input class="form-control" type="file" name="image" id="formFile" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Add link</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" name="link"
                                        value="{{ $home->link }}"" aria-describedby="defaultFormControlHelp" />
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
