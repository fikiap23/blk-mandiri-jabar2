@extends('template/template')

@section('content')
    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area" style="background-image: url(assets/images/slider/slider-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Balai Latihan Kerja Mandiri
                            <br>
                            Provinsi Jawa Barat
                        </h1>
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Asah keterampilanmu bersama
                            BLK Mandiri Jawa Barat! <br> siap menghadapi tantangan dunia kerja, serta menciptakan peluang
                            usaha secara mandiri. </p>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                            href="service.html">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url(assets/images/slider/slider-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We Combine Design <br>
                            and
                            Creativity</h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
                            for your Perfect Website. Choose from a wide range
                            <br> of Elements & simply put them on our Canvas.
                        </p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                            href="service.html">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
                                                                    Start About Section
                                                                    ==================================== -->
    <section class="service-2 section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Apa yang Kami Tawarkan ???</h2>
                        <p>Program Pelatihan dan Pengembangan
                            Balai Latihan Kerja Mandiri Disnakertrans Jawa Barat menawarkan berbagai program pelatihan dan
                            pengembangan yang dirancang untuk meningkatkan keterampilan dan daya saing peserta. Program kami
                            mencakup berbagai bidang, termasuk pelatihan vokasional, kewirausahaan, dan pengembangan diri.
                        </p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 text-center d-none d-md-block my-auto">
                    <img loading="lazy" src="{{ 'assets/' }}images\logo_blk.png" class="img-fluid inline-block"
                        alt="..." style="height: 400px !important;">
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="tf-ion-ios-alarm-outline"></i>
                                <h4>Manajemen Waktut</h4>
                                <p>Pelatihan kami mencakup strategi manajemen waktu yang efektif untuk membantu peserta
                                    memaksimalkan produktivitas dan mencapai tujuan pribadi serta profesional mereka.
                                    Peserta akan belajar teknik untuk memprioritaskan tugas, menetapkan tujuan yang dapat
                                    dicapai, dan mengelola jadwal mereka dengan efisien.</p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="tf-ion-ios-briefcase-outline"></i>
                                <h4>Ide Pemasaran</h4>
                                <p>Kami menyediakan strategi pemasaran inovatif yang disesuaikan untuk usaha kecil dan
                                    menengah. Sesi pelatihan kami berfokus pada pemasaran digital, branding, dan
                                    keterlibatan pelanggan, memungkinkan para pengusaha untuk mempromosikan bisnis mereka
                                    secara efektif.</p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="tf-ion-ios-email-outline"></i>
                                <h4>Dukungan Alat-alat</h4>
                                <p>Peserta menerima dukungan melalui alat-alat pendukung yang dirancang untuk membantu
                                    mereka merintis karir setelah menyelesaikan pelatihan. Kami menyediakan akses ke sumber
                                    daya, jaringan, dan panduan praktis untuk memfasilitasi transisi peserta ke dunia kerja.
                                </p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="tf-ion-ios-locked-outline"></i>
                                <h4>Pengapingan Pasca Pelatihan</h4>
                                <p>Di Balai Latihan Kerja Mandiri, kami berkomitmen untuk memberikan pengapingan bagi alumni
                                    kami. Kami menjaga hubungan dengan lulusan kami melalui program mentorship, pelatihan
                                    lanjutan, dan akses ke peluang kerja, memastikan mereka terus berkembang dalam karir
                                    mereka.</p>
                            </div>
                        </div><!-- END COL -->
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
                                                                    Start About Section
                                                                    ==================================== -->
    <section class="about-2 section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2>Bergabunglah Bersama Kami</h2>
                        <p>Balai Latihan Kerja Mandiri berkomitmen untuk mengubah kehidupan melalui pendidikan dan
                            pelatihan. Kami mengundang Anda untuk menjelajahi program-program kami yang beragam dan
                            mengambil langkah pertama menuju karier yang sukses. Mari kita bekerja sama untuk mencapai
                            tujuan Anda!</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>

            <div class="row">

                <div class="col-md-6 mb-4 mb-md-0">
                    <img loading="lazy" src="{{ 'assets/' }}images\about\about-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="checklist">
                        <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                        </li>
                        <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                        <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                        </li>
                        <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                        <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    </ul>
                    <a href="about.html" class="btn btn-main mt-20">Learn More</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
                                                                    Start Call To Action
                                                                    ==================================== -->
    <section class="call-to-action section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <h2>Bergabunglah Bersama Kami</h2>
                    <p>Balai Latihan Kerja Mandiri berkomitmen untuk mengubah kehidupan melalui pendidikan dan pelatihan.
                        Kami mengundang Anda untuk menjelajahi program-program kami yang beragam dan mengambil langkah
                        pertama menuju karier yang sukses. Mari kita bekerja sama untuk mencapai tujuan Anda!</p>
                    <a href="contact.html" class="btn btn-main">Contact Us</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
                                                                    Start Counter Section
                                                                    ==================================== -->
    <section class="counter-wrapper section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="title">
                        <h2>Award-Winning Agency</h2>
                        <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                            iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                            risus luctus dignissim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-alarm-outline"></i>
                        <div>
                            <span class="counter" data-count="150">0</span>
                        </div>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <!-- end first count item -->

                <!-- second count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-analytics-outline"></i>
                        <div>
                            <span class="counter" data-count="130">0</span>
                        </div>
                        <h3>Projects completed</h3>
                    </div>
                </div>
                <!-- end second count item -->

                <!-- third count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-compose-outline"></i>
                        <div>
                            <span class="counter" data-count="99">0</span>
                        </div>
                        <h3>Positive feedback</h3>

                    </div>
                </div>
                <!-- end third count item -->

                <!-- fourth count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item kill-border">
                        <i class="tf-ion-ios-bolt-outline"></i>
                        <div>
                            <span class="counter" data-count="250">0</span>
                        </div>
                        <h3>Cups of Coffee</h3>
                    </div>
                </div>
                <!-- end fourth count item -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!-- Start Testimonial
                                                                    =========================================== -->

    <section class="testimonial section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div class="testimonial-slider">
                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>"Kemajuan suatu bangsa ditentukan oleh pendidikan warganya."</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img loading="lazy" src="{{ 'assets/' }}images\client-logo\clients-1.jpg"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3> B.J. Habibie</h3>
                                <span>Presiden Republik Indonesia ke-3</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                    earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                    alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img loading="lazy" src="{{ 'assets/' }}images\client-logo\clients-2.jpg"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Emma Harrison</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                    earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                    alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img loading="lazy" src="{{ 'assets/' }}images\client-logo\clients-3.jpg"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Alexander Lucas</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section -->

    <!--
                                                            Start Blog Section
                                                            ===========================================
                                                            -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <h2> Latest <span class="color">Posts</span></h2>
                        <div class="border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit
                            libero inventore nam.</p>
                    </div>
                </div>
                <!-- /section title -->
            </div>

            <div class="row">
                <!-- single blog post -->
                @foreach ($artikels as $artikel)
                    <article class="col-lg-4 col-md-6">
                        <div class="post-item">
                            <div class="media-wrapper">
                                <img loading="lazy"
                                    src="{{ $artikel->gambar ? asset('storage/' . $artikel->gambar) : asset('assets/images/blog/post-1.jpg') }}"
                                    alt="{{ $artikel->judul }}" class="img-fluid">
                            </div>

                            <div class="content">
                                <h3><a href="{{ url('artikel/' . $artikel->slug) }}">{{ $artikel->judul }}</a></h3>
                                <div class="d-flex align-items-center">
                                    <ul class="list-unstyled d-flex flex-row mb-0" style="gap: 10px">
                                        <li style="gap: 5px" class="d-flex align-items-center me-3">
                                            <i class="bi bi-person me-1"></i>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li style="gap: 5px" class="d-flex align-items-center me-3">
                                            <i class="bi bi-tag me-1"></i>
                                            <a
                                                href="/kategoris/{{ $artikel->kategori->slug }}">{{ $artikel->kategori->nama }}</a>
                                        </li>
                                        <li style="gap: 5px" class="d-flex align-items-center">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            <a>{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{ $artikel->excerpt }}</p>
                                <a class="btn btn-main" href="{{ url('artikel/' . $artikel->slug) }}">Read more</a>
                            </div>
                        </div>
                    </article>
                @endforeach
                <!-- /single blog post -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->
@endsection
