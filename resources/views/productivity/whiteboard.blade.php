
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">⬜ • Whiteboard</h4>
          <p>
            Dibawah ini ada whiteboard yang bisa kalian pakai juga berkolaborasi.
            <span class="d-none d-md-inline">
                Jika kalian ingin berkolaborasi dengan teman kalian, cukup klik share dan bagikan link nya
                ke temanmu. Maka dengan begitu kalian dapat segera berkolaborasi!
                —— <a href="https://witeboard.com/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://witeboard.com/" style="width: 100%; height: 800px; overflow: hidden; border:
                none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
        </iframe>
      </div>
    </div>
  </div>
@endsection
