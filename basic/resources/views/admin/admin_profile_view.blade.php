@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">
    <div class="col-lg-3">
        
    </div> 
    <div class="col-lg-6">
        <div class="card"><br><br>
            <center>
                <img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
            </center>

            <div class="card-body">
                <h4 class="card-title"><b>Full Name:</b> {{ $adminData->name }} </h4>
                <hr>
                <h4 class="card-title"><b>Email:</b> {{ $adminData->email }} </h4>
                <hr>
                <h4 class="card-title"><b>Username:</b> {{ $adminData->username }} </h4>
                <hr>
                <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
            </div>
        </div>
    </div> 


    </div> 

</div>
</div>

@endsection('admin')