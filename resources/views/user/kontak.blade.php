@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Kontak</strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Kontak kami</h2>
        </div>
        <div class="col-md-7">

        <form action="#" method="post">
            
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-6">
                <label for="c_fname" class="text-black">Nama Depan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                <label for="c_lname" class="text-black">Nama Belakang<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_subject" class="text-black">Subjek </label>
                <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_message" class="text-black">Pesan </label>
                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Kirim Pesan">
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="col-md-5 ml-auto">
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Makassar</span>
            <p class="mb-0">Jl. Irian No. 97 - Telp. 0411 123 333 Makasssar, Sulawesi Selatan, ID</p>
        </div>
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Morowali</span>
            <p class="mb-0">Jl. Poros - Telp. 0411 123 333  Sulawesi Tengah, Morowali, ID</p>
        </div>
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Jeneponto</span>
            <p class="mb-0">Pasar Karisa - Telp. 0411 123 333 , Jeneponto , Sulawesi Selatan, ID</p>
        </div>

        </div>
    </div>
    </div>
</div>
@endsection