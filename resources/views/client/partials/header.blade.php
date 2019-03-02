<header id="header" class="header-header-2" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <!-- #header -->
    <div class="inner-header">
        <div class="container">
            <div id="logo">
                <h1>
                <a href="{{ url('/') }}"><img style="opacity:0.9"src="{{secure_asset('public/client/images/logo.png')}}"
                            alt="Hugo Blog" /></a>
                </h1>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navigation" class="header-layout-bottom menu-style-1 header-2 menu-item-padding" role="navigation"
        itemscope itemtype="http://schema.org/SiteNavigationElement">
        <div class="container">
            <div class="button-menu-mobile header-2"><i class="fa fa-bars"></i></div>
            <ul id="menu-menu-2" class="menu">
                <li class="megamenu menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a
                        href="{{url('/')}}">Trang chủ</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category penci-mega-menu menu-item-243"><a href="#">Blog</a>
                <ul class="sub-menu">
                    <li class="menu-item-0">
                        <div class="penci-megamenu">
                            <div class="penci-mega-child-categories">
                                @foreach ($topCategories as $index => $topCategory)
                                @if($index <4)
                                @if($index == 0 )
                                <a class="mega-cat-child cat-active all-style" href="{{$topCategory['url']}}"
                                data-id="penci-mega-{{$index}}"><span>{{$topCategory['name']}}</span></a>
                                @else
                                <a class="mega-cat-child" href="{{$topCategory['url']}}"
                                data-id="penci-mega-{{$index}}"><span>{{$topCategory['name']}}</span></a>
                                @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="penci-content-megamenu">
                                <div class="penci-mega-latest-posts col-mn-4 mega-row-1">
                                    @foreach ($topCategories as $index => $topCategory)
                                    @if($index <4)
                                    <div class="penci-mega-row penci-mega-{{$index}} @if($index == 0) row-active @endif">
                                    @foreach ($menuPosts as $menuPost)
                                        @if ($menuPost->category_id == $index+1)
                                        <div class="penci-mega-post">
                                            <div class="penci-mega-thumbnail">
                                                <span class="mega-cat-name">
                                                <a href="{{$menuPost->url}}">{{$topCategory['name']}}</a>
                                                </span>
                                            <a class="penci-image-holder penci-lazy" data-src="{{$menuPost->cover}}"
                                                href="{{$menuPost->url}}" title="{{$menuPost->title}}">
                                                </a>
                                            </div>
                                            <div class="penci-mega-meta">
                                                <h3 class="post-mega-title">
                                                    <a href="{{$menuPost->url}}" title="{{$menuPost->title}}">{{$menuPost->title}}</a>
                                                </h3>
                                                <p class="penci-mega-date"><time class="entry-date published"
                                                        datetime="{{$menuPost->public_at}}">{{$menuPost->public_at}}</time>
                                                        {{-- <time class="penci-hide-tagupdated updated"
                                                        datetime="2018-09-04T04:09:39+00:00">September
                                                        4, 2018</time> --}}
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-40"><a
                        href="#">Chuyên mục</a>
                    <ul class="sub-menu">
                        @foreach ($topCategories as $topCategory)
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-134"><a
                            href="{{$topCategory['url']}}">{{$topCategory['name']}}</a>
                            @if ($topCategory['categories'])
                            @foreach ($topCategory['categories'] as $category)
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-135"><a
                                    href="{{$category['url']}}">{{$category['name']}}</a></li>
                                </ul>
                            @endforeach
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                {{-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category penci-mega-menu menu-item-244"><a
                        href="category/coffee-update/coffee-tips/index.html">Coffee
                        Tips</a>
                    <ul class="sub-menu">
                        <li class="menu-item-0">
                            <div class="penci-megamenu">
                                <div class="penci-content-megamenu">
                                    <div class="penci-mega-latest-posts col-mn-5 mega-row-1">
                                        <div class="penci-mega-row penci-mega-9 row-active">
                                            <div class="penci-mega-post">
                                                <div class="penci-mega-thumbnail">
                                                    <span class="mega-cat-name">
                                                        <a href="category/coffee-update/coffee-tips/index.html">
                                                            Coffee Tips </a>
                                                    </span>
                                                    <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p8-585x390.jpg"
                                                        href="choosing-best-vegan-milk-for-coffee/index.html" title="Best Vegan Milk For Coffee">
                                                    </a>
                                                </div>
                                                <div class="penci-mega-meta">
                                                    <h3 class="post-mega-title">
                                                        <a href="choosing-best-vegan-milk-for-coffee/index.html" title="Best Vegan Milk For Coffee">Best
                                                            Vegan
                                                            Milk For Coffee</a>
                                                    </h3>
                                                    <p class="penci-mega-date"><time class="entry-date published"
                                                            datetime="2018-09-04T02:24:25+00:00">September
                                                            4, 2018</time><time class="penci-hide-tagupdated updated"
                                                            datetime="2018-09-04T04:09:45+00:00">September
                                                            4, 2018</time></p>
                                                </div>
                                            </div>
                                            <div class="penci-mega-post">
                                                <div class="penci-mega-thumbnail">
                                                    <span class="mega-cat-name">
                                                        <a href="category/coffee-update/coffee-tips/index.html">
                                                            Coffee Tips </a>
                                                    </span>
                                                    <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p12-585x390.jpg"
                                                        href="how-to-make-latte-art-c-c-c-c-c-c-c-c-c-c-c-c-c-c/index.html"
                                                        title="How To Make Latte Art">
                                                    </a>
                                                </div>
                                                <div class="penci-mega-meta">
                                                    <h3 class="post-mega-title">
                                                        <a href="how-to-make-latte-art-c-c-c-c-c-c-c-c-c-c-c-c-c-c/index.html"
                                                            title="How To Make Latte Art">How
                                                            To Make Latte Art</a>
                                                    </h3>
                                                    <p class="penci-mega-date"><time class="entry-date published"
                                                            datetime="2018-09-04T02:24:09+00:00">September
                                                            4, 2018</time><time class="penci-hide-tagupdated updated"
                                                            datetime="2018-09-04T04:10:01+00:00">September
                                                            4, 2018</time></p>
                                                </div>
                                            </div>
                                            <div class="penci-mega-post">
                                                <div class="penci-mega-thumbnail">
                                                    <span class="mega-cat-name">
                                                        <a href="category/coffee-update/coffee-tips/index.html">
                                                            Coffee Tips </a>
                                                    </span>
                                                    <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p14-585x390.jpg"
                                                        href="making-morning-coffee/index.html" title="Making Morning Coffee">
                                                    </a>
                                                </div>
                                                <div class="penci-mega-meta">
                                                    <h3 class="post-mega-title">
                                                        <a href="making-morning-coffee/index.html" title="Making Morning Coffee">Making
                                                            Morning Coffee</a>
                                                    </h3>
                                                    <p class="penci-mega-date"><time class="entry-date published"
                                                            datetime="2018-09-04T02:24:01+00:00">September
                                                            4, 2018</time><time class="penci-hide-tagupdated updated"
                                                            datetime="2018-09-04T04:10:10+00:00">September
                                                            4, 2018</time></p>
                                                </div>
                                            </div>
                                            <div class="penci-mega-post">
                                                <div class="penci-mega-thumbnail">
                                                    <span class="mega-cat-name">
                                                        <a href="category/coffee-update/coffee-tips/index.html">
                                                            Coffee Tips </a>
                                                    </span>
                                                    <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p17-585x390.jpg"
                                                        href="coffee-sop-bakery-in-cali/index.html" title="Coffee Sop &#038; Bakery in Cali">
                                                    </a>
                                                </div>
                                                <div class="penci-mega-meta">
                                                    <h3 class="post-mega-title">
                                                        <a href="coffee-sop-bakery-in-cali/index.html" title="Coffee Sop &#038; Bakery in Cali">Coffee
                                                            Sop
                                                            &#038; Bakery in Cali</a>
                                                    </h3>
                                                    <p class="penci-mega-date"><time class="entry-date published"
                                                            datetime="2018-09-04T02:23:49+00:00">September
                                                            4, 2018</time><time class="penci-hide-tagupdated updated"
                                                            datetime="2018-09-17T20:37:28+00:00">September
                                                            17, 2018</time></p>
                                                </div>
                                            </div>
                                            <div class="penci-mega-post">
                                                <div class="penci-mega-thumbnail">
                                                    <span class="mega-cat-name">
                                                        <a href="category/coffee-update/coffee-tips/index.html">
                                                            Coffee Tips </a>
                                                    </span>
                                                    <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p20-585x390.jpg"
                                                        href="how-to-make-good-latte/index.html" title="How To Make Good Latte">
                                                    </a>
                                                </div>
                                                <div class="penci-mega-meta">
                                                    <h3 class="post-mega-title">
                                                        <a href="how-to-make-good-latte/index.html" title="How To Make Good Latte">How
                                                            To Make Good Latte</a>
                                                    </h3>
                                                    <p class="penci-mega-date"><time class="entry-date published"
                                                            datetime="2018-09-04T02:23:34+00:00">September
                                                            4, 2018</time><time class="penci-hide-tagupdated updated"
                                                            datetime="2018-09-17T20:38:57+00:00">September
                                                            17, 2018</time></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-65"><a
                        href="#">Portfolio</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66"><a href="portfolio-3-columns/index.html">Masonry
                                3 Columns</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67"><a href="portfolio-2-columns/index.html">Masonry
                                2 Columns</a></li>
                    </ul>
                </li> --}}
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a href="{{url('/gallery')}}">Album ảnh</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a href="{{url('/contact')}}">Liên hệ</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a href="{{url('/about')}}">Giới thiệu</a></li>
            </ul>




            <div id="top-search">
                <a class="search-click"><i class="fa fa-search"></i></a>
                <div class="show-search">
                    <form role="search" method="get" id="searchform" action="http://soledad.pencidesign.com/soledad-coffee-blog/">
                        <div>
                            <input type="text" class="search-input" placeholder="Type and hit enter..." name="s" id="s" />
                        </div>
                    </form> <a class="search-click close-search"><i class="fa fa-close"></i></a>
                </div>
            </div>
            {{-- Button for left sidebar  --}}
            {{-- <div class="penci-menuhbg-wapper penci-menu-toggle-wapper">
                <a href="#pencimenuhbgtoggle" class="penci-menuhbg-toggle">
                    <span class="penci-menuhbg-inner">
                        <i class="lines-button lines-button-double">
                            <i class="penci-lines"></i>
                        </i>
                        <i class="lines-button lines-button-double penci-hover-effect">
                            <i class="penci-lines"></i>
                        </i>
                    </span>
                </a>
            </div> --}}

            <div class="main-nav-social">
                <div class="inner-header-social">
                    <a href="https://www.facebook.com/HUGOClub/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/hugoenglishclub/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCmhyu5rOUvECgvA4YEEKnxg" target="_blank"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>

        </div>
    </nav><!-- End Navigation -->
</header>
<!-- end #header -->
