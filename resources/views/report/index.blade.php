
@extends('layouts/contentLayoutMaster')

@section('title', 'Upload Laporan PKL')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">⏰🌏 • Laporan PKL</h4>
          <p>
            Upload laporan PKLmu disini. sebagai laporan akhir PKL kamu dan pembimbing kamu akan dapat melihatnya.
            <span class="d-none d-md-inline">
                kamu dapat mengupdate dan revisi laporan PKL jika di perlukan. ⇾
            </span>
        </p>
        </div>
      </div>
  </div>
</div>
<section>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="col-md-6 mx-auto">
            <img src="http://127.0.0.1:8001/images/illustrations/todo-list.png" class="img-fluid" data-original-title="" title="">
        </div>
        <div class="card-footer">
            <a href="https://lifeat.io/" class="btn btn-primary">Upload Laporan PKL &rarr;</a>
        </div>
      </div>
    </div>
  </div>
@endsection
