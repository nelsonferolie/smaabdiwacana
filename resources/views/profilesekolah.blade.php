<!-- Menghubungkan dengan view template master -->
@extends('layouts.master')

@section('title', 'Visi dan Misi')

@section('konten')

    <div style="background-image: url(assets/img/bg-title.png)">
        <div style="padding:110px;">
            {{-- <h1 class="text-center text-white fs-800 fw-semibold"><strong>Visi dan Misi</strong></h1> --}}
        </div>
    </div>
    <div style="background-image: url(assets/img/bg2.jpg)">
        <div class="text-center pb-1 p-5">
            <h2 class="fw-bold pb-2">VISI</h2>
            <P>“Mewujudkan sumber daya manusia yang didasari firman tuhan dengan semangat cinta kasih, bersekutu, melayani
                dan bersaksi.”</P>
        </div>

        <div class="pt-2 px-5 pb-1">
            <h2 class="text-center fw-bold pb-2">MISI</h2>
            <ol style="margin-left: 430px;" class="text-justify ol" type="1">
                <li>Melaksanakan proses belajar mengajar dalam semangat cinta kasih.</li>
                <li>Menjadikan sekolah sebagai pusat kesaksian, persekutuan dan pelayanan..</li>
                <li>Menjadikan warga sekolah yang kreatif, inovatif, dan berkembang.</li>
                <li>Memotivasi siswa untuk berkembang menempa diri sesuai dengan talenta yang dimiliki.</li>
                <li>Mampu bersaing secara kompetitif dalam ilmu pengetahuan dan teknologi.</li>
                <li>Menjadikan sekolah sebagai saluran berkat.</li>
                <li>Menjadikan sekolah sebagai garam dan terang.</li>
            </ol>
        </div>
    </div>


@endsection
