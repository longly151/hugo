@extends('client.layouts.main')
@section('content')
<!-- CONTENT -->
<div class="container penci_sidebar right-sidebar">
    <div id="main" class="penci-layout-standard-grid penci-main-sticky-sidebar col-md-12 col-lg-8">
        <div class="theiaStickySidebar">
            <div class="penci-wrapper-posts-content">
                @if (count($posts)>0)
                <ul class="penci-wrapper-data penci-grid">
                    @foreach ($posts as $index => $post)
                        <li class="grid-style">
                            <article id="post-217" class="item hentry">
                                <div class="thumbnail">
                                <a class="penci-image-holder penci-lazy" data-src="{{$post->cover}}"
                                        href="/{{$post->url}}" title="{{$post->title}}">
                                    </a>
    
                                </div>
    
                                <div class="grid-header-box">
                                    <span class="cat"><a class="penci-cat-name" href="/{{$post->category['url']}}"
                                            rel="category tag">{{$post->category['name']}}</a></span>
    
                                    <h2 class="entry-title grid-title"><a href="/{{$post->url}}">{{$post->title}}</a></h2>
                                    <div class="penci-hide-tagupdated">
                                        <span class="author-italic author vcard">by <a class="url fn n" href="javascript:void(0);">{{$post->author['fullname']}}</a></span>
                                        <time class="entry-date published" datetime="{{$post->public_at}}">{{$post->public_at}}</time></div>
                                    <div class="grid-post-box-meta">
                                        <span><time class="entry-date published" datetime="{{$post->public_at}}">{{$post->public_at}}</time></span>
                                    </div>
                                </div>
    
                                <div class="item-content entry-content">
                                    <p>{{$post->description}}</p>
                                </div>
    
                                <div class="penci-readmore-btn penci-btn-make-button penci-btn-align-center">
                                    <a class="penci-btn-readmore" href="/{{$post->url}}">Read
                                        more<i class="fa fa-angle-double-right"></i></a>
                                </div>
    
                            </article>
                        </li>
                    @endforeach
                    
                    {{-- <li class="grid-style">
                        <article id="post-216" class="item hentry">
                            <div class="thumbnail">
                                <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p9-480x650.jpg"
                                    href="2018-coffee-maker-guide/index.html" title="2018 Coffee Maker Guide">
                                </a>

                            </div>

                            <div class="grid-header-box">
                                <span class="cat"><a class="penci-cat-name" href="category/coffee-update/coffee-makers/index.html"
                                        rel="category tag">Coffee
                                        Makers</a></span>

                                <h2 class="entry-title grid-title"><a href="2018-coffee-maker-guide/index.html">2018
                                        Coffee Maker Guide</a></h2>
                                <div class="penci-hide-tagupdated">
                                    <span class="author-italic author vcard">by <a class="url fn n" href="author/admin/index.html">Penci</a></span>
                                    <time class="entry-date published" datetime="2018-09-04T02:24:21+00:00">September
                                        4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-04T04:09:49+00:00">September
                                        4, 2018</time> </div>
                                <div class="grid-post-box-meta">
                                    <span><time class="entry-date published" datetime="2018-09-04T02:24:21+00:00">September
                                            4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-04T04:09:49+00:00">September
                                            4, 2018</time></span>
                                </div>
                            </div>

                            <div class="item-content entry-content">
                                <p>Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis
                                    parturient montes lorem,
                                    ridiculus mus. Donec quam felis, ultricies&hellip;</p>
                            </div>

                            <div class="penci-readmore-btn penci-btn-make-button penci-btn-align-center">
                                <a class="penci-btn-readmore" href="2018-coffee-maker-guide/index.html">Read more<i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>

                        </article>
                    </li>
                    <li class="grid-style">
                        <article id="post-215" class="item hentry">
                            <div class="thumbnail">
                                <div class="penci-owl-carousel penci-owl-carousel-slider penci-nav-visible" data-auto="true">


                                    <figure class="penci-image-holder penci-lazy" alt="How To Make Latte Art" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p10-480x650.jpg">
                                    </figure>


                                    <figure class="penci-image-holder penci-lazy" alt="How To Make Latte Art" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/gallery-480x650.jpg">
                                    </figure>
                                </div>
                            </div>


                            <div class="grid-header-box">
                                <span class="cat"><a class="penci-cat-name" href="category/coffee-update/recipes/index.html"
                                        rel="category tag">Recipes</a></span>

                                <h2 class="entry-title grid-title"><a href="how-to-make-latte-art/index.html">How To
                                        Make Latte Art</a></h2>
                                <div class="penci-hide-tagupdated">
                                    <span class="author-italic author vcard">by <a class="url fn n" href="author/admin/index.html">Penci</a></span>
                                    <time class="entry-date published" datetime="2018-09-04T02:24:17+00:00">September
                                        4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-17T20:34:23+00:00">September
                                        17, 2018</time> </div>
                                <div class="grid-post-box-meta">
                                    <span><time class="entry-date published" datetime="2018-09-04T02:24:17+00:00">September
                                            4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-17T20:34:23+00:00">September
                                            17, 2018</time></span>
                                </div>
                            </div>

                            <div class="item-content entry-content">
                                <p>Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis
                                    parturient montes lorem,
                                    ridiculus mus. Donec quam felis, ultricies&hellip;</p>
                            </div>

                            <div class="penci-readmore-btn penci-btn-make-button penci-btn-align-center">
                                <a class="penci-btn-readmore" href="how-to-make-latte-art/index.html">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>

                        </article>
                    </li>
                    <li class="grid-style">
                        <article id="post-214" class="item hentry">
                            <div class="thumbnail">
                                <a class="penci-image-holder penci-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p11-480x650.jpg"
                                    href="vintage-coffee-makers/index.html" title="Vintage Coffee Makers">
                                </a>

                            </div>

                            <div class="grid-header-box">
                                <span class="cat"><a class="penci-cat-name" href="category/coffee-update/coffee-makers/index.html"
                                        rel="category tag">Coffee
                                        Makers</a></span>

                                <h2 class="entry-title grid-title"><a href="vintage-coffee-makers/index.html">Vintage
                                        Coffee Makers</a></h2>
                                <div class="penci-hide-tagupdated">
                                    <span class="author-italic author vcard">by <a class="url fn n" href="author/admin/index.html">Penci</a></span>
                                    <time class="entry-date published" datetime="2018-09-04T02:24:13+00:00">September
                                        4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-04T04:09:57+00:00">September
                                        4, 2018</time> </div>
                                <div class="grid-post-box-meta">
                                    <span><time class="entry-date published" datetime="2018-09-04T02:24:13+00:00">September
                                            4, 2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-04T04:09:57+00:00">September
                                            4, 2018</time></span>
                                </div>
                            </div>

                            <div class="item-content entry-content">
                                <p>Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis
                                    parturient montes lorem,
                                    ridiculus mus. Donec quam felis, ultricies&hellip;</p>
                            </div>

                            <div class="penci-readmore-btn penci-btn-make-button penci-btn-align-center">
                                <a class="penci-btn-readmore" href="vintage-coffee-makers/index.html">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>

                        </article>
                    </li> --}}
                </ul>
                @endif
                <div class="penci-pagination">
                    <div class="newer">
                        <div class="disable-url"><span><i class="fa fa-angle-left"></i> Newer Posts</span></div>
                    </div>
                    <div class="older">
                        <a href="javascript:void(0);"><span>Older Posts <i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('client/partials/sidebar')

    <!-- END CONTAINER -->
</div>
@endsection