{{-- @push('css')
<style>
    .viptextcolor {
        color: red;
    }
</style>
@endpush --}}
<header id="header" class="header-transparent header-effect-shrink header-no-border-bottom"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0  box-shadow-none" style="background-color: var(--branding-color) ">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">

                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img class="" alt="Porto" height="50" data-sticky-height="40"
                                    src="{{ asset('images/logo.png') }}" style="border-radius: 5%" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown " >
                                            <a class="
                                            dropdown-item
                                            dropdown-toggle
                                            color-vipmm
                                        "
                                                href="tel:0176750668">

                                                <span class=""
                                                    style="color:white;display: flex; gap: 10px; align-items: center;">
                                                    <span
                                                        class="material-symbols-outlined "style="font-size:25px; background-color: white; padding:5px; border-radius: 25px;  color:black;
                                                     ">
                                                        phone_in_talk
                                                    </span>+880176750668</span>

                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="
                                            dropdown-item
                                            dropdown-toggle
                                            color-vipmm

                                        "
                                                data-target="#smallModal" data-toggle="modal">
                                                <span class="" style="color:white;cursor: pointer;" >LogIn</span>

                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="d-sm-none">
                                <a class=""
                                    href="tel:01767506668">

                                    <span class=""
                                        style="color:white;display: flex; gap: 4px; align-items: center;">
                                        <span
                                            class="material-symbols-outlined "style="font-size:15px; background-color: white; padding:5px; border-radius: 25px;  color:black;
                                         ">
                                            phone_in_talk
                                        </span>Call</span>

                                </a>

                            </div>
                            <button class="btn header-btn-collapse-nav collapsed" data-toggle="collapse"
                                data-target=".header-nav-main nav" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        {{-- <div
                            class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex"> <a href="#"
                                    class="header-nav-features-toggle" data-focus="headerSearch"><i
                                        class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                                    id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group"> <input class="form-control text-1"
                                                id="headerSearch" name="q" type="search" value=""
                                                placeholder="Search..."> <span class="input-group-append"> <button
                                                    class="btn" type="submit"> <i
                                                        class="fa fa-search header-nav-top-icon text-color-dark"></i>
                                                </button> </span> </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
