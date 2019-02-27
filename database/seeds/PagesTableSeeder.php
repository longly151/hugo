<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            // [
            //     'name' => 'rule',
            //     'content' => '<p>HUGO&#39;s Rule:</p>

            //     <p>-Để Hugo ch&uacute;ng ta hoạt động một c&aacute;ch chuy&ecirc;n nghiệp v&agrave; chuẩn mực hơn th&igrave; dưới đ&acirc;y sẽ l&agrave; những &quot;điều luật&quot; m&agrave; ch&uacute;ng ta sẽ l&agrave;m theo v&igrave; một lợi &iacute;ch v&agrave; mục ti&ecirc;u chung nh&eacute;.</p>

            //     <p>-Những &quot;điều luật&quot; sẽ được &aacute;p dụng từ tuần n&agrave;y n&ecirc;n mọi người h&atilde;y ch&uacute; &yacute; đọc kĩ v&agrave; thực hiện theo nha.</p>

            //     <p>-Rule đăng b&agrave;i Group:</p>

            //     <p>1. Ng&ocirc;n ngữ trong Group BẮT BUỘC l&agrave; tiếng Anh hoặc nếu post bằng tiếng Việt th&igrave; phải c&oacute; hashtag #allowmetowriteinVietnamese</p>

            //     <p>2. C&aacute;c th&agrave;nh vi&ecirc;n trong Group cần t&ocirc;n trọng lẫn nhau, sử dụng ng&ocirc;n ngữ lịch sự, nghiệp c&oacute; chừng mực. Th&agrave;nh vi&ecirc;n sử dụng ng&ocirc;n ngữ bất lịch sự, thiếu t&ocirc;n trọng người kh&aacute;c sẽ bị xo&aacute; vĩnh viễn khỏi group.</p>

            //     <p>3. C&aacute;c post trong group phải sử dụng topic. 1 số topic th&ocirc;ng dụng l&agrave; : job opportunity, pics, activities, sharing, video,...</p>

            //     <p>4. C&aacute;c comment spam sẽ bị xo&aacute; v&agrave; th&agrave;nh vi&ecirc;n sẽ bị xo&aacute; khỏi group. Comment chỉ c&oacute; c&aacute;c dấu chấm (.) sẽ bị coi l&agrave; spam. Nếu bạn muốn follow một post, bạn c&oacute; thể chọn chế độ &quot;Turn on notifications for this post&quot;.</p>

            //     <p>5. C&aacute;c post kh&ocirc;ng được approve c&oacute; thể do một trong c&aacute;c l&yacute; do: * spam * kh&ocirc;ng được đặt topic * kh&ocirc;ng được viết bằng tiếng Anh hoặc kh&ocirc;ng c&oacute; hashtag theo rule --------------------</p>

            //     <p>-Rule sinh hoạt c&acirc;u lạc bộ :</p>

            //     <p>1. Buổi sinh hoạt h&agrave;ng tuần : Thời gian : 8h00 s&aacute;ng chủ nhật Địa điểm : Khu C hoặc tầng 2 KTX, th&agrave;nh vi&ecirc;n check mail kĩ để r&otilde; địa điểm sinh hoạt</p>

            //     <p>2. Đi họp c&acirc;u lạc bộ Đ&Uacute;NG GIỜ : Sắp tới đ&acirc;y tụi m&igrave;nh sẽ triển khai hệ thống &ldquo;STOPWATCH&rdquo; để t&iacute;nh số ph&uacute;t th&agrave;nh vi&ecirc;n đi trễ. Sau 8h tụi m&igrave;nh sẽ bắt đầu bấm thời gian, thời gian mọi người đến trễ sẽ được STOPWATCH ghi lại:</p>

            //     <p>- Trễ dưới 5p : h&iacute;t đất 10 c&aacute;i</p>

            //     <p>- Trễ từ 5p trở l&ecirc;n : đ&oacute;ng 10k+ mỗi ph&uacute;t đ&oacute;ng th&ecirc;m 1k</p>

            //     <p>-Lưu &yacute; : +To&agrave;n bộ số tiền sẽ được bỏ quỹ, đến l&uacute;c cần sẽ d&ugrave;ng cho những hoạt động của clb +Nếu c&oacute; việc đột xuất kh&ocirc;ng thể đến đ&uacute;ng giờ, gọi b&aacute;o hoặc nhắn cho staff tụi m&igrave;nh trước 30p nh&eacute;</p>

            //     <p>3. Văn h&oacute;a rep mail : Mỗi tuần clb đều gửi th&ocirc;ng tin buổi meeting v&agrave; địa điểm cho c&aacute;c bạn, v&igrave; vậy h&atilde;y bỏ ch&uacute;t &iacute;t thời gian để ĐỌC KĨ v&agrave; REPLY EMAIL của tụi m&igrave;nh SỚM nếu c&oacute; thể tham gia v&agrave; tr&igrave;nh b&agrave;y l&iacute; do nếu kh&ocirc;ng thể tham gia để staff tụi m&igrave;nh dễ d&agrave;ng set up cho c&aacute;c hoạt động của meeting. [updating]</p>

            //     <p>P/S: Tụi m&igrave;nh vẫn đang update rule, c&aacute;c bạn th&agrave;nh vi&ecirc;n đọc được post h&atilde;y like v&agrave; comment để đảm bảo rằng c&aacute;c bạn đ&atilde; hiểu r&otilde; to&agrave;n bộ nội dung. M&igrave;nh sẽ đặt topic n&agrave;y l&agrave; #rule, nếu mọi người muốn t&igrave;m đọc lại th&igrave; h&atilde;y t&igrave;m từ kh&oacute;a rule trong group nh&eacute;.</p>

            //     <p>--HUGO CLUB - LIGHT UP YOUR FIRE--</p>',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            [
                'name' => 'about',
                'content' => '<img class="alignnone size-full wp-image-1710" src="public/client/images/about.jpg"
                alt="" width="1200" height="800" srcset="public/client/images/about.jpg 263w"
                sizes="(max-width: 1200px) 100vw, 1200px" />
                <p>C&acirc;u lạc bộ Tiếng Anh HUGO CLUB - L&agrave; 1 trong 15 đơn vị ch&iacute;nh thống trực thuộc Hội sinh vi&ecirc;n Trường Đại học B&aacute;ch khoa &ndash; Đại học Đ&agrave; Nẵng.</p>

                <p>- Được th&agrave;nh lập v&agrave;o th&aacute;ng 3 năm 2008 bởi c&aacute;c sinh vi&ecirc;n Trường Đại học B&aacute;ch khoa.</p>

                <p>- Với mục ti&ecirc;u tạo ra m&ocirc;i trường năng động d&agrave;nh cho mọi sinh vi&ecirc;n c&oacute; mong muốn luyện tập Tiếng Anh, n&acirc;ng cao những kĩ năng mới, trải nghiệm những điều mới mẻ.</p>

                <p>- L&agrave; cầu nối giao lưu, kết bạn, học hỏi giữa sinh vi&ecirc;n khắp c&aacute;c trường Đại học, Cao đẳng tại Đ&agrave; Nẵng.</p>

                <p>- Phương ch&acirc;m hoạt động: Luyện tập Tiếng Anh một c&aacute;ch &ldquo;Năng động, vui vẻ, th&uacute; vị, th&acirc;n thiện&rdquo;.</p>

                <p>Đến với Hugo:</p>

                <p>- Được luyện tập kĩ năng Tiếng Anh, trao đổi, chia sẻ, n&acirc;ng cao kiến thức về Tiếng Anh.</p>

                <p>- Được trau dồi nhiều kĩ năng mới.</p>

                <p>- C&oacute; cơ hội giao lưu, kết bạn với c&aacute;c bạn th&agrave;nh vi&ecirc;n từ khắp c&aacute;c trường Đại học tr&ecirc;n to&agrave;n th&agrave;nh phố Đ&agrave; Nẵng.</p>

                <p>- Tham gia c&aacute;c hoạt động kh&aacute;c như: Đi t&igrave;nh nguyện, cắm trại, tr&ograve; chơi lớn&hellip;</p>

                <p>- Được trải nghiệm những khoảng thời gian đ&aacute;ng nhớ thời sinh vi&ecirc;n. HUGO CLUB &ndash; Light up your fire!</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'contact',
                'content' => '<p><img class="alignnone size-full wp-image-1713" src="public/client/images/contact.jpg"
                alt="" width="1200" height="800" srcset="public/client/images/contact.jpg 263w"
                sizes="(max-width: 1200px) 100vw, 1200px" />Have a question, a comment? Want to
                collaborate in some way? Just have something nice to say? I’d love to hear from
                you! Shoot me a message below and I’ll be sure to get back to you as soon as I can.
                Thanks!</p>
                <ul>
                    <li><strong>Adress:</strong><a href="https://goo.gl/maps/xWaKtt3FK8Q2" target="_blank"> 54 Nguyễn Lương Bằng, Hoà Khánh Bắc, Liên Chiểu </a></li>
                    <li><strong>Phone:</strong><a href="tel:01626772020"> 0162 677 2020</a></li>
                    <li><strong>Email:</strong><a href="mailto:hugoclub.dut@gmail.com"> hugoclub.dut@gmail.com</a></li>
                </ul>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
