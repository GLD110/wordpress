<?php
// load WordPress functions
$wpRootPath = explode('wp-content', __FILE__);
include_once($wpRootPath[0].'/wp-load.php');


/////////////////////////////////////////////////////////
// configuration
global $shortcodeData;
$shortcodeData = array(
	'btns' => array(
		'title' => '',
		'desc' => '',
		'code' => '[button size="{{sc-btn-size}}" round="{{sc-btn-rnd}}" action="{{sc-btn-js}}"]{{sc-btn-txt}}[/button]',
		'fields' => array(
			'sc-btn-size' => array( 
				'title'		=> __('Size', 'truewordpress'),
				'desc'		=> __('Please select button size.', 'truewordpress'),
				'type'		=> 'select',
				'values'	=> array('small', 'middle', 'normal', 'large'),
				'default'	=> 'normal'
			),
			'sc-btn-rnd' => array( 
				'title'		=> __('Round', 'truewordpress'),
				'desc'		=> __('Please select button round size.', 'truewordpress'),
				'type'		=> 'select',
				'values'	=> array('small', 'middle', 'normal', 'large'),
				'default'	=> 'normal'
			),
			'sc-btn-js' => array( 
				'title'		=> __('Action', 'truewordpress'),
				'desc'		=> __('Please enter javascript code for click event. use \" instead " or \' ', 'truewordpress'),
				'type'		=> 'textarea',
				'values'	=> '',
				'default'	=> '',
				'encode'	=> true
			),
			'sc-btn-txt' => array( 
				'title'		=> __('Text', 'truewordpress'),
				'desc'		=> __('Please enter button text.', 'truewordpress'),
				'type'		=> 'text',
				'values'	=> '',
				'default'	=> 'Button'
			)
		),
		'contents' => ''
	),
	'cols' => array(
		'title' => '',
		'desc' => '',
		'code' => '[column number="{{sc-col-num}}"]{{sc-col-txt}}[/column]',
		'fields' => array(
			'sc-col-num' => array( 
				'title'		=> __('Column Number', 'truewordpress'),
				'desc'		=> __('Please select column number.', 'truewordpress'),
				'type'		=> 'select',
				'values'	=> array('1', '2', '3', '4', '6'),
				'default'	=> '3'
			),
			'sc-col-txt' => array( 
				'title'		=> __('Text', 'truewordpress'),
				'desc'		=> __('Please enter column text', 'truewordpress'),
				'type'		=> 'textarea',
				'values'	=> '',
				'default'	=> ''
			)
		),
		'contents' => ''
	),
	'coltxt' => array(
		'title' => '',
		'desc' => '',
		'code' => '[column-text number="{{sc-colt-num}}" column-space="{{sc-colt-space}}" spacing-line="{{sc-colt-line}}"]"{{sc-colt-txt}}"[/column-text]',
		'fields' => array(
			'sc-colt-num' => array( 
				'title'		=> __('Column Number', 'truewordpress'),
				'desc'		=> __('Please enter column number. maximum value is 12', 'truewordpress'),
				'type'		=> 'number',
				'values'	=> '',
				'default'	=> '4'
			),
			'sc-colt-space' => array( 
				'title'		=> __('Column Space', 'truewordpress'),
				'desc'		=> __('Please enter columns space size. maximum value is 50(px)', 'truewordpress'),
				'type'		=> 'number',
				'values'	=> '',
				'default'	=> '10'
			),
			'sc-colt-line' => array( 
				'title'		=> __('Border Style', 'truewordpress'),
				'desc'		=> __('Please select border style of columns.', 'truewordpress'),
				'type'		=> 'select',
				'values'	=> array('dashed', 'dotted', 'double', 'groove', 'inset', 'none', 'outset', 'ridge', 'solid'),
				'default'	=> 'none'
			),
			'sc-colt-txt' => array( 
				'title'		=> __('Text', 'truewordpress'),
				'desc'		=> __('Please enter column text', 'truewordpress'),
				'type'		=> 'textarea',
				'values'	=> '',
				'default'	=> ''
			)
		),
		'contents' => ''
	),
	'mediayoutube' => array(
		'title' => '',
		'desc' => '',
		'code' => '[media type="yt"]{{sc-youtube-src}}[/media]',
		'fields' => array(
			'sc-youtube-src' => array( 
				'title'		=> __('Youtube Link', 'truewordpress'),
				'desc'		=> __('Please enter youtube video link url.', 'truewordpress'),
				'type'		=> 'textarea',
				'values'	=> '',
				'default'	=> ''
			)
		),
		'contents' => ''
	),
	'mediavimeo' => array(
		'title' => '',
		'desc' => '',
		'code' => '[media type="vm"]{{sc-vimeo-src}}[/media]',
		'fields' => array(
			'sc-vimeo-src' => array( 
				'title'		=> __('Vimeo Link', 'truewordpress'),
				'desc'		=> __('Please enter vimeo video link url.', 'truewordpress'),
				'type'		=> 'textarea',
				'values'	=> '',
				'default'	=> ''
			)
		),
		'contents' => ''
	),
	'ico' => array(
		'title' => '',
		'desc' => '',
		'code' => '[icon type="{{sc-ico}}"][/icon]',
		'fields' => array(
			'sc-ico' => array( 
				'title'		=> '',
				'desc'		=> '',
				'type'		=> 'hidden',
				'values'	=> '',
				'default'	=> ''
			)
		),
		'contents' => icons_form()
	)
);


/////////////////////////////////////////////////////////
// generate shortcode settings form
if(isset($_GET['sc'])){
	shortcode_form($_GET['sc']);
}

// create shortcode form
function shortcode_form($sc = ''){
	global $shortcodeData;

	// validation
	if(empty($shortcodeData[$sc])){
		return false;
	}

	////
	$scd = $shortcodeData[$sc];

	?>

		<!--  -->
		<link rel = "stylesheet" href = "<?php echo get_template_directory_uri(); ?>/assets/fonts/Awesome/font-awesome.min.css"/>
		<script type = "text/javascript" src = "<?php echo get_template_directory_uri(); ?>/assets/js/shortcode-popup.js"></script>
		
		<!--  -->
		<div class = "shortcode-form">

			<div class = "desc-wrapper">
				<?php echo $scd['title']? '<h3>'.$scd['title'].'</h3>': ''; ?>
				<?php echo $scd['desc']? '<p>'.$scd['desc'].'</p>': ''; ?>
			</div>

			<div class = "input-wrapper">
				<?php if(!empty($scd['fields'])): ?>
					<?php foreach($scd['fields'] as $k => $f): ?>
						<?php 
							switch($f['type']):
								case 'select':
									?>
										<div class = "form-group after-clear">
											<label for = "<?php echo $k; ?>"><?php echo $f['title']; ?></label>
											<select class = "form-control" id = "<?php echo $k; ?>" <?php echo $f['encode']? 'data-encode = "true"': '';?>>
												<?php foreach($f['values'] as $v): ?>
													<option value = "<?php echo $v; ?>" <?php echo $v == $f['default']? 'selected': ''; ?>>
														<?php echo $v; ?>
													</option>
												<?php endforeach; ?>												
											</select>
											<span class = "desc"><?php echo $f['desc']; ?></span>
										</div>
									<?php
									break;

								case 'textarea':
									?>
										<div class = "form-group after-clear">
											<label for = "<?php echo $k; ?>"><?php echo $f['title']; ?></label>
											<textarea class = "form-control" id = "<?php echo $k; ?>" <?php echo $f['encode']? 'data-encode = "true"': '';?>><?php echo $f['default']; ?></textarea>
											<span class = "desc"><?php echo $f['desc']; ?></span>
										</div>
									<?php
									break;

								default:
									?>
										<div class = "form-group after-clear">
											<label for = "<?php echo $k; ?>"><?php echo $f['title']; ?></label>
											<input type = "<?php echo $f['type']; ?>" class = "form-control" id = "<?php echo $k; ?>" value = "<?php echo $f['default']; ?>" <?php echo $f['encode']? 'data-encode = "true"': '';?>/>
											<span class = "desc"><?php echo $f['desc']; ?></span>
										</div>
									<?php
									break;

								///////////
							endswitch;
						?>					
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<div class = "cnts-wrapper after-clear">
				<?php echo $scd['contents']? $scd['contents']: ''; ?>
			</div>
 
			<div class = "action-wrapper after-clear">
				<input type = "hidden" id = "shortcode-tpl" value = '<?php echo $scd['code']? $scd['code']: ''; ?>'/>
				<a id = "add-shortcode" class = "button"><?php echo __('Add Shortcode', 'truewordpress'); ?></a>
			</div>
		</div>
	<?php
}

// icons
function icons_form(){
	return '
		<div class = "icons-wrapper">
			<i class="fa fa-adjust"></i>
			<i class="fa fa-anchor"></i>
			<i class="fa fa-archive"></i>
			<i class="fa fa-arrows"></i>
			<i class="fa fa-arrows-h"></i>
			<i class="fa fa-arrows-v"></i>
			<i class="fa fa-asterisk"></i>
			<i class="fa fa-ban"></i>
			<i class="fa fa-bar-chart-o"></i>
			<i class="fa fa-barcode"></i>
			<i class="fa fa-bars"></i>
			<i class="fa fa-beer"></i>
			<i class="fa fa-bell"></i>
			<i class="fa fa-bell-o"></i>
			<i class="fa fa-bolt"></i>
			<i class="fa fa-book"></i>
			<i class="fa fa-bookmark"></i>
			<i class="fa fa-bookmark-o"></i>
			<i class="fa fa-briefcase"></i>
			<i class="fa fa-bug"></i>
			<i class="fa fa-building-o"></i>
			<i class="fa fa-bullhorn"></i>
			<i class="fa fa-bullseye"></i>
			<i class="fa fa-calendar"></i>
			<i class="fa fa-calendar-o"></i>
			<i class="fa fa-camera"></i>
			<i class="fa fa-camera-retro"></i>
			<i class="fa fa-caret-square-o-down"></i>
			<i class="fa fa-caret-square-o-left"></i>
			<i class="fa fa-caret-square-o-right"></i>
			<i class="fa fa-caret-square-o-up"></i>
			<i class="fa fa-certificate"></i>
			<i class="fa fa-check"></i>
			<i class="fa fa-check-circle"></i>
			<i class="fa fa-check-circle-o"></i>
			<i class="fa fa-check-square"></i>
			<i class="fa fa-check-square-o"></i>
			<i class="fa fa-circle"></i>
			<i class="fa fa-circle-o"></i>
			<i class="fa fa-clock-o"></i>
			<i class="fa fa-cloud"></i>
			<i class="fa fa-cloud-download"></i>
			<i class="fa fa-cloud-upload"></i>
			<i class="fa fa-code"></i>
			<i class="fa fa-code-fork"></i>
			<i class="fa fa-coffee"></i>
			<i class="fa fa-cog"></i>
			<i class="fa fa-cogs"></i>
			<i class="fa fa-comment"></i>
			<i class="fa fa-comment-o"></i>
			<i class="fa fa-comments"></i>
			<i class="fa fa-comments-o"></i>
			<i class="fa fa-compass"></i>
			<i class="fa fa-credit-card"></i>
			<i class="fa fa-crop"></i>
			<i class="fa fa-crosshairs"></i>
			<i class="fa fa-cutlery"></i>
			<i class="fa fa-dashboard"></i>
			<i class="fa fa-desktop"></i>
			<i class="fa fa-dot-circle-o"></i>
			<i class="fa fa-download"></i>
			<i class="fa fa-edit"></i>
			<i class="fa fa-ellipsis-h"></i>
			<i class="fa fa-ellipsis-v"></i>
			<i class="fa fa-envelope"></i>
			<i class="fa fa-envelope-o"></i>
			<i class="fa fa-eraser"></i>
			<i class="fa fa-exchange"></i>
			<i class="fa fa-exclamation"></i>
			<i class="fa fa-exclamation-circle"></i>
			<i class="fa fa-exclamation-triangle"></i>
			<i class="fa fa-external-link"></i>
			<i class="fa fa-external-link-square"></i>
			<i class="fa fa-eye"></i>
			<i class="fa fa-eye-slash"></i>
			<i class="fa fa-female"></i>
			<i class="fa fa-fighter-jet"></i>
			<i class="fa fa-film"></i>
			<i class="fa fa-filter"></i>
			<i class="fa fa-fire"></i>
			<i class="fa fa-fire-extinguisher"></i>
			<i class="fa fa-flag"></i>
			<i class="fa fa-flag-checkered"></i>
			<i class="fa fa-flag-o"></i>
			<i class="fa fa-flash"></i>
			<i class="fa fa-flask"></i>
			<i class="fa fa-folder"></i>
			<i class="fa fa-folder-o"></i>
			<i class="fa fa-folder-open"></i>
			<i class="fa fa-folder-open-o"></i>
			<i class="fa fa-frown-o"></i>
			<i class="fa fa-gamepad"></i>
			<i class="fa fa-gavel"></i>
			<i class="fa fa-gear"></i>
			<i class="fa fa-gears"></i>
			<i class="fa fa-gift"></i>
			<i class="fa fa-glass"></i>
			<i class="fa fa-globe"></i>
			<i class="fa fa-group"></i>
			<i class="fa fa-hdd-o"></i>
			<i class="fa fa-headphones"></i>
			<i class="fa fa-heart"></i>
			<i class="fa fa-heart-o"></i>
			<i class="fa fa-home"></i>
			<i class="fa fa-inbox"></i>
			<i class="fa fa-info"></i>
			<i class="fa fa-info-circle"></i>
			<i class="fa fa-key"></i>
			<i class="fa fa-keyboard-o"></i>
			<i class="fa fa-laptop"></i>
			<i class="fa fa-leaf"></i>
			<i class="fa fa-legal"></i>
			<i class="fa fa-lemon-o"></i>
			<i class="fa fa-level-down"></i>
			<i class="fa fa-level-up"></i>
			<i class="fa fa-lightbulb-o"></i>
			<i class="fa fa-location-arrow"></i>
			<i class="fa fa-lock"></i>
			<i class="fa fa-magic"></i>
			<i class="fa fa-magnet"></i>
			<i class="fa fa-mail-forward"></i>
			<i class="fa fa-mail-reply"></i>
			<i class="fa fa-mail-reply-all"></i>
			<i class="fa fa-male"></i>
			<i class="fa fa-map-marker"></i>
			<i class="fa fa-meh-o"></i>
			<i class="fa fa-microphone"></i>
			<i class="fa fa-microphone-slash"></i>
			<i class="fa fa-minus"></i>
			<i class="fa fa-minus-circle"></i>
			<i class="fa fa-minus-square"></i>
			<i class="fa fa-minus-square-o"></i>
			<i class="fa fa-mobile"></i>
			<i class="fa fa-mobile-phone"></i>
			<i class="fa fa-money"></i>
			<i class="fa fa-moon-o"></i>
			<i class="fa fa-music"></i>
			<i class="fa fa-pencil"></i>
			<i class="fa fa-pencil-square"></i>
			<i class="fa fa-pencil-square-o"></i>
			<i class="fa fa-phone"></i>
			<i class="fa fa-phone-square"></i>
			<i class="fa fa-picture-o"></i>
			<i class="fa fa-plane"></i>
			<i class="fa fa-plus"></i>
			<i class="fa fa-plus-circle"></i>
			<i class="fa fa-plus-square"></i>
			<i class="fa fa-plus-square-o"></i>
			<i class="fa fa-power-off"></i>
			<i class="fa fa-print"></i>
			<i class="fa fa-puzzle-piece"></i>
			<i class="fa fa-qrcode"></i>
			<i class="fa fa-question"></i>
			<i class="fa fa-question-circle"></i>
			<i class="fa fa-quote-left"></i>
			<i class="fa fa-quote-right"></i>
			<i class="fa fa-random"></i>
			<i class="fa fa-refresh"></i>
			<i class="fa fa-reply"></i>
			<i class="fa fa-reply-all"></i>
			<i class="fa fa-retweet"></i>
			<i class="fa fa-road"></i>
			<i class="fa fa-rocket"></i>
			<i class="fa fa-rss"></i>
			<i class="fa fa-rss-square"></i>
			<i class="fa fa-search"></i>
			<i class="fa fa-search-minus"></i>
			<i class="fa fa-search-plus"></i>
			<i class="fa fa-share"></i>
			<i class="fa fa-share-square"></i>
			<i class="fa fa-share-square-o"></i>
			<i class="fa fa-shield"></i>
			<i class="fa fa-shopping-cart"></i>
			<i class="fa fa-sign-in"></i>
			<i class="fa fa-sign-out"></i>
			<i class="fa fa-signal"></i>
			<i class="fa fa-sitemap"></i>
			<i class="fa fa-smile-o"></i>
			<i class="fa fa-sort"></i>
			<i class="fa fa-sort-alpha-asc"></i>
			<i class="fa fa-sort-alpha-desc"></i>
			<i class="fa fa-sort-amount-asc"></i>
			<i class="fa fa-sort-amount-desc"></i>
			<i class="fa fa-sort-asc"></i>
			<i class="fa fa-sort-desc"></i>
			<i class="fa fa-sort-down"></i>
			<i class="fa fa-sort-numeric-asc"></i>
			<i class="fa fa-sort-numeric-desc"></i>
			<i class="fa fa-sort-up"></i>
			<i class="fa fa-spinner"></i>
			<i class="fa fa-square"></i>
			<i class="fa fa-square-o"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half"></i>
			<i class="fa fa-star-half-empty"></i>
			<i class="fa fa-star-half-full"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-subscript"></i>
			<i class="fa fa-suitcase"></i>
			<i class="fa fa-sun-o"></i>
			<i class="fa fa-superscript"></i>
			<i class="fa fa-tablet"></i>
			<i class="fa fa-tachometer"></i>
			<i class="fa fa-tag"></i>
			<i class="fa fa-tags"></i>
			<i class="fa fa-tasks"></i>
			<i class="fa fa-terminal"></i>
			<i class="fa fa-thumb-tack"></i>
			<i class="fa fa-thumbs-down"></i>
			<i class="fa fa-thumbs-o-down"></i>
			<i class="fa fa-thumbs-o-up"></i>
			<i class="fa fa-thumbs-up"></i>
			<i class="fa fa-ticket"></i>
			<i class="fa fa-times"></i>
			<i class="fa fa-times-circle"></i>
			<i class="fa fa-times-circle-o"></i>
			<i class="fa fa-tint"></i>
			<i class="fa fa-toggle-down"></i>
			<i class="fa fa-toggle-left"></i>
			<i class="fa fa-toggle-right"></i>
			<i class="fa fa-toggle-up"></i>
			<i class="fa fa-trash-o"></i>
			<i class="fa fa-trophy"></i>
			<i class="fa fa-truck"></i>
			<i class="fa fa-umbrella"></i>
			<i class="fa fa-unlock"></i>
			<i class="fa fa-unlock-alt"></i>
			<i class="fa fa-unsorted"></i>
			<i class="fa fa-upload"></i>
			<i class="fa fa-user"></i>
			<i class="fa fa-users"></i>
			<i class="fa fa-video-camera"></i>
			<i class="fa fa-volume-down"></i>
			<i class="fa fa-volume-off"></i>
			<i class="fa fa-volume-up"></i>
			<i class="fa fa-warning"></i>
			<i class="fa fa-wheelchair"></i>
			<i class="fa fa-wrench"></i>
			<i class="fa fa-check-square"></i>
			<i class="fa fa-check-square-o"></i>
			<i class="fa fa-circle"></i>
			<i class="fa fa-circle-o"></i>
			<i class="fa fa-dot-circle-o"></i>
			<i class="fa fa-minus-square"></i>
			<i class="fa fa-minus-square-o"></i>
			<i class="fa fa-plus-square"></i>
			<i class="fa fa-plus-square-o"></i>
			<i class="fa fa-square"></i>
			<i class="fa fa-square-o"></i>
			<i class="fa fa-bitcoin"></i>
			<i class="fa fa-btc"></i>
			<i class="fa fa-cny"></i>
			<i class="fa fa-dollar"></i>
			<i class="fa fa-eur"></i>
			<i class="fa fa-euro"></i>
			<i class="fa fa-gbp"></i>
			<i class="fa fa-inr"></i>
			<i class="fa fa-jpy"></i>
			<i class="fa fa-krw"></i>
			<i class="fa fa-money"></i>
			<i class="fa fa-rmb"></i>
			<i class="fa fa-rouble"></i>
			<i class="fa fa-rub"></i>
			<i class="fa fa-ruble"></i>
			<i class="fa fa-rupee"></i>
			<i class="fa fa-try"></i>
			<i class="fa fa-turkish-lira"></i>
			<i class="fa fa-usd"></i>
			<i class="fa fa-won"></i>
			<i class="fa fa-yen"></i>
			<i class="fa fa-align-center"></i>
			<i class="fa fa-align-justify"></i>
			<i class="fa fa-align-left"></i>
			<i class="fa fa-align-right"></i>
			<i class="fa fa-bold"></i>
			<i class="fa fa-chain"></i>
			<i class="fa fa-chain-broken"></i>
			<i class="fa fa-clipboard"></i>
			<i class="fa fa-columns"></i>
			<i class="fa fa-copy"></i>
			<i class="fa fa-cut"></i>
			<i class="fa fa-dedent"></i>
			<i class="fa fa-eraser"></i>
			<i class="fa fa-file"></i>
			<i class="fa fa-file-o"></i>
			<i class="fa fa-file-text"></i>
			<i class="fa fa-file-text-o"></i>
			<i class="fa fa-files-o"></i>
			<i class="fa fa-floppy-o"></i>
			<i class="fa fa-font"></i>
			<i class="fa fa-indent"></i>
			<i class="fa fa-italic"></i>
			<i class="fa fa-link"></i>
			<i class="fa fa-list"></i>
			<i class="fa fa-list-alt"></i>
			<i class="fa fa-list-ol"></i>
			<i class="fa fa-list-ul"></i>
			<i class="fa fa-outdent"></i>
			<i class="fa fa-paperclip"></i>
			<i class="fa fa-paste"></i>
			<i class="fa fa-repeat"></i>
			<i class="fa fa-rotate-left"></i>
			<i class="fa fa-rotate-right"></i>
			<i class="fa fa-save"></i>
			<i class="fa fa-scissors"></i>
			<i class="fa fa-strikethrough"></i>
			<i class="fa fa-table"></i>
			<i class="fa fa-text-height"></i>
			<i class="fa fa-text-width"></i>
			<i class="fa fa-th"></i>
			<i class="fa fa-th-large"></i>
			<i class="fa fa-th-list"></i>
			<i class="fa fa-underline"></i>
			<i class="fa fa-undo"></i>
			<i class="fa fa-unlink"></i>
			<i class="fa fa-angle-double-down"></i>
			<i class="fa fa-angle-double-left"></i>
			<i class="fa fa-angle-double-right"></i>
			<i class="fa fa-angle-double-up"></i>
			<i class="fa fa-angle-down"></i>
			<i class="fa fa-angle-left"></i>
			<i class="fa fa-angle-right"></i>
			<i class="fa fa-angle-up"></i>
			<i class="fa fa-arrow-circle-down"></i>
			<i class="fa fa-arrow-circle-left"></i>
			<i class="fa fa-arrow-circle-o-down"></i>
			<i class="fa fa-arrow-circle-o-left"></i>
			<i class="fa fa-arrow-circle-o-right"></i>
			<i class="fa fa-arrow-circle-o-up"></i>
			<i class="fa fa-arrow-circle-right"></i>
			<i class="fa fa-arrow-circle-up"></i>
			<i class="fa fa-arrow-down"></i>
			<i class="fa fa-arrow-left"></i>
			<i class="fa fa-arrow-right"></i>
			<i class="fa fa-arrow-up"></i>
			<i class="fa fa-arrows"></i>
			<i class="fa fa-arrows-alt"></i>
			<i class="fa fa-arrows-h"></i>
			<i class="fa fa-arrows-v"></i>
			<i class="fa fa-caret-down"></i>
			<i class="fa fa-caret-left"></i>
			<i class="fa fa-caret-right"></i>
			<i class="fa fa-caret-square-o-down"></i>
			<i class="fa fa-caret-square-o-left"></i>
			<i class="fa fa-caret-square-o-right"></i>
			<i class="fa fa-caret-square-o-up"></i>
			<i class="fa fa-caret-up"></i>
			<i class="fa fa-chevron-circle-down"></i>
			<i class="fa fa-chevron-circle-left"></i>
			<i class="fa fa-chevron-circle-right"></i>
			<i class="fa fa-chevron-circle-up"></i>
			<i class="fa fa-chevron-down"></i>
			<i class="fa fa-chevron-left"></i>
			<i class="fa fa-chevron-right"></i>
			<i class="fa fa-chevron-up"></i>
			<i class="fa fa-hand-o-down"></i>
			<i class="fa fa-hand-o-left"></i>
			<i class="fa fa-hand-o-right"></i>
			<i class="fa fa-hand-o-up"></i>
			<i class="fa fa-long-arrow-down"></i>
			<i class="fa fa-long-arrow-left"></i>
			<i class="fa fa-long-arrow-right"></i>
			<i class="fa fa-long-arrow-up"></i>
			<i class="fa fa-toggle-down"></i>
			<i class="fa fa-toggle-left"></i>
			<i class="fa fa-toggle-right"></i>
			<i class="fa fa-toggle-up"></i>
			<i class="fa fa-arrows-alt"></i>
			<i class="fa fa-backward"></i>
			<i class="fa fa-compress"></i>
			<i class="fa fa-eject"></i>
			<i class="fa fa-expand"></i>
			<i class="fa fa-fast-backward"></i>
			<i class="fa fa-fast-forward"></i>
			<i class="fa fa-forward"></i>
			<i class="fa fa-pause"></i>
			<i class="fa fa-play"></i>
			<i class="fa fa-play-circle"></i>
			<i class="fa fa-play-circle-o"></i>
			<i class="fa fa-step-backward"></i>
			<i class="fa fa-step-forward"></i>
			<i class="fa fa-stop"></i>
			<i class="fa fa-youtube-play"></i>
			<i class="fa fa-ambulance"></i>
			<i class="fa fa-h-square"></i>
			<i class="fa fa-hospital-o"></i>
			<i class="fa fa-medkit"></i>
			<i class="fa fa-plus-square"></i>
			<i class="fa fa-stethoscope"></i>
			<i class="fa fa-user-md"></i>
			<i class="fa fa-wheelchair"></i>
		</div>
	';
}

?>