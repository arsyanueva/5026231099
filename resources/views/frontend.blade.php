@extends('template2')

@section('title', 'Links website')

@push('styles')
<style>
body {
    background-color: #eed9d3;
}

.container {
  width: 100%;
  height: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.links-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.links-container a {
  width: 80%;
}

.w3-theme-l1:hover {
  background-color: #ffffff !important;
}

.margin-top-2 {
  margin-top: 32px;
}

.bottom {
  width: 100%;
  text-align: center;
  width: auto;
  font-weight: bolder;
}

@media (min-width: 768px) {
  .link {
    width: 100%;
  }
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}
</style>
@endpush

@section('content')
  <body>
    <div class="container">
      <div style="text-align: center">
        <p><span class="name w3-padding w3-red w3-round" style="font-weight: bolder;">Arsya Nueva Delavera</span></p>
        <p style="font-weight: bolder;">5026231099 | PBW-C</p>
      </div>

      <div class="links-container">
        <a href="pertama" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">pertama</a>
        <br>
        <a href="bootstrap1" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">bootstrap1</a>
        <br>
        <a href="bootstrap2" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">bootstrap2</a>
        <br>
        <a href="js1" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">js1</a>
        <br>
        <a href="js2" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">js2</a>
        <br>
        <a href="tugas1" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">tugas layout</a>
        <br>
        <a href="linktree" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">tugas linktree</a>
        <br>
        <a href="danantara" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">danantara</a>
        <br>
        <a href="ets" class="w3-button w3-round-xlarge w3-theme-l1 w3-border link" target="_blank">ets</a>
      </div>
    </div>
@endsection

@push('scripts')
    <script>
      feather.replace()
    </script>
@endpush
