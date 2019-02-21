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
            [
                'name' => 'about',
                'content' => '<p>HUGO&#39;s Rule:</p>

                <p>-Để Hugo ch&uacute;ng ta hoạt động một c&aacute;ch chuy&ecirc;n nghiệp v&agrave; chuẩn mực hơn th&igrave; dưới đ&acirc;y sẽ l&agrave; những &quot;điều luật&quot; m&agrave; ch&uacute;ng ta sẽ l&agrave;m theo v&igrave; một lợi &iacute;ch v&agrave; mục ti&ecirc;u chung nh&eacute;.</p>
                
                <p>-Những &quot;điều luật&quot; sẽ được &aacute;p dụng từ tuần n&agrave;y n&ecirc;n mọi người h&atilde;y ch&uacute; &yacute; đọc kĩ v&agrave; thực hiện theo nha.</p>
                
                <p>-Rule đăng b&agrave;i Group:</p>
                
                <p>1. Ng&ocirc;n ngữ trong Group BẮT BUỘC l&agrave; tiếng Anh hoặc nếu post bằng tiếng Việt th&igrave; phải c&oacute; hashtag #allowmetowriteinVietnamese</p>
                
                <p>2. C&aacute;c th&agrave;nh vi&ecirc;n trong Group cần t&ocirc;n trọng lẫn nhau, sử dụng ng&ocirc;n ngữ lịch sự, nghiệp c&oacute; chừng mực. Th&agrave;nh vi&ecirc;n sử dụng ng&ocirc;n ngữ bất lịch sự, thiếu t&ocirc;n trọng người kh&aacute;c sẽ bị xo&aacute; vĩnh viễn khỏi group.</p>
                
                <p>3. C&aacute;c post trong group phải sử dụng topic. 1 số topic th&ocirc;ng dụng l&agrave; : job opportunity, pics, activities, sharing, video,...</p>
                
                <p>4. C&aacute;c comment spam sẽ bị xo&aacute; v&agrave; th&agrave;nh vi&ecirc;n sẽ bị xo&aacute; khỏi group. Comment chỉ c&oacute; c&aacute;c dấu chấm (.) sẽ bị coi l&agrave; spam. Nếu bạn muốn follow một post, bạn c&oacute; thể chọn chế độ &quot;Turn on notifications for this post&quot;.</p>
                
                <p>5. C&aacute;c post kh&ocirc;ng được approve c&oacute; thể do một trong c&aacute;c l&yacute; do: * spam * kh&ocirc;ng được đặt topic * kh&ocirc;ng được viết bằng tiếng Anh hoặc kh&ocirc;ng c&oacute; hashtag theo rule --------------------</p>
                
                <p>-Rule sinh hoạt c&acirc;u lạc bộ :</p>
                
                <p>1. Buổi sinh hoạt h&agrave;ng tuần : Thời gian : 8h00 s&aacute;ng chủ nhật Địa điểm : Khu C hoặc tầng 2 KTX, th&agrave;nh vi&ecirc;n check mail kĩ để r&otilde; địa điểm sinh hoạt</p>
                
                <p>2. Đi họp c&acirc;u lạc bộ Đ&Uacute;NG GIỜ : Sắp tới đ&acirc;y tụi m&igrave;nh sẽ triển khai hệ thống &ldquo;STOPWATCH&rdquo; để t&iacute;nh số ph&uacute;t th&agrave;nh vi&ecirc;n đi trễ. Sau 8h tụi m&igrave;nh sẽ bắt đầu bấm thời gian, thời gian mọi người đến trễ sẽ được STOPWATCH ghi lại:</p>
                
                <p>- Trễ dưới 5p : h&iacute;t đất 10 c&aacute;i</p>
                
                <p>- Trễ từ 5p trở l&ecirc;n : đ&oacute;ng 10k+ mỗi ph&uacute;t đ&oacute;ng th&ecirc;m 1k</p>
                
                <p>-Lưu &yacute; : +To&agrave;n bộ số tiền sẽ được bỏ quỹ, đến l&uacute;c cần sẽ d&ugrave;ng cho những hoạt động của clb +Nếu c&oacute; việc đột xuất kh&ocirc;ng thể đến đ&uacute;ng giờ, gọi b&aacute;o hoặc nhắn cho staff tụi m&igrave;nh trước 30p nh&eacute;</p>
                
                <p>3. Văn h&oacute;a rep mail : Mỗi tuần clb đều gửi th&ocirc;ng tin buổi meeting v&agrave; địa điểm cho c&aacute;c bạn, v&igrave; vậy h&atilde;y bỏ ch&uacute;t &iacute;t thời gian để ĐỌC KĨ v&agrave; REPLY EMAIL của tụi m&igrave;nh SỚM nếu c&oacute; thể tham gia v&agrave; tr&igrave;nh b&agrave;y l&iacute; do nếu kh&ocirc;ng thể tham gia để staff tụi m&igrave;nh dễ d&agrave;ng set up cho c&aacute;c hoạt động của meeting. [updating]</p>
                
                <p>P/S: Tụi m&igrave;nh vẫn đang update rule, c&aacute;c bạn th&agrave;nh vi&ecirc;n đọc được post h&atilde;y like v&agrave; comment để đảm bảo rằng c&aacute;c bạn đ&atilde; hiểu r&otilde; to&agrave;n bộ nội dung. M&igrave;nh sẽ đặt topic n&agrave;y l&agrave; #rule, nếu mọi người muốn t&igrave;m đọc lại th&igrave; h&atilde;y t&igrave;m từ kh&oacute;a rule trong group nh&eacute;.</p>
                
                <p>--HUGO CLUB - LIGHT UP YOUR FIRE--</p>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
