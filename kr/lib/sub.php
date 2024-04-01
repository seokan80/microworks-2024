<?
/* sub seo */
if($page_info && $sub_info){
	$site_title .= " - ".$page_info." - ".$sub_info;
	$og_title = $site_title;
	$sns_title = $site_title;
	$site_subject = $sub_info;
}else if($page_info){
	$site_title .= " - ".$page_info;
	$og_title = $site_title;
	$sns_title = $site_title;
	$site_subject = $page_info;
}
if($sub_description){
	$site_description = $sub_description;
	$og_description = $site_description;
	$sns_description = $site_description;
}
?>
