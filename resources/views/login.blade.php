@extends('template.templatedark')

@section('content')
    <!--Start Contact Us
         =========================================== -->
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 60px;">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center pb-0">
                        <h2>Masuk Akun</h2>
                        <p>Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>
                        <div class="border"></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" style="padding-bottom: 60px;">
                <div class="col-xl-6 col-lg-8">
                    <div class="card shadow w-100" style="border-radius: 20px; border: 2px solid rgba(0,0,0,.125);">
                        <div class="card-body p-5">
                            <div class="row mb-4">
                                <div class="col-12 text-center">
                                    <img src="{{ 'assets/' }}images/logo_BLKMjabar.png" alt="logo" width="80px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger text-center font-weight-bold" id="alertError" hidden>
                                        <i class="fa fa-times-circle"></i> <span id="error_message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <form id="formLogin" action="{{ 'login' }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username" class="font-weight-bold">Username</label>
                                            <input type="text" id="username" name="username" class="form-control"
                                                placeholder="Masukkan email">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="password" class="font-weight-bold">Password</label>
                                                </div>
                                                <div class="col-8 text-right">
                                                    <a href="#">Lupa password?</a>
                                                </div>
                                            </div>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="Masukkan password">
                                        </div>

                                        <button type="submit" id="btnLogin" class="btn btn-primary btn-block"
                                            style="border-radius: 0px; padding: 8px;">Masuk</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 text-center">
                                    Belum punya akun? <a href="{{ 'register' }}">Daftarkan Dirimu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section> <!-- end section -->
@endsection
