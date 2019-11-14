@extends('attendee/app')

@section('content')
<section id="content">
    <div class="container">
      <div class="row">
          <div class="span6" style="text-align:left">
            <img src="./../img/default.png" width="50"><span>  <a href="/default" class="btn btn-rounded btn-inverse"><strong>  DEFAULT FMIPA UNJ</strong></a></span>
            <br><br>
            <h6 style="color:steelblue">BINER (Be Innovative and Educated Researcher)</h6>
            <p><i class="icon-calendar"></i> Sabtu, 20 November 2019</p>
            <p><i class="icon-time"></i> 08.00-12.00</p>
            <p><i class="font-icon-map-marker"></i> Kampus A, UNJ, Rawamangun Muka, Jakarta Timur</p>
            <br>
            <a class="btn btn-large btn-rounded btn-info" data-toggle="modal" data-target="#ticket" style="text-align:center"><i class="icon-plus icon-white"></i>  Buy Ticket</a>
            <br><br><br>
            <h6>Description</h6>
            <p>
                    Merupakan rangkaian agenda teknologi informasi di Universitas Negeri Jakarta yang diadakan setiap tahun. Kini Biner sudah diadakan untuk ke-4 kalinya <br>

                    Didalam acara BINER 4.0 ini akan ada <br>

                    Seminar Teknologi <br>
                    AGRI-COOL-TURE “One Step Closer Towards Smart Farming 4.0 Indonesia”<br>

                    Dengan Pembicara Kece <br>
                    Agung Prabowo (Head Division of Cooperative and Utilization of Engineering and Testing Result in BPP Mekari) <br>
                    Andri Yadi (CEO DyCodeX dan DyCode) <br>

                    Tanggal : Sabtu, 15 Juni 2019 <br>
                    Waktu : 08.30 WIB s.d. selesai <br>
                    Tempat : Lantai 8 Gedung Ki Hajar Dewantara, Universitas Negeri Jakarta <br>
                    HTM : 55K <br>
                    Yang didapatkan : Ilmu yang bermanfaat, Sertifikat, Goodie Bag, Merchandise, Snack, Doorprize
                    Pendaftaran hanya sampai 8 Juni 2019
            </p>
          </div>

        <div class="span6">
          <img src="../../img/biner.jpeg"  width="450">
        </div>

        <div class="span6">

      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align:center;">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color:dimgrey">Select Ticket</h5>
          </button>
        </div>
        <div class="modal-body" style="text-align:center;">
            <p>
                <a href="#" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Green</a><br><br>
                <a href="#" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Yellow</a><br><br>
                <a href="#" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Green</a><br><br>
                <a href="#" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Yellow</a>
            </p>

        </div>
      </div>
    </div>
  </div>

@endsection
