<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress_tema' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SkG3axu?5>{A6~lt_lUPRR#8*+)kLUR]eBoP;;sx4Dbqh|Mou:qdtQ_E66!Z/*fR' );
define( 'SECURE_AUTH_KEY',  ';l%DY0&?ph;.}a:?<i2n!AWa^4 Q >S/g}9y=!S~y0tWUD~O<)H}bBo_L2.<izt(' );
define( 'LOGGED_IN_KEY',    'cBcc~xd?YlRC`<rTeJ)JM#|[1F$NCY=n)z* jhvn=?GfAEwf-MR^RKm/>KXo0p$,' );
define( 'NONCE_KEY',        'DZ6mUNzeF-e#ES?&.a1w/)Sb*}0g_&~L2cLQA)`DnG_/w@)6=KexUf^fZJBM38|c' );
define( 'AUTH_SALT',        ':yx}NC-R7v|EG-DKkPE PU icR-mRlGKmaG{o/l^P4`x$kizW<c!$^nF~|O?Po5;' );
define( 'SECURE_AUTH_SALT', 'QHtl;ZI%):_FG`lwp!BEqM(<*eS`6V:`V#5MzhmXwDjQmy;CE7KoSAH-.L/g%6g(' );
define( 'LOGGED_IN_SALT',   'smI)/jpIjpGuTVjL,idaP5dWr^Y[^y(VD{;/Ke=U|Y(3gv(^W+%o]+5A&G}>x)<`' );
define( 'NONCE_SALT',       'aWki:] MvawnGj):4VAYvIeo&%rc]a+GUqo8U0oSNZYna0XSN12Q@o5<V^c$tMz&' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
@ini_set ('upload_max_size', '512');
/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';