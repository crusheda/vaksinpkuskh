@extends('layouts.vaksin')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Vaksin Nyaman Bersama</h1>
          <h2 style="color: black">Rumah Sakit PKU Muhammadiyah Sukoharjo</h2>
          <div><a href="#daftar" class="btn-get-started scrollto">Daftar Sekarang <i class="bx bx-paper-plane"></i></a></div><br>
          <h5>Prasyarat :</h5>
          <h6><i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Berlaku untuk sasaran usia 12 tahun ke atas</h6>
          <h6><i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Membawa Fotocopy KTP/KIA/KK</h6><br><br><br><br><br><br><br><br>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('img/vaksin/main.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative">
            <img src="{{ asset('img/vaksin/vaccinated.png') }}" style="height: 80%;margin-top:60px" class="img-fluid" alt="">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" style="text-align: justify;">
            <h3>Vaksinasi Covid-19<br><sub>Di RS PKU Muhammadiyah Sukoharjo</sub></h3>
            {{-- <p></p> --}}
            <p>&ensp;&ensp;&ensp;Vaksinasi COVID-19 bertujuan untuk melindungi dan memperkuat sistem kesehatan secara menyeluruh. Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang. Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara melawannya.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4 class="title"><a href="">Kuota 250 Orang</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Door Prize Menarik</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4 class="title"><a href="">Kartu Vaksinasi</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="readme" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Selengkapnya</h2>
          {{-- <p></p> --}}
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-error" style="color: #fcce6a;"></i></div>
              <h4 class="title"><a href="">Perhatian</a></h4>
              <p class="description" style="text-align: justify;">
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Pelaksanaan vaksinasi ini adalah perwujudan kerjasama bersama dengan Kementrian Kesehatan RI bersama dengan Dinas Kesehatan Provinsi/Kota dan tidak dipungut biaya.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Disuntikkan sebanyak dua kali dengan rentang jarak penyuntikan 28 hari.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Tidak dapat diberikan jika tekanan darah di atas 180/110 mmHg.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Tidak dapat diberikan jika mengidap COVID-19 dalam kurun waktu 3 bulan, mengidap gejala ISPA dalam tujuh hari terakhir, memiliki riwayat alergi berat, penyakit ginjal, rematik, dan sakit saluran pencernaan kronis.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Tidak dapat diberikan jika mengidap penyakit diabetes melitus DM tipe 2 yang tidak terkontrol dan komplikasi akut.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Pemberian vaksin akan ditunda jika penerima vaksin mengalami demam (di atas 37,5 derajat celcius).<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Pemberian vaksin akan ditunda jika pada saat pemeriksaan kesehatan oleh dokter didapatkan beberapa kriteria medis lain yang tidak memenuhi syarat.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Setelah pelaksanaan vaksinasi, maka peserta <b>DIWAJIBKAN</b> menunggu selama 15 menit di tempat yang disediakan untuk dilakukan aktivitas observasi pasca vaksinasi.<br>
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-check" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Pasca Vaksinasi</a></h4>
              <p class="description" style="text-align: justify;">
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Jika terdapat keluhan seperti nyeri, pegal, gatal disertai dengan badan terasa meriang atau demam disarankan untuk mengkonsumsi paracetamol.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Setelah Vaksinasi, obat rutin (obat darah tinggi / kencing manis / jantung, dll) yang dikonsumsi jangan dihentikan. Tetap konsumsi obat rutin sesuai dengan yang sudah diberikan dokter sebelumnya agar penyakit kronis tetap dapat terkontrol dengan baik dan tidak kambuh.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Tetap melakukan 5M (Memakai masker, Mencuci tangan, Menjaga jarak, Menghindari kerumunan, Mengurangi mobilitas) dan mengkonsumsi vitamin secara rutin untuk menjaga kondisi tubuh sembari menunggu proses pembentukan Antibodi.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Lakukan pemeriksaan <b>Anti-SARS COV-2 Kuantitatif (SRBD Antibodi)</b> yang mengukur kadar antibodi di dalam tubuh 14-28 hari setelah dosis kedua.<br>
              </p>
            </div>
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-x" style="color: #ff6846;"></i></div>
              <h4 class="title"><a href="">Kebijakan Pembatalan</a></h4>
              <p class="description" style="text-align: justify;">
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Pembatalan akan dilakukan jika tidak memenuhi syarat dan kriteria yang berlaku.<br>
                <i class="bx bx-chevron-right" style="color: #6ab1fc;"></i> Pembatalan dilakukan apabila identitas tidak valid.<br>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Sectio -->

    <!-- ======= Contact Section ======= -->
    <section id="daftar" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Vaksinasi Sekarang Juga!</h2>
          <p>&ensp;&ensp;&ensp;Vaksin COVID-19 diharapkan bisa menjadi solusi untuk menyudahi pandemi yang telah memakan banyak korban jiwa serta melumpuhkan aktivitas masyarakat, dan partisipasi Anda dalam program vaksinasi ini akan sangat membantu pemulihan kondisi negara kita.</p>
        </div>

        <div>
          {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p><a href="https://goo.gl/maps/3jrgxtXjgYTyFvqJ7">Jl. Mayor Sunaryo No. 37 Sukoharjo (57512)</a></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:pku.sukoharjo@gmail.com">pku.sukoharjo@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p><a href="tel:+0271593979">(0271) 593979</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <p><a href="{{ url('wa.me/62xxx') }}">-</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                        </div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-auth-small" id="formTambah" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mt-3">
                <div class="col-md-4 form-group">
                  <select class="form-select" style="color: rgb(114, 112, 112);font-family:Lato" name="vaksin" id="apivaksin" required @if(count($list['jenis']) == 0) echo disabled @endif>
                    <option selected hidden>Jenis Vaksin</option>
                        @if(count($list['jenis']) > 0)
                            @foreach($list['jenis'] as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_vaksin }}</option>
                            @endforeach
                        @endif
                  </select>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <select class="form-select" style="color: rgb(114, 112, 112);font-family:Lato" name="tgl" id="apitgl" disabled required>
                    <option selected hidden>Tanggal Vaksin</option>
                        {{-- @if(count($list['tgl']) > 0)
                            @foreach($list['tgl'] as $item)
                                <option value="{{ $item->id }}">{{ \Carbon\Carbon::parse($item->tgl)->isoFormat('dddd, D MMMM Y') }}</option>
                            @endforeach
                        @endif --}}
                  </select>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <select class="form-select" style="color: rgb(114, 112, 112);font-family:Lato" name="id_tgl" id="apijam" disabled required>
                    <option selected hidden>Jam Vaksin</option>
                  </select>
                </div>
              </div><hr>
              {{-- <div class="form-group mt-3">
              </div> --}}
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="number" class="form-control" name="nik" id="nik" max="9999999999999999" placeholder="NIK (Nomor Induk Kependudukan)" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="number" name="hp" class="form-control" id="hp" max="99999999999999" placeholder="Nomor HP / Whatsapp (62+)" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required></textarea>
              </div><br>
              {{-- <div class="my-3">
                <div class="loading">Sedang diproses</div>
                <div class="error-message"></div>
                <div class="sent-message">Data anda berhasil dimasukkan, terima kasih.</div>
              </div> --}}
              <div class="text-center">
                  <button type="submit" id="btndaftar" class="btn btn-info text-white" disabled>Daftar <i class="fa fa-paper-plane"></i></button>
                  &nbsp;&nbsp;<a style="font-family:Lato">Kuota tersisa : <b id="kuota">-</b></a>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/moment_locale_id.min.js') }}"></script>
    {{-- <script src="{{ asset('js/moment-with-locales.min.js') }}"></script> --}}
    <script>
        $(document).ready( function () {

            // VALIDASI INPUT NUMBER
            $('input[type=number][max]:not([max=""])').on('input', function(ev) {
                var $this = $(this);
                var maxlength = $this.attr('max').length;
                var value = $this.val();
                if (value && value.length >= maxlength) {
                $this.val(value.substr(0, maxlength));
                }
            });

            $('#apijam').change(function() {
                // console.log(this.value);
                $("#kuota").empty();
                $.ajax({
                    url: "./api/kuota/"+this.value,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        // console.log(res);
                        // $("#kuota").val(res);
                        if (res == 0) {
                            $("#btndaftar").attr('disabled', true);
                        } else {
                            $("#btndaftar").attr('disabled', false);
                        }
                        document.getElementById('kuota').innerHTML = res;
                        // $('#jumlah20').attr('required', true);
                    }
                });
            });

            $('#apivaksin').change(function() {
            document.getElementById('kuota').innerHTML = '-';
            $("#btndaftar").attr('disabled', true);
            // console.log(this.value);

                $.ajax({
                    url: "./api/tgl/"+this.value,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        $("#apitgl").val("").find('option').remove();
                        $("#apijam").val("").find('option').remove();
                        $("#apitgl").attr('disabled', false);
                        $("#apijam").attr('disabled', true).append('<option selected hidden>Jam Vaksin</option>');
                        $("#apitgl").append('<option selected hidden>Tanggal Vaksin</option>');
                        var len = res.length;
                        var sel = document.getElementById('apitgl');
                        for(var i = 0; i < len; i++) {
                            var opt = document.createElement('option');
                            var tgl = moment(res[i]['tgl']).format('dddd, D MMMM Y');
                            opt.innerHTML = tgl;
                            opt.value = res[i]['tgl'];
                            sel.appendChild(opt);
                        }
                    }
                });
            });

            $('#apitgl').change(function() {
            document.getElementById('kuota').innerHTML = '-';
            $("#btndaftar").attr('disabled', true);

                $.ajax({
                    url: "./api/jam/"+this.value,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        $("#apijam").val("").find('option').remove();
                        $("#apijam").attr('disabled', false);
                        $("#apijam").append('<option selected hidden>Jam Vaksin</option>');
                        var len = res.length;
                        var sel = document.getElementById('apijam');
                        for(var i = 0; i < len; i++) {
                            var opt = document.createElement('option');
                            opt.innerHTML = res[i]['jam'];
                            opt.value = res[i]['id'];
                            sel.appendChild(opt);
                        }
                    }
                });
            });


            $("#formTambah").one('submit', function() {
                //stop submitting the form to see the disabled button effect
                $("#btndaftar").attr('disabled','disabled');
                $("#btndaftar").find("i").toggleClass("fa-paper-plane fa-refresh fa-spin");

                return true;
            });
        });
    </script>

  </main><!-- End #main -->
@endsection
