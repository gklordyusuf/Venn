@extends('template')
@section('title', 'About Venn')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset
 
('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>About V e n n</h1>
      <p class="lead">Siapa tau dapet JODOH</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection
 
@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Halaman About Us</h2>
          <p class="lead">Aku siap Aku siap Aku siap. Keluar dari zona nyaman</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection