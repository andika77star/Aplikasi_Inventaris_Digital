@extends('layouts/master')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">User Profile</h4>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default input-solid">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default input-solid">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Name" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group form-group-default input-solid">
                                <label>Birth Date</label>
                                <input type="date" class="form-control" id="datepicker" name="datepicker" value="03/21/1998" placeholder="Birth Date">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default input-solid">
                                <label>Gender</label>
                                <select class="form-control" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default input-solid">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="+62008765678" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group form-group-default input-solid">
                                <label>Address</label>
                                <input type="text" class="form-control" value="st Merdeka Putih, Jakarta Indonesia" name="address" placeholder="Address">
                            </div>
                        </div>
                    </div> --}}
                    <div class="text-right mt-3 mb-3">
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

