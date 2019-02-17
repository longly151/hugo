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
        DB::table('posts')->insert([
            [
                'title' => 'U22 Việt Nam – U22 Philippines: 4 phút xuất thần, "siêu dự bị" tỏa sáng',
                'description' => '(Video, kết quả bóng đá U22 Việt Nam – U22 Philippines, lượt trận mở màn bảng A giải U22 Đông Nam Á 2019) Thầy trò HLV Nguyễn Quốc Tuấn đã trải qua những giây phút từ hồi hộp đến vỡ òa khi chạm trán U22 Philippines.',
                'content' => "Sau tiếng còi khai cuộc, U22 Việt Nam nhanh chóng đẩy cao đội hình với tham vọng tìm kiếm bàn thắng sớm. Với tốc độ và kĩ thuật tốt, các cầu thủ áo đỏ hoàn toàn áp đảo U22 Philippines trong suốt hiệp 1.

                U22 Việt Nam – U22 Philippines: 4 phút xuất thần, &#34;siêu dự bị&#34; tỏa sáng - 1
                
                U22 Việt Nam thắng \"thót tim\" trước U22 Philippines nhờ công của những cầu thủ vào sân từ ghế dự bị
                
                Tuy nhiên dù tạo ra vô số cơ hội ăn bàn mười mươi với những pha tấn công đa dạng hai biên tới trung lộ, hàng công U22 Việt Nam đều không thể một lần ghi tên mình lên bảng tỉ số. Đáng tiếc nhất phải kể đến tình huống Bảo Toàn dứt điểm cận thành trúng người thủ môn đối phương ở phút 19.
                
                Tấn công nhiều không ghi được bàn bàn thắng, U22 Việt Nam đã phải trả giá. Phút 51, Lapas thực hiện cú sút phạt hàng rào đẹp mắt đánh bại thủ môn Văn Biểu mở tỉ số.
                
                Không còn gì để mất, HLV Nguyễn Quốc Tuấn lần lượt tung Trần Danh Trung, Lê Minh Bình vào sân nhằm tăng cường hỏa lực cho hàng công. Rốt cục, những cầu thủ này đã đáp lại sự tin tưởng với hai bàn thắng chỉ trong vòng 4 phút (từ 74 đến 78) giúp U22 Việt Nam lội ngược dòng.
                
                Thắng nhọc 2-1, thầy trò HLV Nguyễn Quốc Tuấn tạm thời vươn lên vị trí đầu bảng A giải U22 Đông Nam Á 2019.
                
                Chung cuộc: U22 Việt Nam 2–1 U22 Philippines (tỷ số hiệp 1: 0-0)
                
                Ghi bàn:
                
                U22 Việt Nam: Danh Trung 74', Minh Bình 78'
                
                U22 Philippines: Lapas 51'
                
                Đội hình xuất phát:
                
                U22 Việt Nam: Văn Biểu, Tùng Quốc, Văn Đạt, Việt Anh, Văn Xuân, Thanh Xuân, Bảo Toàn, Hữu Thắng, Thanh Hậu, Xuân Tú, Đức Nam
                
                U22 Philippines: Asong, Borlongan, De Bruycker, Saavedra, Jarvis, Limbo, Winhoffer, Clarino, Sanciangco, Baguio, Grierson",
                'author_id' => 1,
                'category_id' => 9,
                'cover' => 'https://cdn.24h.com.vn/upload/1-2019/images/2019-02-17/U22-Viet-Nam--U22-Philippines-Nguoc-dong-dang-cap-sieu-du-bi-choi-sang-d---df-1550399322-221-width660height450.jpg',
                'url' => str_slug('U22 Việt Nam – U22 Philippines: 4 phút xuất thần, "siêu dự bị" tỏa sáng').'-'.date('Ymdhis'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Elon Musk rời OpenAI do bất đồng ý kiến với định hướng tương lai của nhóm nghiên cứu trí tuệ nhân tạo',
                'description' => 'Như mọi khi, Elon Musk sử dụng tài khoản Twitter cá nhân để thông báo.',
                'content' => 'Elon Musk rời OpenAI do bất đồng ý kiến với định hướng tương lai của nhóm nghiên cứu trí tuệ nhân tạo - Ảnh 1.
                Như mọi khi, cứ có cập nhật gì mới về các dự án, dự định tương lai của mình, Elon Musk sẽ lại thông báo trên Twitter. Đây là thông tin mới nhất, khiến nhiều người quan tâm tới ngành AI – trí tuệ nhân tạo ngỡ ngàng:
                Elon Musk sẽ rời OpenAI, nhóm nghiên cứu trí tuệ nhân tạo phi lợi nhuận do ông đồng sáng lập với Sam Altman. Lý do ông đưa ra là không đồng tính với hướng phát triển của OpenAI.
                
                Đây là toàn bộ nội dung bài đăng Twitter:
                
                "Nhân tiện, Tesla cũng đang cạnh tranh với những đối thủ tương tự với OpenAI, và tôi bất đồng ý kiến với một phần kế hoạch tương lai mà đội ngũ OpenAI vẫn hướng tới. Cứ dồn nhiều thứ vào như vậy, thì tôi thấy tốt nhất là nên rời đi, khi mọi thứ vẫn còn êm đẹp".
                
                
                capture
                
                
                Bên cạnh đó, Musk bổ sung thêm những lý do khác, như "một lượng vấn đề lớn liên quan tới kỹ thuật và sản xuất" tại cả Tesla và SpaceX. Bản thân Musk không còn "tham gia nhiều" vào các dự án của OpenAI hơn một năm nay.
                
                Elon Musk cũng đã rời ban lãnh đạo OpenAI hồi tháng Hai năm ngoái.
                
                Nhân tiện nói về OpenAI, nhóm nghiên cứu vừa mới thử nghiệm phần mềm tạo tin giả dựa trên một vài thông tin có thật, mục đích cho thấy tiềm năng nguy hiểm của AI trong tương lai. OpenAI nhận biết được những nguy cơ hệ thống mới mang lại, nên đã quyết định không công bố phần lớn những gì dự án đạt được. Họ lo sợ công cụ có thể rơi vào tay kẻ xấu.',
                'author_id' => 1,
                'category_id' => 12,
                'cover' => 'http://genknews.genkcdn.vn/thumb_w/660/2019/2/17/800x-1-15504051030761085717103.jpg',
                'url' => str_slug('Elon Musk rời OpenAI do bất đồng ý kiến với định hướng tương lai của nhóm nghiên cứu trí tuệ nhân tạo').'-'.date('Ymdhis'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Không chỉ nhái thiết kế, chiếc tablet mới nhất của Samsung còn bắt chước điều mà người dùng ghét nhất ở iPad Pro',
                'description' => 'Galaxy Tab S5e của Samsung không chỉ sở hữu thiết kế giống hệt iPad Pro, mà nó còn loại bỏ jack cắm tai nghe y như sản phẩm của Apple.',
                'content' => 'Samsung vừa ra mắt Galaxy Tab S5e - chiếc tablet được trang bị màn hình OLED 10.5 inch, chip Snapdragon 675, RAM 4/6GB, bộ nhớ trong 64/128GB, 4 loa, pin 7040mAh và mức giá 400 USD.

                Tuy nhiên, điều khiến người ta chú ý nhất ở chiếc tablet mới này của Samsung là thiết kế. Nếu như những thế hệ tablet trước của Samsung là Tab S4 hay Tab A 10.5 vẫn còn những nét riêng của mình trong thiết kế (camera đặt ở giữa, mặt lưng kính...), thì nay chiếc Tab S5e trông như một bản sao của chiếc iPad Pro mà Apple ra mắt hồi cuối năm ngoái.
                
                Không chỉ nhái thiết kế, chiếc tablet mới nhất của Samsung còn bắt chước điều mà người dùng ghét nhất ở iPad Pro - Ảnh 1.
                
                Không chỉ nhái thiết kế, chiếc tablet mới nhất của Samsung còn bắt chước điều mà người dùng ghét nhất ở iPad Pro - Ảnh 2.
                
                Có thể bạn là người không quá quan trọng chuyện này, "miễn sao dùng tốt là được". Quả thật, việc Samsung sao chép thiết kế của iPad Pro đã giúp cho Galaxy Tab S5e đạt được một "thành tựu" để đời - đó là độ mỏng 5.5mm và trọng lượng 400g, ấn tượng hơn cả đối thủ. Và nó cũng thật sự có ích cho người dùng, vì rõ ràng, ai cũng muốn có một chiếc tablet mỏng và nhẹ hơn.
                
                Tuy nhiên để đánh đổi điều này, Samsung cũng đã nối gót Apple và loại bỏ jack cắm tai nghe khỏi Galaxy Tab S5e. Vâng, bạn nghe đúng rồi đấy: Galaxy Tab S5e không hề có jack cắm tai nghe. Đây có thể coi là sản phẩm toàn cầu đầu tiên của Samsung bị loại bỏ jack cắm này (trước đó Samsung đã làm điều tương tự với smartphone Galaxy A8s, tuy nhiên chiếc máy này chỉ được bán tại Trung Quốc). 
                
                Quyết định loại bỏ jack cắm tai nghe trên Galaxy Tab S5e của Samsung thật khó hiểu. Khi mà loại bỏ jack cắm tai nghe trên smartphone là điều có thể biện hộ được do chúng có kích thước nhỏ và các nhà sản xuất cần dành diện tích bên trong cho linh kiện khác, thì trên một chiếc tablet với kích thước lớn lại trở nên thật vô lý. Việc Apple loại bỏ jack cắm tai nghe trên iPad đã tạo nên nhiều chỉ trích, và giờ đây Samsung lại đi học tập cái xấu của Apple.
                
                Chẳng ai ngoài Samsung có thể lý giải được quyết định này. Chỉ biết rằng, người dùng Galaxy Tab S5e sẽ sở hữu một chiếc tablet thật mỏng, thật nhẹ, nhưng cũng thật khó chịu khi sử dụng vì nó thiếu vắng jack cắm quan trọng nhất trên một thiết bị giải trí.',
                'author_id' => 1,
                'category_id' => 14,
                'cover' => 'http://genknews.genkcdn.vn/thumb_w/660/2019/2/15/sm-t725002backsilver-1550245324798223542202.jpg',
                'url' => str_slug('Không chỉ nhái thiết kế, chiếc tablet mới nhất của Samsung còn bắt chước điều mà người dùng ghét nhất ở iPad Pro').'-'.date('Ymdhis'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
