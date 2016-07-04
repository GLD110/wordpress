<?php
/**************************************************************
 *
 * Comment form Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/comment-form.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/


/////
if(post_password_required()){
	return;
}

// comment form
$args = array(
	'id_form'			=> 'commentform',
	'class_form'		=> 'comment-form',
	'id_submit'			=> 'submit',
	'class_submit'		=> 'submit',
	'name_submit'		=> 'submit',
	'title_reply'		=> __('<div id = "new-comment" class = "content-title">Write a Reply or a Comment</div>', 'truewordpress'),
	'title_reply_to'	=> __('<div id = "new-comment" class = "content-title">Write a Reply or a Comment to %s</div>', 'truewordpress'),
	'cancel_reply_link' => __('Cancel Reply', 'truewordpress'),
	'label_submit'		=> __('Post Comment', 'truewordpress'),
	'format'			=> 'xhtml',
	'comment_field'		=>	'												
		<div class = "form-group">
			<label for = "comment">'.__('Comment', 'truewordpress').' <span class = "required">*</span></label>
			<textarea id = "comment" name = "comment" class = "form-control" cols = "45" rows = "5" aria-required = "true"></textarea>
		</div>
	',
	'must_log_in'		=> '
		<p class = "must-log-in">' .
			sprintf(
				__('You must be <a href = "%s">logged in</a> to post a comment.', 'truewordpress'),
				wp_login_url(apply_filters('the_permalink', get_permalink()))
			).'
		</p>
	',
	'logged_in_as'		=> '
		<p class = "logged-in-as">' .
			sprintf(
				__('Logged in as <a href = "%1$s">%2$s</a>. <a href = "%3$s" title = "Log out of this account">Log out?</a>', 'truewordpress'),
				admin_url('profile.php'),
				$user_identity,
				wp_logout_url(apply_filters('the_permalink', get_permalink()))
			).'
		</p>
	',
	'comment_notes_before' => '
		<div class = "comment-notes">
			'.__('Your email address will not be published. Required fields are marked', 'truewordpress').'
		</div>
	',
	'comment_notes_after' => '
		<div class = "form-allowed-tags">' .
			sprintf(
				__('You may use these <abbr title = "HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'truewordpress'),
				' <code>'.allowed_tags().'</code>'
			).'
		</div>
	',
	'fields' => apply_filters('comment_form_default_fields', array(
		'author' => '<div class = "row"><div class = "col-md-12">
			<div class = "form-group col-sm-4">
				<label for = "author">'.__('Name', 'truewordpress').' '.($req? '<span class = "required">*</span>': '').'</label>
				<input type = "text" id = "author" name = "author" class = "form-control" value = "'.esc_attr($commenter['comment_author']).'" size = "30" '.$aria_req.'/>
			</div>
		',
		'email' => '
			<div class = "form-group col-sm-4">
				<label for = "email">'.__('Email', 'truewordpress').' '.($req? '<span class = "required">*</span>': '').'</label>
				<input type = "text" id = "email" name = "email" class = "form-control" value = "'.esc_attr($commenter['comment_author_email']).'" size = "30" '.$aria_req.'/>
			</div>
		',
		'url' => '
			<div class = "form-group col-sm-4">
				<label for = "url">'.__('Website', 'truewordpress').' '.($req? '<span class = "required">*</span>': '').'</label>
				<input type = "text" id = "url" name = "url" class = "form-control" value = "'.esc_attr($commenter['comment_author_url']).'" size = "30"/>
			</div>
		</div></div>'
	)),
);
comment_form($args);

?>