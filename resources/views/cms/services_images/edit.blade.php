@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> --}}

        <div class="row">

            <div class="col">
                <div class="card mb-4">

                    <h5 class="card-header">edit </h5>
                    <div class="card-body">
                        <div class="col-12">

                            <form method="POST" action="{{ route('updateImage',$service->id) }}" enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="defaultFormControlInput"
                                      value="{{$service->title}}"  aria-describedby="defaultFormControlHelp" />
                                </div>
                              
                                <div class="mb-3 mt-4">
                                
                                    <label for="defaultFormControlInput" class="form-label">SubTitle</label>
                                        <textarea class="form-control" name="subtitle" aria-label="With textarea"> {!! $service->subtitle !!}</textarea>
                                   
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="formFile" class="form-label">Image</label>
                                      @if ($service->image)
                                            <img src="../assets/img/service/{{ $service->image }}" width="100">
                                        @endif
                                    <input class="form-control" type="file" name="image" id="formFile" />
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
