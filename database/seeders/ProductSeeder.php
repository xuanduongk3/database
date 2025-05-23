<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                "product_name" =>  "Tổng Đài Kể Chuyện Lúc 0h",
                "description" =>  "“Chào mừng đến với Tổng đài kể chuyện lúc 0 giờ. Đêm nay, chúng ta sẽ đến với một câu chuyện mới…”\n\nCứ mỗi đêm, cô bé mồ côi câm điếc tên Thanh lại “nghe” thấy tiếng chuông quỷ dị phát ra từ chiếc điện thoại đồ chơi cũ ở cô nhi viện mà cô vừa chuyển đến...\n\nTại sao Thanh có thể “nghe” được âm thanh từ một chiếc điện thoại đồ chơi? Điều gì đang thực sự diễn ra ở cô nhi viện và liệu nó có liên quan đến sự tồn tại kỳ lạ của chiếc điện thoại ấy hay không?",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352079/lo8vgjtcahahdsjrgrtx.webp",
                "price" =>  70000,
                'discount_price' => 10,
                "stock" =>  9,
                "catalog_id" =>  1
            ],
            [
                "product_name" =>  "Sĩ Số Lớp Vắng 0",
                "description" =>  "“Tiếng gọi bí ẩn trong căn phòng đó dường như chỉ có mình tôi nghe thấy...”\n\nSau khi bóng đêm nuốt trọn ngôi trường, những điều quỷ dị đã xảy ra... Cuốn sách bao gồm 10 câu chuyện kinh dị, ám ảnh về những hồn ma, sự kiện rùng rợn trong trường học. Sách được chắp bút bởi Emma Hạ My, chủ sở hữu kênh Youtube “Truyện của Emma”.",
                "price" =>  80000,
                'discount_price' => 8,
                "stock" =>  10,
                "product_image" => "https://res.cloudinary.com/whr-clound/image/upload/v1745351939/bxvwpe5m9o56m3ayqpju.webp",
                "catalog_id" =>  1
            ],
            [
                "product_name" =>  "Người Chết Biết Điều Gì",
                "description" =>  "Đằng sau cánh cửa im lìm là một cái xác đang phân hủy, thối rữa và bốc mùi ngai ngái. Những vết cắn nham nhở của lũ chuột ngập ngụa trên đống nội tạng bầy nhầy. Cẳng tay, cẳng chân được đựng trong túi du lịch và vết xăm mình là dấu hiệu duy nhất để nhận dạng danh tính, nhưng... chúng không thuộc về cùng một người.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352790/bnoitqyj2dkdr5hlfenz.webp",
                "price" =>  95000,
                'discount_price' => 12,
                "stock" =>  10,
                "catalog_id" =>  1
            ],
            [
                "product_name" =>  "Hồ Điệp Và Kình Ngư",
                "description" =>  "Một câu chuyện cuốn hút ngay từ những trang đầu tiên - Khi tình yêu trở thành sợi dây mong manh giữa sinh tử, phản bội và hy vọng. Khi một nàng hồ điệp nhỏ bé chạm trán với kình ngư mạnh mẽ, liệu đó là định mệnh hay chỉ là một giấc mộng chóng tàn?",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352779/ahx6tjkgdacl64uoklab.webp",
                "price" =>  60000,
                'discount_price' => 10,
                "stock" =>  20,
                "catalog_id" =>  6
            ],
            [
                "product_name" =>  "Món Quà Đến Từ Cõi Chết",
                "description" =>  "10 người bạn thân đột nhiên nhận được tin nhắn từ kẻ nặc danh, mời họ tham gia trò chơi tử thần với số tiền thưởng hấp dẫn. Liệu họ có thể vượt qua thử thách đầy nguy hiểm này hay không? Bí ẩn và linh hồn sẽ được tiết lộ qua các mã Morse thần bí.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352784/nq7cqzimjte1vmkqcwbg.webp",
                "price" =>  85000,
                'discount_price' => 12,
                "stock" =>  10,
                "catalog_id" =>  1
            ],

            [
                "product_name" =>  "100 Truyện Ngụ Ngôn Song Ngữ Anh - Việt Hay Nhất",
                "description" =>  "Cuốn sách này tổng hợp 100 truyện ngụ ngôn đặc sắc nhất của nhiều quốc gia trên thế giới.\n\nMỗi truyện lại mang đến những bài học đáng quý khác nhau, nhờ đó mà trẻ có thể học được nhiều điều hay, lẽ phải, tu dưỡng ý chí phấn đấu, tự hoàn thiện bản thân.\n\nKhông chỉ vậy, cuốn sách được viết dưới dạng song ngữ Anh - Việt sẽ giúp trẻ nâng cao vốn từ vựng, học cách sử dụng đúng ngữ pháp và trở nên thích thú với Tiếng Anh.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352760/xklpwnyyimegqol6nmku.webp",
                "price" =>  60000,
                'discount_price' => 15,
                "stock" =>  8,
                "catalog_id" =>  2
            ],
            [
                "product_name" =>  "Chuyện Con Mèo Dạy Hải Âu Bay (Tái Bản 2024)",
                "description" =>  "Câu chuyện về chú mèo Zorba và cô hải âu Kengah đã truyền tải thông điệp ý nghĩa về sự sẻ chia và yêu thương, cũng như tinh thần trách nhiệm với môi trường sống. Tác phẩm là một kiệt tác thiếu nhi của nhà văn Luis Sepúlveda.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352770/bshfq4xx7o8vyzzf6u8c.webp",
                "price" =>  70000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  2
            ],
            [
                "product_name" =>  "Danh Nhân Thế Giới - Einstein (Tái Bản 2022)",
                "description" =>  "Cuốn sách kể về cuộc đời và sự nghiệp của nhà vật lý thiên tài Einstein, người đã để lại di sản vĩ đại cho nhân loại với Thuyết tương đối và nhiều đóng góp khoa học khác.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352772/h3lpb1z8qrngtx96l3et.webp",
                "price" =>  75000,
                'discount_price' => 4,
                "stock" =>  9,
                "catalog_id" =>  2
            ],
            [
                "product_name" =>  "Hoàng Tử Bé (Tái Bản 2022)",
                "description" =>  "Hoàng Tử Bé là một tác phẩm thiếu nhi kinh điển, chứa đựng những triết lý sâu sắc về tình bạn, tình yêu và ý nghĩa của cuộc sống. Tác phẩm này đã làm say đắm bao thế hệ độc giả trên toàn thế giới.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352778/asxt9us6jspby8pdolon.webp",
                "price" =>  85000,
                'discount_price' => 4,
                "stock" =>  10,
                "catalog_id" =>  2
            ],
            [
                "product_name" =>  "1000 Câu Đố Phát Triển Trí Tuệ - Thách Thức IQ (Tái Bản 2019)",
                "description" =>  "Cuốn sách chứa đựng 1000 câu đố logic và thử thách trí tuệ, giúp trẻ rèn luyện tư duy và phát triển IQ một cách toàn diện.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352760/wxwptabtb3tkupimvs55.webp",
                "price" =>  65000,
                'discount_price' => 10,
                "stock" =>  8,
                "catalog_id" =>  2
            ],
            [
                "product_name" =>  "100 Kỹ Năng Sinh Tồn",
                "description" =>  "Cuốn sách phác thảo chi tiết nhiều chiến lược và kỹ năng sinh tồn trong các tình huống nguy hiểm, giúp bạn bảo vệ bản thân và người thân yêu.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352759/rdqms5jnr16r7xpncrgu.webp",
                "price" =>  80000,
                'discount_price' => 8,
                "stock" =>  10,
                "catalog_id" =>  2
            ],

            [
                "product_name" =>  "Trốn Lên Mái Nhà Để Khóc",
                "description" =>  "Những cơn gió heo may len lỏi vào từng góc phố nhỏ, mùa thu về gợi nhớ bao yêu thương đong đầy... Cuốn sách là những tản văn về mẹ, về bà, về gia đình và ký ức tuổi thơ đầy lắng đọng, nơi bạn có thể tìm lại mình sau những lo toan cuộc sống.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352794/bfoorledwskrplncoisu.webp",
                "price" =>  70000,
                'discount_price' => 7,
                "stock" =>  9,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Qua Lăng Kính Của Một Chú Mèo",
                "description" =>  "Cuốn sách mượn lời một chú mèo để truyền tải thông điệp về hạnh phúc. Không cần phải thành công vượt bậc hay giàu có mới có hạnh phúc, mà chỉ đơn giản là biết tận hưởng từng giây phút hiện tại.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352792/yhq9vptxhh32at57jzku.webp",
                "price" =>  80000,
                'discount_price' => 9,
                "stock" =>  10,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Một Cuốn Sách Tích Cực",
                "description" =>  "Cuốn sách chứa đựng 117 thông điệp tích cực giúp bạn tìm ra câu trả lời trong cuộc sống, vượt qua nỗi buồn để trân trọng niềm vui và hướng tới một tương lai tươi sáng.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352785/qqxoxn8bswpqmbdwh7ys.webp",
                "price" =>  60000,
                'discount_price' => 5,
                "stock" =>  8,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Về Nhà Ăn Bát Cháo Hành",
                "description" =>  "Cuốn sách ghi lại những mẩu chuyện xúc động về gia đình, nơi tình thương luôn hiện hữu. Đọc để thêm trân quý những khoảnh khắc sum vầy bên mâm cơm gia đình và yêu thương những người thân của mình.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352797/zn6xa8wqp5zwamj4dest.webp",
                "price" =>  75000,
                'discount_price' => 10,
                "stock" =>  9,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Cất Cho Tôi Những Ngày Xanh Nắng Hạ",
                "description" =>  "Tập truyện gồm 15 truyện ngắn về tuổi trẻ, những sai lầm, vấp ngã và sự trưởng thành. Dành cho những ai muốn tìm lại mình sau những ngày nắng hạ cháy rực của tuổi thanh xuân.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352768/bjhkxt8apf7dkly2syog.webp",
                "price" =>  70000,
                'discount_price' => 10,
                "stock" =>  9,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Chúng Ta Có Hẹn Với Bình Yên",
                "description" =>  "Cuốn sách là hành trình tìm kiếm bình yên sau những mối tình tan vỡ, những tổn thương, và những năm tháng thanh xuân nhiều khắc khoải. Nhẹ nhàng, sâu lắng nhưng đầy hi vọng về một tương lai bình yên.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352769/wfran1w1esleezmc1492.webp",
                "price" =>  65000,
                'discount_price' => 10,
                "stock" =>  8,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Mẹ Làm Gì Có Ước Mơ",
                "description" =>  "Cuốn sách chứa đựng những hoài niệm về tình yêu thương vô điều kiện của mẹ dành cho con. Những hy sinh thầm lặng mà mẹ dành cho con là điều quý giá nhất, đáng được trân trọng và yêu thương.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352784/epppsmeymq41e0pb6kp3.webp",
                "price" =>  85000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  3
            ],
            [
                "product_name" =>  "Sự Im Lặng Của Bầy Cừu (Tái Bản 2019)",
                "description" =>  "Một câu chuyện kinh điển của thể loại trinh thám và kinh dị, kể về hành trình điều tra của Clarice Starling - một thực tập sinh của FBI - khi cô tìm đến sự trợ giúp của bác sĩ tâm lý Hannibal Lecter, người vừa là kẻ giết người hàng loạt vừa là thiên tài. Cuốn sách đưa người đọc vào một hành trình hồi hộp đến nghẹt thở, nơi các bí ẩn và tội ác đen tối dần dần được phơi bày.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352794/x5ltqe25auwsp0nvpm0x.webp",
                "price" =>  90000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  4
            ],
            [
                "product_name" =>  "Cuộc Viếng Thăm Của Vị Khách Bí Ẩn",
                "description" =>  "R. Austin Freeman mang đến một câu chuyện trinh thám tuyệt vời với nhân vật chính là bác sĩ pháp y Thorndyke. Khi một người đàn ông giàu có qua đời trong những hoàn cảnh bí ẩn, Thorndyke được mời đến để điều tra và phát hiện ra nhiều điều kỳ lạ hơn tưởng tượng. Cuốn sách chứa đầy các chi tiết về pháp y, là một tác phẩm lý thú cho những ai yêu thích thể loại này.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352771/ef6lrtsh2tcquxqsb0xd.webp",
                "price" =>  75000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  4
            ],
            [
                "product_name" =>  "Ghi Chép Pháp Y - Những Cái Chết Bí Ẩn",
                "description" =>  "Cuốn sách ghi lại những câu chuyện kỳ bí và kinh dị mà một bác sĩ pháp y đã trải qua trong sự nghiệp của mình. Từ các vụ án mạng tàn khốc đến các vụ tử vong kỳ lạ, cuốn sách cung cấp một góc nhìn chân thực về công việc của pháp y và những bí mật của cái chết.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352791/ngggfklrqvue7eqpeovp.webp",
                "price" =>  80000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  4
            ],
            [
                "product_name" =>  "Ghi Chép Pháp Y - Tập 2 - Khi Tử Thi Biết Nói",
                "description" =>  "Tiếp nối thành công của tập 1, tập 2 của 'Ghi Chép Pháp Y' đào sâu vào các vụ án phức tạp hơn, nơi các bằng chứng từ thi thể là chìa khóa để giải mã các bí ẩn. Cuốn sách là một hành trình đáng sợ nhưng cuốn hút qua con mắt của một bác sĩ pháp y, đưa người đọc đến gần hơn với những sự thật đằng sau mỗi cái chết.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352782/nq1pl6c3mfbtmzkloisj.webp",
                "price" =>  85000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  4
            ],
            [
                "product_name" =>  "Nạn Nhân Số 13",
                "description" =>  "Một cuộc chiến căng thẳng giữa một luật sư tài ba và một kẻ giết người hàng loạt. Eddie Flynn, với khả năng tài tình trong việc nắm bắt tâm lý đối thủ, phải sử dụng mọi kỹ năng của mình để cứu một người vô tội và lật tẩy những bí mật đằng sau vụ án kinh hoàng. 'Nạn Nhân Số 13' là một cuốn sách không thể bỏ qua với những ai yêu thích trinh thám và pháp lý.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352786/fajmtw4vglu1ilvyxnyd.webp",
                "price" =>  95000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  4
            ],
            [
                "product_name" =>  "Truyện Cười Việt Nam Thời @",
                "description" =>  "Cuốn sách 'Truyện Cười Việt Nam Thời @' của Nguyễn Cừ là một tuyển tập hài hước về đời sống xã hội hiện đại. Tác giả khai thác các tình huống hài hước đặc trưng của thời đại công nghệ với sự phát triển của mạng xã hội, các thiết bị công nghệ cao và cả những thói quen mới hình thành trong xã hội. Những câu chuyện ngắn gọn, sinh động và đậm chất hài hước của người Việt sẽ giúp người đọc giải trí và có những phút giây thư giãn.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352795/vntcxrgxhyhddshywjym.webp",
                "price" =>  50000,
                'discount_price' => 10,
                "stock" =>  6,
                "catalog_id" =>  5
            ],
            [
                "product_name" =>  "Cây Cam Ngọt Của Tôi",
                "description" =>  "Câu chuyện cảm động về cậu bé Zezé, một đứa trẻ 5 tuổi sống trong một gia đình nghèo khó ở Brazil. Cuộc sống của Zezé dường như tăm tối bởi sự nghèo khó, thiếu thốn và cả những trận đòn roi. Nhưng cậu tìm được niềm vui từ người bạn đặc biệt là một cây cam ngọt, và từ đó cuộc đời của cậu đã trở nên tươi sáng hơn. Tác phẩm là một bức tranh sâu sắc về sự cô đơn, nỗi buồn, nhưng cũng đầy tình yêu thương, lòng trắc ẩn, và hy vọng.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352768/ghwcuahxxb3zvom38aaz.webp",
                "price" =>  65000,
                'discount_price' => 10,
                "stock" =>  8,
                "catalog_id" =>  6
            ],
            [
                "product_name" =>  "Ngày Xưa Có Một Chuyện Tình",
                "description" =>  "Nguyễn Nhật Ánh đưa độc giả trở về với những năm tháng tuổi thơ đầy yêu thương và ngọt ngào qua cuốn tiểu thuyết 'Ngày Xưa Có Một Chuyện Tình'. Cuốn sách kể về mối tình trong sáng nhưng cũng đầy trăn trở của ba người bạn thân, với nhiều cung bậc cảm xúc và những giây phút suy tư về tình yêu, tình bạn và những thay đổi khi trưởng thành. Đây là tác phẩm thấm đẫm tình cảm, nhẹ nhàng nhưng sâu sắc, khiến người đọc không khỏi bồi hồi và xúc động.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352787/uw6voxt5f5leaee8wd20.webp",
                "price" =>  70000,
                'discount_price' => 10,
                "stock" =>  9,
                "catalog_id" =>  6
            ],
            [
                "product_name" =>  "Mắt Biếc (Tái Bản 2022)",
                "description" =>  "Tác phẩm nổi tiếng của Nguyễn Nhật Ánh kể về chuyện tình đẹp nhưng buồn của Ngạn và Hà Lan. Từ thuở nhỏ đến khi trưởng thành, tình yêu Ngạn dành cho Hà Lan vẫn không thay đổi, nhưng trái tim Hà Lan lại hướng về thành phố và những mộng mơ khác. 'Mắt Biếc' là một câu chuyện cảm động, đậm chất lãng mạn, buồn bã, về tình yêu đơn phương và sự hy sinh, được tái bản năm 2022 cùng với nhiều hình ảnh minh họa mới.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352782/vmwm0ibp5oxkq8cgh9yn.webp",
                "price" =>  75000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  6
            ],
            [
                "product_name" =>  "Di Sản Hồ Chí Minh - Hành Trình Theo Chân Bác (Tái Bản 2021)",
                "description" =>  "Cuốn sách 'Di Sản Hồ Chí Minh - Hành Trình Theo Chân Bác' của Trần Đức Tuấn là một hành trình đưa người đọc trở lại với những cống hiến và di sản lớn lao của Chủ tịch Hồ Chí Minh để lại cho dân tộc Việt Nam. Cuốn sách khai thác những câu chuyện, những chặng đường gian khó mà Bác đã đi qua để đấu tranh vì độc lập, tự do, đồng thời thể hiện sâu sắc tư tưởng nhân văn, tình yêu nước, thương dân của Người.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352778/gsqfghxzlias6gv7hgpi.webp",
                "price" =>  90000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  7
            ],
            [
                "product_name" =>  "Người Lính Điện Biên Kể Chuyện (Tái Bản 2022)",
                "description" =>  "Cuốn sách 'Người Lính Điện Biên Kể Chuyện' là một tác phẩm ghi lại những câu chuyện xúc động từ chính những người lính đã tham gia chiến dịch Điện Biên Phủ lừng lẫy. Qua từng câu chuyện, Đỗ Ca Sơn và Kiều Mai Sơn giúp người đọc hiểu thêm về sự quả cảm, tinh thần yêu nước và những hi sinh thầm lặng của những người lính trong cuộc kháng chiến vì độc lập dân tộc. Cuốn sách tái bản năm 2022 với nhiều bổ sung và chỉnh sửa, mang đến cho độc giả cái nhìn sâu sắc hơn về thời kỳ hào hùng trong lịch sử Việt Nam.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352790/lkzrdwdmugkpn8icwxls.webp",
                "price" =>  80000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  7
            ],
            [
                "product_name" =>  "Việt Nam Phong Tục (Tái Bản 2023)",
                "description" =>  "Cuốn sách 'Việt Nam Phong Tục' của Phan Kế Bính là một trong những tác phẩm nghiên cứu đầu tiên và toàn diện về các phong tục, tập quán của người Việt. Tác phẩm mô tả chi tiết cuộc sống, cách thức sinh hoạt, lễ nghi, tín ngưỡng của người Việt qua từng vùng miền và từng giai đoạn lịch sử. Tái bản năm 2023, cuốn sách này tiếp tục là tài liệu quý giá cho những ai muốn tìm hiểu sâu hơn về văn hóa và bản sắc Việt Nam.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745362496/oqbg9etcaxo5c4ygsjhu.webp",
                "price" =>  85000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  8
            ],
            [
                "product_name" =>  "Nghĩ Giàu & Làm Giàu (Tái Bản 2020)",
                "description" =>  "Là cuốn sách kinh điển của Napoleon Hill, 'Nghĩ Giàu & Làm Giàu' chia sẻ những nguyên tắc thành công và tư duy làm giàu mà ông đã nghiên cứu qua nhiều năm. Dựa trên cuộc phỏng vấn với hàng trăm người thành công, Napoleon Hill đúc kết ra những bí quyết và nguyên lý về tư duy và hành động để đạt được sự giàu có và hạnh phúc. Cuốn sách tái bản năm 2020 và vẫn là nguồn cảm hứng cho nhiều thế hệ độc giả.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352788/gwnml3fiskj2tnabl2nd.webp",
                "price" =>  70000,
                'discount_price' => 10,
                "stock" =>  9,
                "catalog_id" =>  9
            ],
            [
                "product_name" =>  "Nghệ Thuật Lãnh Đạo - Chân Dung Những CEO, Nhà Sáng Lập Và Những Người Thay Đổi Cuộc Chơi Vĩ Đại Nhất Thế Giới",
                "description" =>  "David M Rubenstein, một trong những nhà đầu tư và từ thiện hàng đầu nước Mỹ, chia sẻ những cuộc phỏng vấn sâu sắc với các CEO, nhà sáng lập, và những người đã thay đổi thế giới. 'Nghệ Thuật Lãnh Đạo' mang đến cho độc giả các câu chuyện về tầm nhìn, lòng kiên định và các quyết định quan trọng của những người đã để lại dấu ấn to lớn trong lĩnh vực của họ. Đây là tác phẩm không thể bỏ qua cho những ai quan tâm đến nghệ thuật lãnh đạo và phát triển sự nghiệp.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352788/z60vclvzcwdgr4chmrtv.jpg",
                "price" =>  90000,
                'discount_price' => 10,
                "stock" =>  10,
                "catalog_id" =>  9
            ],
            [
                "product_name"  =>  "Bút Bi Bấm 0.7 mm - M&G ABP04833A04833 - Mực Xanh",
                "description" =>  "Là dòng sản phẩm rất tiện lợi cho các bạn khối văn phòng, giáo viên.\n\nThân bút bằng nhựa trong suốt kết hợp với cài chắc khỏe hiện đại.\n\nBút được sản xuất theo dây truyền công nghệ mực in nên mực viết rất êm mượt không thấm nhòe khi gặp nước.\n\nLò xo được sản xuất theo thép đàn hồi cho áp lực viết rất thoải mái…",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352763/jyjxclr2jn5sm64ehjzh.jpg",
                "price" =>  5000,
                'discount_price' => 10,
                "stock" =>  69,
                "catalog_id" =>  10,
            ],
            [
                "product_name"  =>  "Bút Lông Bảng 2.5 mm - Faber-Castell 552951 - Màu Xanh Dương",
                "description" =>  "Bút được sản xuất theo công nghệ hiện đại , đạt tiêu chuẩn an toàn quốc tế. Bạn sẽ an tâm hơn về chất lượng cũng như cụ thể hóa hơn nhiều cho từng nhu cầu sử dụng trong việc học, văn phòng, trang trí, thiết kế....\n\nMực đậm, lượng mực cực kỳ nhiều, thêm mực dễ dàng sau khi viết hết. Dễ viết dễ xóa. Ngòi viết ra mực đều màu, êm, khi xóa không làm xước bề mặt bảng.\n\nMực dạng hạt phân tán, có nhiều màu và có mùi thơm dễ chịu. Sản phẩm hoàn toàn không chứa Xylene hay các chất gây nguy hiểm đến sức khỏe.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352765/zvndubpgoqq8fkswcqhj.webp",
                "price" =>  15000,
                'discount_price' => 10,
                "stock" =>  25,
                "catalog_id" =>  10,
            ],
            [
                "product_name"  =>  "Bút Vẽ Kỹ Thuật 0.2 mm - Artline EK-220-RD - Màu Đỏ",
                "description" =>  "Bút có ngòi siêu nhỏ chỉ 0.2 mm dùng để vẽ hoặc đi nét chi tiết cực kì nhỏ trong vẽ chân dung, ký họa, anime, chibi,…\n\nThân bút cứng chắc, cầm cực nhẹ tay với độ chính xác cao. Chúng ta quan sát nét bút dễ dàng và điều khiển ngòi bút thoải mái nhất.\n\nĐặc biệt, ngòi bút bằng sợi Polyester cao cấp giúp mực luôn thấm đều, nét bút mềm mại.\n\nBút sử dụng dòng mực pigment cao cấp kháng nước tuyệt đối đảm bảo không bị lem nhòe khi thấm nước giúp bảo quản được sản phẩm lâu dài trước tác động của bên ngoài.\n\nBút được dùng phổ biến ở trong giới kiến trúc sư, sinh viên kiến trúc, mỹ thuật, những người yêu vẽ,…",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352767/wg35gnzt1u6cpuoqtowx.webp",
                "price" =>  24000,
                'discount_price' => 10,
                "stock" =>  53,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bút Chì Gỗ 2B Có Gôm Soft Series - Smart Kids SK-PC2B011",
                "description" =>  "Bút chì gỗ 2B SK-PC2B011 thích hợp cho các hoạt động như ghi chép, vẽ nháp, học tập.\n\nNét đậm, để lại nhiều than chì trên giấy\n\nLướt rất nhẹ nhàng trên bề mặt viết\n\nDùng để đánh bóng các bức vẽ, đạt đến nhiều mức độ sáng tối khác nhau. Ngoài ra khá hữu dụng trong việc tô đậm vào ô trả lời trắc nghiệm nhanh nhất.\n\nThân lục giác, độ đậm 2B.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352763/o7e6yb6loxzvfqfqesa6.webp",
                "price" =>  4000,
                'discount_price' => 10,
                "stock" =>  34,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bút Lông Bảng 2.0 mm - Artline EK-517-BK - Màu Đen",
                "description" =>  "Bút chuyên sử dụng trong giảng đường hoặc hội trường lớn. Bạn sẽ an tâm hơn về chất lượng cũng như cụ thể hóa hơn nhiều cho từng nhu cầu sử dụng trong việc học, văn phòng, trang trí, thiết kế....\n\nMực đậm, lượng mực cực kỳ nhiều, thêm mực dễ dàng sau khi viết hết. Dễ viết dễ xóa. Ngòi viết ra mực đều màu, êm, khi xóa không làm xước bề mặt bảng.\n\nMực dạng hạt phân tán, có nhiều màu và có mùi thơm dễ chịu. Sản phẩm hoàn toàn không chứa Xylene hay các chất gây nguy hiểm đến sức khỏe.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352766/hdutmbse6do91tsi8z0e.webp",
                "price" =>  37000,
                'discount_price' => 10,
                "stock" =>  46,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bút Gel Softline 0.7 mm - Artline EGB-1700-BK - Màu Đen",
                "description" =>  "Sản phẩm là dòng bút gel có mực đặc biệt, nó không gắt và sệt như dòng mực của bút gel thông thường.\n\nBút được chế tạo dựa trên một nguyên lý khác, mực có gốc nước (không phải gốc dầu) nên có màu sắc rất đẹp và sặc sở.\n\nBút Artline 1700 có nét bút cực kỳ mềm mại, đều và hoàn toàn không bị tắt mực trong quá trình sử dụng. Hơn nữa mực của bút Gel Artline thuộc dòng mực an toàn nên có thể thoải mái sử dụng mà không lo ngại đến sức khỏe và môi trường.\n\nBút chuyên dùng để viết, vẽ và trang trí lên các bưu thiếp, thiệp cưới có màu sáng và các thiệp mời khác. Bút sẽ đẹp hơn nếu viết trên giấy mỹ thuật trắng hoặc ngà.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352765/jasiohkm5ygbmfprmn95.webp",
                "price" =>  38000,
                'discount_price' => 10,
                "stock" =>  24,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bút Bi 0.6 mm - Stacom BP2026-A - Mực Đen",
                "description" =>  "",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352761/almtl7tifb5jkbzl1h6c.webp",
                "price" =>  4000,
                'discount_price' => 10,
                "stock" =>  56,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bút Dạ Quang Boss Mini - Stabilo HL07-24 - Màu Vàng",
                "description" =>  "Bút có thể bơm mực giúp tiết kiệm chi phí, mực dạng nước dùng cho giấy thường, giấy photo... đặc biệt không để lại dấu vết khi muốn photo, fax vô cùng tiện lợi.\n\nSử dụng bởi các nguyên liệu tốt cho môi trường. Mực không chứa độc tố nên rất an toàn cho sức khỏe người tiêu dùng.\n\nVới kích thuớc nhỏ gọn, bạn có thể dễ dàng cất giữ bút trong ba lô và mang theo khi đi học, đi làm. Bạn sẽ hoàn toàn yên tâm với chất lượng của bút Dạ Quang Stabilo Boss Mini HL07.\n\nSở hữu thiết kế thông minh, bút cầm khá chắc tay và dễ sử dụng giúp đánh dấu những phần quan trọng, cho bạn ghi nhớ dễ dàng.\n\nBút vừa có thể trang trí, đánh dấu và có khả năng phát quang nên giúp ích rất nhiều cho bạn.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352764/jwsc1ub9zylurliot2lc.webp",
                "price" =>  43500,
                'discount_price' => 10,
                "stock" =>  31,
                "catalog_id" =>  10,
            ],
            [
                "product_name" =>  "Bấm Kim Mini Kèm Ghim Bấm Công Chúa Elsa - Ume A74012-F1X",
                "description" =>  "Là bộ sản phẩm cần thiết cho học sinh, sinh viên và dân văn phòng để đóng hồ sơ, giấy tờ thành tập gọn gàng, ngăn nắp.\n\nBấm kim với lực bấm nhẹ, có khả năng bấm nhanh và chuẩn xác, không làm bung kim hoặc rách giấy.\n\nKim bấm có kích thước nhỏ, chất liệu thép cao cấp, độ cứng và độ bền cao.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352760/kec1amkdztj52orwlszd.webp",
                "price" =>  45000,
                'discount_price' => 10,
                "stock" =>  11,
                "catalog_id" =>  11,
            ],
            [
                "product_name" =>  "Hộp Tiết Kiệm Squid Game Có Khóa - Main Paper NFJC015-01",
                "description" =>  "Squid Game là một bộ phim truyền hình Hàn Quốc được sản xuất bởi Netflix, xoay quanh một trò chơi sinh tồn đầy kịch tính, nơi những người tham gia phải đối mặt với những thử thách nguy hiểm để giành lấy giải thưởng khổng lồ. Bộ phim đã trở thành một hiện tượng toàn cầu, thu hút hàng triệu khán giả với cốt truyện kịch tính, hình ảnh đậm chất nghệ thuật và những thông điệp sâu sắc về xã hội.\n\nBạn có thể sử dụng hộp tiết kiệm mini này như một chú heo đất tiết kiệm.\n\nGiúp bạn quản lý và tiết kiệm tiền hiệu quả mà an toàn!\n\nVới quà tặng Ống Tiền Tiết Kiệm các bậc phụ huynh có thể tạo lập cho con em mình không tiêu xài phung phí lại tiếp cận được công nghệ hiện đại...",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352781/fz1njozahwwfwkwijcfq.webp",
                "price" =>  205000,
                'discount_price' => 10,
                "stock" =>  3,
                "catalog_id" =>  11,
            ],
            [
                "product_name" =>  "Túi Zip Đựng Tài Liệu Hangyodon A4 - GuangBo KT83104 - Mẫu 1",
                "description" =>  "Túi dây kéo khoá được làm bằng nhựa trong có khoá kéo được làm bằng nhựa với thiết kế đơn giản cho độ bền chắc cao dùng để lưu giữ bảo quản hồ sơ, tài liệu.\n\nSản phẩm dễ sử dụng đặc biệt khoá kéo trơn ít bị kẹt khoá.\n\nThật tiện lợi với khổ A4 có khoá dây kéo bên ngoài.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352795/pln14tff2khembqzb2sf.webp",
                "price" =>  40000,
                'discount_price' => 10,
                "stock" =>  43,
                "catalog_id" =>  11,
            ],
            [
                "product_name" =>  "Hộp Bút Nhựa Capybara - Phú Vinh Phát - Great",
                "description" =>  "Hộp Bút Nhựa Capybara - Phú Vinh Phát được làm từ chất liệu đẹp, dày chắc, dễ dàng vệ sinh, thuận tiện cho việc sử dụng và bảo quản.\n\nKiểu dáng hộp bút chữ nhật gọn nhẹ, đặc biệt hộp có thể đứng vững trên các mặt phẳng.\n\nDây khóa kéo chắc chắn, trơn tru giúp bạn đóng / mở dễ dàng, thuận tiện khi sử dụng.\n\nThiết kế ngăn đựng rộng rãi, đựng được nhiều loại dụng cụ học tập, văn phòng phẩm như =>  bút viết, thước kẻ, compa...\n\nVới chiếc hộp đựng bút này, bạn có thể tùy ý sắp xếp vật dụng cá nhân của mình một cách gọn gàng, ngăn nắp và còn có thể mang theo bên người để sử dụng vào bất kỳ lúc nào.",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352780/n34ovtpjftngt6acbw96.jpg",
                "price" =>  78000,
                'discount_price' => 10,
                "stock" =>  22,
                "catalog_id" =>  11,
            ],
            [
                "product_name" =>  "Băng Keo Giấy 2F5 - Hiệp Phát - Màu Kem",
                "description" =>  "Sản phẩm có khả năng bám dính tốt, dẻo dai, không chứa các hóa chất độc hại, an toàn cho sức khỏe người sử dụng.\n\nBề mặt băng dính mịn, đảm bảo tính thẩm mỹ khi dán lên các đồ dùng.\n\nSản phẩm có thể viết lên được, tiện lợi cho bạn trong quá trình sử dụng.\n\nSản phẩm không để lại vết keo dính trên bề mặt, dễ dàng xé được bằng tay, có thể dùng để dán các hộp giấy đựng đồ vật hay được sử dụng cho nhiều mục đích khác nhau.\n\nSản phẩm được sử dụng rộng rãi trong cuộc sống, từ trường học, văn phòng, gia đình đến các cơ sở sản xuất thủ công...",
                "product_image" =>  "https://res.cloudinary.com/whr-clound/image/upload/v1745352761/zq7l7bhy1o6xruk5qfuu.webp",
                "price" =>  13000,
                'discount_price' => 10,
                "stock" =>  95,
                "catalog_id" =>  11,
            ]

        ];

        foreach ($data as $data) {
            Product::create($data);
        }
    }
}
