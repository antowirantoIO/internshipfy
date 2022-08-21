
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">⏰🌏 • Lifeat</h4>
          <p>
            LifeAt sedang membangun dunia baru ruang virtual dan alat produktivitas GRATIS!!
            <span class="d-none d-md-inline">
                Kami berharap alat kami dapat membantu orang-orang merasa tidak berdaya selama pandemi ini.
                —— <a href="https://lifeat.io/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://lifeat.io/" style="width: 100%; height: 600px; overflow: hidden;
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
      </div>
    </div>
  </div>
@endsection
