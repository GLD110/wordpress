<?php
/**************************************************************
 *
 * Comments list Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 comments.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

/////
if(post_password_required()){
	return;
}

// show comments list
if(have_comments()){ ?>
	<div class = "comments-area">
		<div class = "content-title">
			<?php 
				printf(
					__('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'truewordpress'), 
					number_format_i18n(get_comments_number()), '<span>'.get_the_title().'</span>'
				);
			?>
		</div>
								
		<div class = "content-body">
			<!-- comment list -->
			<?php
				wp_list_comments(array(
					'style'		=> 'div.content-body',
					'format'	=> 'html5',
					'callback'	=> 'comments_list_template'
				));
			?>
			
			<!-- Are there comments to navigate through? -->
			<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
				<nav class="navigation comment-navigation" role="navigation">
					<h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'truewordpress'); ?></h1>
					<div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'truewordpress')); ?></div>
					<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'truewordpress')); ?></div>
				</nav>
			<?php endif; // Check for comment navigation ?>

			<?php if(!comments_open() && get_comments_number()) : ?>
				<p class="no-comments"><?php _e('Comments are closed.' , 'truewordpress'); ?></p>
			<?php endif; ?>

		</div>
	</div>

<?php }

// comment list template
function comments_list_template($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;

    switch($comment->comment_type):
        case 'pingback':
			break;
        case 'trackback': ?>
            <article <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
				<div class="back-link"><?php comment_author_link(); ?></div>
			</article>
        <?php break;
        default : ?>
			<article id = "comment-<?php comment_ID(); ?>" class = "comment-items after-clear comment-depth-<?php echo ($depth - 1); ?>">
				<div class = "comment-user">
					<?php echo get_avatar($comment, 100); ?>
				</div>
				<div class = "comment-inner">
					<div class = "comment-header">
						<div class = "comment-author"><a href = "<?php the_author_url(); ?>"><?php comment_author(); ?></a></div>
						<time <?php comment_time('c'); ?> class="comment-date"><?php comment_date(); ?> <?php comment_time(); ?></time>
						<?php 
							comment_reply_link(array_merge($args, array(
								'reply_text' => __('<i class = "fa fa-reply"></i> Reply', 'truewordpress'),
								'depth' => $depth,
								'max_depth' => $args['max_depth'] 
							))); 
						?>						
					</div>
					<div class = "comment-text">
						<p><?php comment_text(); ?></p>
					</div>
					<?php edit_comment_link(__('[Edit]', 'truewordpress'), '<div class = "edit-link">', '</div>'); ?>
				</div>
			</article>
        <?php // End the default styling of comment
        break;
    endswitch;
}
?>

		