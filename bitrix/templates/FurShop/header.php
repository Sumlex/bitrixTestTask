<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?$APPLICATION->ShowHead();?>
	<title> <?$APPLICATION->ShowTitle() ?></title>

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.8.2.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/functions.js");?>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico"/>

	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
	
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							<?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"FORGOT_PASSWORD_URL" => "/User/",
		"PROFILE_URL" => "/User/User.php",
		"REGISTER_URL" => "/User/Sign-in.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?><br>
						</td>
					</tr>
				</table>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	".default",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
			</div>
		</div>
		
		<!--- // end header area --->
		<div class="bc_breadcrumbs">
			<ul>
				<li><a href="">Каталог</a></li>
				<li><a href="">Мебель</a></li>
				<li><a href="">Выставки и события</a></li>
			</ul>
			<div class="clearboth"></div>
		</div>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<h1>Заголовок страницы</h1>
						</div>
						<!-- workarea -->