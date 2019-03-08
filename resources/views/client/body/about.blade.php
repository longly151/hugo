@extends('client.layouts.main')
@section('content')
<div class="container penci_sidebar right-sidebar">

    <div id="main" class="penci-main-sticky-sidebar col-md-12 col-lg-8">
        <div class="theiaStickySidebar">
            <article id="post-6" class="post-6 page type-page status-publish hentry">

                <div class="penci-page-header">
                    <h1 class="entry-title">Hugo Enlgish Club</h1>
                    <div class="penci-hide-tagupdated">
                        <span class="author-italic author vcard">by <a class="url fn n" href="../author/admin/index.html">Penci</a></span>
                        <time class="entry-date published" datetime="2018-08-24T03:50:05+00:00">August 24, 2018</time><time
                            class="penci-hide-tagupdated updated" datetime="2018-09-17T20:30:27+00:00">September
                            17, 2018</time> </div>
                </div>


                <div class="post-entry blockquote-style-2">
                    <div class="inner-post-entry entry-content">
                            {!!$about->content!!}
                    </div>
                </div>

                <div class="tags-share-box hide-tags page-share has-line">
                    <div class="post-share">
                        <span class="share-title">Share</span>
                        <div class="list-posts-share">
                            <a target="_blank" href="javascript:void(0);"><i
                                    class="fa fa-facebook"></i><span class="dt-share">Facebook</span></a><a target="_blank"
                                href="javascript:void(0);"><i
                                    class="fa fa-twitter"></i><span class="dt-share">Twitter</span></a><a target="_blank"
                                href="javascript:void(0);"><i
                                    class="fa fa-google-plus"></i><span class="dt-share">Google +</span></a><a
                                data-pin-do="none" target="_blank" href="javascript:void(0);"><i
                                    class="fa fa-pinterest"></i><span class="dt-share">Pinterest</span></a>
                        </div>
                    </div>
                </div>

                <div class="post-comments no-comment-yet" id="comments">
                </div> <!-- end comments div -->

            </article>
        </div>
    </div>
    @include('client/partials/sidebar')
</div>
@endsection