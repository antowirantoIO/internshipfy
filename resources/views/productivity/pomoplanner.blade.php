
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">🏢 • Skyoffice</h4>
          <p>
            Presentasi dan bertemu temanmu dengan konsep game dimana saja dan kapan saja dengan SkyOffice
            <span class="d-none d-md-inline">
                Banyak hal yang bisa kamu lakukan disini, screenshare, meeting, rapat dan banyak hal lain yang
                menanti mu.
                —— <a href="https://skyoffice.netlify.app/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://skyoffice.netlify.app/" style="width: 100%; height: 800px; overflow: hidden;
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
        </iframe>
      </div>
    </div>
  </div>
@endsection
