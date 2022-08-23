@extends('layouts/contentLayoutMaster')

@section('title', 'Update IDT')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-file-uploader.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<section id="basic-vertical-layouts">
  <div class="row">
    <div class="col-md-8 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Dialy Activity PKL</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical" action="{{ route('activity.update', encrypt($activity->id)) }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label">Judul Aktifitas <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    name="activity_title"
                    placeholder="Judul Aktifitas"
                    value="{{ $activity->activity }}"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label">Divisi atau Bagian <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="divisi" value="{{ $activity->division }}" placeholder="Divisi atau Bagian" />
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1">
                  <label class="form-label">Deskripsi Kegiatan <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="description" placeholder="Deskripsi" rows="3" >{{ $activity->description }}</textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1">
                    <label class="form-label">Tanggal <span class="text-danger">*</span></label>
                    <input type="text" name="date" class="form-control flatpickr-basic" value="{{ $activity->date }}" placeholder="YYYY-MM-DD" />
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Mulai Jam <span class="text-danger">*</span></label>
                        <input type="text" name="start_time" class="form-control flatpickr-time text-start" value="{{ $activity->start_time }}" placeholder="HH:MM" />
                      </div>
                      <div class="col-md-6 mb-1">
                        <label class="form-label">Sampai Jam <span class="text-danger">*</span></label>
                        <input type="text" name="end_time" class="form-control flatpickr-time text-start" value="{{ $activity->end_time }}" placeholder="HH:MM" />
                      </div>
                  </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary me-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Upload Photo Kegiatan</h4>
            </div>
            <div class="card-body">
                <form action="#" class="dropzone dropzone-area" id="dpz-single-file">
                <div class="dz-message">Drop files here or click to upload.</div>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/file-uploaders/dropzone.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-file-uploader.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
@endsection
