<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('posts')->insert([
        //     [
        //         'title' => 'Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới',
        //         'description' => 'Galaxy S10 và S10+ phải đến ngày 20/2 mới ra mắt, nhưng ngay từ ngày hôm nay thì video trên tay rõ nét bộ đôi siêu phẩm này đã xuất hiện.',
        //         'content' => '<p>&nbsp;</p>

        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 1." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h53m43s304-15504766759582071982518.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 1." /></p>
                
        //         <p>Video tr&ecirc;n tay bị lộ được cho l&agrave; được ghi h&igrave;nh b&ecirc;n trong ph&ograve;ng trưng b&agrave;y k&iacute;n của Samsung. Ch&uacute;ng ta c&oacute; thể thấy d&ograve;ng chữ &quot;Galaxy S10&quot; được in tr&ecirc;n tường.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 2." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h54m21s067-15504766759611398154777.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 2." /></p>
                
        //         <p>Đ&acirc;y l&agrave; Galaxy S10 với m&agrave;n h&igrave;nh 6.1 inch</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 3." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h54m31s575-15504766759661531787676.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 3." /></p>
                
        //         <p>C&ograve;n đ&acirc;y l&agrave; Galaxy S10+ với m&agrave;n h&igrave;nh 6.5 inch lớn hơn</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 4." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h54m43s426-15504766759751755758570.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 4." /></p>
                
        //         <p>Galaxy S10 c&oacute; camera selfie 10MP</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 5." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h55m24s392-15504766759792092428148.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 5." /></p>
                
        //         <p>Trong khi đ&oacute;, Galaxy S10+ sở hữu đến 2 camera selfie</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 6." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h55m36s582-1550476675985423789467.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 6." /></p>
                
        //         <p>Mặt lưng của Galaxy S10 v&agrave; S10+ cho thấy m&aacute;y c&oacute; 3 camera, hỗ trợ chụp ảnh g&oacute;c rộng, g&oacute;c thường v&agrave; zoom</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 7." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h55m53s347-15504766759941163287101.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 7." /></p>
                
        //         <p>Mặt lưng của Galaxy S10 phi&ecirc;n bản m&agrave;u đen</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 8." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h56m13s111-15504766759981774781734.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 8." /></p>
                
        //         <p>Tin vui: Galaxy S10 l&agrave; smartphone hiếm hoi vẫn giữ jack cắm tai nghe 3.5mm</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 9." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h56m39s481-15504766760071375069517.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 9." /></p>
                
        //         <p>Galaxy S10 l&agrave; mẫu m&aacute;y đầu ti&ecirc;n của Samsung được t&iacute;ch hợp cảm biến v&acirc;n tay trong m&agrave;n h&igrave;nh.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 10." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h57m04s794-15504766760131126955712.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 10." /></p>
                
        //         <p>Galaxy S10 cũng hỗ trợ t&iacute;nh năng sạc kh&ocirc;ng d&acirc;y ngược, cho ph&eacute;p người d&ugrave;ng đặt c&aacute;c thiết bị hỗ trợ sạc kh&ocirc;ng d&acirc;y chuẩn Qi (bao gồm cả iPhone) l&ecirc;n mặt lưng của Galaxy S10 để sạc.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 11." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h57m16s984-15504766760181271489983.png" title="Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới - Ảnh 11." /></p>
                
        //         <p>T&iacute;nh năng tr&ecirc;n cũng hoạt động với tai nghe kh&ocirc;ng d&acirc;y Galaxy Buds - đối thủ của AirPods v&agrave; cũng sẽ ra mắt c&ugrave;ng Galaxy S10 v&agrave;o ng&agrave;y 20/2 tới.</p>',
        //         'author_id' => 1,
        //         'category_id' => 14,
        //         'cover' => 'http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/vlcsnap-2019-02-18-14h54m21s067-15504766759611398154777.png',
        //         'url' => str_slug('Chưa ra mắt nhưng Galaxy S10 và S10+ đã có video trên tay rõ nét, xác nhận thiết kế và tính năng mới').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'Apple chiêu mộ CEO của start-up "xịt" để về dẫn dắt cho dự án thiết bị smart home',
        //         'description' => 'Theo nguồn tin của trang CNBC, nhà sáng lập kiêm cựu giám đốc điều hành của khóa thông minh Otto sẽ được chỉ đạo làm trưởng dự án sản phẩm smart home của Apple.',
        //         'content' => '<p>Chế tạo kh&oacute;a cửa &quot;th&ocirc;ng minh&quot; gi&aacute; 700 đ&ocirc;, c&ocirc;ng ty thua lỗ, sạt nghiệp v&agrave; &quot;b&ugrave;ng&quot; lu&ocirc;n tiền lương của nh&acirc;n vi&ecirc;n lẫn vốn của nh&agrave; đầu tư, thế nhưng thanh ni&ecirc;n n&agrave;y giờ lại được đầu qu&acirc;n cho Apple để dẫn dắt dự &aacute;n nh&agrave; th&ocirc;ng minh (smart home) của T&aacute;o khuyết.</p>

        //         <p>Cũng phải c&ocirc;ng nhận l&agrave; đứa con tinh thần của của Sam Jadallah &ndash; kh&oacute;a nh&agrave; th&ocirc;ng minh, quả giống một sản phẩm đến từ g&atilde; khổng lồ c&ocirc;ng nghệ xứ Cupertino thật: một thiết bị được chau chuốt tỉ mỹ, &aacute;nh l&ecirc;n sự sang trọng, &quot;đẳng cấp&quot; nhưng lại kho&aacute;c l&ecirc;n m&igrave;nh một thiết kế tối giản v&agrave; kh&ocirc;ng qu&aacute; nổi bật.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 1." src="http://genknews.genkcdn.vn/2019/2/18/otto-door-expl-v1fw-15504654653691647488066.png" title="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 1." /></p>
                
        //         <p>N&oacute;i th&ecirc;m về kh&oacute;a cao cấp Otto, n&oacute; c&oacute; khả năng kết nối với cả Wi-Fi lẫn Bluetooth, hứa hẹn sẽ tự động mở kh&oacute;a ngay khi smartphone của bạn đang nằm trong tầm ph&aacute;t hiện. Otto cũng sở hữu cảm biến để x&aacute;c định xem &quot;ch&uacute; dế&quot; của bạn đang ở ph&iacute;a trong hay ngo&agrave;i nhằm hạn chế t&igrave;nh trạng cửa tự động mở mỗi khi đến gần. Bạn kh&ocirc;ng c&oacute; điện thoại th&ocirc;ng minh &agrave;? Vậy đ&agrave;nh chấp nhận điền m&atilde; số gồm 4 k&yacute; tự v&agrave;o th&ocirc;i.</p>
                
        //         <p>Hay ho l&agrave; vậy, nhưng kh&ocirc;ng phải ai cũng muốn bỏ ra tận 700 USD cho một c&aacute;i kh&oacute;a nh&agrave;. Chưa hết, nh&agrave; sản xuất c&ograve;n t&iacute;nh th&ecirc;m tận 149 USD tiền lắp đặt nữa. Ch&iacute;nh v&igrave; vậy, Otto đ&atilde; nhanh ch&oacute;ng &quot;chết yểu&quot;. Chỉ vỏn vẹn c&oacute; 4 th&aacute;ng sau khi ra mắt, nh&agrave; s&aacute;ng lập ki&ecirc;m CEO l&agrave; Sam Jadallah đ&atilde; đưa ra th&ocirc;ng b&aacute;o rằng c&ocirc;ng ty của anh sẽ ngừng hoạt động v&ocirc; thời hạn.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 2." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/otto-black-on-brown-door-15504654653631617739059.jpg" title="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 2." /></p>
                
        //         <p>Anh n&agrave;y cho biết đ&atilde; c&oacute; một nh&agrave; đầu tư y&ecirc;u cầu họ kh&ocirc;ng nhận th&ecirc;m vốn từ c&aacute;c b&ecirc;n kh&aacute;c, đổi lại họ sẽ th&acirc;u t&oacute;m to&agrave;n bộ c&ocirc;ng ty. Tuy nhi&ecirc;n, đến ph&uacute;t ch&oacute;t th&igrave; họ lại quyết định r&uacute;t hợp đồng v&agrave; khiến Otto l&acirc;m v&agrave;o thế tiến tho&aacute;i lưỡng nan.</p>
                
        //         <p>Giờ đ&acirc;y, khi l&agrave;m việc ở Apple, Jadallah sẽ kh&ocirc;ng c&ograve;n phải lo ngại về việc l&agrave;m sao để thu h&uacute;t vốn đầu tư cho những &yacute; tưởng của m&igrave;nh. Dẫu vậy, để tiến h&agrave;nh x&acirc;y dựng một hệ sinh th&aacute;i c&aacute;c thiết bị gia dụng th&ocirc;ng minh, th&igrave; tr&iacute; tuệ nh&acirc;n tạo cũng đ&oacute;ng một vai tr&ograve; hết sức quan trọng.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 3." src="http://genknews.genkcdn.vn/thumb_w/660/2019/2/18/ogoverview-15504654653601868016033.png" title="Apple chiêu mộ CEO của start-up xịt để về dẫn dắt cho dự án thiết bị smart home - Ảnh 3." /></p>
                
        //         <p>V&agrave; dường như Apple cũng đ&atilde; hiểu ra rằng Siri cần phải trở n&ecirc;n &quot;s&aacute;ng dạ&quot; hơn. M&ugrave;a đ&ocirc;ng năm ngo&aacute;i, &ocirc;ng lớn California n&agrave;y đ&atilde; t&igrave;m đến gi&aacute;m đốc mảng AI của Google - John Giannandrea, đề bạt &ocirc;ng l&agrave;m quan chức cấp cao v&agrave; giao cho &ocirc;ng tiếp quản mọi dự &aacute;n li&ecirc;n quan đến tr&iacute; th&ocirc;ng minh nh&acirc;n tạo. Chưa hết, mới c&oacute; th&ocirc;ng tin về việc Apple đ&atilde; mua lại start-up AI ph&aacute;t triển khả năng tr&ograve; chuyện tr&ecirc;n b&uacute;p b&ecirc; &quot;biết n&oacute;i&quot; Hello Barbie.</p>
                
        //         <p><em>Theo TheVerge</em></p>',
        //         'author_id' => 2,
        //         'category_id' => 12,
        //         'cover' => 'https://genknews.genkcdn.vn/thumb_w/640/2019/2/18/apple-store-queens-center-mall-15504655795911715865117-crop-15504655891511294250470.png',
        //         'url' => str_slug('Apple chiêu mộ CEO của start-up "xịt" để về dẫn dắt cho dự án thiết bị smart home').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'V-League 2019 rực lửa: Thế lực nào đủ sức lật ngôi “nhà Vua” Hà Nội FC',
        //         'description' => 'Sở hữu đội hình có chiều sâu và chất lượng bậc nhất V.League, không bất ngờ khi Hà Nội FC tiếp tục được coi là ứng viên số 1 cho chức vô địch của giải năm nay.',
        //         'content' => '<p><strong>H&agrave; Nội FC vẫn l&agrave; ứng vi&ecirc;n số 1</strong></p>

        //         <p>Nếu như ứng vi&ecirc;n v&ocirc; địch cho một giải đấu một phần n&agrave;o đ&oacute; được nhận định dựa v&agrave;o th&agrave;nh t&iacute;ch của m&ugrave;a trước đ&oacute;, th&igrave; H&agrave; Nội FC r&otilde; r&agrave;ng kh&ocirc;ng c&oacute; đối thủ. Ở m&ugrave;a 2018, với 64 điểm gi&agrave;nh được sau 26 v&ograve;ng đấu, H&agrave; Nội FC bỏ xa FLC Thanh H&oacute;a ở vị tr&iacute; thứ 2 tới 18 điểm (tương đương 6 trận thắng), ghi được tới 72 b&agrave;n thắng (hơn FLC Thanh H&oacute;a tới 29 pha lập c&ocirc;ng). To&agrave;n giải kh&ocirc;ng c&oacute; đội n&agrave;o sở hữu hiệu số &ldquo;đầu 2&rdquo;, trong khi hiệu số của H&agrave; Nội FC l&agrave; 42.</p>
                
        //         <p>Nh&igrave;n xa hơn trong một thập kỷ vừa qua, H&agrave; Nội FC thực sự l&agrave; &quot;Nh&agrave; Vua&quot; của V.League với 4 lần l&ecirc;n ng&ocirc;i v&ocirc; địch, 4 lần gi&agrave;nh ng&ocirc;i &Aacute; qu&acirc;n v&agrave; 1 lần gi&agrave;nh hạng Ba. Đế chế của H&agrave; Nội FC kh&ocirc;ng chỉ nằm ở những ng&ocirc;i sao lớn, những bản hợp đồng &quot;khủng&quot; m&agrave; họ c&ograve;n l&agrave; h&igrave;nh mẫu ở hệ thống đ&agrave;o tạo trẻ v&agrave; quản l&yacute;.</p>
                
        //         <p><img alt="V-League 2019 rực lửa: Thế lực nào đủ sức lật ngôi “nhà Vua” Hà Nội FC - 1" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-14/V-League-2019-ruc-lua-doi-nao-du-suc-lat-ngoi-cua-Nha-Vua-Ha-Noi-FC-quang-hai-1550130571-960-width660height446.jpg" /></p>
                
        //         <p>Quang Hải l&agrave; ng&ocirc;i sao s&aacute;ng nhất của H&agrave; Nội FC</p>
                
        //         <p>C&oacute; thể coi V.League hiện tại gần giống trường hợp &ldquo;giải đấu 1 đội&rdquo; kiểu Bundesliga hay Ligue 1 trong giai đoạn thống trị của Bayern Munich hay Lyon. Sự nh&agrave;m ch&aacute;n l&agrave; điều thấy r&otilde; nếu như kh&ocirc;ng c&oacute; bất ngờ lớn xảy ra. Đẳng cấp hiện tại của H&agrave; Nội FC đ&atilde; vươn ra tầm ch&acirc;u lục, khi mới đ&acirc;y họ đ&atilde; lọt v&agrave;o lượt sơ loại cuối c&ugrave;ng tham dự v&ograve;ng bảng AFC&nbsp;<a href="https://www.24h.com.vn/cup-c1-champions-league-c153.html">Champions League</a>. D&ugrave; c&oacute; phải xuống chơi ở AFC Cup đi chăng nữa th&igrave; so với c&aacute;c đội b&oacute;ng tại V.League, H&agrave; Nội FC vẫn tỏ ra vượt trội về mọi mặt.</p>
                
        //         <p>D&ugrave; sở hữu lực lượng đ&aacute;ng mơ ước với kh&aacute; đ&ocirc;ng trong qu&acirc;n số l&agrave; những tuyển thủ quốc gia, song để chuẩn bị cho m&ugrave;a 2019, H&agrave; Nội FC vẫn tiếp tục bổ sung những t&acirc;n binh v&ocirc; c&ugrave;ng chất lượng m&agrave; ti&ecirc;u biểu l&agrave; 2 c&aacute;i t&ecirc;n đến từ Thanh H&oacute;a: cựu đội trưởng Omar v&agrave; thủ th&agrave;nh B&ugrave;i Tiến Dũng. B&ecirc;n cạnh đ&oacute;, đội b&oacute;ng Thủ đ&ocirc; c&ograve;n đưa về th&ecirc;m một trung vệ ngoại l&agrave; Brandon Marquee McDonald, người từng l&agrave; đồng đội cũ của cựu danh thủ David Beckham ở LA Galaxy.</p>
                
        //         <p>N&oacute;i kh&ocirc;ng ngoa khi cho rằng H&agrave; Nội FC ch&iacute;nh l&agrave; h&igrave;nh ảnh của V.League 2019. Với c&aacute;c tuyển thủ quốc gia rất được y&ecirc;u mến như Quang Hải, Văn Hậu, Văn Quyết, Tiến Dũng, Đ&igrave;nh Trọng, Duy Mạnh, H&agrave; Nội FC sẽ&nbsp;ứng vi&ecirc;n số 1 về sức h&uacute;t tr&ecirc;n thị trường v&agrave; hứa hẹn sẽ l&agrave; đội b&oacute;ng g&acirc;y &ldquo;ch&aacute;y v&eacute;&rdquo; ở m&ugrave;a giải tới.</p>
                
        //         <p><strong>Đội n&agrave;o đủ khả năng l&agrave;m &ldquo;kẻ lật ng&ocirc;i&rdquo;?</strong></p>
                
        //         <p>Trong một giải đấu được coi l&agrave; &ldquo;H&agrave; Nội FC v&agrave; phần c&ograve;n lại&rdquo;, những đội b&oacute;ng đủ khả năng ng&aacute;ng đường cũng sẽ được ch&uacute; &yacute; kh&ocirc;ng k&eacute;m. Thanh H&oacute;a - đối trọng duy nhất của H&agrave; Nội FC ở m&ugrave;a giải năm ngo&aacute;i - đang phải trải qua qu&atilde;ng thời gian kh&oacute; khăn sau khi chia tay nh&agrave; t&agrave;i trợ FLC v&agrave; mất một loạt hảo thủ như Omar, Tiến Dũng (về H&agrave; Nội FC), Minh Tuấn (về Viettel) v&agrave; Đ&igrave;nh Đồng, Ho&agrave;ng Thịnh, Trọng Ho&agrave;ng (về SLNA).</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="V-League 2019 rực lửa: Thế lực nào đủ sức lật ngôi “nhà Vua” Hà Nội FC - 2" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-14/V-League-2019-ruc-lua-doi-nao-du-suc-lat-ngoi-cua-Nha-Vua-Ha-Noi-FC-viettel-1550130599-771-width660height495.jpg" /></p>
                
        //         <p>&nbsp;</p>
                
        //         <p>Viettel l&agrave; c&aacute;i t&ecirc;n c&oacute; thể g&acirc;y kh&oacute; dễ cho H&agrave; Nội FC</p>
                
        //         <p>&nbsp;</p>
                
        //         <p>Trong khi đ&oacute;, một c&aacute;i t&ecirc;n từng &ldquo;đốt ch&aacute;y&rdquo; c&aacute;c ph&ograve;ng v&eacute; l&agrave; HAGL gần như bu&ocirc;ng s&uacute;ng ngay ở vạch đ&iacute;ch khi mới đ&acirc;y đ&atilde; để 2 trụ cột l&agrave; Xu&acirc;n Trường v&agrave; C&ocirc;ng Phượng ra nước ngo&agrave;i thi đấu. Một đội trưởng Tuấn Anh vừa b&igrave;nh phục chấn thương c&ugrave;ng c&aacute;c mảnh gh&eacute;p như Minh Vương, Hồng Duy, Văn Thanh, Văn To&agrave;n&hellip; chưa chắc c&oacute; thể gi&uacute;p HAGL l&agrave;m n&ecirc;n chuyện ở m&ugrave;a giải tới.</p>
                
        //         <p>Nếu phải t&igrave;m ra một c&aacute;i t&ecirc;n để hy vọng, th&igrave; đ&oacute; ch&iacute;nh l&agrave; Viettel, t&acirc;n binh V.League c&ugrave;ng th&agrave;nh phố với H&agrave; Nội FC. Một &ecirc;-k&iacute;p huấn luyện to&agrave;n người H&agrave;n Quốc c&ugrave;ng những sự bổ sung nh&acirc;n sự rất đ&aacute;ng ch&uacute; &yacute; như trung vệ Quế Ngọc Hải, tiền vệ Vũ Minh Tuấn c&ugrave;ng 2 ngoại binh Gustavo v&agrave; Kayo đến từ Brazil đủ để l&agrave;m c&aacute;c kh&aacute;n giả thủ đ&ocirc; mong chờ một trận derby nảy lửa.</p>
                
        //         <p>Một đội b&oacute;ng kh&aacute;c đang rất quyết t&acirc;m đi t&igrave;m lại quyền lực cũ l&agrave; SHB Đ&agrave; Nẵng với sự trở lại của HLV L&ecirc; Huỳnh Đức tr&ecirc;n ghế huấn luyện. Với 2 chức v&ocirc; địch V.League v&agrave; 1 lần &Aacute; qu&acirc;n trong 10 năm trở lại đ&acirc;y, HLV Huỳnh Đức hứa hẹn sẽ vực dậy bản sắc của SHB Đ&agrave; Nẵng.</p>
                
        //         <p>Sự c&oacute; mặt của Huỳnh Đức khiến những cầu thủ đang c&oacute; &yacute; định ra đi như Đỗ Merlo hay Nguyễn Thanh Hải đồng &yacute; ở lại, ngo&agrave;i ra c&ograve;n c&oacute; 3 sự bổ sung ngoại binh: hậu vệ Victor Nirennold (Ph&aacute;p), tiền vệ Dominik Schmitt (Đức) v&agrave; tiền đạo Patrick Bonif&aacute;cio (Brazil), b&ecirc;n cạnh sự g&oacute;p mặt của cầu thủ Việt kiều Phạm Thanh Tiệp v&agrave; số 9 nổi danh của U23 Việt Nam, H&agrave; Đức Chinh.</p>
                
        //         <p>Ngo&agrave;i ra, cũng kh&ocirc;ng thể kh&ocirc;ng nhắc đến CLB TP.Hồ Ch&iacute; Minh, đội c&oacute; sự đầu tư tr&ecirc;n băng ghế huấn luyện với HLV Chung Hae-seong (cựu GĐKT của HAGL). Kế đến l&agrave; Becamex B&igrave;nh Dương, đội cũng được dự AFC Cup 2019 v&agrave; đang l&agrave; ĐKVĐ C&uacute;p Quốc gia. Một c&aacute;i t&ecirc;n cộm c&aacute;n kh&aacute;c rất đ&aacute;ng được nhắc tới l&agrave; SLNA với những sự bổ sung đ&aacute;ng kể cho m&ugrave;a giải mới như Văn B&igrave;nh, Quang T&igrave;nh, Đ&igrave;nh Đồng hay Trọng Ho&agrave;ng.</p>
                
        //         <table align="center" cellpadding="3" cellspacing="0" style="width:500px">
        //             <tbody>
        //                 <tr>
        //                     <td style="vertical-align:top">
        //                     <p><strong>Con số</strong></p>
                
        //                     <p><strong>9 -</strong>&nbsp;H&agrave; Nội FC đang l&agrave; đội b&oacute;ng sở hữu nhiều tuyển thủ quốc gia nhất tại V.League 2019. Cụ thể l&agrave; Đức Huy, Đ&igrave;nh Trọng, Th&agrave;nh Chung, Duy Mạnh, Văn Hậu, H&ugrave;ng Dũng, Quang Hải, Văn Quyết v&agrave; Tiến Dũng. Ở th&agrave;nh phần đội U22 Việt Nam cũng l&agrave; n&ograve;ng cốt tương lai của ĐTQG, H&agrave; Nội FC cũng g&oacute;p 3 gương mặt l&agrave; Th&aacute;i Qu&yacute;, Minh Dĩ, Văn Tới.</p>
        //                     </td>
        //                 </tr>
        //             </tbody>
        //         </table>
                
        //         <p>D&agrave;n sao ĐT Việt Nam như Quang Hải, Văn Đức, Văn Hậu,... đọ t&agrave;i c&ugrave;ng một loạt c&aacute;c ng&ocirc;i sao ngoại binh s&aacute;ng gi&aacute; chắc chắn sẽ l&agrave; điểm đ&aacute;ng ch&uacute; &yacute; nhất ở V-League 2019. Mời đ&oacute;n đọc phần tiếp theo v&agrave;o s&aacute;ng 20/2!</p>',
        //         'author_id' => 1,
        //         'category_id' => 9,
        //         'cover' => 'https://cdn.24h.com.vn/upload/1-2019/images/2019-02-14/V-League-2019-ruc-lua-doi-nao-du-suc-lat-ngoi-cua-Nha-Vua-Ha-Noi-FC-quang-hai-1550130571-960-width660height446.jpg',
        //         'url' => str_slug('V-League 2019 rực lửa: Thế lực nào đủ sức lật ngôi “nhà Vua” Hà Nội FC').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'Liverpool mơ “làm trùm” châu Âu: Tam tấu huyền ảo biến mất, Klopp có lo lắng?',
        //         'description' => 'Liverpool đang đứng thứ 2 ở Premier League và chuẩn bị chạm trán Bayern Munich ở vòng 1/8 cúp C1 nhưng trên thực tế, họ không còn đáng sợ như nhiều người vẫn nghĩ.',
        //         'content' => '<p>Với Jurgen Klopp, bộ 3 Salah- Firmino-Mane đ&atilde; được coi l&agrave; &ldquo;thần hộ mệnh&rdquo; của &ocirc;ng từ m&ugrave;a b&oacute;ng trước bởi sự b&eacute;n duy&ecirc;n của họ v&agrave; lu&ocirc;n biết c&aacute;ch biến&nbsp;<strong>Liverpool&nbsp;</strong>th&agrave;nh đội b&oacute;ng của những trận đấu lớn bằng những khoảnh khắc l&oacute;e s&aacute;ng c&aacute; nh&acirc;n.</p>

        //         <p>M&ugrave;a giải 2018/2019, bộ 3 thần th&aacute;nh kể tr&ecirc;n của &ocirc;ng thầy người Đức vẫn l&agrave; những cầu thủ chơi nổi bật nhất trong đội h&igrave;nh của &ldquo;The Kop&rdquo; khi họ đ&atilde; đ&oacute;ng g&oacute;p 38 tr&ecirc;n tổng số 59 b&agrave;n thắng m&agrave; đội chủ s&acirc;n Anfield c&oacute; được.</p>
                
        //         <p>Nhưng một cầu thủ lớn, một ng&ocirc;i sao c&oacute; đẳng cấp th&igrave; phải biết tỏa s&aacute;ng trong những trận đấu lớn, những cuộc so t&agrave;i đỉnh cao c&oacute; t&iacute;nh chất quyết định. Nhưng tr&aacute;i với m&ugrave;a trước, dường như họ lại đang kh&aacute; nhạt nh&ograve;a ở những cuộc chiến với c&aacute;c đối thủ trong top 6 Ngoại Hạng Anh v&agrave; cả ở mặt trận&nbsp;<a href="https://www.24h.com.vn/cup-c1-champions-league-c153.html">Champions League</a>.</p>
                
        //         <p><img alt="Liverpool mơ “làm trùm” châu Âu: Tam tấu huyền ảo biến mất, Klopp có lo lắng? - 1" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/Liverpool-mo-lam-trum-chau-au-Tam-tau-salah-1-1550494834-839-width660height346.jpg" /></p>
                
        //         <p>Salah- Firmino- Mane đang cố gắng t&igrave;m lại bản ng&atilde; trong những trận đấu then chốt của Liverpool</p>
                
        //         <p>Khẳng định như vậy kh&ocirc;ng phải l&agrave; ch&uacute;ng ta đang phủ nhận những đ&oacute;ng của Salah - Firmino v&agrave; Mane trong chặng đường đ&atilde; qua tại Premier League. 3 cầu thủ n&agrave;y ch&iacute;nh l&agrave; bộ n&atilde;o trong th&agrave;nh c&ocirc;ng của &ldquo;Lữ đo&agrave;n đỏ&rdquo; v&agrave; g&oacute;p c&ocirc;ng gi&uacute;p đội b&oacute;ng n&agrave;y ở m&ugrave;a giải năm nay c&oacute; phần lớn thời gian l&agrave; những người dẫn đầu tr&ecirc;n bảng xếp hạng Premier League.</p>
                
        //         <p>Nhưng ở Salah- Firmino- Mane l&uacute;c n&agrave;y, sẽ kh&ocirc;ng kh&oacute; để nhận ra những tồn tại c&ograve;n đang hiện hữu v&agrave; n&oacute; đến từ sức cạnh tranh của những giải đấu như Ngoại Hạng Anh hay Champions League. Premier League tuy l&agrave; giải đấu khốc liệt nhất tr&ecirc;n thế giới nhưng hầu như c&aacute;c đội b&oacute;ng chỉ đạt mức trung b&igrave;nh kh&aacute;, chỉ c&oacute; khoảng 6 đội ở nh&oacute;m cửa tr&ecirc;n, trong đ&oacute; c&oacute;&nbsp;<a href="https://www.24h.com.vn/liverpool-c48e1528.html">Liverpool</a>&nbsp;của Salah, Firmino, Mane.</p>
                
        //         <p>Từ đ&oacute;, ch&uacute;ng ta c&oacute; thể nh&igrave;n thấy sự kh&aacute;c biệt rất r&otilde;. Trong 38 b&agrave;n thắng m&agrave; Salah - Firmino - Mane đ&atilde; ghi ở Premier League 2018/2019 th&igrave; c&oacute; đến 30 b&agrave;n l&agrave; đến từ c&aacute;c đội b&oacute;ng ở chiều dưới v&agrave; nằm ngo&agrave;i top 6. C&ograve;n ngược lại, trong những trận đ&aacute;nh lớn trước c&aacute;c đối thủ ngang cơ v&agrave; sừng sỏ hơn ở cả Ngoại Hạng Anh lẫn c&uacute;p&nbsp;<a href="https://www.24h.com.vn/cup-c1-champions-league-c153.html">C1</a>, bộ ba n&agrave;y đều thiếu hẳn đi sự b&ugrave;ng nổ vốn c&oacute;.</p>
                
        //         <p><strong>&ldquo;M&oacute;ng vuốt&rdquo; k&eacute;m sắc: M&agrave;i lại được kh&ocirc;ng, Salah- Firmino- Mane?</strong></p>
                
        //         <p>Trong mắt Jurgen Klopp v&agrave; c&aacute;c fan&nbsp;của Liverpool, bộ 3 Salah- Firmino-Mane l&agrave; những con &ldquo;qu&aacute;i vật&rdquo;, l&agrave; linh hồn của cả đội trong những thời khắc &ldquo;thập tử nhất sinh&rdquo;. Nhưng nay họ lại đang trở n&ecirc;n tầm thường như bao cầu thủ kh&aacute;c ở c&aacute;c trận đấu đỉnh cao th&igrave; &ldquo;The Kop&rdquo; biết bấu v&iacute;u v&agrave;o đ&acirc;u để đi chinh phạt khi cuộc đấu với Bayern Munich ở c&uacute;p C1 đ&atilde; đến rất gần.</p>
                
        //         <p>M&ugrave;a giải 2018/2019, bộ 3 kể tr&ecirc;n đ&atilde; suy giảm kh&aacute; nhiều về hiệu suất ghi b&agrave;n trước c&aacute;c đối thủ lớn. Trước c&aacute;c đội b&oacute;ng trong nh&oacute;m &ldquo;Big 6&rdquo;, họ c&oacute; 8 lần ph&aacute; lưới đối phương. Roberto Firmino l&agrave; người g&acirc;y ấn tượng lớn nhất trong 3 người với 5 b&agrave;n thắng nhưng trong số đ&oacute; lại c&oacute; đến 3 b&agrave;n đến từ trận đấu với Arsenal ở Anfield. Ng&ocirc;i sao số 1, Mohamed Salah chỉ c&oacute; đ&uacute;ng 1 pha lập c&ocirc;ng duy nhất đến từ quả 11m cũng trong trận thắng 5-1 trước Arsenal h&ocirc;m 30/12.</p>
                
        //         <p>&nbsp;</p>
                
        //         <p><img alt="Liverpool mơ “làm trùm” châu Âu: Tam tấu huyền ảo biến mất, Klopp có lo lắng? - 2" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/Liverpool-mo-lam-trum-chau-au-Tam-tau-salah-3-1550494834-235-width660height371.jpg" /></p>
                
        //         <p>&nbsp;</p>
                
        //         <p>Fan Liverpool tr&ocirc;ng chờ v&agrave;o ph&eacute;p thuật của bộ ba huyền ảo</p>
                
        //         <p>Ở Champions League, mọi thứ c&ograve;n tệ hơn ghi số b&agrave;n thắng của bộ 3 n&agrave;y cộng lại chỉ l&agrave; 6 b&agrave;n nhưng c&oacute; đến hơn một nửa trong số đ&oacute; đến từ trận gặp đội yếu nhất bảng Sao Đỏ Belgrade. Trước PSG v&agrave; Napoli, họ chơi dưới sức ở cả 2 lượt trận v&agrave; phải cực kỳ vất vả mới c&oacute; thể gi&agrave;nh v&eacute; v&agrave;o chơi ở v&ograve;ng 1/8.</p>
                
        //         <p>Khi bước ra một s&acirc;n chơi c&oacute; đẳng cấp cao như c&uacute;p C1, một đội b&oacute;ng sẽ kh&ocirc;ng thể thiếu đi những khoảnh khắc tỏa s&aacute;ng đơn lẻ đến từ c&aacute;c ng&ocirc;i sao xuất sắc. Nhưng đ&oacute; l&agrave; thứ m&agrave; Salah, Firmino hay Mane đang đ&aacute;nh mất đi ở c&aacute;c trận chiến mang &yacute; nghĩa sống c&ograve;n trong m&ugrave;a giải n&agrave;y.</p>
                
        //         <p>Ch&uacute;ng ta đ&atilde; được chứng kiến 3 danh hiệu Champions League li&ecirc;n tiếp của Real Madrid. Ở đ&oacute;, dấu ấn c&aacute; nh&acirc;n của ri&ecirc;ng si&ecirc;u sao Cristiano Ronaldo l&agrave; ai cũng thấy r&otilde;. Thế n&ecirc;n, để Liverpool tiến xa ở c&uacute;p C1 v&agrave; c&oacute; con đường thuận lợi hơn trong việc ẵm c&aacute;c danh hiệu cao qu&yacute; m&ugrave;a n&agrave;y, bộ 3 Salah- Firmino- Mane cần nhanh ch&oacute;ng t&igrave;m lại ch&iacute;nh m&igrave;nh ở những trận đấu lớn.</p>',
        //         'author_id' => 1,
        //         'category_id' => 9,
        //         'cover' => 'https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/Liverpool-mo-lam-trum-chau-au-Tam-tau-salah-3-1550494834-235-width660height371.jpg',
        //         'url' => str_slug('Liverpool mơ “làm trùm” châu Âu: Tam tấu huyền ảo biến mất, Klopp có lo lắng?').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'Thông tin mới nhất vụ tiền nước hơn 23,6 triệu/tháng ở Hà Nội',
        //         'description' => 'Chủ căn hộ có tiền nước lên tới hơn 23,6 triệu đồng/tháng ở Hà Nội đã làm đơn yêu cầu mang đồng hồ nước đi kiểm định.',
        //         'content' => '<p>Li&ecirc;n quan đến vụ việc h&oacute;a đơn tiền nước phải trả th&aacute;ng 1/2019 l&ecirc;n đến hơn 23,6 triệu đồng, ng&agrave;y 18/2, chị Vũ Thị Thu (chủ hộ 106B &ndash; C1 Nghĩa T&acirc;n, quận Cầu Giấy, H&agrave; Nội) cho hay, chị kh&ocirc;ng bằng l&ograve;ng trả số tiền lớn như vậy cho 1 th&aacute;ng tiền nước n&ecirc;n đ&atilde; l&agrave;m đơn y&ecirc;u cầu mang đồng hồ đi kiểm định.</p>

        //         <p>Chị Thu cho rằng, đồng hồ nước của gia đ&igrave;nh chị l&agrave; đồng hồ cơ, từ thời chủ cũ. Gia đ&igrave;nh chị mua căn hộ n&agrave;y chỉ l&agrave;m lại đường ống chứ kh&ocirc;ng thay đồng hồ. Ngo&agrave;i ra, chị Thu cũng khẳng định, mấy ng&agrave;y trước, chị c&oacute; kh&oacute;a van trước đồng hồ th&igrave; thấy đồng hồ vẫn quay.</p>
                
        //         <p>&ldquo;T&ocirc;i đ&atilde; l&agrave;m đơn để thu&ecirc; b&ecirc;n thứ 3 kiểm định xem đồng hồ c&oacute; chạy đ&uacute;ng kh&ocirc;ng, 1h chạy được bao nhi&ecirc;u m3 m&agrave; 1 th&aacute;ng l&ecirc;n đến 940m3 nước&rdquo;, chị Thu chia sẻ.</p>
                
        //         <p><img alt="Thông tin mới nhất vụ tiền nước hơn 23,6 triệu/tháng ở Hà Nội - 2" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/1550487408-619-vu-tien-nuoc-236-trieu--thang-se-mang-dong-ho-nuoc-di-kiem-dinh-a2-1550486944-width720height960.jpg" style="width:660px" /></p>
                
        //         <p>Chị Thu rất &ldquo;sốc&rdquo; khi nhận h&oacute;a đơn tiền nước th&aacute;ng 1/2019 l&ecirc;n đến hơn 23,6 triệu đồng cho 940m3 nước.</p>
                
        //         <p>Trao đổi th&ecirc;m với PV, chị Vũ Thị Kiều Khanh &ndash; Bộ phận tiếp nhận v&agrave; trả kết quả của X&iacute; nghiệp kinh doanh nước sạch Cầu Giấy x&aacute;c nhận, chị đ&atilde; nhận đơn của chị Thu v&agrave; sẽ mang đồng hồ đi kiểm định sớm nhất c&oacute; thể.</p>
                
        //         <p>&ldquo;Ch&uacute;ng t&ocirc;i sẽ mang đồng hồ nh&agrave; chị Thu đến X&iacute; nghiệp đồng hồ để kiểm định. X&iacute; nghiệp đồng hồ c&oacute; 2 ng&agrave;y kiểm định l&agrave; ng&agrave;y thứ 4 v&agrave; thứ 6 hằng tuần. S&aacute;ng nay, ch&uacute;ng t&ocirc;i đ&atilde; tiếp nhận đơn th&igrave; đến thứ 4 n&agrave;y (tức ng&agrave;y 20/2) sẽ mang đồng hồ đi kiểm định.</p>
                
        //         <p>Trước ng&agrave;y th&aacute;o đồng hồ đi kiểm định, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o cho chủ hộ để chuẩn bị nước. Đồng hồ sẽ được ni&ecirc;m phong v&agrave; chủ nh&agrave; sẽ c&ugrave;ng mang đi kiểm định. Kết quả sẽ được th&ocirc;ng b&aacute;o ngay trong ng&agrave;y&rdquo;, chị Khanh th&ocirc;ng tin.</p>
                
        //         <p>Trước đ&oacute;, chị Vũ Thị Thu (chủ hộ 106B &ndash; C1 Nghĩa T&acirc;n, quận Cầu Giấy, H&agrave; Nội) phản &aacute;nh, chị đ&atilde; rất &ldquo;sốc&rdquo; khi nhận được h&oacute;a đơn thanh to&aacute;n tiền nước th&aacute;ng 1/2019 l&agrave; hơn 23,6 triệu đồng cho 940m3 nước. Trong khi những th&aacute;ng trước đ&oacute;, gia đ&igrave;nh chị chỉ d&ugrave;ng nước dao động trong khoảng 22-72m3 với số tiền chưa qu&aacute; 2 triệu đồng/th&aacute;ng.</p>
                
        //         <p><img alt="Thông tin mới nhất vụ tiền nước hơn 23,6 triệu/tháng ở Hà Nội - 3" src="https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/1550487408-344-vu-tien-nuoc-236-trieu--thang-se-mang-dong-ho-nuoc-di-kiem-dinh-a3-1550486944-width720height960.jpg" style="width:660px" /></p>
                
        //         <p>Chị Thu l&agrave;m đơn kiến nghị mang đồng hồ nước đi kiểm định.</p>
                
        //         <p>Chị Thu khẳng định, đường ống nước nh&agrave; chị kh&ocirc;ng vỡ. Chị cũng kh&ocirc;ng d&ugrave;ng nước v&agrave;o việc g&igrave; bất thường. Chị c&oacute; thử kh&oacute;a van trước đồng hồ nước th&igrave; thấy đồng hồ vẫn quay.</p>
                
        //         <p>C&ograve;n &ocirc;ng Trần Xu&acirc;n Cương - Gi&aacute;m đốc X&iacute; nghiệp kinh doanh nước sạch Cầu Giấy (đơn vị cấp nước) cho rằng, nguy&ecirc;n nh&acirc;n của việc số nước nh&agrave; chị Thu tăng vọt l&agrave; do đường ống sau đồng hồ, ở trong nh&agrave; kh&aacute;ch h&agrave;ng bị vỡ. Việc kh&oacute;a van m&agrave; đồng hồ vẫn quay c&oacute; thể do kh&aacute;ch h&agrave;ng đ&oacute;ng van trước đồng hồ chưa chặt.</p>',
        //         'author_id' => 3,
        //         'category_id' => 6,
        //         'cover' => 'https://cdn.24h.com.vn/upload/1-2019/images/2019-02-18/1550487408-191-vu-tien-nuoc-236-trieu--thang-se-mang-dong-ho-nuoc-di-kiem-dinh-a1-1550486944-width960height720.jpg',
        //         'url' => str_slug('Thông tin mới nhất vụ tiền nước hơn 23,6 triệu/tháng ở Hà Nội').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);

    // Old seeder

        // DB::table('posts')->insert([
        //     [
        //         'title' => 'HUGO ENGLISH CLUB - MỘT CHẶNG ĐƯỜNG DÀI',
        //         'description' => 'Ngọn lửa ấy vẫn sẽ cháy mãi như thế ...',
        //         'content' => '<p>Ch&uacute;ng t&ocirc;i đang ngồi trước đ&aacute;m lửa bập b&ugrave;ng. H&ocirc;m nay Hugo c&oacute; trại. Cũng kh&aacute; l&acirc;u rồi c&aacute;c thế hệ th&agrave;nh vi&ecirc;n mới c&oacute; thời gian qu&acirc;y quần c&ugrave;ng nhau nướng ch&uacute;t thịt, nhấm nh&aacute;p ch&uacute;t Strongbow thủ thỉ t&acirc;m t&igrave;nh qu&ecirc;n thời gian, bỏ lại đằng sau thực tại bộn bề học tập c&ocirc;ng việc v&agrave; deadline.</p>

        //         <p>Cạnh nhau ch&uacute;ng t&ocirc;i c&ugrave;ng ngắm nh&igrave;n những kỉ niệm đẹp đ&atilde; qua. Nhớ những buổi đầu ch&iacute; ch&oacute;e quyết định t&ecirc;n c&acirc;u lạc bộ. Nhớ những h&ocirc;m meeting cười b&ograve;, nhờ mấy tr&ograve; &aacute;c &ocirc;n m&agrave; nhớ được từ vựng, mới biết Hugo-ers c&oacute; mấy bạn n&oacute;i tiếng Anh pro phết. Nhớ mấy khi thức khuya nghĩ kế hoạch tổ chức sự kiện. Nhớ chết đi được những hoạt động ngoại kh&oacute;a m&igrave;nh l&agrave;m c&ugrave;ng nhau, quẩy như chưa từng được quẩy, quen được nhiều bạn mới, học được v&agrave;i thứ hay ho. Nhớ hội b&agrave; t&aacute;m l&uacute;a mạch g&igrave; cũng chia sẻ được với nhau rồi t&agrave;n tiệc &ocirc;m nhau m&agrave; cảm, m&agrave; kh&oacute;c. Nhớ Hugo c&oacute; l&uacute;c thịnh l&uacute;c suy cơ m&agrave; ai cũng cố gắng duy tr&igrave; v&agrave; x&acirc;y dựng. Hugo-ers đi đ&acirc;y đi đ&oacute;, th&agrave;nh đạt v&agrave; hạnh ph&uacute;c, c&ograve;n Hugo cứ lớp n&agrave;y tiếp lớp kia cứ thế ph&aacute;t triển v&agrave; bền vững. Ấy thế m&agrave; cũng 11 năm rồi. Nhắm mắt thấy Hugo vẫn đang thắp lửa. Hugo, một chặng đường d&agrave;i, v&agrave; đường c&ograve;n d&agrave;i, c&ograve;n d&agrave;i lắm&hellip;&nbsp;<br />
        //         V&agrave; đ&aacute;m lửa cứ bập b&ugrave;ng...</p>',
        //         'author_id' => 1,
        //         'category_id' => 1,
        //         'cover' => 'https://hugoenglishclub.github.io/images/home.jpg',
        //         'url' => str_slug('HUGO ENGLISH CLUB - MỘT CHẶNG ĐƯỜNG DÀI').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'CÂU CHUYỆN VỀ NHỮNG CÁI ÔM',
        //         'description' => 'Tạm biệt Đà Nẵng để về quê ăn tết. Giữa cái tiết se lạnh của mùa xuân miền Bắc, tôi lại nhớ đến những cái ôm ấm áp của Hugo.',
        //         'content' => '<p>Tạm biệt Đ&agrave; Nẵng để về qu&ecirc; ăn tết. Giữa c&aacute;i tiết se lạnh của m&ugrave;a xu&acirc;n miền Bắc, t&ocirc;i lại nhớ đến những c&aacute;i &ocirc;m ấm &aacute;p của Hugo.</p>

        //         <p>Kh&ocirc;ng biết từ bao giờ, &ocirc;m đ&atilde; l&agrave; văn h&oacute;a của Hugo . Cứ mỗi cuối tuần, ch&uacute;ng t&ocirc;i lại trao cho nhau những c&aacute;i &ocirc;m sau buổi meeting. Hugo &ocirc;m cũng đủ kiểu lắm. C&oacute; những &ldquo;th&aacute;nh nghiệp&rdquo; &ocirc;m nhau cũng tranh thủ nh&eacute;o ph&aacute;t tạo nghiệp nữa. Một số người &ocirc;m nhau c&ograve;n giả vờ kh&oacute;c huhu như thể sắp chia xa vậy trong khi miệng vẫn cười toe to&eacute;t. Cũng c&oacute; những c&aacute;i &ocirc;m &ldquo;tập thể&rdquo;, ban đầu l&agrave; ba người, rồi năm người, rồi&hellip; kh&ocirc;ng biết bao nhi&ecirc;u người x&uacute;m lại &ocirc;m nhau loạn xạ. Cũng c&oacute; những c&aacute;i &ocirc;m ngại ng&ugrave;ng khi Hugo đ&atilde; tạo điều kiện để được &ocirc;m &ldquo;cờ rớt&rdquo;. M&agrave; cũng th&iacute;ch lắm cơ. Nhiều l&uacute;c chỉ cần nh&igrave;n mọi người &ocirc;m nhau cũng cảm thấy vui l&acirc;y. Kh&ocirc;ng chỉ những buổi sinh hoạt, khi ch&uacute;ng t&ocirc;i chiến thắng cuộc thi, khi ch&uacute;ng t&ocirc;i v&ocirc; t&igrave;nh gặp nhau sau thời gian d&agrave;i xa c&aacute;ch, hay cả l&uacute;c sắp phải n&oacute;i lời chia tay với th&agrave;nh vi&ecirc;n n&agrave;o đ&oacute;, ch&uacute;ng t&ocirc;i cũng trao nhau những c&aacute;i &ocirc;m như vậy, ấm &aacute;p v&agrave; y&ecirc;u thương.</p>
                
        //         <p>Những c&aacute;i &ocirc;m của Hugo chứa đầy t&igrave;nh cảm. &Ocirc;m để gần nhau hơn, xua tan mệt mỏi của cả tuần v&agrave; để bắt đầu một tuần mới đầy năng động. C&oacute; những c&aacute;i &ocirc;m để l&agrave;m quen, cũng c&oacute; những c&aacute;i &ocirc;m l&agrave; nỗi nhớ sau khoảng thời gian d&agrave;i kh&ocirc;ng gặp. C&oacute; những c&aacute;i &ocirc;m để trao nhau niềm vui, cũng c&oacute; những c&aacute;i &ocirc;m để chia sẻ nỗi buồn. Sau những c&aacute;i &ocirc;m đ&oacute; l&agrave; những khu&ocirc;n mặt rạng rỡ, tr&agrave;n đầy niềm vui v&agrave; sức sống. Mọi người mang đến buổi sinh hoạt những nụ cười v&agrave; trở về bằng nhiều nụ cười hơn nữa. Ở Hugo, những c&aacute;i &ocirc;m cứ thế tự nhi&ecirc;n m&agrave; đến, rất ch&acirc;n th&agrave;nh, kh&ocirc;ng toan t&iacute;nh, kh&ocirc;ng ngại ngần. Bỗng chốc khoảng c&aacute;ch được ph&aacute; vỡ, ch&uacute;ng t&ocirc;i x&iacute;ch lại gần nhau hơn. Ngọn lửa Hugo cũng v&igrave; thế m&agrave; ch&aacute;y m&atilde;i&hellip;</p>
                
        //         <p>C&aacute;i &ocirc;m l&agrave; một nguồn lực c&oacute; nhiều sức mạnh kỳ diệu. Khi ch&uacute;ng ta mở rộng tr&aacute;i tim v&agrave; v&ograve;ng tay của m&igrave;nh cũng ch&iacute;nh l&agrave; l&uacute;c ch&uacute;ng ta động vi&ecirc;n người kh&aacute;c cũng l&agrave;m như vậy. H&atilde;y nghĩ đến những người bạn y&ecirc;u mến trong cuộc đời m&igrave;nh. Bạn c&oacute; điều g&igrave; muốn n&oacute;i với họ? Bạn c&oacute; muốn chia sẻ v&ograve;ng tay của m&igrave;nh cho họ? Hay l&agrave; bạn đang chờ đợi v&agrave; hy vọng người ấy sẽ chủ động điều đ&oacute;? Đừng chờ đợi! H&atilde;y l&agrave; người khởi đầu! Biết đ&acirc;u người đ&oacute; cũng đang chờ đợi y&ecirc;u thương từ bạn.</p>',
        //         'author_id' => 1,
        //         'category_id' => 1,
        //         'cover' => 'https://hugoenglishclub.github.io/images/img_post/51936831_403916770413597_4446592973127286784_n.jpg',
        //         'url' => str_slug('CÂU CHUYỆN VỀ NHỮNG CÁI ÔM').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'VỀ HUGO STAFF',
        //         'description' => 'Ở tuổi 19, chàng trai ấy đã có một giấc mơ, nói đúng hơn là một ao ước, nhỏ bé thôi nhưng đẹp đẽ. Ước mơ một ngày nào đó, được trở thành staff của Hugo.',
        //         'content' => '<p>Lỡ hẹn một giấc mơ&hellip;</p>

        //         <p>Ở tuổi 19, ch&agrave;ng trai ấy đ&atilde; c&oacute; một giấc mơ, n&oacute;i đ&uacute;ng hơn l&agrave; một ao ước, nhỏ b&eacute; th&ocirc;i nhưng đẹp đẽ. Ước mơ một ng&agrave;y n&agrave;o đ&oacute;, được trở th&agrave;nh staff của Hugo. Staff Hugo vất vả, khổ cực lắm. Hy sinh thời gian, sức lực, chạy đ&ocirc;n chạy đ&aacute;o, lo trước lo sau, &acirc;m thầm lặng lẽ&hellip; C&oacute; những người ấy vậy m&agrave; xơ x&aacute;c, gầy g&ograve; tr&ocirc;ng thấy, họ trầm lắng đi giữa những lo toan, bộn bề. Nhưng vất vả, đắng cay, khổ cực ấy c&oacute; hề g&igrave;, hy sinh th&ecirc;m nữa c&oacute; hề chi, khi tuổi trẻ c&ograve;n đương sung sức, v&agrave; khi ch&uacute;ng ta chẳng c&oacute; g&igrave; để mất. Vả chăng nữa, để được trao trọn y&ecirc;u thương, cống hiến hết m&igrave;nh cho Gia Đ&igrave;nh, ắt hẳn đ&oacute; c&ograve;n l&agrave; một niềm vinh dự to lớn, rất đỗi tự h&agrave;o. Họ ch&iacute;nh l&agrave; những người &ldquo;đưa đ&ograve;&rdquo; cho cả một thế hệ Hugo, cho cả thanh xu&acirc;n của ch&uacute;ng ta. D&atilde;i gi&oacute; dầm sương, &ocirc;m mưa đội nắng Lặng lẽ đưa đ&ograve;, t&ocirc; vẽ thanh xu&acirc;n.</p>
                
        //         <p>Hugo trong tr&aacute;i tim mỗi người mang một dư vị, từ ch&agrave;ng trai tuổi 19 sợ l&atilde;ng qu&ecirc;n m&agrave; y&ecirc;u vội, đến một thanh ni&ecirc;n sương gi&oacute; y&ecirc;u s&acirc;u đắm, nhẹ nh&agrave;ng. Ch&agrave;ng trai xưa kia sợ rằng, rồi ch&agrave;ng sẽ bị l&atilde;ng qu&ecirc;n, ch&agrave;ng chẳng biết m&igrave;nh l&agrave; ai, chẳng biết gặp ai khi quay lại m&aacute;i nh&agrave; xưa cũ. Nhưng rồi, thời gian qua đi, ai rồi cũng sẽ lớn, những kỉ niệm nơi đ&acirc;y, c&ugrave;ng nhau, sẽ kh&ocirc;ng bao giờ l&atilde;ng qu&ecirc;n như ch&agrave;ng nghĩ. Sống trọn cho cả một thanh xu&acirc;n c&ugrave;ng nhau, Hugo l&agrave; nh&agrave;, l&agrave; m&aacute;i ấm, l&agrave; nơi anh chị em m&atilde;i m&atilde;i l&agrave; anh chị em.</p>
                
        //         <p>Một đợt tuyển staff mới lại về, ch&agrave;ng ngậm ng&ugrave;i lỡ hẹn một giấc mơ&hellip;</p>
                
        //         <p>Hugo English Club - Light Up Your Fire!!!</p>
                
        //         <p>-Hoa D&acirc;m Bụt-</p>',
        //         'author_id' => 1,
        //         'category_id' => 2,
        //         'cover' => 'https://hugoenglishclub.github.io/images/img_post/170119/00.jpg',
        //         'url' => str_slug('VỀ HUGO STAFF').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'MỘT VÀI GHI CHÚ NHỎ CHO TRẠI HUGO',
        //         'description' => 'Khoảnh khắc lửa trại bắn lên những tia than sáng lên như pháo hoa, thật sự đẹp vô cùng (Không biết có ai lợi dụng thời cơ ngay lúc ấy để đứng cạnh crush không nhỉ, vì nó lãng mạn thật sự đó).',
        //         'content' => '<p>Trại của Hugo thật sự tuyệt vời, v&agrave; đối với một đứa từ nhỏ đến lớn rất &iacute;t khi ra khỏi nh&agrave; như t&ocirc;i th&igrave; n&oacute; c&agrave;ng giống như một điều g&igrave; đ&oacute; mới mẻ vậy. Lửa trại đ&atilde; t&agrave;n, qua một (v&agrave;i) giấc ngủ v&agrave; đợi ăn s&aacute;ng, về lều ngồi nghe c&aacute;c anh chị em n&oacute;i chuyện, t&ocirc;i tranh thủ viết mấy d&ograve;ng, ph&ograve;ng khi t&ocirc;i c&oacute; ham vui rồi lại qu&ecirc;n mất. T&ocirc;i c&oacute; v&agrave;i quan s&aacute;t nhỏ cho lần đi trại n&agrave;y, đặc biệt về kiểu người khi đi trại:</p>

        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/01.jpg" /></p>
                
        //         <ol>
        //             <li>Loại người d&agrave;nh cả thanh xu&acirc;n để đi t&igrave;m đồ. Mỗi lần t&ocirc;i thấy chủ nhiệm của Hugo l&agrave; một lần chị ấy đi t&igrave;m một m&oacute;n đồ g&igrave; đấy, l&uacute;c th&igrave; m&aacute;y ảnh, l&uacute;c th&igrave; &aacute;o, c&oacute; khi l&agrave; d&ugrave;,&hellip; (h&igrave;nh như chỉ c&ograve;n thiếu mỗi c&acirc;u hỏi chị ấy để người y&ecirc;u ở đ&acirc;u th&ocirc;i). Ơn trời, sau tất cả, mọi m&oacute;n đồ đều trở về với Hương.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/02.jpg" /></li>
        //             <li>Loại người bất chấp h&ocirc;m sau l&aacute;i xe tối h&ocirc;m trước vẫn quẩy tới bến. 4 giờ s&aacute;ng, t&ocirc;i vẫn c&ograve;n nghe tiếng đ&agrave;n h&aacute;t văng vẳng b&ecirc;n tai. 10 giờ s&aacute;ng h&ocirc;m sau, c&oacute; một người anh đi xe song song với t&ocirc;i trong cơn mưa ảnh hưởng bởi b&atilde;o t&aacute;p, đ&atilde; n&oacute;i rằng: &ldquo;M&igrave;nh đ&atilde; buồn ngủ đ&atilde; đ&agrave;nh, mưa c&ograve;n ưng đ&aacute;nh v&agrave;o mặt như thể m&igrave;nh vừa chia tay người y&ecirc;u xong&rdquo;. T&ocirc;i đ&atilde; lo rằng &ocirc;ng anh đấy c&oacute; khi c&ograve;n kh&ocirc;ng về được tới nh&agrave;, nhưng rồi mọi chuyện đều ổn.</li>
        //             <li>Loại người rảnh qu&aacute; kh&ocirc;ng c&oacute; chuyện g&igrave; để l&agrave;m n&ecirc;n kiếm chuyện để l&agrave;m. T&ocirc;i bị đứa bạn A nằm cạnh l&agrave;m thức giấc l&uacute;c 2h s&aacute;ng. 30 ph&uacute;t sau đứa bạn B dậy v&agrave; mọi người biết n&oacute; rủ t&ocirc;i l&agrave;m g&igrave; kh&ocirc;ng? Đi đ&aacute;nh răng. Sau đấy ch&uacute;ng t&ocirc;i về lại lều rồi nằm kiểu g&igrave; lại ngủ thiếp đi mất. Rảnh thật sự.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/03.jpg" /></li>
        //             <li>Loại người an nh&agrave;n hưởng trại, sinh hoạt đ&uacute;ng giờ giấc. Đứa bạn A của t&ocirc;i bảo rằng: &ldquo;Đi trại th&igrave; đi trại, ta quyết t&acirc;m rồi, ăn uống no đủ ngủ nghỉ đ&uacute;ng l&uacute;c&rdquo;. V&agrave; c&oacute; lẽ n&oacute; cũng h&agrave;o hứng qu&aacute; n&ecirc;n vừa kết th&uacute;c t&acirc;m sự tuổi hồng với Hugo th&igrave; n&oacute; lặng lẽ đi ngủ từ 11 giờ khuya đến gần 3 giờ s&aacute;ng dậy lục đục ra h&oacute;ng mọi người đ&agrave;n h&aacute;t với nhau, v&agrave; tất nhi&ecirc;n, khi n&oacute; quay lại th&igrave; chỗ của n&oacute; bị người kh&aacute;c nằm v&agrave;o rồi.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/04.jpg" /></li>
        //             <li>Loại người đi trại về rồi mới xin ph&eacute;p phụ huynh đi trại. Vẫn l&agrave; bạn A. Tới s&aacute;ng n&oacute; đang ngủ lơ mơ vất vưởng ở đ&acirc;u đấy th&igrave; c&oacute; người bảo mẹ n&oacute; gọi. Ẻm lật đật bật dậy rồi đi kiếm điện thoại b&aacute;o phụ huynh ngay v&agrave; lu&ocirc;n. (Kh&ocirc;ng sao, mọi chuyện đ&atilde; tốt hơn rồi, A bảo vậy).<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/05.jpg" /></li>
        //             <li>Loại người high mọi l&uacute;c mọi nơi. Cơ trưởng trong Hugo nhiều đếm kh&ocirc;ng xuể, mở hẳn mấy lớp dạy Vinahouse tận t&igrave;nh truyền đạt từ động t&aacute;c đến động vi&ecirc;n tinh thần những người kh&ocirc;ng l&agrave;m được. Cứ c&oacute; nhạc l&agrave; quẩy, bất chấp thể loại.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/06.jpg" /></li>
        //             <li>Loại người đợi trại l&agrave; để viết mấy d&ograve;ng t&acirc;m sự tuổi hồng kh&ocirc;ng thể n&oacute;i ra bằng lời. Slogan của trại Hugo năm nay l&agrave; &ldquo;Đi Bồ Bồ về c&oacute; bồ&rdquo;, t&ocirc;i tự hỏi c&oacute; đ&ocirc;i n&agrave;o th&agrave;nh chưa. Nhưng m&agrave; theo những quan s&aacute;t t&igrave;nh h&igrave;nh sau trại, ai cũng đ&ograve;i bắt đền chủ nhiệm th&igrave; phải&hellip; L&uacute;c về lều, c&oacute; một &ocirc;ng anh trong nh&oacute;m t&ocirc;i c&ograve;n bảo &ldquo;Năm ni &iacute;t confession thả th&iacute;nh qu&aacute;, nhớ năm ngo&aacute;i m&igrave;nh anh solo 8 b&agrave;i, nay chỉ cần viết gộp lại cho team m&igrave;nh th&ocirc;i, đỡ dễ sợ&rdquo;.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/07.jpg" /></li>
        //             <li>Staff. Những con người chạy đ&ocirc;n chạy đ&aacute;o, l&uacute;c n&agrave;o cũng nghĩ cho con d&acirc;n trong Hugo. Nh&igrave;n mọi người chuẩn bị từng ch&uacute;t một để tạo được một buổi trại thế n&agrave;y, thật sự cảm thấy thực sự kỳ c&ocirc;ng. Nghe staff t&acirc;m sự tuổi hồng, &ldquo;C&aacute;c bạn biết kh&ocirc;ng, tụi m&igrave;nh coi dự b&aacute;o thời tiết trước 20 ng&agrave;y hắn k&ecirc;u mưa, coi trước 1 tuần hắn cũng k&ecirc;u mưa, m&agrave; coi 1 ng&agrave;y trước khi đi trại th&igrave; hắn b&aacute;o trời b&atilde;o&rdquo;, nghe mới biết, mọi người đ&atilde; vất vả thế n&agrave;o. Cảm ơn mọi người nhiều nh&eacute;. V&igrave; đ&atilde; g&oacute;p phần kh&ocirc;ng nhỏ để l&agrave;m cho trại Hugo tuyệt vời thật sự.</li>
        //         </ol>
                
        //         <p>Thật ra th&igrave;, t&ocirc;i cũng muốn viết mấy d&ograve;ng cho trại năm nay. Khoảnh khắc lửa trại bắn l&ecirc;n những tia than s&aacute;ng l&ecirc;n như ph&aacute;o hoa, thật sự đẹp v&ocirc; c&ugrave;ng (Kh&ocirc;ng biết c&oacute; ai lợi dụng thời cơ ngay l&uacute;c ấy để đứng cạnh crush kh&ocirc;ng nhỉ, v&igrave; n&oacute; l&atilde;ng mạn thật sự đ&oacute;). Mọi thời điểm ở trại đều thật sự qu&yacute; gi&aacute;, mỗi năm l&agrave; một cảm x&uacute;c kh&aacute;c nhau, cũng như l&agrave; h&igrave;nh ảnh ta nh&igrave;n thấy được cũng kh&aacute;c nhau qua từng năm. Nh&igrave;n từ lều ra ngo&agrave;i lửa trại đ&atilde; tắt, trong l&ograve;ng cũng hụt hẫng phần n&agrave;o. Hy vọng rằng, trại Hugo trong tương lại c&ograve;n th&agrave;nh c&ocirc;ng hơn thế n&agrave;y nhiều hơn nữa, lửa nhiệt huyết m&agrave; tất cả c&aacute;c th&agrave;nh vi&ecirc;n mang lại cũng lớn lao hơn nữa, v&agrave; mọi người đều đọng lại trong m&igrave;nh những kỷ niệm kh&ocirc;ng-g&igrave;-c&oacute;-thể-đổi-được c&ugrave;ng nhau. Cảm ơn Hugo v&igrave; mọi thứ.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/08.jpg" /></p>
                
        //         <p>-CCCT-</p>',
        //         'author_id' => 1,
        //         'category_id' => 4,
        //         'cover' => 'https://hugoenglishclub.github.io/images/img_post/101218/00.jpg',
        //         'url' => str_slug('MỘT VÀI GHI CHÚ NHỎ CHO TRẠI HUGO').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'THẨN THƠ TRÊN XE BUÝT: CHUYỆN SỐ 1',
        //         'description' => 'Khi Đà Nẵng là nơi mà bạn lớn lên, có thể đến một ngày bạn sẽ nhận ra: "Thì ra nơi này nhỏ đến thế"...',
        //         'content' => '<p>Khi Đ&agrave; Nẵng l&agrave; nơi m&agrave; bạn lớn l&ecirc;n, c&oacute; thể đến một ng&agrave;y bạn sẽ nhận ra: &ldquo;Th&igrave; ra nơi n&agrave;y nhỏ đến thế&rdquo;. Từ nghĩa đen cho đến nghĩa b&oacute;ng. T&ocirc;i n&oacute;i thật đấy.</p>

        //         <p>Từ nhỏ đến lớn hầu như t&ocirc;i &iacute;t khi n&agrave;o đi ra khỏi nh&agrave;, cho đến khi học đại học cũng chỉ kh&aacute; l&ecirc;n hơn một ch&uacute;t. Ai cũng bảo, phải đi th&igrave; mới biết thế gian rộng lớn chừng n&agrave;o. Cơ m&agrave;, c&acirc;u chuyện đi từ nh&agrave; đến trường của t&ocirc;i hơi buồn cười một ch&uacute;t. T&ocirc;i vốn đi bu&yacute;t đến trường, một phần v&igrave; khoảng c&aacute;ch xa, phần kh&aacute;c v&igrave; bố mẹ bảo đi cho an to&agrave;n. Thời gian mỗi lần đi bu&yacute;t đối với t&ocirc;i cứ như thể mấy thế kỷ tr&ocirc;i qua, mệt mỏi hết sức. Vậy m&agrave; một người bạn của t&ocirc;i học trong HCM từng n&oacute;i rằng: &ldquo;M&agrave;y ơi, tao mất tận ba tiếng để kiếm một c&aacute;i địa chỉ nh&agrave; chỉ ở quận Thủ Đức trong n&agrave;y lận m&agrave;y ạ&rdquo;, thế l&agrave; t&ocirc;i lại ph&igrave; cười v&agrave; đổi ngay suy nghĩ: &ldquo;Quớ l&agrave;ng, m&igrave;nh mất c&oacute; 30 ph&uacute;t đi bu&yacute;t tới trường m&agrave; đi qua hẳn ba quận (Hải Ch&acirc;u, Thanh Kh&ecirc;, Li&ecirc;n Chiểu) lu&ocirc;n &aacute;&rdquo;.</p>
                
        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/191118/02.jpg" /></p>
                
        //         <p>Khi t&ocirc;i viết những d&ograve;ng n&agrave;y, một cậu bạn ngồi chung xe bu&yacute;t đ&atilde; l&ograve; d&ograve; bước đến hỏi t&ocirc;i rằng c&oacute; phải bạn c&ugrave;ng lớp tiểu học của cậu ấy kh&ocirc;ng, v&agrave; c&oacute; một tia suy nghĩ lướt qua đầu t&ocirc;i, cậu ấy (t&ocirc;i nghĩ c&oacute; t&ocirc;i nữa) thay đổi đến ch&oacute;ng mặt tới mức t&ocirc;i kh&ocirc;ng c&ograve;n nhận ra nữa rồi. Bỗng dưng t&ocirc;i lại nhớ ra được từ trong rất nhiều mối quan hệ kh&aacute;c nhau đấy một người bạn cũ-m&agrave;-mới. Sau đ&oacute;, &agrave; kh&ocirc;ng c&oacute; sau đ&oacute; nữa đ&acirc;u, ch&uacute;ng t&ocirc;i từ l&uacute;c ngồi tr&ecirc;n bu&yacute;t đến giờ vẫn chưa gặp lại nhau.</p>
                
        //         <p>Lớp đại học của t&ocirc;i chỉ c&oacute; 6 người Đ&agrave; Nẵng, đo&aacute;n xem, ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n biết về nhau theo một c&aacute;ch ri&ecirc;ng. T&ocirc;i l&agrave; bạn của A, của B, của C,&hellip; v&agrave; A, B, C,.. đều l&agrave; bạn của đồng hương c&ugrave;ng lớp. Ngạc nhi&ecirc;n thật sự. V&agrave; t&ocirc;i đ&atilde; c&oacute; t&igrave;nh bạn tuyệt nhất quả đất c&ugrave;ng hai trong số s&aacute;u người đấy, bạn th&acirc;n theo kiểu, th&acirc;n-ai-nấy-lo (đ&uacute;ng rồi đấy, đừng nghĩ g&igrave; s&acirc;u xa).</p>
                
        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/191118/03.jpg" /></p>
                
        //         <p>Sau n&agrave;y, t&ocirc;i l&agrave;m quen được với những người bạn mới, t&ocirc;i lại tiếp tục nhận ra, con người đều c&oacute; một sự kết nối với nhau th&ocirc;ng qua một điều g&igrave; đ&oacute;, thường l&agrave; qua một người n&agrave;o đấy. Nhiều khi t&ocirc;i c&ograve;n nghĩ l&agrave;, c&oacute; lẽ kh&ocirc;ng cần n&oacute;i về người y&ecirc;u th&igrave; mới bảo l&agrave; định mệnh, m&agrave; vốn ch&uacute;ng ta gặp gỡ được bất cứ ai cũng đ&atilde; l&agrave; một c&aacute;i duy&ecirc;n số rồi. Đ&agrave; Nẵng l&agrave;m t&ocirc;i hết lần n&agrave;y đến lần kh&aacute;c phải thốt l&ecirc;n rằng: &ldquo;Tr&aacute;i Đất kh&ocirc;ng hề nhỏ, chỉ c&oacute; Đ&agrave; Nẵng mới nhỏ m&agrave; th&ocirc;i&rdquo;. Nhưng m&agrave;, n&oacute; cũng l&agrave;m bạn thấy được rằng, nhiều khi bạn đ&atilde; v&ocirc; t&igrave;nh để vụt mất một mối quan hệ n&agrave;o đấy, như t&ocirc;i v&agrave; cậu bạn tiểu học kia chẳng hạn. Bỗng dưng cắt đứt li&ecirc;n lạc rồi b&acirc;y giờ lại t&igrave;nh cờ gặp lại được. C&oacute; thể sau n&agrave;y lại tiếp tục mất li&ecirc;n lạc chăng? Con người l&agrave; vậy, bạn gặp được những người bạn mới, rồi lại sẽ qu&ecirc;n mất m&igrave;nh từng c&oacute; người bạn X,Y thế n&agrave;y thế kia. C&oacute; thể ch&uacute;ng ta sẽ gặp lại. Rồi ch&uacute;ng ta lại lướt qua nhau.</p>
                
        //         <p>-CCCT-</p>',
        //         'author_id' => 1,
        //         'category_id' => 1,
        //         'cover' => 'https://hugoenglishclub.github.io/images/img_post/191118/01.jpg',
        //         'url' => str_slug('THẨN THƠ TRÊN XE BUÝT: CHUYỆN SỐ 1').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'title' => 'TRẠI MÙA ĐÔNG',
        //         'description' => 'Chuyện đi trại là chuyện của những dòng tâm sự giữa 2 người nào đó, hoặc là 2 người nào đó khác, trong khoảnh khắc chung nhịp điệu, hoà cùng nhịp đập, trò chuyện với nhau vài ba câu to nhỏ, gieo rắc những gì mà tâm hồn sâu ẩn họ muốn giãi bày.',
        //         'content' => '<p>Cứ độ th&aacute;ng 11 về, l&agrave; l&uacute;c trời bắt đầu trở lạnh, gi&oacute; r&iacute;t thổi r&aacute;t đỏ những đ&ocirc;i g&ograve; m&aacute;, gi&oacute; luồn qua từng lớp &aacute;o, khẽ chạm v&agrave;o từng lớp da, từng thớ thịt, gi&oacute; khiến con người ta phải bật run l&ecirc;n, co r&uacute;m lại, ngồi thật s&aacute;t b&ecirc;n nhau, san sẻ ch&uacute;t hơi ấm của ri&ecirc;ng m&igrave;nh. V&agrave; tr&ecirc;n hết, vượt l&ecirc;n tất cả, ở đ&acirc;u đ&oacute; giữa những con người ấy, những t&acirc;m t&igrave;nh, chuyện tr&ograve; thủ thỉ của ng&agrave;y xưa, sẽ l&agrave; miền k&yacute; ức của tuổi thanh xu&acirc;n kh&ocirc;ng bao giờ qu&ecirc;n. Th&aacute;ng 11, l&agrave; th&aacute;ng của những chuyến đi xa, cả Hugo h&aacute;o hức chờ đợi đ&uacute;ng 1 ng&agrave;y. Ng&agrave;y m&agrave; cả Hugo l&ecirc;n đường đặt ch&acirc;n l&ecirc;n v&ugrave;ng đất mới, tay x&aacute;ch tay mang, d&igrave;u nhau l&ecirc;n rừng xuống biển, d&igrave;u nhau qua mưa gi&oacute; b&atilde;o b&ugrave;ng.</p>

        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/021218/02.jpg" /></p>
                
        //         <p>V&agrave; dường như, n&oacute; đ&atilde; trở th&agrave;nh một thứ văn h&oacute;a kh&ocirc;ng thể thiếu của Hugo, thứ văn h&oacute;a được vun v&eacute;n từ năm n&agrave;y qua năm kh&aacute;c, sưởi ấm biết bao nhi&ecirc;u thế hệ. Lứa n&agrave;y đi, lứa kh&aacute;c tới, nhưng kỉ niệm vẫn c&ograve;n lưu m&atilde;i nơi đ&acirc;y. &ldquo;Trại M&ugrave;a Đ&ocirc;ng&rdquo; - Thắp ngọn lửa, ch&aacute;y bập b&ugrave;ng&hellip; Trại l&agrave; t&acirc;m huyết của cả một thế hệ dựng x&acirc;y. Những điệu nhảy, tr&ograve; chơi, những đờn ca tiếng h&aacute;t, anh chị em cứ thế m&agrave; &ocirc;m chầm quấn qu&yacute;t lấy nhau. Chẳng trại năm n&agrave;o giống nhau, mỗi trại một dư vị ri&ecirc;ng, mang đến cho Hugoer những cảm nhận của ri&ecirc;ng m&igrave;nh, l&agrave; vui vẻ, hạnh ph&uacute;c, l&agrave; ấm &aacute;p, y&ecirc;u thương.</p>
                
        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/021218/03.jpg" /></p>
                
        //         <p>Chuyện đi trại l&agrave; chuyện của những d&ograve;ng t&acirc;m sự giữa 2 người n&agrave;o đ&oacute;, hoặc l&agrave; 2 người n&agrave;o đ&oacute; kh&aacute;c, trong khoảnh khắc chung nhịp điệu, ho&agrave; c&ugrave;ng nhịp đập, tr&ograve; chuyện với nhau v&agrave;i ba c&acirc;u to nhỏ, gieo rắc những g&igrave; m&agrave; t&acirc;m hồn s&acirc;u ẩn họ muốn gi&atilde;i b&agrave;y. V&agrave; cứ như thế, họ từ những người xa lạ, rẽ ngang cuộc đời nhau, tạo ra đoạn đường gấp kh&uacute;c nhiều h&igrave;nh th&ugrave;, th&ecirc;m th&uacute; vị, th&ecirc;m đẹp cho bức tranh to&agrave;n cảnh. Dẫu tất cả họ, đều quay về con đường ch&iacute;nh, v&agrave; c&oacute; thể kh&ocirc;ng cắt ngang qua nhau th&ecirc;m một lần nữa, nhưng những k&iacute; ức về nhau, về Trại M&ugrave;a Đ&ocirc;ng năm ấy, sẽ chẳng bao giờ phai nho&agrave;.</p>
                
        //         <p><img alt="" src="https://hugoenglishclub.github.io/images/img_post/021218/04.jpg" /></p>
                
        //         <p>Một m&ugrave;a trại đang về ngay trước cửa<br />
        //         T&ocirc;i h&aacute;o hức y hệt những ng&agrave;y xưa<br />
        //         Trại năm nay th&ecirc;m bao người bạn mới<br />
        //         G&oacute;p ch&uacute;t vui vang tận m&atilde;i ch&acirc;n trời.</p>
                
        //         <p>Nguyện ch&uacute;c cho Trại M&ugrave;a Đ&ocirc;ng năm nay được th&agrave;nh c&ocirc;ng tốt đẹp, ch&uacute;c cho Hugoer c&oacute; những kỉ niệm đẹp đẽ b&ecirc;n nhau, b&ecirc;n gia đ&igrave;nh nhỏ y&ecirc;u thương n&agrave;y.</p>
                
        //         <p>Cả Hugo đang chạy đ&agrave; v&agrave; cất c&aacute;nh&hellip;<br />
        //         Light Up Your Fire!!!</p>
                
        //         <p>-Hoa D&acirc;m Bụt-</p>',
        //         'author_id' => 1,
        //         'category_id' => 4,
        //         'cover' => 'https://hugoenglishclub.github.io/images/img_post/021218/00.jpg',
        //         'url' => str_slug('TRẠI MÙA ĐÔNG').'-'.date('Ymdhis'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);


    // S3 seeder
        DB::table('posts')->insert([
            [
                'title' => 'HUGO ENGLISH CLUB - MỘT CHẶNG ĐƯỜNG DÀI',
                'description' => 'Ngọn lửa ấy vẫn sẽ cháy mãi như thế ...',
                'content' => '<p>Ch&uacute;ng t&ocirc;i đang ngồi trước đ&aacute;m lửa bập b&ugrave;ng. H&ocirc;m nay Hugo c&oacute; trại. Cũng kh&aacute; l&acirc;u rồi c&aacute;c thế hệ th&agrave;nh vi&ecirc;n mới c&oacute; thời gian qu&acirc;y quần c&ugrave;ng nhau nướng ch&uacute;t thịt, nhấm nh&aacute;p ch&uacute;t Strongbow thủ thỉ t&acirc;m t&igrave;nh qu&ecirc;n thời gian, bỏ lại đằng sau thực tại bộn bề học tập c&ocirc;ng việc v&agrave; deadline.</p>

                <p>Cạnh nhau ch&uacute;ng t&ocirc;i c&ugrave;ng ngắm nh&igrave;n những kỉ niệm đẹp đ&atilde; qua. Nhớ những buổi đầu ch&iacute; ch&oacute;e quyết định t&ecirc;n c&acirc;u lạc bộ. Nhớ những h&ocirc;m meeting cười b&ograve;, nhờ mấy tr&ograve; &aacute;c &ocirc;n m&agrave; nhớ được từ vựng, mới biết Hugo-ers c&oacute; mấy bạn n&oacute;i tiếng Anh pro phết. Nhớ mấy khi thức khuya nghĩ kế hoạch tổ chức sự kiện. Nhớ chết đi được những hoạt động ngoại kh&oacute;a m&igrave;nh l&agrave;m c&ugrave;ng nhau, quẩy như chưa từng được quẩy, quen được nhiều bạn mới, học được v&agrave;i thứ hay ho. Nhớ hội b&agrave; t&aacute;m l&uacute;a mạch g&igrave; cũng chia sẻ được với nhau rồi t&agrave;n tiệc &ocirc;m nhau m&agrave; cảm, m&agrave; kh&oacute;c. Nhớ Hugo c&oacute; l&uacute;c thịnh l&uacute;c suy cơ m&agrave; ai cũng cố gắng duy tr&igrave; v&agrave; x&acirc;y dựng. Hugo-ers đi đ&acirc;y đi đ&oacute;, th&agrave;nh đạt v&agrave; hạnh ph&uacute;c, c&ograve;n Hugo cứ lớp n&agrave;y tiếp lớp kia cứ thế ph&aacute;t triển v&agrave; bền vững. Ấy thế m&agrave; cũng 11 năm rồi. Nhắm mắt thấy Hugo vẫn đang thắp lửa. Hugo, một chặng đường d&agrave;i, v&agrave; đường c&ograve;n d&agrave;i, c&ograve;n d&agrave;i lắm&hellip;&nbsp;<br />
                V&agrave; đ&aacute;m lửa cứ bập b&ugrave;ng...</p>',
                'author_id' => 1,
                'category_id' => 1,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/home-20190306142623.jpg',
                'url' => str_slug('HUGO ENGLISH CLUB - MỘT CHẶNG ĐƯỜNG DÀI').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
            [
                'title' => 'CÂU CHUYỆN VỀ NHỮNG CÁI ÔM',
                'description' => 'Tạm biệt Đà Nẵng để về quê ăn tết. Giữa cái tiết se lạnh của mùa xuân miền Bắc, tôi lại nhớ đến những cái ôm ấm áp của Hugo.',
                'content' => '<p>Tạm biệt Đ&agrave; Nẵng để về qu&ecirc; ăn tết. Giữa c&aacute;i tiết se lạnh của m&ugrave;a xu&acirc;n miền Bắc, t&ocirc;i lại nhớ đến những c&aacute;i &ocirc;m ấm &aacute;p của Hugo.</p>

                <p>Kh&ocirc;ng biết từ bao giờ, &ocirc;m đ&atilde; l&agrave; văn h&oacute;a của Hugo . Cứ mỗi cuối tuần, ch&uacute;ng t&ocirc;i lại trao cho nhau những c&aacute;i &ocirc;m sau buổi meeting. Hugo &ocirc;m cũng đủ kiểu lắm. C&oacute; những &ldquo;th&aacute;nh nghiệp&rdquo; &ocirc;m nhau cũng tranh thủ nh&eacute;o ph&aacute;t tạo nghiệp nữa. Một số người &ocirc;m nhau c&ograve;n giả vờ kh&oacute;c huhu như thể sắp chia xa vậy trong khi miệng vẫn cười toe to&eacute;t. Cũng c&oacute; những c&aacute;i &ocirc;m &ldquo;tập thể&rdquo;, ban đầu l&agrave; ba người, rồi năm người, rồi&hellip; kh&ocirc;ng biết bao nhi&ecirc;u người x&uacute;m lại &ocirc;m nhau loạn xạ. Cũng c&oacute; những c&aacute;i &ocirc;m ngại ng&ugrave;ng khi Hugo đ&atilde; tạo điều kiện để được &ocirc;m &ldquo;cờ rớt&rdquo;. M&agrave; cũng th&iacute;ch lắm cơ. Nhiều l&uacute;c chỉ cần nh&igrave;n mọi người &ocirc;m nhau cũng cảm thấy vui l&acirc;y. Kh&ocirc;ng chỉ những buổi sinh hoạt, khi ch&uacute;ng t&ocirc;i chiến thắng cuộc thi, khi ch&uacute;ng t&ocirc;i v&ocirc; t&igrave;nh gặp nhau sau thời gian d&agrave;i xa c&aacute;ch, hay cả l&uacute;c sắp phải n&oacute;i lời chia tay với th&agrave;nh vi&ecirc;n n&agrave;o đ&oacute;, ch&uacute;ng t&ocirc;i cũng trao nhau những c&aacute;i &ocirc;m như vậy, ấm &aacute;p v&agrave; y&ecirc;u thương.</p>
                
                <p>Những c&aacute;i &ocirc;m của Hugo chứa đầy t&igrave;nh cảm. &Ocirc;m để gần nhau hơn, xua tan mệt mỏi của cả tuần v&agrave; để bắt đầu một tuần mới đầy năng động. C&oacute; những c&aacute;i &ocirc;m để l&agrave;m quen, cũng c&oacute; những c&aacute;i &ocirc;m l&agrave; nỗi nhớ sau khoảng thời gian d&agrave;i kh&ocirc;ng gặp. C&oacute; những c&aacute;i &ocirc;m để trao nhau niềm vui, cũng c&oacute; những c&aacute;i &ocirc;m để chia sẻ nỗi buồn. Sau những c&aacute;i &ocirc;m đ&oacute; l&agrave; những khu&ocirc;n mặt rạng rỡ, tr&agrave;n đầy niềm vui v&agrave; sức sống. Mọi người mang đến buổi sinh hoạt những nụ cười v&agrave; trở về bằng nhiều nụ cười hơn nữa. Ở Hugo, những c&aacute;i &ocirc;m cứ thế tự nhi&ecirc;n m&agrave; đến, rất ch&acirc;n th&agrave;nh, kh&ocirc;ng toan t&iacute;nh, kh&ocirc;ng ngại ngần. Bỗng chốc khoảng c&aacute;ch được ph&aacute; vỡ, ch&uacute;ng t&ocirc;i x&iacute;ch lại gần nhau hơn. Ngọn lửa Hugo cũng v&igrave; thế m&agrave; ch&aacute;y m&atilde;i&hellip;</p>
                
                <p>C&aacute;i &ocirc;m l&agrave; một nguồn lực c&oacute; nhiều sức mạnh kỳ diệu. Khi ch&uacute;ng ta mở rộng tr&aacute;i tim v&agrave; v&ograve;ng tay của m&igrave;nh cũng ch&iacute;nh l&agrave; l&uacute;c ch&uacute;ng ta động vi&ecirc;n người kh&aacute;c cũng l&agrave;m như vậy. H&atilde;y nghĩ đến những người bạn y&ecirc;u mến trong cuộc đời m&igrave;nh. Bạn c&oacute; điều g&igrave; muốn n&oacute;i với họ? Bạn c&oacute; muốn chia sẻ v&ograve;ng tay của m&igrave;nh cho họ? Hay l&agrave; bạn đang chờ đợi v&agrave; hy vọng người ấy sẽ chủ động điều đ&oacute;? Đừng chờ đợi! H&atilde;y l&agrave; người khởi đầu! Biết đ&acirc;u người đ&oacute; cũng đang chờ đợi y&ecirc;u thương từ bạn.</p>',
                'author_id' => 1,
                'category_id' => 1,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/51936831_403916770413597_4446592973127286784_n-20190306142847.jpg',
                'url' => str_slug('CÂU CHUYỆN VỀ NHỮNG CÁI ÔM').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
            [
                'title' => 'VỀ HUGO STAFF',
                'description' => 'Ở tuổi 19, chàng trai ấy đã có một giấc mơ, nói đúng hơn là một ao ước, nhỏ bé thôi nhưng đẹp đẽ. Ước mơ một ngày nào đó, được trở thành staff của Hugo.',
                'content' => '<p>Lỡ hẹn một giấc mơ&hellip;</p>

                <p>Ở tuổi 19, ch&agrave;ng trai ấy đ&atilde; c&oacute; một giấc mơ, n&oacute;i đ&uacute;ng hơn l&agrave; một ao ước, nhỏ b&eacute; th&ocirc;i nhưng đẹp đẽ. Ước mơ một ng&agrave;y n&agrave;o đ&oacute;, được trở th&agrave;nh staff của Hugo. Staff Hugo vất vả, khổ cực lắm. Hy sinh thời gian, sức lực, chạy đ&ocirc;n chạy đ&aacute;o, lo trước lo sau, &acirc;m thầm lặng lẽ&hellip; C&oacute; những người ấy vậy m&agrave; xơ x&aacute;c, gầy g&ograve; tr&ocirc;ng thấy, họ trầm lắng đi giữa những lo toan, bộn bề. Nhưng vất vả, đắng cay, khổ cực ấy c&oacute; hề g&igrave;, hy sinh th&ecirc;m nữa c&oacute; hề chi, khi tuổi trẻ c&ograve;n đương sung sức, v&agrave; khi ch&uacute;ng ta chẳng c&oacute; g&igrave; để mất. Vả chăng nữa, để được trao trọn y&ecirc;u thương, cống hiến hết m&igrave;nh cho Gia Đ&igrave;nh, ắt hẳn đ&oacute; c&ograve;n l&agrave; một niềm vinh dự to lớn, rất đỗi tự h&agrave;o. Họ ch&iacute;nh l&agrave; những người &ldquo;đưa đ&ograve;&rdquo; cho cả một thế hệ Hugo, cho cả thanh xu&acirc;n của ch&uacute;ng ta. D&atilde;i gi&oacute; dầm sương, &ocirc;m mưa đội nắng Lặng lẽ đưa đ&ograve;, t&ocirc; vẽ thanh xu&acirc;n.</p>
                
                <p>Hugo trong tr&aacute;i tim mỗi người mang một dư vị, từ ch&agrave;ng trai tuổi 19 sợ l&atilde;ng qu&ecirc;n m&agrave; y&ecirc;u vội, đến một thanh ni&ecirc;n sương gi&oacute; y&ecirc;u s&acirc;u đắm, nhẹ nh&agrave;ng. Ch&agrave;ng trai xưa kia sợ rằng, rồi ch&agrave;ng sẽ bị l&atilde;ng qu&ecirc;n, ch&agrave;ng chẳng biết m&igrave;nh l&agrave; ai, chẳng biết gặp ai khi quay lại m&aacute;i nh&agrave; xưa cũ. Nhưng rồi, thời gian qua đi, ai rồi cũng sẽ lớn, những kỉ niệm nơi đ&acirc;y, c&ugrave;ng nhau, sẽ kh&ocirc;ng bao giờ l&atilde;ng qu&ecirc;n như ch&agrave;ng nghĩ. Sống trọn cho cả một thanh xu&acirc;n c&ugrave;ng nhau, Hugo l&agrave; nh&agrave;, l&agrave; m&aacute;i ấm, l&agrave; nơi anh chị em m&atilde;i m&atilde;i l&agrave; anh chị em.</p>
                
                <p>Một đợt tuyển staff mới lại về, ch&agrave;ng ngậm ng&ugrave;i lỡ hẹn một giấc mơ&hellip;</p>
                
                <p>Hugo English Club - Light Up Your Fire!!!</p>
                
                <p>-Hoa D&acirc;m Bụt-</p>',
                'author_id' => 1,
                'category_id' => 2,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/00-20190306142941.jpg',
                'url' => str_slug('VỀ HUGO STAFF').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
            [
                'title' => 'MỘT VÀI GHI CHÚ NHỎ CHO TRẠI HUGO',
                'description' => 'Khoảnh khắc lửa trại bắn lên những tia than sáng lên như pháo hoa, thật sự đẹp vô cùng (Không biết có ai lợi dụng thời cơ ngay lúc ấy để đứng cạnh crush không nhỉ, vì nó lãng mạn thật sự đó).',
                'content' => '<p>Trại của Hugo thật sự tuyệt vời, v&agrave; đối với một đứa từ nhỏ đến lớn rất &iacute;t khi ra khỏi nh&agrave; như t&ocirc;i th&igrave; n&oacute; c&agrave;ng giống như một điều g&igrave; đ&oacute; mới mẻ vậy. Lửa trại đ&atilde; t&agrave;n, qua một (v&agrave;i) giấc ngủ v&agrave; đợi ăn s&aacute;ng, về lều ngồi nghe c&aacute;c anh chị em n&oacute;i chuyện, t&ocirc;i tranh thủ viết mấy d&ograve;ng, ph&ograve;ng khi t&ocirc;i c&oacute; ham vui rồi lại qu&ecirc;n mất. T&ocirc;i c&oacute; v&agrave;i quan s&aacute;t nhỏ cho lần đi trại n&agrave;y, đặc biệt về kiểu người khi đi trại:</p>

                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/01-20190306143215.jpg" /></p>
                
                <ol>
                    <li>Loại người d&agrave;nh cả thanh xu&acirc;n để đi t&igrave;m đồ. Mỗi lần t&ocirc;i thấy chủ nhiệm của Hugo l&agrave; một lần chị ấy đi t&igrave;m một m&oacute;n đồ g&igrave; đấy, l&uacute;c th&igrave; m&aacute;y ảnh, l&uacute;c th&igrave; &aacute;o, c&oacute; khi l&agrave; d&ugrave;,&hellip; (h&igrave;nh như chỉ c&ograve;n thiếu mỗi c&acirc;u hỏi chị ấy để người y&ecirc;u ở đ&acirc;u th&ocirc;i). Ơn trời, sau tất cả, mọi m&oacute;n đồ đều trở về với Hương.<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/02-20190306143216.jpg" /></li>
                    <li>Loại người bất chấp h&ocirc;m sau l&aacute;i xe tối h&ocirc;m trước vẫn quẩy tới bến. 4 giờ s&aacute;ng, t&ocirc;i vẫn c&ograve;n nghe tiếng đ&agrave;n h&aacute;t văng vẳng b&ecirc;n tai. 10 giờ s&aacute;ng h&ocirc;m sau, c&oacute; một người anh đi xe song song với t&ocirc;i trong cơn mưa ảnh hưởng bởi b&atilde;o t&aacute;p, đ&atilde; n&oacute;i rằng: &ldquo;M&igrave;nh đ&atilde; buồn ngủ đ&atilde; đ&agrave;nh, mưa c&ograve;n ưng đ&aacute;nh v&agrave;o mặt như thể m&igrave;nh vừa chia tay người y&ecirc;u xong&rdquo;. T&ocirc;i đ&atilde; lo rằng &ocirc;ng anh đấy c&oacute; khi c&ograve;n kh&ocirc;ng về được tới nh&agrave;, nhưng rồi mọi chuyện đều ổn.</li>
                    <li>Loại người rảnh qu&aacute; kh&ocirc;ng c&oacute; chuyện g&igrave; để l&agrave;m n&ecirc;n kiếm chuyện để l&agrave;m. T&ocirc;i bị đứa bạn A nằm cạnh l&agrave;m thức giấc l&uacute;c 2h s&aacute;ng. 30 ph&uacute;t sau đứa bạn B dậy v&agrave; mọi người biết n&oacute; rủ t&ocirc;i l&agrave;m g&igrave; kh&ocirc;ng? Đi đ&aacute;nh răng. Sau đấy ch&uacute;ng t&ocirc;i về lại lều rồi nằm kiểu g&igrave; lại ngủ thiếp đi mất. Rảnh thật sự.<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/03-20190306143217.jpg" /></li>
                    <li>Loại người an nh&agrave;n hưởng trại, sinh hoạt đ&uacute;ng giờ giấc. Đứa bạn A của t&ocirc;i bảo rằng: &ldquo;Đi trại th&igrave; đi trại, ta quyết t&acirc;m rồi, ăn uống no đủ ngủ nghỉ đ&uacute;ng l&uacute;c&rdquo;. V&agrave; c&oacute; lẽ n&oacute; cũng h&agrave;o hứng qu&aacute; n&ecirc;n vừa kết th&uacute;c t&acirc;m sự tuổi hồng với Hugo th&igrave; n&oacute; lặng lẽ đi ngủ từ 11 giờ khuya đến gần 3 giờ s&aacute;ng dậy lục đục ra h&oacute;ng mọi người đ&agrave;n h&aacute;t với nhau, v&agrave; tất nhi&ecirc;n, khi n&oacute; quay lại th&igrave; chỗ của n&oacute; bị người kh&aacute;c nằm v&agrave;o rồi.<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/04-20190306143218.jpg" /></li>
                    <li>Loại người đi trại về rồi mới xin ph&eacute;p phụ huynh đi trại. Vẫn l&agrave; bạn A. Tới s&aacute;ng n&oacute; đang ngủ lơ mơ vất vưởng ở đ&acirc;u đấy th&igrave; c&oacute; người bảo mẹ n&oacute; gọi. Ẻm lật đật bật dậy rồi đi kiếm điện thoại b&aacute;o phụ huynh ngay v&agrave; lu&ocirc;n. (Kh&ocirc;ng sao, mọi chuyện đ&atilde; tốt hơn rồi, A bảo vậy).<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/05-20190306143219.jpg" /></li>
                    <li>Loại người high mọi l&uacute;c mọi nơi. Cơ trưởng trong Hugo nhiều đếm kh&ocirc;ng xuể, mở hẳn mấy lớp dạy Vinahouse tận t&igrave;nh truyền đạt từ động t&aacute;c đến động vi&ecirc;n tinh thần những người kh&ocirc;ng l&agrave;m được. Cứ c&oacute; nhạc l&agrave; quẩy, bất chấp thể loại.<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/06-20190306143220.jpg" /></li>
                    <li>Loại người đợi trại l&agrave; để viết mấy d&ograve;ng t&acirc;m sự tuổi hồng kh&ocirc;ng thể n&oacute;i ra bằng lời. Slogan của trại Hugo năm nay l&agrave; &ldquo;Đi Bồ Bồ về c&oacute; bồ&rdquo;, t&ocirc;i tự hỏi c&oacute; đ&ocirc;i n&agrave;o th&agrave;nh chưa. Nhưng m&agrave; theo những quan s&aacute;t t&igrave;nh h&igrave;nh sau trại, ai cũng đ&ograve;i bắt đền chủ nhiệm th&igrave; phải&hellip; L&uacute;c về lều, c&oacute; một &ocirc;ng anh trong nh&oacute;m t&ocirc;i c&ograve;n bảo &ldquo;Năm ni &iacute;t confession thả th&iacute;nh qu&aacute;, nhớ năm ngo&aacute;i m&igrave;nh anh solo 8 b&agrave;i, nay chỉ cần viết gộp lại cho team m&igrave;nh th&ocirc;i, đỡ dễ sợ&rdquo;.<img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/07-20190306143221.jpg" /></li>
                    <li>Staff. Những con người chạy đ&ocirc;n chạy đ&aacute;o, l&uacute;c n&agrave;o cũng nghĩ cho con d&acirc;n trong Hugo. Nh&igrave;n mọi người chuẩn bị từng ch&uacute;t một để tạo được một buổi trại thế n&agrave;y, thật sự cảm thấy thực sự kỳ c&ocirc;ng. Nghe staff t&acirc;m sự tuổi hồng, &ldquo;C&aacute;c bạn biết kh&ocirc;ng, tụi m&igrave;nh coi dự b&aacute;o thời tiết trước 20 ng&agrave;y hắn k&ecirc;u mưa, coi trước 1 tuần hắn cũng k&ecirc;u mưa, m&agrave; coi 1 ng&agrave;y trước khi đi trại th&igrave; hắn b&aacute;o trời b&atilde;o&rdquo;, nghe mới biết, mọi người đ&atilde; vất vả thế n&agrave;o. Cảm ơn mọi người nhiều nh&eacute;. V&igrave; đ&atilde; g&oacute;p phần kh&ocirc;ng nhỏ để l&agrave;m cho trại Hugo tuyệt vời thật sự.</li>
                </ol>
                
                <p>Thật ra th&igrave;, t&ocirc;i cũng muốn viết mấy d&ograve;ng cho trại năm nay. Khoảnh khắc lửa trại bắn l&ecirc;n những tia than s&aacute;ng l&ecirc;n như ph&aacute;o hoa, thật sự đẹp v&ocirc; c&ugrave;ng (Kh&ocirc;ng biết c&oacute; ai lợi dụng thời cơ ngay l&uacute;c ấy để đứng cạnh crush kh&ocirc;ng nhỉ, v&igrave; n&oacute; l&atilde;ng mạn thật sự đ&oacute;). Mọi thời điểm ở trại đều thật sự qu&yacute; gi&aacute;, mỗi năm l&agrave; một cảm x&uacute;c kh&aacute;c nhau, cũng như l&agrave; h&igrave;nh ảnh ta nh&igrave;n thấy được cũng kh&aacute;c nhau qua từng năm. Nh&igrave;n từ lều ra ngo&agrave;i lửa trại đ&atilde; tắt, trong l&ograve;ng cũng hụt hẫng phần n&agrave;o. Hy vọng rằng, trại Hugo trong tương lại c&ograve;n th&agrave;nh c&ocirc;ng hơn thế n&agrave;y nhiều hơn nữa, lửa nhiệt huyết m&agrave; tất cả c&aacute;c th&agrave;nh vi&ecirc;n mang lại cũng lớn lao hơn nữa, v&agrave; mọi người đều đọng lại trong m&igrave;nh những kỷ niệm kh&ocirc;ng-g&igrave;-c&oacute;-thể-đổi-được c&ugrave;ng nhau. Cảm ơn Hugo v&igrave; mọi thứ.<img alt="" src="https://hugoenglishclub.github.io/images/img_post/101218/08.jpg" /></p>
                
                <p>-CCCT-</p>',
                'author_id' => 1,
                'category_id' => 4,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/01-20190306143107.jpg',
                'url' => str_slug('MỘT VÀI GHI CHÚ NHỎ CHO TRẠI HUGO').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
            [
                'title' => 'THẨN THƠ TRÊN XE BUÝT: CHUYỆN SỐ 1',
                'description' => 'Khi Đà Nẵng là nơi mà bạn lớn lên, có thể đến một ngày bạn sẽ nhận ra: "Thì ra nơi này nhỏ đến thế"...',
                'content' => '<p>Khi Đ&agrave; Nẵng l&agrave; nơi m&agrave; bạn lớn l&ecirc;n, c&oacute; thể đến một ng&agrave;y bạn sẽ nhận ra: &ldquo;Th&igrave; ra nơi n&agrave;y nhỏ đến thế&rdquo;. Từ nghĩa đen cho đến nghĩa b&oacute;ng. T&ocirc;i n&oacute;i thật đấy.</p>

                <p>Từ nhỏ đến lớn hầu như t&ocirc;i &iacute;t khi n&agrave;o đi ra khỏi nh&agrave;, cho đến khi học đại học cũng chỉ kh&aacute; l&ecirc;n hơn một ch&uacute;t. Ai cũng bảo, phải đi th&igrave; mới biết thế gian rộng lớn chừng n&agrave;o. Cơ m&agrave;, c&acirc;u chuyện đi từ nh&agrave; đến trường của t&ocirc;i hơi buồn cười một ch&uacute;t. T&ocirc;i vốn đi bu&yacute;t đến trường, một phần v&igrave; khoảng c&aacute;ch xa, phần kh&aacute;c v&igrave; bố mẹ bảo đi cho an to&agrave;n. Thời gian mỗi lần đi bu&yacute;t đối với t&ocirc;i cứ như thể mấy thế kỷ tr&ocirc;i qua, mệt mỏi hết sức. Vậy m&agrave; một người bạn của t&ocirc;i học trong HCM từng n&oacute;i rằng: &ldquo;M&agrave;y ơi, tao mất tận ba tiếng để kiếm một c&aacute;i địa chỉ nh&agrave; chỉ ở quận Thủ Đức trong n&agrave;y lận m&agrave;y ạ&rdquo;, thế l&agrave; t&ocirc;i lại ph&igrave; cười v&agrave; đổi ngay suy nghĩ: &ldquo;Quớ l&agrave;ng, m&igrave;nh mất c&oacute; 30 ph&uacute;t đi bu&yacute;t tới trường m&agrave; đi qua hẳn ba quận (Hải Ch&acirc;u, Thanh Kh&ecirc;, Li&ecirc;n Chiểu) lu&ocirc;n &aacute;&rdquo;.</p>
                
                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/02-2019030614350.jpg" /></p>
                
                <p>Khi t&ocirc;i viết những d&ograve;ng n&agrave;y, một cậu bạn ngồi chung xe bu&yacute;t đ&atilde; l&ograve; d&ograve; bước đến hỏi t&ocirc;i rằng c&oacute; phải bạn c&ugrave;ng lớp tiểu học của cậu ấy kh&ocirc;ng, v&agrave; c&oacute; một tia suy nghĩ lướt qua đầu t&ocirc;i, cậu ấy (t&ocirc;i nghĩ c&oacute; t&ocirc;i nữa) thay đổi đến ch&oacute;ng mặt tới mức t&ocirc;i kh&ocirc;ng c&ograve;n nhận ra nữa rồi. Bỗng dưng t&ocirc;i lại nhớ ra được từ trong rất nhiều mối quan hệ kh&aacute;c nhau đấy một người bạn cũ-m&agrave;-mới. Sau đ&oacute;, &agrave; kh&ocirc;ng c&oacute; sau đ&oacute; nữa đ&acirc;u, ch&uacute;ng t&ocirc;i từ l&uacute;c ngồi tr&ecirc;n bu&yacute;t đến giờ vẫn chưa gặp lại nhau.</p>
                
                <p>Lớp đại học của t&ocirc;i chỉ c&oacute; 6 người Đ&agrave; Nẵng, đo&aacute;n xem, ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n biết về nhau theo một c&aacute;ch ri&ecirc;ng. T&ocirc;i l&agrave; bạn của A, của B, của C,&hellip; v&agrave; A, B, C,.. đều l&agrave; bạn của đồng hương c&ugrave;ng lớp. Ngạc nhi&ecirc;n thật sự. V&agrave; t&ocirc;i đ&atilde; c&oacute; t&igrave;nh bạn tuyệt nhất quả đất c&ugrave;ng hai trong số s&aacute;u người đấy, bạn th&acirc;n theo kiểu, th&acirc;n-ai-nấy-lo (đ&uacute;ng rồi đấy, đừng nghĩ g&igrave; s&acirc;u xa).</p>
                
                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/03-2019030614340.jpg" /></p>
                
                <p>Sau n&agrave;y, t&ocirc;i l&agrave;m quen được với những người bạn mới, t&ocirc;i lại tiếp tục nhận ra, con người đều c&oacute; một sự kết nối với nhau th&ocirc;ng qua một điều g&igrave; đ&oacute;, thường l&agrave; qua một người n&agrave;o đấy. Nhiều khi t&ocirc;i c&ograve;n nghĩ l&agrave;, c&oacute; lẽ kh&ocirc;ng cần n&oacute;i về người y&ecirc;u th&igrave; mới bảo l&agrave; định mệnh, m&agrave; vốn ch&uacute;ng ta gặp gỡ được bất cứ ai cũng đ&atilde; l&agrave; một c&aacute;i duy&ecirc;n số rồi. Đ&agrave; Nẵng l&agrave;m t&ocirc;i hết lần n&agrave;y đến lần kh&aacute;c phải thốt l&ecirc;n rằng: &ldquo;Tr&aacute;i Đất kh&ocirc;ng hề nhỏ, chỉ c&oacute; Đ&agrave; Nẵng mới nhỏ m&agrave; th&ocirc;i&rdquo;. Nhưng m&agrave;, n&oacute; cũng l&agrave;m bạn thấy được rằng, nhiều khi bạn đ&atilde; v&ocirc; t&igrave;nh để vụt mất một mối quan hệ n&agrave;o đấy, như t&ocirc;i v&agrave; cậu bạn tiểu học kia chẳng hạn. Bỗng dưng cắt đứt li&ecirc;n lạc rồi b&acirc;y giờ lại t&igrave;nh cờ gặp lại được. C&oacute; thể sau n&agrave;y lại tiếp tục mất li&ecirc;n lạc chăng? Con người l&agrave; vậy, bạn gặp được những người bạn mới, rồi lại sẽ qu&ecirc;n mất m&igrave;nh từng c&oacute; người bạn X,Y thế n&agrave;y thế kia. C&oacute; thể ch&uacute;ng ta sẽ gặp lại. Rồi ch&uacute;ng ta lại lướt qua nhau.</p>
                
                <p>-CCCT-</p>',
                'author_id' => 1,
                'category_id' => 1,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/02-20190306143212.jpg',
                'url' => str_slug('THẨN THƠ TRÊN XE BUÝT: CHUYỆN SỐ 1').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
            [
                'title' => 'TRẠI MÙA ĐÔNG',
                'description' => 'Chuyện đi trại là chuyện của những dòng tâm sự giữa 2 người nào đó, hoặc là 2 người nào đó khác, trong khoảnh khắc chung nhịp điệu, hoà cùng nhịp đập, trò chuyện với nhau vài ba câu to nhỏ, gieo rắc những gì mà tâm hồn sâu ẩn họ muốn giãi bày.',
                'content' => '<p>Cứ độ th&aacute;ng 11 về, l&agrave; l&uacute;c trời bắt đầu trở lạnh, gi&oacute; r&iacute;t thổi r&aacute;t đỏ những đ&ocirc;i g&ograve; m&aacute;, gi&oacute; luồn qua từng lớp &aacute;o, khẽ chạm v&agrave;o từng lớp da, từng thớ thịt, gi&oacute; khiến con người ta phải bật run l&ecirc;n, co r&uacute;m lại, ngồi thật s&aacute;t b&ecirc;n nhau, san sẻ ch&uacute;t hơi ấm của ri&ecirc;ng m&igrave;nh. V&agrave; tr&ecirc;n hết, vượt l&ecirc;n tất cả, ở đ&acirc;u đ&oacute; giữa những con người ấy, những t&acirc;m t&igrave;nh, chuyện tr&ograve; thủ thỉ của ng&agrave;y xưa, sẽ l&agrave; miền k&yacute; ức của tuổi thanh xu&acirc;n kh&ocirc;ng bao giờ qu&ecirc;n. Th&aacute;ng 11, l&agrave; th&aacute;ng của những chuyến đi xa, cả Hugo h&aacute;o hức chờ đợi đ&uacute;ng 1 ng&agrave;y. Ng&agrave;y m&agrave; cả Hugo l&ecirc;n đường đặt ch&acirc;n l&ecirc;n v&ugrave;ng đất mới, tay x&aacute;ch tay mang, d&igrave;u nhau l&ecirc;n rừng xuống biển, d&igrave;u nhau qua mưa gi&oacute; b&atilde;o b&ugrave;ng.</p>

                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/02-20190306143270.jpg" /></p>
                
                <p>V&agrave; dường như, n&oacute; đ&atilde; trở th&agrave;nh một thứ văn h&oacute;a kh&ocirc;ng thể thiếu của Hugo, thứ văn h&oacute;a được vun v&eacute;n từ năm n&agrave;y qua năm kh&aacute;c, sưởi ấm biết bao nhi&ecirc;u thế hệ. Lứa n&agrave;y đi, lứa kh&aacute;c tới, nhưng kỉ niệm vẫn c&ograve;n lưu m&atilde;i nơi đ&acirc;y. &ldquo;Trại M&ugrave;a Đ&ocirc;ng&rdquo; - Thắp ngọn lửa, ch&aacute;y bập b&ugrave;ng&hellip; Trại l&agrave; t&acirc;m huyết của cả một thế hệ dựng x&acirc;y. Những điệu nhảy, tr&ograve; chơi, những đờn ca tiếng h&aacute;t, anh chị em cứ thế m&agrave; &ocirc;m chầm quấn qu&yacute;t lấy nhau. Chẳng trại năm n&agrave;o giống nhau, mỗi trại một dư vị ri&ecirc;ng, mang đến cho Hugoer những cảm nhận của ri&ecirc;ng m&igrave;nh, l&agrave; vui vẻ, hạnh ph&uacute;c, l&agrave; ấm &aacute;p, y&ecirc;u thương.</p>
                
                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/03-20190306143280.jpg" /></p>
                
                <p>Chuyện đi trại l&agrave; chuyện của những d&ograve;ng t&acirc;m sự giữa 2 người n&agrave;o đ&oacute;, hoặc l&agrave; 2 người n&agrave;o đ&oacute; kh&aacute;c, trong khoảnh khắc chung nhịp điệu, ho&agrave; c&ugrave;ng nhịp đập, tr&ograve; chuyện với nhau v&agrave;i ba c&acirc;u to nhỏ, gieo rắc những g&igrave; m&agrave; t&acirc;m hồn s&acirc;u ẩn họ muốn gi&atilde;i b&agrave;y. V&agrave; cứ như thế, họ từ những người xa lạ, rẽ ngang cuộc đời nhau, tạo ra đoạn đường gấp kh&uacute;c nhiều h&igrave;nh th&ugrave;, th&ecirc;m th&uacute; vị, th&ecirc;m đẹp cho bức tranh to&agrave;n cảnh. Dẫu tất cả họ, đều quay về con đường ch&iacute;nh, v&agrave; c&oacute; thể kh&ocirc;ng cắt ngang qua nhau th&ecirc;m một lần nữa, nhưng những k&iacute; ức về nhau, về Trại M&ugrave;a Đ&ocirc;ng năm ấy, sẽ chẳng bao giờ phai nho&agrave;.</p>
                
                <p><img alt="" src="https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/04-20190306143290.jpg" /></p>
                
                <p>Một m&ugrave;a trại đang về ngay trước cửa<br />
                T&ocirc;i h&aacute;o hức y hệt những ng&agrave;y xưa<br />
                Trại năm nay th&ecirc;m bao người bạn mới<br />
                G&oacute;p ch&uacute;t vui vang tận m&atilde;i ch&acirc;n trời.</p>
                
                <p>Nguyện ch&uacute;c cho Trại M&ugrave;a Đ&ocirc;ng năm nay được th&agrave;nh c&ocirc;ng tốt đẹp, ch&uacute;c cho Hugoer c&oacute; những kỉ niệm đẹp đẽ b&ecirc;n nhau, b&ecirc;n gia đ&igrave;nh nhỏ y&ecirc;u thương n&agrave;y.</p>
                
                <p>Cả Hugo đang chạy đ&agrave; v&agrave; cất c&aacute;nh&hellip;<br />
                Light Up Your Fire!!!</p>
                
                <p>-Hoa D&acirc;m Bụt-</p>',
                'author_id' => 1,
                'category_id' => 4,
                'cover' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/post/03-20190306143255.jpg',
                'url' => str_slug('TRẠI MÙA ĐÔNG').'-'.date('Ymdhis'),
                'status' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
                'published_at' => now()
            ],
        ]);
    }
}
