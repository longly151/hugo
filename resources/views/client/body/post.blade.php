@extends('client.layouts.main')
@section('content')
<div class="container container-single penci_sidebar right-sidebar penci-enable-lightbox">
    <div id="main" class="penci-main-sticky-sidebar col-md-12 col-lg-8">
        <div class="theiaStickySidebar">
            <article id="post-179" class="post type-post status-publish hentry">



                <div class="header-standard header-classic single-header">
                    <div class="penci-standard-cat"><span class="cat"><a class="penci-cat-name" href="/{{$post->category['url']}}"
                                rel="category tag">{{$post->category['name']}}</a></span></div>

                    <h1 class="post-title single-post-title entry-title">{{$post->title}}</h1>
                    <div class="penci-hide-tagupdated">
                        <span class="author-italic author vcard">by <a class="url fn n" href="javascript:void(0);">{{$post->author['fullname']}}</a></span>
                        <time class="entry-date published" datetime="{{$post->published_at}}">{{$post->published_at}}</time></div>
                    <div class="post-box-meta-single">
                        <span class="author-post byline"><span class="author vcard">Posted by <a class="author-url url fn n"
                                    href="javascript:void(0);">{{$post->author['fullname']}}</a></span></span>
                        <span><time class="entry-date published" datetime="{{$post->published_at}}">{{$post->published_at}}</time></span>
                    </div>
                </div>




                <div class="post-image">
                <a href="{{$post->cover}}"
                        data-rel="penci-gallery-image-content"> <img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image"
                            src="{{$post->cover}}"
                            alt="Enjoy Coffee Alone" title="p7" data-src="{{$post->cover}}">
                    </a> </div>





                <div class="post-entry blockquote-style-2">
                    <div class="inner-post-entry entry-content">
                        {{-- <p>Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis
                            parturient montes lorem,
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla onsequat massa quis
                            enim. Donec pede justo fringilla vel aliquet nec vulputate eget. Lorem ispum dolore
                            siamet ipsum dolor.</p>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                            nobis est eligendi
                            optio cumquer nihil impedit quo minus id quod maxime placeat facere. At vero eos et
                            accusamus et iusto.<br />
                            <span id="more-179"></span></p>
                        <div class="penci-pullqoute align-none">
                            <blockquote>
                                <p><span class="s1">You will never be happy if you continue to search for what
                                        happiness consists of. You
                                        will never live if you are looking for the meaning of life.</span></p>
                                <div class="author"><span>Albert Camus</span></div>
                            </blockquote>
                        </div>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                            rhoncus ut, imperdiet a,
                            venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                            Cras dapibus. Vivamus
                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                            eu, consequat vitae,
                            eleifend ac, enim.</p>
                        <h2>LOVE WHAT YOU DO. DO WHAT YOU LOVE</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, sed quia non
                            numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima
                            veniam, quis nostrum exercitationem ullam corporis suscipit. Vivamus elementum semper
                            nisi. Aenean vulputate
                            eleifend tellus.</p>
                        <p>Rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                            pretium. Integer cidunt.
                            Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                            leo ligula, porttitor
                            eu.</p> --}}
                        {!!$post->content!!}
                        <div class="penci-single-link-pages">
                        </div>

                        <div class="post-tags">
                            @foreach ($post->tags as $tag)
                            <a href="javascript:void(0);" rel="tag">{{$tag['name']}}</a>
                            @endforeach
                            
                            {{-- <a href="../tag/coffee/index.html" rel="tag">coffee</a>
                            <a href="../tag/soledad/index.html" rel="tag">soledad</a>  --}}
                        </div>
                        <div class="tags-share-box hide-tags page-share has-line">
                            <div class="post-share">
                                <span class="share-title">Share</span>
                                <div class="list-posts-share">
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u={{url()->current()}}&display=popup&ref=plugin&src=share_button"><i
                                            class="fa fa-facebook"></i><span class="dt-share">Facebook</span></a>
                                </div>
                            </div>
                        </div>
                    <div class="fb-comments" data-colorscheme="dark" width="100%" data-href="{{env('APP_URL').'/post/'.$post->id}}" data-numposts="5"></div>
                    </div>
                </div>


                {{-- <div class="tags-share-box center-box">

                    <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

                    <div class="post-share">
                        <span class="count-number-like">0</span><a class="penci-post-like single-like-button"
                            data-post_id="179" title="Like" data-like="Like" data-unlike="Unlike"><i class="fa fa-heart-o"></i></a>
                        <div class="list-posts-share"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://soledad.pencidesign.com/soledad-coffee-blog/enjoy-coffee-alone/"><i
                                    class="fa fa-facebook"></i><span class="dt-share">Facebook</span></a><a target="_blank"
                                href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20Enjoy%20Coffee%20Alone%20-%20http://soledad.pencidesign.com/soledad-coffee-blog/enjoy-coffee-alone/"><i
                                    class="fa fa-twitter"></i><span class="dt-share">Twitter</span></a><a target="_blank"
                                href="https://plus.google.com/share?url=http://soledad.pencidesign.com/soledad-coffee-blog/enjoy-coffee-alone/"><i
                                    class="fa fa-google-plus"></i><span class="dt-share">Google +</span></a><a
                                data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=http://soledad.pencidesign.com/soledad-coffee-blog/enjoy-coffee-alone/&amp;media=https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p7.jpg&amp;description=Enjoy%20Coffee%20Alone"><i
                                    class="fa fa-pinterest"></i><span class="dt-share">Pinterest</span></a></div>
                    </div>
                </div> --}}

                {{-- <div class="post-author">
                    <div class="author-img">
                        <img alt='' src='http://2.gravatar.com/avatar/8612232278edda9fe1d495399d2a552d?s=100&amp;d=mm&amp;r=g'
                            srcset="http://2.gravatar.com/avatar/8612232278edda9fe1d495399d2a552d?s=200&#038;d=mm&#038;r=g 2x"
                            class='avatar avatar-100 photo' height='100' width='100' /> </div>
                    <div class="author-content">
                        <h5><a href="../author/admin/index.html" title="Posts by Penci" rel="author">Penci</a></h5>
                        <p>Hey there. My name is Penci. I was born with the love for traveling. I also love taking
                            photos with my phone
                            in order to capture moments in my life. It's my pleasure to have you here.</p>
                        <a target="_blank" class="author-social" href="http://pencidesign.com/"><i class="fa fa-globe"></i></a>
                        <a target="_blank" class="author-social" href="http://facebook.com/pencidesign"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" class="author-social" href="http://twitter.com/pencidesign"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" class="author-social" href="http://plus.google.com/pencidesign?rel=author"><i
                                class="fa fa-google-plus"></i></a>
                        <a target="_blank" class="author-social" href="http://instagram.com/pencidesign"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" class="author-social" href="http://pinterest.com/pencidesign"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" class="author-social" href="http://pencidesign.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                    </div>
                </div> --}}

                {{-- <div class="post-pagination">

                    <div class="next-post">
                        <div class="next-post-inner">
                            <div class="prev-post-title next-post-title">
                                <span>next post</span>
                            </div>
                            <a href="../basic-coffee-maker/index.html">
                                <div class="pagi-text">
                                    <h5 class="next-title">Basic Coffee Maker</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> --}}

                <!-- post-related -->
                {{-- <div class="post-related">
                    <div class="post-title-box">
                        <h4 class="post-box-title">You may also like</h4>
                    </div>
                    <div class="penci-owl-carousel penci-owl-carousel-slider penci-related-carousel" data-lazy="true"
                        data-item="3" data-desktop="3" data-tablet="2" data-tabsmall="2" data-auto="false" data-speed="300"
                        data-dots="true" data-nav="false">
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p8-480x650.jpg"
                                href="../choosing-best-vegan-milk-for-coffee/index.html" title="Best Vegan Milk For Coffee">
                            </a>
                            <h3><a href="../choosing-best-vegan-milk-for-coffee/index.html">Best Vegan Milk For
                                    Coffee</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p20-480x650.jpg"
                                href="../how-to-make-good-latte/index.html" title="How To Make Good Latte">
                            </a>
                            <h3><a href="../how-to-make-good-latte/index.html">How To Make Good Latte</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p2-480x650.jpg"
                                href="../the-best-coffee-shop-in-la/index.html" title="Best Coffee Shop In LA">
                            </a>
                            <h3><a href="../the-best-coffee-shop-in-la/index.html">Best Coffee Shop In LA</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p17-480x650.jpg"
                                href="../coffee-sop-bakery-in-cali/index.html" title="Coffee Sop &#038; Bakery in Cali">
                            </a>
                            <h3><a href="../coffee-sop-bakery-in-cali/index.html">Coffee Sop &#038; Bakery in Cali</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p14-480x650.jpg"
                                href="../making-morning-coffee/index.html" title="Making Morning Coffee">
                            </a>
                            <h3><a href="../making-morning-coffee/index.html">Making Morning Coffee</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                        <div class="item-related">
                            <a class="related-thumb penci-image-holder owl-lazy" data-src="https://max.soledad.pencidesign.com/soledad-coffee-blog/wp-content/uploads/sites/69/2018/09/p12-480x650.jpg"
                                href="../how-to-make-latte-art-c-c-c-c-c-c-c-c-c-c-c-c-c-c/index.html" title="How To Make Latte Art">
                            </a>
                            <h3><a href="../how-to-make-latte-art-c-c-c-c-c-c-c-c-c-c-c-c-c-c/index.html">How To
                                    Make Latte Art</a></h3>
                            <span class="date">September 4, 2018</span>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="post-comments no-comment-yet" id="comments">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title"><span>Leave a Comment</span> <small><a rel="nofollow"
                                    id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel
                                    Reply</a></small></h3>
                        <form action="http://soledad.pencidesign.com/soledad-coffee-blog/wp-comments-post.php" method="post"
                            id="commentform" class="comment-form">
                            <p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8"
                                    placeholder="Your Comment" aria-required="true"></textarea></p>
                            <p class="comment-form-author"><input id="author" name="author" type="text" value=""
                                    placeholder="Name*" size="30" aria-required='true' /></p>
                            <p class="comment-form-email"><input id="email" name="email" type="text" value=""
                                    placeholder="Email*" size="30" aria-required='true' /></p>
                            <p class="comment-form-url"><input id="url" name="url" type="text" value="" placeholder="Website"
                                    size="30" /></p>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                    type="checkbox" value="yes" /><span class="comment-form-cookies-text" for="wp-comment-cookies-consent">Save
                                    my name, email, and website in this browser for the next time I comment.</span></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                <input type='hidden' name='comment_post_ID' value='179' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div> <!-- end comments div --> --}}

            </article>
        </div>
    </div>

    @include('client/partials/sidebar')
    <!-- END CONTAINER -->
</div>
@endsection