@extends('layouts.main')

@section('konten')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="img/1.png" class="d-block w-100" height="680" style="background-size: cover;" alt="gambar hilang atau corrupt">
        </div>
        <div class="carousel-item" data-bs-interval="1000">
            <img src="img/2.png" class="d-block w-100" height="680" style="background-size: cover;" alt="gambar hilang atau corrupt">
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" height="680" style="background-size: cover;" alt="gambar hilang atau corrupt" data-bs-interval="1000">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center mt-5">About Us</h1>
            <div class="col-md-6 mt-5">
                <img src="https://lpse.pu.go.id/eproc4/public/images/imgng/lpse-logo.png" alt="">
            </div>
            <div class="col-md-6 mt-2">
                <p>LPSE atau <strong> Layanan Pengadaan Secara Elektronik </strong> adalah mekanisme dan ekosistem penyelenggaraan Pengadaan Barang dan Jasa Pemerintah maupun pemerintah daerah. Seluruh prosedur dan proses pengadaan dilakukan melalui sistem e-procurement bernama SPSE (Sistem Pengadaan Secara Elektronik). Sistem ini dikembangkan oleh Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP) sesuai Pasal 1 Nomor 6 Peraturan Presiden Republik Indonesia Nomor 16 Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah Perpres PBJ-2018 junto Peraturan Presiden Republik Indonesia Nomor 12 Tahun 2021 tentang Perubahan Atas Peraturan Presiden Republik Indonesia Nomor 16 Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah Perpres PBJ-2021, serta pasal-pasal lain dalam kedua Peraturan tersebut. Di dalam LPSE dioperasikan SPSE.</p>
            </div>
        </div>



    </div>
    <footer class="bg-dark text-center text-white">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
            <a class="text-white" href="https://github.com/syaifulestrada">SyaifulEstrada</a>
        </div>
    </footer>
@endsection


