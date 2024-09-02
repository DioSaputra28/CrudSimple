@extends('layout/main')

@section('container')
<section style="overflow-y: hidden;
background-image: linear-gradient(
    to left,
    #B0D6F5,
    #deefff
);" class="rounded">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4" style="margin-top:40px;">
            <div class="card-body text-center">
              <img src="{{ asset('asset/profile.jpg') }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Dio Saputra</h5>
              <p class="text-muted mb-1">Programmer Pemula</p>
              <div class="d-flex justify-content-center mb-2">
                <a href="">
                </a>
              </div>
            </div>
        </div>
        </div>
        <div class="col-lg-8" style="margin-top: auto">
          <div class="card mb-4">
            <div class="card-header">
              <h4>Detail Profile</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Dio Saputra</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">dio12345678@gmail.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Whatsapp</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(+62) 895639695100</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(+62) 82138530723</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">KALITENGAH, Banjarnegara, Jawa Tengah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection