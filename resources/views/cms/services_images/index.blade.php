@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Services Images</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createServiceImage') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                 
                                    <th>Title</th>
                                    <th>SubTitle</th>
                                      <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->title }}</td>
                                        <td>{!!  $service->subtitle !!}</td>
                                       
                                           <td>
                                            @if ($service->image)
                                                <img src="../assets/img/service/{{ $service->image }}" width="100">
                                            @endif
                                        </td>
                                       
                                        <td style="display:flex">
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editServiceImage', $service->id) }}">Edit</a>
                                                <form action="{{route('deleteImage', $service->id)}}" method="POST">
                                                
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger" style=" margin:0 5px">Delete</button>
                                                </form>
                                           
                                        </td>

                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        @endsection
