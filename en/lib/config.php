<? 
if($_GET[CACHE] or $HTTP_GET_VARS[CACHE]) { session_cache_limiter('nocache, must-revalidate'); }
session_start();
if(empty($_SESSION[CART])) { $CART=md5(uniqid(rand())); @session_register("CART") or die("session_register CART_ID err");}

include $_SERVER["DOCUMENT_ROOT"]."/common.php";

$lang = 2;
$admin_stat = $db->object("cs_seo", "where lang='$lang'"); 
$site_directory = "/en";
$site_url = $site_host.$site_directory;
$site_head_title = $admin_stat->title;
$site_title = $admin_stat->title;
$site_subject = $admin_stat->title;
$site_author = $admin_stat->author;
$site_keywords = $admin_stat->keywords;
$site_description = $admin_stat->description;
$site_robots = "INDEX,FOLLOW";
$og_type = "website";
$og_title = $site_title;
$og_description	= $site_description;
$og_image = $site_host."/images/common/logo.png";
$og_url = $site_host.$_SERVER["REQUEST_URI"];
$sns_card = "summary";
$sns_title = $site_title;
$sns_description = $site_description;
$sns_image = $site_host."/images/common/logo.png";
$sns_domain = $site_host.$_SERVER["REQUEST_URI"];
$google_verification = $admin_stat->google_meta;
$naver_verification = $admin_stat->naver_meta;
$script_content = $admin_stat->script_content;
?>
