
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">🔊 • Shhhnoise</h4>
          <p>
            Generator suara gratis yang dirancang untuk meningkatkan fokus dan relaksasi.
            <span class="d-none d-md-inline">
                Padu padankan soundscapes, dan bagikan kreasi Anda dengan orang lain.
                —— <a href="https://www.shhhnoise.com/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://www.shhhnoise.com/" style="width: 100%; height: 600px; overflow: hidden;
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
      </div>
    </div>
  </div>
@endsection
