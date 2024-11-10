@extends('template/template')

@section('content')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog Single</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog details part start -->
    <section class="blog-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="post">
                        <div class="post-image mb-5">
                            <img loading="lazy" class="img-fluid w-100" src="{{ asset('storage/' . $artikel['gambar']) }}"
                                alt="post-image">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h3>{{ $artikel['judul'] }}</h3>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">Admin</a>&nbsp;/
                                    {{ date('F d, Y', strtotime($artikel['created_at'])) }}
                                </li>
                            </ul>
                            <p>{{ $artikel['excerpt'] }}</p>
                            <div>{!! $artikel['body'] !!}</div>
                            <!-- post share -->
                            <ul class="post-content-share list-inline mb-5">
                                <li class="list-inline-item">
                                    <a href="https://themefisher.com/">
                                        <i class="tf-ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://themefisher.com/">
                                        <i class="tf-ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://themefisher.com/">
                                        <i class="tf-ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://themefisher.com/">
                                        <i class="tf-ion-social-skype"></i>
                                    </a>
                                </li>
                            </ul>

                            {{-- <h3>2 comments</h3>
                            <ul class="comment-list">
                                <!-- comment list -->
                                <li class="comment-list-item">
                                    <div class="comment-list-item-image">
                                        <img loading="lazy" src="images\blog\comment-1.jpg" alt="comment-img">
                                    </div>
                                    <div class="comment-list-item-content">
                                        <h5>Anke Kirsch</h5>
                                        <h6>Aug 20, 2018</h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor
                                            emque laudant tota rem
                                            ape riamipsa eaque. </p>
                                        <a href="single-post.html" class="comment-btn">reply</a>
                                    </div>
                                </li>
                                <li class="comment-list-item">
                                    <div class="comment-list-item-image">
                                        <img loading="lazy" src="images\blog\comment-2.jpg" alt="comment-img">
                                    </div>
                                    <div class="comment-list-item-content">
                                        <h5>Falk Burger</h5>
                                        <h6>Aug 20, 2018</h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor
                                            emque laudant tota rem
                                            ape riamipsa eaque. </p>
                                        <a href="single-post.html" class="comment-btn">reply</a>
                                    </div>
                                </li>
                            </ul>
                            <h3>Leave A Comments</h3>
                            <!-- Comment Form -->
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="first-name" class="form-control" id="first-name"
                                            placeholder="First Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="email" name="mail" class="form-control" id="mail"
                                            placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <button type="submit" value="send" class="btn btn-primary">send Message</button>
                            </form> --}}
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- sidebar -->
                    <aside class="sidebar pl-0 pl-lg-4">
                        <div class="widget-search widget">
                            <form action="#">
                                <!-- Search bar -->
                                <input class="form-control shadow-none" type="text" placeholder="Search..."
                                    name="search">
                                <button type="submit" class="widget-search-btn">
                                    <i class="tf-ion-ios-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget-categories widget">
                            <h2>Categories</h2>
                            <!-- widget categories list -->
                            <ul class="widget-categories-list">
                                @foreach ($allCategories as $category)
                                    <li>
                                        <a href="{{ url('/category', $category->slug) }}">{{ $category->nama }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget-post widget">
                            <h2>Latest Post</h2>
                            <!-- latest post -->
                            <ul class="widget-post-list">
                                @foreach ($recentArticles as $recent)
                                    <li class="widget-post-list-item">
                                        <div class="widget-post-image">
                                            <a href="{{ url('/article', $recent->slug) }}">
                                                <img loading="lazy" src="{{ asset('storage/' . $recent->gambar) }}"
                                                    alt="post-img">
                                            </a>
                                        </div>
                                        <div class="widget-post-content">
                                            <a href="{{ url('/article', $recent->slug) }}">
                                                <h5>{{ $recent->judul }}</h5>
                                            </a>
                                            <h6>{{ $recent->created_at->format('M d, Y') }}</h6>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details part end -->
@endsection
