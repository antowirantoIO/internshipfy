
@extends('layouts/contentLayoutMaster')

@section('title', 'Whiteboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-2">
        <div class="card-body">
          <h4 class="card-title">⏰ • Pomofocus</h4>
          <p>
            Pomofocus adalah pengatur waktu pomodoro yang dapat disesuaikan yang berfungsi di desktop & browser
            seluler.
            <span class="d-none d-md-inline">
                Tujuan dari aplikasi ini adalah untuk membantu Anda fokus pada tugas apa pun yang sedang Anda
                kerjakan, seperti belajar, menulis, atau coding.
                —— <a href="https://pomofocus.io/">Website Source ⇾</a>
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
        <iframe class="rounded-lg" src="https://pomofocus.io/" style="width: 100%; height: 600px; overflow: hidden;
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
      </div>
    </div>
  </div>
@endsection
