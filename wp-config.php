<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'bachhoastore');

/** Username của database */
define('DB_USER', 'bachhoastore');

/** Mật khẩu của database */
define('DB_PASSWORD', 'mavuong01#!');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9yL^O#Ol-Z<{D!,)?sUU@ Ue]_9I{,b<a@D;4e?*A0 $@9DHa2@g5Jo?LEBa-E@s');
define('SECURE_AUTH_KEY',  'PV{Ehi}W%}!:UfH#&`Tnz1/LJrW,>pnc0NT<6p{IC=c.!*lANqSxgGve`_#vha@k');
define('LOGGED_IN_KEY',    ';q8Y)kE-*(<]Z:.9K]8Wsc(1:Ml1-x&8Y9RK5>3vI2<7JoMwxvL+Kmda|:Q=O;Lz');
define('NONCE_KEY',        'abhE@b3Q<j5o5xaKL*LWPc=?XgBATyfUtIXHPC^n-n/LOKN47&>GH:W/LDK*bd3a');
define('AUTH_SALT',        'f0co*r8Oz#8>[$TPT[0s5V+6?cETEmT;dfpa&]2ds@y7mc2&qc-%|ZL&au=t0[N6');
define('SECURE_AUTH_SALT', '3-SDgle7CSm+G-cloKNB5XB$sXbmS1a0?|HMNZ~Qe:Ui7fKhP>a,06i9$-yA9{bj');
define('LOGGED_IN_SALT',   'Lp*4M}e(QRrbg=yxf:uos#Xf.uuFz.5Ay$>{Hx0.(>{K9MXWA<$2R0pl$!gWx8B,');
define('NONCE_SALT',       'GaEr,s0Yme+B<$}/3[_`ps[t;rSVcW~{UG`i?4+{=!IPVHAs-!%LA5=BWbzRlQ.l');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
