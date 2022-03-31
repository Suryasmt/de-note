@extends('users.layouts.main')

@section('container')

<section id="utang">
    <div class="gambar2">
        <img src="image/utang-gambar2.svg" alt="">
    </div>

    <div class="bg-biru">
        <h3 class="judul2"><img class="utang-gambar" src="image/utang-gambar1.svg" alt=""> Utang</h3>

        <div class="container">
            <div class="kotak3">
                <div class="row">
                    <div class="kotak2 col-lg-5 col-nd-12">
                        <img src="image/utang-foto1.svg" alt="">
                    </div>
                    <div class="kotak col-lg-7 col-nd-12">
                        <p class="text-lg2">Total Utang</p>
                        <p class="rupiah">Rp 3.000.000,-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gambar4">
            <img src="image/utang-gambar4.svg" alt="">
        </div>
    </div>


    <div class="limiter">
        <div class="container-table100">
            <div class="bungkus">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <div class="tabel-atas">
                                    <div class="tabel-atas2 row">
                                        <div class="pencarian col-7">
                                            <div class="input-group pencarian mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="per-halaman">
                                                <p>Rekam per halaman</p>
                                            </div>
                                        </div>
                                        <div class="tombol-catat1 col-3">

                                        </div>
                                        <div class="tombol-catat1 col-2">
                                            <a href="#">
                                                <div class="tombol-catat">
                                                    <p><i class="fa-solid fa-plus"></i> Catat Transaksi</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Nama</th>
                                        <th class="cell100 column2">Hutang</th>
                                        <th class="cell100 column4"></th>
                                    </tr>
                                </div>
                            </thead>


                            <div class="table100-body js-pscroll" id="checkbox-wrap">
                                <tbody>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Didi</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Haru</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Adi</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column4"><a href="#">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                            </a></td>
                                    </tr>
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="gambar3">
        <img src="image/utang-gambar3.svg" alt="">
    </div>

</section>

@endsection