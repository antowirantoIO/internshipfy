@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice Preview')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{asset('css/base/pages/app-invoice.css')}}">
@endsection

@section('content')
<section class="invoice-preview-wrapper">
  <div class="row invoice-preview">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <div class="card-body invoice-padding pb-0">
          <!-- Header starts -->
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            <div>
              <div class="logo-wrapper">
                <img width="15%" height="20%" src="/images/logosmkn1ciamis.png" alt="">
                <h3 class="invoice-logo">SMK NEGERI 1 CIAMIS</h3>
              </div>
              <p class="card-text mb-25">Jl. Jend. Sudirman Lingk. Cibeureum No.269</p>
              <p class="card-text mb-25">RT.01/RW.09, Sindangrasa, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46215</p>
              <p class="card-text mb-0">+62 265 771204</p>
            </div>
            <div class="mt-md-0 mt-2">
              <h4 class="invoice-title">
              </h4>
              <div class="invoice-date-wrapper">
                <p class="invoice-date-title">Tanggal IDT:</p>
                <p class="invoice-date">{{ $activity->date }}</p>
              </div>
            </div>
          </div>
          <!-- Header ends -->
        </div>

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
          <div class="row invoice-spacing">
            <div class="col-xl-8 p-0">
              <h6 class="mb-2">Mitra Perusahaan:</h6>
              <h6 class="mb-25">PT. Industri Telekomunikasi Indonesia / PT. INTI</h6>
              <p class="card-text mb-25">Jl. Moh. Toha No. 77 Cigereleng Regol Bandung Jawa Barat</p>
              <p class="card-text mb-25">Cigereleng, Regol, Cigereleng, Kec. Regol, Kota Bandung, Jawa Barat 40253</p>
              <p class="card-text mb-25">+62 22 5201501</p>
              <p class="card-text mb-0">info@inti.co.id</p>
            </div>
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        <div class="table-responsive border-top">
          <table class="table">
            <tbody>
              <tr>
                <td class="py-1">
                  <p class="card-text fw-bold mb-25">{{ $activity->activity }}</p>
                  <p class="card-text text-nowrap">
                    {{ $activity->description }}
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Invoice Description ends -->

        <hr class="invoice-spacing" />

        <!-- Invoice Note starts -->
        <div class="card-body invoice-padding pt-0">
          <div class="row">
            <div class="col-12">
              <span class="fw-bold">Note:</span>
              @if($activity->notes == null)
                <p class="card-text mb-25"> Yeayyy, Tidak ada noted dari pembimbing kamu</p>
              @else
                <p class="card-text mb-25">{{ $activity->notes }}</p>
              @endif
            </div>
          </div>
        </div>
        <!-- Invoice Note ends -->
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
      <div class="card">
        <div class="card-body">
          <a href="/activity/send/{{ encrypt($activity->id); }}" class="btn btn-primary w-100 mb-75">
            Send IDT
          </a>
          <a class="btn btn-outline-secondary w-100 mb-75" href="/activity/edit/{{ encrypt($activity->id); }}"> Edit </a>
          <a class="btn btn-outline-secondary w-100 mb-75" href="/activity"> Kembali </a>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</section>

@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
@endsection
