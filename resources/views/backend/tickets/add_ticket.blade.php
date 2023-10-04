@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('service.ticket') }}" class="btn btn-primary"> Back </a>
            </ol>
        </nav>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Ticket</h4>

                    <form method="POST" action="" class="forms-sample" enctype="multipart/form-data">
                        @csrf


                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-inverse-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Select type:
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <option class="dropdown-item">Customer</option>
                                        <option class="dropdown-item">Organization</option>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group dropend">
                                    <button class="btn btn-inverse-secondary dropdown-toggle " type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Topic:
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <option class="dropdown-item">Option1</option>
                                        <option class="dropdown-item">Option2</option>
                                        <option class="dropdown-item">Option3</option>
                                        <option class="dropdown-item">Option4</option>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row mb-3">

                            <div class="col-lg-6">
                                <input class="form-control" maxlength="25" name="" id="defaultconfig" type="text"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-lg-6">
                                <input class="form-control" maxlength="25" name="defaultconfig-2" id="defaultconfig-2"
                                    type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-lg-6">
                                <input class="form-control" maxlength="25" name="defaultconfig-3" id="defaultconfig-3"
                                    type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-inverse-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select service:
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <option class="dropdown-item">Inquiry</option>
                                <option class="dropdown-item">Schedule</option>
                                <option class="dropdown-item">Maintenance</option>
                                <option class="dropdown-item">Services</option>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="8" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <br>

                        <br>
                        <div class="right">
                            <button type="submit" class="btn btn-primary me-2"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
