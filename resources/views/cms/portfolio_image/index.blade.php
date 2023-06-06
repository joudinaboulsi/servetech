@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio Image Section</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('createPortfolioImage') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($portfolio_images as $portfolio_image)
                                    <tr>


                                        <td>{{ $portfolio_image->title }}</td>
                                        <td>
                                            @if ($portfolio_image->image)
                                                <img src="../assets/img/portfolio/{{ $portfolio_image->image }}"
                                                    width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('editPortfolioImage', $portfolio_image->id) }}">Edit</a>

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
