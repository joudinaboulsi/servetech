@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Create</h5>
                    <div class="card-body">
                        <div class="col-md-12">

                            <form method="POST" action="{{ route('storeHomeSlider') }}" enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                        placeholder="Title" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4 col-12">
                               
                                  
                                        <textarea class="form-control" name="content" id="editor" aria-label="With textarea" placeholder="Content"></textarea>
                                    
                                </div>
 
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle"
                                        placeholder=" Subtitle" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="formFile" />
                                </div>
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Add link</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" name="link"
                                        placeholder="read more" aria-describedby="defaultFormControlHelp" />
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
