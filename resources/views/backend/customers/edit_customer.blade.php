@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Customer</h4>
                    <form method="POST" action="{{ route('store.customer') }}" class="forms-sample">
                        @csrf
                        <br>
                        <input type="hidden" name="id" value="{{ $types->id }}">
                        <div class="customer" id="customerForm">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Name</label>
                                                <input maxlength="100" name="name" type="text"
                                                    placeholder="Customer Name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ $types->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>phone</label>
                                                <input maxlength="100" name="phone" type="text"
                                                    placeholder="Phone Number"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ $types->phone }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>email</label>
                                                <input maxlength="100" name="email" type="text"
                                                    placeholder="Email Address"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ $types->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
