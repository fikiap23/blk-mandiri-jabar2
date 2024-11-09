<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Artikel | berasratu.com</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                        <span class="material-symbols-outlined">
                            today
                        </span>
                        {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                    </a>
                </li>
                <hr class="my-3">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        Dashboard
                    </a>
                </li>
                <hr class="my-3">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/artikel') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/artikel">
                        <span class="material-symbols-outlined">
                            article
                        </span>
                        Artikel
                    </a>
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/artikel/create') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/artikel/create">
                        <span class="material-symbols-outlined">
                            edit_document
                        </span>
                        Buat Artikel
                    </a>
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/kategori') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/kategori">
                        <span class="material-symbols-outlined">
                            category
                        </span>
                        Kategori
                    </a>
                </li>

            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined">
                                door_open
                            </span>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
