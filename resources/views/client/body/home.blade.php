@extends('client.layouts.main')
@section('content')
<!-- CAROUSEL -->
<div class="featured-area featured-style-8 penci-flat-overlay">
    <div class="container">
        <div class="penci-owl-carousel penci-owl-featured-area" data-item="4" data-desktop="4" data-tablet="2"
            data-tabsmall="1" data-style="style-8" data-auto="true" data-autotime="4000" data-speed="600" data-loop="true">
            @foreach ($posts as $index => $post)
            @if ($index < 6)
            <div class="item">
                <div class="wrapper-item wrapper-item-classess">
                    <div class="penci-item-mag penci-item-1">
                        <a class="penci-image-holder owl-lazy" data-src="{{$post->cover}}"
                            href="/{{$post->url}}" title="{{$post->title}}"></a>
                        <div class="penci-slide-overlay penci-slider7-overlay">
                            <a class="overlay-link" href="/{{$post->url}}"></a>
                            <div class="penci-mag-featured-content">
                                <div class="feat-text slider-hide-date">
                                    <h3><a title="Enjoy Coffee Alone" href="/{{$post->url}}">{{$post->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

<!-- CONTENT -->
<div class="container penci_sidebar right-sidebar">
    <div id="main" class="penci-layout-standard-grid penci-main-sticky-sidebar col-md-12 col-lg-8">
        
        <div class="theiaStickySidebar">
            <div class="penci-border-arrow penci-homepage-title penci-home-latest-posts style-5 pcalign-left">
                <h3 class="inner-arrow">Bài viết mới nhất</h3>
            </div>
            <div class="penci-wrapper-posts-content">
                @if (count($posts)>0)
                <ul class="penci-wrapper-data penci-grid">
                    <article id="post-218" class="post-218 post type-post status-publish format-standard has-post-thumbnail hentry category-recipes tag-blog tag-coffee tag-soledad">
                        <div class="standard-post-image">
                        <a href="/{{$posts[0]->url}}">
                                <img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image"
                                    src="{{$posts[0]->cover}}"
                                    alt="{{$posts[0]->title}}" title="p1" data-src="{{$posts[0]->cover}}">
                            </a>
                        </div>


                        <div class="header-standard">
                            <div class="penci-standard-cat"><span><i class="fa fa-clock-o"></i> <time class="entry-date published" datetime="{{$posts[0]->public_at}}">{{$posts[0]->public_at}}</time>
                            </span></div>
                            <h2 class="entry-title entry-title"><a href="/{{$posts[0]->url}}">{{$posts[0]->title}}</a></h2>
                            <div class="penci-hide-tagupdated">
                                    {{-- <span class="author-italic author vcard">by <a class="url fn n" href="author/admin/index.html">Penci</a></span> --}}
                                    <time class="entry-date published" datetime="2018-09-04T02:24:31+00:00">September 4,
                                        2018</time><time class="penci-hide-tagupdated updated" datetime="2018-09-04T04:09:39+00:00">September
                                        4, 2018</time> </div>
                            <div class="author-post byline"><span class="author vcard">Được đăng bởi <a class="url fn n"
                                        href="#">{{$posts[0]->author['fullname']}}</a></span></div>
                        </div>

                        <div class="standard-content">
                            <div class="standard-main-content entry-content">
                                <div class="post-entry standard-post-entry classic-post-entry blockquote-style-2">
                                    <p>{{$posts[0]->description}}</p>
                                    <div class="penci-more-link penci-more-link-button"> <a href="/{{$posts[0]->url}}"
                                            class="more-link">Continue Reading</a></div>
                                </div>
                            </div>

                            {{-- <div class="penci-post-box-meta">
                                <div class="penci-box-meta">
                                    <span><i class="fa fa-clock-o"></i><time class="entry-date published" datetime="{{$posts[0]->public_at}}">{{$posts[0]->public_at}}</time>
                                    </span>
                                </div>
                                <div class="penci-post-share-box">
                                    <a class="penci-post-like" data-post_id="218" title="Like" data-like="Like"
                                        data-unlike="Unlike"><i class="fa fa-heart-o"></i><span class="dt-share">0</span></a>
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://soledad.pencidesign.com/soledad-coffee-blog/how-to-the-best-milk-coffee/"><i
                                            class="fa fa-facebook"></i><span class="dt-share">Facebook</span></a><a
                                        target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20How%20To%20The%20Best%20Milk%20Coffee%20-%20http://soledad.pencidesign.com/soledad-coffee-blog/how-to-the-best-milk-coffee/"><i
                                            class="fa fa-twitter"></i><span class="dt-share">Twitter</span></a><a
                                        target="_blank" href="https://plus.google.com/share?url=http://soledad.pencidesign.com/soledad-coffee-blog/how-to-the-best-milk-coffee/"><i
                                            class="fa fa-google-plus"></i><span class="dt-share">Google +</span></a><a
                                        data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=http://soledad.pencidesign.com/soledad-coffee-blog/how-to-the-best-milk-coffee/&amp;media=https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p1.jpg&amp;description=How%20To%20The%20Best%20Milk%20Coffee"><i
                                            class="fa fa-pinterest"></i><span class="dt-share">Pinterest</span></a>
                                </div>
                            </div> --}}
                        </div>

                    </article>
                    @foreach ($posts as $index => $post)
                    @if ($index>0 && $index<=4)
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
                                        <span class="author-italic author vcard">by <a class="url fn n" href="#">{{$post->author['fullname']}}</a></span>
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
                    @endif
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
                        <a href="#"><span>Older Posts <i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('client/partials/sidebar')

    <!-- END CONTAINER -->
</div>
@endsection