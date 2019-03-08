@extends('client.layouts.main')
@section('content')
<div class="container penci_sidebar right-sidebar">

    <div id="main" class="penci-main-sticky-sidebar col-md-12 col-lg-8">
        <div class="theiaStickySidebar">
            <article id="post-1693" class="post-1693 page type-page status-publish hentry">

                <div class="penci-page-header">
                    <h1 class="entry-title">Liên hệ</h1>
                    <div class="penci-hide-tagupdated">
                        <span class="author-italic author vcard">by <a class="url fn n" href="javascript:void(0);">Penci</a></span>
                        <time class="entry-date published" datetime="2018-08-24T03:50:19+00:00">August 24, 2018</time><time
                            class="penci-hide-tagupdated updated" datetime="2018-09-17T20:30:10+00:00">September
                            17, 2018</time> </div>
                </div>


                <div class="post-entry blockquote-style-2">
                    <div class="inner-post-entry entry-content">
                        {{-- <p><img class="alignnone size-full wp-image-1713" src="images/contact.jpg"
                                alt="" width="1200" height="800" srcset="images/contact.jpg 263w"
                                sizes="(max-width: 1200px) 100vw, 1200px" />Have a question, a comment? Want to
                            collaborate in some way? Just have something nice to say? I’d love to hear from
                            you! Shoot me a message below and I’ll be sure to get back to you as soon as I can.
                            Thanks!</p>
                        <ul>
                            <li><strong>Adress:</strong><a href="https://goo.gl/maps/xWaKtt3FK8Q2" target="_blank"> 54 Nguyễn Lương Bằng, Hoà Khánh Bắc, Liên Chiểu </a></li>
                            <li><strong>Phone:</strong><a href="tel:01626772020"> 0162 677 2020</a></li>
                            <li><strong>Email:</strong><a href="mailto:hugoclub.dut@gmail.com"> hugoclub.dut@gmail.com</a></li>
                        </ul> --}}
                        {!! $contact->content!!}
                        <div role="form" class="wpcf7" id="wpcf7-f1724-p1693-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="#"
                                method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1724" />
                                    <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1724-p1693-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="1693" />
                                </div>
                                <p class="name"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name"
                                            value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Name*" /></span></p>
                                <p class="email"><span class="wpcf7-form-control-wrap your-email"><input type="email"
                                            name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email*" /></span></p>
                                <p class="subject"><span class="wpcf7-form-control-wrap your-subject"><input type="text"
                                            name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text"
                                            aria-invalid="false" placeholder="Subject" /></span></p>
                                <p class="message"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message"
                                            cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea></span></p>
                                <p class="submit"><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
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
    <!-- END CONTAINER -->
</div>
@endsection