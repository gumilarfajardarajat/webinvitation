@extends('layouts.master')
 
@section('title', 'Content Management System')
 
@section('content')
    <div class="container">
      <div class="mt-5">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Setting Template</li>
              </ol>
            </nav>
          <h4>Biodata Pengantin</h4>
      </div>
      {{-- Biodata Pengantin  --}}
      <div class="card mt-2 p-3 py-md-3 px-md-5 bg-light">
          <form>
            <div class="row">
              <div class="col-md-6">
                <h5 class="my-3">Pengantin Pria</h5>
                {{-- Full Name  --}}
                <div class="mb-3">
                  <label for="name_pria" class="form-label">Nama Lengkap Pengantin Pria</label>
                  <input type="text" class="form-control" id="name_pria" placeholder="Nama lengkap (termasuk gelar)">
                </div>
                {{-- Short Name  --}}
                <div class="mb-3">
                  <label for="short_name_pria" class="form-label">Nama Panggilan </label>
                  <input type="text" class="form-control" id="short_name_pria" placeholder="Nama Panggilan">
                </div>
                {{-- Foto Pria  --}}
                <div class="mb-3">
                  <label for="foto_pria" class="form-label">Foto Pengantin Pria </label>
                  <input type="file" class="form-control" id="foto_pria" placeholder="Foto Pengantin Pria">
                </div>
                {{-- Birthday  --}}
                <div class="mb-3">
                  <label for="birthday_pria" class="form-label">Tanggal Lahir </label>
                  <input type="date" class="form-control" id="birthday_pria" placeholder="Tanggal Lahir">
                </div>
                {{-- Ayah Pria  --}}
                <div class="mb-3">
                  <label for="father_pria" class="form-label">Nama Ayah </label>
                  <input type="text" class="form-control" id="father_pria" placeholder="Nama Ayah">
                </div>
                {{-- Ibu Pria  --}}
                <div class="mb-3">
                  <label for="father_pria" class="form-label">Nama Ibu </label>
                  <input type="text" class="form-control" id="father_pria" placeholder="Nama Ibu">
                </div>
              </div>
              <div class="col-md-6">
                <h5 class="my-3">Pengantin Wanita</h5>
                {{-- Full Name  --}}
                <div class="mb-3">
                  <label for="name_wanita" class="form-label">Nama Lengkap Pengantin Wanita</label>
                  <input type="text" class="form-control" id="name_wanita" placeholder="Nama lengkap (termasuk gelar)">
                </div>
                {{-- Short Name  --}}
                <div class="mb-3">
                  <label for="short_name_wanita" class="form-label">Nama Panggilan </label>
                  <input type="text" class="form-control" id="short_name_wanita" placeholder="Nama Panggilan">
                </div>
                {{-- Birthday  --}}
                <div class="mb-3">
                  <label for="birthday_wanita" class="form-label">Tanggal Lahir </label>
                  <input type="date" class="form-control" id="birthday_wanita" placeholder="Tanggal Lahir">
                </div>
                {{-- Foto Wanita  --}}
                <div class="mb-3">
                  <label for="foto_wanita" class="form-label">Foto Pengantin Wanita </label>
                  <input type="file" class="form-control" id="foto_wanita" placeholder="Foto Pengantin Wanita">
                </div>
                {{-- Ayah wanita  --}}
                <div class="mb-3">
                  <label for="father_wanita" class="form-label">Nama Ayah </label>
                  <input type="text" class="form-control" id="father_wanita" placeholder="Nama Ayah">
                </div>
                {{-- Ibu wanita  --}}
                <div class="mb-3">
                  <label for="father_wanita" class="form-label">Nama Ibu </label>
                  <input type="text" class="form-control" id="father_wanita" placeholder="Nama Ibu">
                </div>
              </div>
            </div>
              <button type="submit" id="save_biodata" class="btn btn-primary w-100 my-3">Save</button>
          </form>
      </div>

      {{-- Informasi Pernikahan  --}}
      <h4 class="mt-4">Informasi Pernikahan</h4>
      <div class="card mt-2 p-3 py-md-3 px-md-5 bg-light">
        <form>
          {{-- Tanggal Akad  --}}
          <div class="mb-3">
            <label for="akad_date" class="form-label">Tanggal Akad </label>
            <input type="date" class="form-control" id="akad_date" placeholder="Tanggal Akad">
          </div>
          {{-- Jam Akad  --}}
          <div class="mb-3">
            <label for="akad_time" class="form-label">Jam Akad </label>
            <input type="text" class="form-control" id="akad_time" placeholder="Jam Akad">
          </div>
          {{-- Tanggal Resepsi  --}}
          <div class="mb-3">
            <label for="resepsi_date" class="form-label">Tanggal Resepsi </label>
            <input type="date" class="form-control" id="resepsi_date" placeholder="Tanggal Resepsi">
          </div>
          {{-- Jam Resepsi  --}}
          <div class="mb-3">
            <label for="resepsi_time" class="form-label">Jam Resepsi </label>
            <input type="text" class="form-control" id="resepsi_time" placeholder="Jam Resepsi">
          </div>
          {{-- Kata Pengantar  --}}
          <div class="mb-3">
            <label for="story_wedding" class="form-label">Kata Pengantar </label>
            <textarea type="text" class="form-control" id="story_wedding" placeholder="Kata Pengantar" style="height: 100px"></textarea>
          </div>
          {{-- Story Wedding  --}}
          <div class="mb-3">
            <label for="kata_pengantar" class="form-label">Story Wedding </label>
            <textarea type="text" class="form-control" id="kata_pengantar" placeholder="Story Wedding" style="height: 100px"></textarea>
          </div>
            <button type="submit" id="save_biodata" class="btn btn-primary w-100 my-3">Save</button>
        </form>
      </div>

      {{-- Media  --}}
      <h4 class="mt-4">Media</h4>
      <div class="card mt-2 p-3 py-md-3 px-md-5 bg-light">
        <form>
          {{-- Wedding Music  --}}
          <div class="mb-3">
            <label for="wedding_music" class="form-label">Wedding Music </label>
            <input type="file" class="form-control" id="wedding_music" placeholder="Wedding Music">
          </div>
          {{-- Background Cover  --}}
          <div class="mb-3">
            <label for="background_cover" class="form-label">Background Cover </label>
            <input type="file" class="form-control" id="background_cover" placeholder="Background Cover">
          </div>
          {{-- Gallery  --}}
          <div class="mb-3">
            <label for="gallery_wedding" class="form-label">Gallery </label>
            <input type="file" multiple class="form-control" id="gallery_wedding" placeholder="Gallery">
          </div>
            <button type="submit" id="save_biodata" class="btn btn-primary w-100 my-3">Save</button>
        </form>
      </div>

      {{-- Lainnya  --}}
      <h4 class="mt-4">Lainnya</h4>
      <div class="card mt-2 p-3 py-md-3 px-md-5 bg-light">
        <form>
          {{-- Gift  --}}
          <h5 class="mt-3">Gift</h5>
          <div class="mb-3">
            <label for="gift_1" class="form-label">Nomor Rekening </label>
            <input type="text" class="form-control" id="gift_1" placeholder="Nomor Rekening">
          </div>
          {{-- Nama Bank  --}}
          <div class="mb-3">
            <label for="gift_name_1" class="form-label">Bank / E-Wallet </label>
            <input type="text" class="form-control" id="gift_name_1" placeholder="GoPay">
          </div>
          {{-- Konfirmasi  --}}
          <div class="mb-3">
            <label for="konfirmasi_wa" class="form-label">Konfirmasi (Whatsapp) </label>
            <input type="text" class="form-control" id="konfirmasi_wa" placeholder="Konfirmasi (Whatsapp)">
          </div>
            <button type="submit" id="save_biodata" class="btn btn-primary w-100 my-3">Save</button>
        </form>
      </div>
    </div>
    <div class="container my-5"></div>
@endsection