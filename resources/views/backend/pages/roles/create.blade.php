@extends('backend.layouts.master')

@section('title')
    Role Create ~ Admin Panel
@endsection

@push('styles')
@endpush

@section('admin-content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Role Create</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                        <li><span>Create Role</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                @include('backend.layouts.partials.logout')
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Create New Role</h4>
                        @include('backend.layouts.partials.message')
                        <form action="{{ route('admin.roles.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter role name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Permissions</label>
                                @foreach ($permissions as $permission)
                                    <div class="form-check">
                                        <input type="checkbox" value="{{ $permission->name }}" class="form-check-input"
                                            id="exampleCheck{{ $permission->id }}" name="permissions[]">
                                        <label class="form-check-label"
                                            for="exampleCheck{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Role</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- data table end -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
