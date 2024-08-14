<!-- Menghubungkan dengan view template master -->
@extends('layouts.master')

@section('title', 'SMA Abdiwacana Pontianak')

@section('konten')
    <div>
        <div class="banner">
            <img src="{{ asset('assets/img/banner.png') }}" class="rounded mx-auto d-block" alt="SMA Abdiwacana Pontianak">
        </div>
        <div class="p-5">
            <div style="color:#303030;">
                <p class="text-center" style="font-size: 30px; font-weight:500">Ekstrakulikuler</p>
                <div class="container"
                    style="text-align: center; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-bottom: 20px">
                    <div class="column" style="display: flex; flex-direction: row; gap: 20px;">
                        <div style="text-align: center; font-size: 20px; font-weight:600">
                            <img src="{{ asset('assets/img/img1.jpeg') }}" class="rounded" alt="Image 1" width="410">
                            <p>Futsal</p>
                        </div>
                        <div style="text-align: center; font-size: 20px; font-weight:600 ">
                            <img src="{{ asset('assets/img/bg-title.png') }}" class="rounded" alt="Image 3" width="410"
                                height="265">
                            <p>Paskibra</p>
                        </div>
                        <div style="text-align: center; font-size: 20px; font-weight:600 ">
                            <img src="{{ asset('assets/img/img2.jpeg') }}" class="rounded" alt="Image 2" width="410">
                            <p>Badminton</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-center " style="font-size: 30px; font-weight:500">Alamat Sekolah</p>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8171995034454!2d109.33676507472333!3d-0.04294699995662636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59af992a779d%3A0x42a54f65442ecb37!2sSMP-SMA%20Kristen%20Abdiwacana!5e0!3m2!1sid!2sid!4v1723633783938!5m2!1sid!2sid"
                        width="1280" height="500" style="border:0; rounded" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p style="font-size: 20px; font-weight: 300">Jl. Jenderal Ahmad Yani No.52 F,
                        Benua Melayu Darat, Kec.
                        Pontianak Sel.,
                        Kota Pontianak, Kalimantan
                        Barat 78121</p>
                </div>
            </div>
        </div>
    </div>

@endsection
