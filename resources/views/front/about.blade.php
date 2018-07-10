@extends('front.template')

@section('content')

    <!-- ABOUT SECTION START -->
    <div class="about-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left ">
                        <h2 class="uppercase">tentang {{ config('app.name') }}</h2>
                        <h6 class="mb-40"></h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="about-photo p-20 bg-img-1">
                        <img src="{{ asset("frontend/img/others/about.jpg") }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-description mt-50">
                        <p>Koperasi Mahasiswa (KOPMA) adalah salah satu Unit Minat Bakat (UMB) yang ada di Universitas PGRI Madiun. Kehadiran KOPMA sebagai wahana untuk latihan berwirausaha bagi mahasiswa. Koperasi mahasiswa Universitas PGRI Madiun yang sebelumnya bernama IKIP PGRI Madiun didirikan tahun 1987 dan didaftarkan sebagai badan hukum dengan nomor : 6151/BH /II tanggal 16 Pebruari 1987. Dalam perkembangannya KOPMA mempunyai tiga unit usaha, yaitu unit usaha pertokoan, unit usaha foto kopi dan unit usaha simpan pinjam.</p>

                        <p>Yang menjadi anggota koperasi mahasiswa Universitas PGRI Madiun adalah seluruh mahasiswa yang masih aktif kuliah. Apabila sudah lulus, otomatis mahasiswa yang bersangkutan sudah tidak menjadi anggota koperasi mahasiswa di Universitas PGRI Madiun.Setiap fakultas pada Universitas PGRI Madiun pasti memiliki KOPMA.Salah satunya yaitu KOPMA Fakultas Teknik Prodi Teknik Informatika.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->


    </section>
    <!-- End page content -->
@endsection
