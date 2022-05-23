@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-user-cog"></i> Profile</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{asset('admin/img/undraw_profile.svg')}}" alt="...">
                    </div>
                    <p><i class="fas fa-fw fa-user"></i> {{ Auth::user()->fullName }}  | <i class="fas fa-fw fa-envelope"></i> {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ Auth::user()->fullName }} Profile</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <p class="mb-0"> I am a Front / Backend Software developer with years of exeperience in Front&/Back-end technologies for developing Cross-platform interactive products i.e. but not limited to: </p>
                    <ul style="list-style-type:none;">
                    @foreach ($experiences as $item)
                        <li><i class="fas fa-fw fa-clipboard-check"></i>  {{ $item->expName }}
                            <div class="progress  progress-sm mb-4">
                               <div class="progress-bar progress-sm" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <button style="border:none; background-color: #ffffff; ">
                        <a href=" " class="btn btn-success">Learn More</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
