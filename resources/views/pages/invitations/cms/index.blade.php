@extends('layouts.master')
 
@section('title', 'Content Management System')
 
@section('content')
    <div class="container">
        <div class="mt-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
              </nav>
            <h5>Content Management System</h5>
        </div>
        <div class="card p-3 p-md-5 bg-light">
            <form>
                <div class="mb-3">
                  <label for="nama_pria" class="form-label">Pengantin Pria</label>
                  <input type="text" class="form-control" id="nama_pria">
                </div>
                <div class="mb-3">
                  <label for="nama_wanita" class="form-label">Pengantin Wanita</label>
                  <input type="text" class="form-control" id="nama_wanita">
                </div>
                
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection