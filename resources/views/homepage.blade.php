@extends('template')
@section('title', 'V e n n')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset
 
('belajar_laravel/images/home-bg.jpg') }}') no-repeat bottom center;">
    <div class="container text-center">
      <h1>V e n n</h1>
      <p class="lead">Cari teman perjalanan Kamu</p>
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
            <h2>B e r a n d a</h2>
            <p class="lead">Anda seorang traveller? Anda memiliki jiwa petualang? Anda ingin menikmati indahnya dunia? Namun Anda bosan menikmati dunia sendirian dan Anda ingin berpetualang bersama orang baru? Maka bergabunglah bersama Kami di suatu room yang akan merubah suasana perjalanan Anda lebih menyenangkan, mendebarkan, penuh suka dan duka bersama orang-orang baru. Let's Join Us in Your new Venn!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->
@endsection