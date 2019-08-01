@extends('layouts.app')
@section('title', 'Admin - Profile')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <form method="POST" action="/admin/profile" id="profile">  
                    <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="name" value="{{Auth::user()->name}}" id="username">
                            <small class="form-text text-danger"></small>
                          </div>  
                          <div class="form-group mb-3">
                                <label for="old_password">Old password</label>
                                <input type="password" class="form-control" placeholder="Old password" name="old_password" id="old_password">
                                <small class="form-text text-danger"></small>
                          </div>
                          <div class="form-group mb-3">
                                <label for="new_password">New password</label>
                                <input type="password" class="form-control" placeholder="New password" name="new_password" id="new_password">
                                <small class="form-text text-danger"></small>
                          </div>
                          <div class="form-group mb-3">
                                <label for="password">Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" name="password" id="password">
                                <small class="form-text text-danger"></small>
                          </div>
                        <div class="float-right">
                                <a href="/admin" class="btn btn-primary">Cancel</a>     
                                <button type="submit" class="btn btn-success">Save</button> 
                        </div>
                        @csrf
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
