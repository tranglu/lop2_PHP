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
define( 'DB_NAME', 'testwordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/>[K9N.D[I-#U|{z.t%,R3=vDwk#xl*C}g,M@n}9Hm9mVq*V6N]P^Hby|/=*C$uM' );
define( 'SECURE_AUTH_KEY',  'H|wZck`76140]5V1O~6~LJ59#>8<$5,egX|5<UrGnla:Q)at{[*<dYGt3CeX,k&E' );
define( 'LOGGED_IN_KEY',    'T3,{AI&Re;Bxw7vYa.z1ncM30`Uh~:!VA};mB&h:=Z}`;`#!|QZ!5@=BqTm+Jt[,' );
define( 'NONCE_KEY',        '~K4p/ljit`t6%V>@R;d5+j d5=os:(?By,?d*p%*BVYC63?m,ERF_(iUqi_:SYh;' );
define( 'AUTH_SALT',        'lk,dhM,b9)He)!IR6lmon_2[nBC|(U{&I&g}yH?3?m0 W3::l/%ZT8DfWFj.M,Q]' );
define( 'SECURE_AUTH_SALT', '1|mA+x6A5Lp~OIN8mWK>,3KCP&{>I<5q+9!)ecs8&HB)|g]fIZ#dtZEm &lK@G&j' );
define( 'LOGGED_IN_SALT',   'Y|J,GOz2Tpf!G&d5[sNXTeFsv&=O.7YYzG*c`D_xt0(egAPRgbmlxW{3V5O1u 4q' );
define( 'NONCE_SALT',       'k@sG^0FTslCv<n0iwts^R!_A.XMP!AlCz&Y=Kyz,~ =A8PF&Y2]*k]d<;tq0aPM{' );

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
