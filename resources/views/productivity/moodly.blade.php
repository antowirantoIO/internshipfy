
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">🔊 • Moodly</h4>
          <p>
            Dapatkan rasa fokus dan relaksasi yang lebih baik dengan mendengarkan suara alam sekitar.
            <span class="d-none d-md-inline">
                Gandakan produktivitas dan fokus Anda dengan Moodly, sepenuhnya GRATIS.
                —— <a href="https://moodly.site/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://moodly.site/" style="width: 100%; height: 600px; overflow: hidden;
                 border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
                </iframe>
      </div>
    </div>
  </div>
@endsection
