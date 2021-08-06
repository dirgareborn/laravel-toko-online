@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tentang Kami</strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Informasi Tentang Kami</h2>
        </div>
        <div class="col-md-7">
            <p>ini info</p>
        </div>

        <div class="col-md-5 ml-auto">
        <div class="p-4 border mb-3">
            <!-- <span class="d-block text-primary h6 text-uppercase">OWNER TOKO ADHY HIDAYAH</span> -->
                <div class="block-4 text-center border">
                    <img src="{{ asset('shopper') }}/images/person_3.jpg" alt="Image placeholder" class="img-fluid" width="400px" style="height:400px">
                <div class="block-4-text p-4">
                <h3 class="d-block text-primary h6 text-uppercase">ADHY HIDAYAH</h3>
                <p class="mb-0">Owner</p>
                </div>
            </div>
            <p class="mb-0" align="center"><i>Motto : Dikerja Bukan Dicerita</i></p>
        </div>

        </div>
    </div>
    </div>
</div>
@endsection