=== User Submitted Posts ===

Plugin Name: User Submitted Posts
Plugin URI: https://perishablepress.com/user-submitted-posts/
Description: Enables your visitors to submit posts and images from anywhere on your site.
Tags: guest post, user post, anonymous post, frontend post, guest author,  frontend content, frontend post, frontend upload, generated content, guest blog, guest blogging, guest publish, guest upload, post sharing, post submission, public post, share posts, submit post, user generated, user submit, user submitted post, visitor post
Author: Jeff Starr
Author URI: https://plugin-planet.com/
Donate link: https://m0n.co/donate
Contributors: specialk
Requires at least: 4.1
Tested up to: 4.8
Stable tag: 20170801
Version: 20170801
Text Domain: usp
Domain Path: /languages
License: GPL v2 or later

Easily submit posts and images from the front-end of your site.



== Description ==

**The #1 Plugin for User-Generated Content!**

User Submitted Posts (USP) adds a frontend form via template tag or shortcode that enables your visitors to submit posts and upload images. Just add the following shortcode to any Post, Page, or Widget:

`[user-submitted-posts]`

That's all there is to it! Your site now can accept user generated content. Everything is super easy to customize via Plugin Settings page. 

The USP Form includes the following fields:

* Name
* URL
* Email
* Post Title
* Post Tags
* Anti-Spam/Captcha
* Post Category
* Post Content
* Image Upload

USP Form fields may be set as required, optional, or disabled. You can set the Post Status of submitted posts as "Draft", "Publish Immediately", or publish after some number of approved posts. 

USP also enables users to upload multiple images when submitting a post. You control the min/max number of images and the min/max number of images that may be submitted.

*User Submitted Posts is the first and best plugin for front-end content!*


**Features**

* NEW! Google reCAPTCHA :)
* Let visitors submit posts from anywhere on your site
* Option to set submitted images as WP Featured Images
* NEW! Option to require users to be logged in to use the form
* Option to use WP's built-in rich text editor for post content
* Use template tag or shortcode to display USP form anywhere
* Stops spam via input validation, captcha, and hidden field
* Optionally include post author, title, tags, images, and more
* Redirect user to any URL or current page after post submission
* Includes template tags to display & customize submitted posts
* Display submission form via WP Text (and other) widgets
* Client-side validation with [Parsley](http://parsleyjs.org/)
* HTML5 submission form with streamlined CSS styles
* Option to require unique post titles
* Use your own custom form template and stylesheet
* 35 action/filter hooks for advanced customization
* Make form fields optional or required
* Auto Display Custom Fields and Images
* Shortcode to display all submitted posts

USP is simple to use and built with clean code via the WP API :)


**More Features**

* Translated into 10 languages
* Regularly updated to stay current with WordPress
* Option to receive email alerts for new submitted posts
* Option to set logged-in username as submitted-post author
* Option to set logged-in user&rsquo;s URL as the submitted URL
* Option to set a default submission category via hidden field
* Option to disable loading of external JavaScript file
* Option to specify URL for targeted resource loading
* Multiple emails supported in email alerts
* NEW! Option to disable tracking of IP addresses
* NEW! Option to specify custom email alert subject
* NEW! Option to specify custom email alert message
* NEW! Option to submit posts as WP Posts or Pages


**Image Uploads**

* Optionally allow/require visitors to upload any number of images
* Specify minimum and maximum width and height for uploaded images
* Specify minimum and maximum allowed image uploads for each post
* Includes jQuery snippet for easy choosing of multiple images
* Automatically display submitted images


**Customization**

* Control which fields are displayed in the submission form
* Choose which categories users are allowed to select
* Assign submitted posts to any registered user
* Customizable success, error, and upload messages
* Plus options for the captcha, auto-publish, and redirect-URL
* Option to use classic form, HTML5 form, or disable only the stylesheet


**Post Management**

* Custom Fields saved w/ each post: name, IP, URL, and image URLs
* Set posts to any status: Draft, Pending, Publish, or Moderate
* One-click filtering of submitted posts on the Admin Posts page
* Includes template tags to display submitted images

Plus much more! Too many features to list them all :)

User Submitted Posts supports translation into any language. Current translations include:

	Russian             - usp-ru_RU
	Turkish             - usp-tr_TR
	Persian             - usp-fa_IR
	French              - usp-fr_FR
	Bengali             - usp-bn_BD
	German              - usp-de_DE
	Portuguese (Brazil) - usp-pt_BR
	Arabic (Argentina)  - usp-ar_AR
	Spanish (Spain)     - usp-es_ES
	Chinese (China)     - usp-zh_CN
	Serbian             - usp-sr_RS
	Hindi               - usp-hi_IN
	Punjabi             - usp-pa_IN
	Dutch               - usp-nl_NL
	Romanian            - usp-ro_RO
	Japanese            - usp-ja
	Polish              - usp-pl_PL
	Korean              - usp-ko_KR
	Italian             - usp-it_IT
	Hebrew              - usp-he_IL

Need a translation into your language? [Let me know!](https://perishablepress.com/contact/)


**Pro Version**

**USP Pro** now available at [Plugin Planet](https://plugin-planet.com/usp-pro/)!

Pro version includes many, many more features and settings, with unlimited custom forms, infinite custom fields, multimedia file uploads, and much more. [Check it out &raquo;](https://plugin-planet.com/usp-pro/)



== Installation ==

**Installation**

1. Upload the plugin to your blog and activate
2. Visit the USP settings to configure your options

[More info on installing WP plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)


**Usage**

To display the form on any WP Post or Page, add the shortcode:

	[user-submitted-posts]

Or, to display the form anywhere in your theme, add the template tag:

	<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>


**Customizing the form**

There are three main ways of customizing the form:

* Plugin settings, you can show/hide fields, configure options, etc.
* Custom form template (see "Custom Submission Form" for more info)
* By using USP action/filter hooks (advanced)

USP Hooks:

`Filters:
usp_post_status
usp_post_author
usp_form_shortcode
usp_mail_subject
usp_mail_message
usp_new_post
usp_input_validate
usp_require_login
usp_default_title

Actions:
usp_submit_success
usp_submit_error
usp_insert_before
usp_insert_after
usp_files_before
usp_files_after`

Check out the [complete list of action hooks for User Submitted Posts](https://perishablepress.com/action-filter-hooks-user-submitted-posts/)

More info about [WordPress Actions and Filters](http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters)


**Custom Submission Form**

Out of the box, User Submitted Posts provides a highly configurable submission form. Simply visit the plugin settings to control which fields are displayed, set the Challenge Question, configure submitted images, and much more. 

There are situations, however, where advanced form configuration may be required. In order to allow for this, USP makes it possible to create a custom submission form. Here are the steps:

First, copy these two plugin files:

	/user-submitted-posts/resources/usp.css
	/user-submitted-posts/views/submission-form.php

Then, paste those two files into a directory named `/usp/` in your theme:

	/wp-content/themes/your-theme/usp/usp.css
	/wp-content/themes/your-theme/usp/submission-form.php

Lastly, visit the plugin settings and change "Form style" to "Custom Form + CSS". You now may customize the two files as desired; they will not be overwritten when the plugin is updated. 

Alternately, you can set the option "Form style" to "HTML5 Form + Disable CSS" to use the default USP form along with your own CSS. FYI: here is a list of [USP CSS selectors](https://m0n.co/e). 

Or, to go further with unlimited custom forms, [check out USP Pro](https://plugin-planet.com/usp-pro/) :)



**Displaying submitted posts**

User-submitted posts are handled by WordPress as regular Posts. So they are displayed along with other posts according to your WP Theme. Additionally, each submitted post includes a set of Custom Fields that include the following information:

* `is_submission` - indicates that the post is a user-submitted post
* `user_submit_image` - the URL of the submitted image (one custom field per image)
* `user_submit_ip` - the IP address of the submitted-post author
* `user_submit_name` - the name of the submitted-post author
* `user_submit_url` - the submitted URL

There are numerous ways to display these Custom Fields. The easiest way is to visit the plugin settings and configure the options available under "Auto-Display Content". There you can enable auto-display of submitted email address, URL, and images. Note that submitted images also are uploaded to the WP Media Library.

For more flexibility, you can use a variety of WP Template Tags (e.g., [get_post_meta()](https://codex.wordpress.org/Function_Reference/get_post_meta)) to display Custom Fields. Here are some tutorials for more information:

* [WordPress Custom Fields, Part I: The Basics](https://perishablepress.com/wordpress-custom-fields-tutorial/)
* [WordPress Custom Fields, Part II: Tips and Tricks](https://perishablepress.com/wordpress-custom-fields-tips-tricks/)

And here are some tutorials that may help with custom display of submitted images:

* [Display all images attached to post](https://wp-mix.com/display-images-attached-post/)
* [Display images with links](https://wp-mix.com/display-images-with-user-submitted-posts/)

Also, here is a [Helper Plugin to display Custom Fields](https://plugin-planet.com/usp-pro-custom-field-helper-plugin/). It originally is designed for use with USP Pro, but also works great with the free version of USP.


**Auto Display Images**

To automatically display submitted images on the frontend, visit the plugin settings, "Images Auto-Display" and select whether to display the images before or after post content. Save changes.


**Featured Images**

To set submitted images as Featured Images (aka Post Thumbnails) for submitted posts, visit the plugin settings, "Image Uploads" and check the box to enable "Featured Image". Save changes.


**Shortcodes**

User Submitted Posts includes two shortcodes:

* `[user-submitted-posts]` - displays the form on any Post or Page
* `[usp_display_posts]` - displays list of all submitted posts

The `[user-submitted-posts]` shortcode does not have any attributes. You simply include it wherever you want to display the form.

The `[usp_display_posts]` shortcode has two optional attributes, "userid" and "numposts". Examples:

* `[usp_display_posts userid="1"]` : displays all submitted posts by registered user with ID = 1
* `[usp_display_posts userid="Pat Smith"]` : displays all submitted posts by author name "Pat Smith"
* `[usp_display_posts userid="all"]` : displays all submitted posts by all users/authors
* `[usp_display_posts userid="all" numposts="5"]` : limit to 5 posts

By default `[usp_display_posts]` displays all submitted posts by all authors. So the attributes can be used to customize as desired. Note that the Pro version of USP provides many more options for the [display-posts shortcode](https://plugin-planet.com/usp-pro-display-list-submitted-posts/).


**Template tags**

USP also includes a set of template tags for customizing and displaying submitted posts:

	/*
		Display the USP Form
		Usage: <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
	*/
	
	user_submitted_posts()
	
	
	
	/* 
		Check if post is a submitted post
		Returns true or false
		Usage: <?php if (usp_is_public_submission()) return true; ?>
	*/
	
	usp_is_public_submission()
	
	
	
	/* 
		Get all image URLs
		Returns an array of image URLs that are attached to the current submitted post
		Usage: <?php $images = usp_get_post_images(); foreach ($images as $image) echo $image; ?>
	*/
	
	usp_get_post_images()
	
	
	
	/* 
		Display all images
		Outputs a set of <img> tags for images attached to the current submitted post
		Usage: <?php usp_post_attachments($size, $beforeUrl, $afterUrl, $numberImages, $postId); ?>
		Parameters:
			$size         = image size: thumbnail, medium, large or full -> default = full
			$beforeUrl    = text/markup displayed before each image URL  -> default = <img src="
			$afterUrl     = text/markup displayed after each image URL   -> default = " />
			$numberImages = number of images to display for each post    -> default = false (display all)
			$postId       = an optional post ID to use                   -> default = uses global post
	*/
	
	usp_post_attachments()
	
	
	
	/* 
		Display submitted author name and URL
		This tag displays one of the following:
			- The author's submitted name as a link (if both 'User Name' and 'User URL' fields are included in the form)
			- The author's submitted name as plain text (if 'User Name' is included in the form, but 'User URL' is not included)
			- The author's registered username as a link to the author's post archive (if 'User Name' is not included in the form)
			
		Usage: <?php usp_author_link(); ?>
	*/
	
	usp_author_link()


These template tags should work out of the box when included in your theme template file(s). Keep in mind that for some of the tags to work, there must be some existing submitted posts and/or images available. 

The source code for these tags is located in `/library/template-tags.php`.


**Upgrades**

To upgrade User Submitted Posts, remove the old version and replace with the new version. Or just click "Update" from the Plugins screen and let WordPress do it for you automatically.

__Note:__ uninstalling the plugin from the WP Plugins screen results in the removal of all settings from the WP database. Submitted posts are NOT removed if you deactivate the plugin, reset default options, or uninstall the plugins; that is, all submitted posts must be removed manually.


**Restore Default Options**

To restore default plugin options, either uninstall/reinstall the plugin, or visit the plugin settings &gt; Restore Default Options.


**Uninstalling**

User Submitted Posts cleans up after itself. All plugin settings will be removed from your database when the plugin is uninstalled via the Plugins screen. Submitted posts are NOT removed if you deactivate the plugin, reset default options, or uninstall the plugins; that is, _all submitted posts must be removed manually_.


**Pro Version**

Pro version of USP now available! USP Pro includes many more awesome features and settings, with unlimited custom forms, infinite custom fields, multimedia file uploads, and much, much more.

* [Check out USP Pro for virtually limitless form-building action &raquo;](https://plugin-planet.com/usp-pro/) 
* [Read what users are saying about USP Pro &raquo;](https://plugin-planet.com/testimonials/)



== Upgrade Notice ==

To upgrade User Submitted Posts, remove the old version and replace with the new version. Or just click "Update" from the Plugins screen and let WordPress do it for you automatically.

__Note:__ uninstalling the plugin from the WP Plugins screen results in the removal of all settings from the WP database. Submitted posts are NOT removed if you deactivate the plugin, reset default options, or uninstall the plugins; that is, all submitted posts must be removed manually.



== Screenshots ==

1. USP Settings Screen (panels toggled closed)
2. USP Plugin Settings, showing default options (panels toggle open/closed)
3. USP Form (with all fields enabled)
4. USP Form (with just a few fields enabled)
5. Example showing how to display the form on a Page (using a shortcode)

More screenshots and infos available at the [USP Homepage](https://perishablepress.com/user-submitted-posts/)



== Frequently Asked Questions ==

**Can you add this feature or that feature?**

Please check the [Pro version of USP](https://plugin-planet.com/usp-pro/), which includes many of the most commonly requested features from users. The free version also may include new features in future updates.


**Images are not uploaded or displaying**

If everything is configured properly, USP will display submitted images on the front-end. If that is not happening, here are some things to check:

* Make sure that the setting "Images Auto-Display" is enabled
* And/or make sure that the setting "Featured Image" is enabled
* And/or make sure that your theme is set up to display submitted images

Assuming that everything is set up to display submitted images, here are some further things to check:

* Is there any error message when trying to submit an image? 
* Check that the submitted images are uploaded to the Media Library
* Check that the URL of the submitted image is attached to the submitted post as a Custom Field (on Edit Post screen)
* Check the permission settings on the upload folder(s) by ensuring that you can successfully upload image files directly via the Media Uploader
* Double-check that all the "Image Uploads" settings make sense, and that the images being uploaded meet the specified requirements

Note: when changing permissions on files and folders, it is important to use the least-restrictive settings possible. If you have to use more permissive settings, it is important to secure the directory against malicious activity. For more information check out: [Secure Media Uploads](https://digwp.com/2012/09/secure-media-uploads/)


**How to set submitted image as the featured image?**

Here are the steps:

1. Visit USP settings &gt; Options panel &gt; Image Uploads &gt; Featured Image
2. Check the box and click "Save Settings" to save your changes

Note that this setting merely assigns the submitted image as the Featured Image; it's up to your theme's single.php file to include `the_post_thumbnail()` to display the Featured Images. If your theme is not so equipped, [check out this tutorial at WP-Mix](https://wp-mix.com/set-attachment-featured-image/).


**How to require login?**

Visit the plugin settings and enable the option to "Require User Login". That will display the submission form only to logged-in users. To go further and require login for other types of content, there are many techniques available to you. For more information check out my WP-Mix post, [WordPress Require User Login](https://wp-mix.com/wordpress-require-user-login/), which provides a good summary of the possibilities. Also note: [USP Pro includes built-in shortcodes](https://plugin-planet.com/usp-pro-display-form-logged-in-users/) to display forms and other content to registered/logged-in users and/or guests/logged-out users.


**How do I change the appearance of the submission form?**

The easiest way to customize the form is via the plugin settings. There you can choose one of the following form configurations:

* HTML5 Form + Default CSS (Recommended)
* HTML5 Form + Disable CSS (Provide your own styles)
* Custom Form + Custom CSS (Provide your own form template & styles)

Additionally, you can configure the settings to show/hide specific fields, control the number and size of submitted images, customize the Challenge Question, and much more.

To go beyond what's possible with the plugin settings, USP enables creation of a custom submission form. To learn how, check out the "Custom Submission Form" section under [Installation](https://wordpress.org/plugins/user-submitted-posts/installation/). And for advanced customization, developers can use [USP action and filter hooks](https://perishablepress.com/action-filter-hooks-user-submitted-posts/).

Or, to go further with unlimited custom forms, [check out USP Pro](https://plugin-planet.com/usp-pro/) :)


**What about security and spam?**

User Submitted Posts uses the WordPress API to keep everything secure, fast, and flexible. The plugin also features Google reCAPTCHA, Challenge Question, and hidden anti-spam field to stop automated spam and bad bots.


**Can I include video?**

The free version of USP supports uploads of images only, but some hosted videos may be included in the submitted content (textarea) by simply including the video URL on its own line. See [this page](http://codex.wordpress.org/Embeds) for more info. Note that [USP Pro](https://plugin-planet.com/usp-pro/) enables users to [upload video and much more](https://plugin-planet.com/usp-pro-allowed-file-types/#file-formats).


**How do I reset the plugin settings? Will it erase all of my submitted posts?**

To reset plugin settings to factory defaults:

1. Visit "Restore Default Options" in the plugin settings
2. Check the box and save your changes
3. Deactivate the plugin and then reactivate it
4. Plugin settings now are restored to defaults

And no, restoring default settings does not delete any submitted posts. Even if you completely remove the plugin, the submitted posts will not be deleted. You have to remove them manually, if desired.


**How do I enable the "Add Media" button for all users (even if not registered)?**

Users must have sufficient capabilities to access the Media Library and the "Add Media" button. This is a security measure aimed at preventing foul play. The Pro version of USP provides an option to [enable Add Media uploads for all user levels](https://plugin-planet.com/usp-pro-enable-non-admin-users-upload-media/).


**Can you explain how the setting "Registered Username" works?**

When "Registered Username" is enabled:

* If the user is logged in, their registered username is used as the Post Author
* If the user is logged out, the setting "Assigned Author" is used as the Post Author
	
When "Registered Username" is disabled:

* The setting "Assigned Author" always is used as the Post Author for all users (whether logged in or not)


**How can I translate this plugin?**

Currently the easiest and most flexible method is to [use GlotPress to translate USP](https://translate.wordpress.org/projects/wp-plugins/user-submitted-posts). That is the recommended translation route going forward, but for the time being you may also translate using a plugin such as [Loco Translate](https://wordpress.org/plugins/loco-translate/). FYI, USP's translation files are located in the `/languages/` directory.


**Why am I not receiving the Email Alerts?**

Normally the plugin sends an Email Alert each time a post is submitted. If that is not happening in your case, you will need to troubleshoot your setup. Here is a guide on [Troubleshooting Email](https://perishablepress.com/email-troubleshooting-guide/) that should help.


**More FAQs**

Want to read some more FAQs? Check out the [USP FAQs at Perishable Press](https://perishablepress.com/faqs-user-submitted-posts/)


**Questions? Feedback?**

Send any questions or feedback via my [contact form](https://perishablepress.com/contact/). Thanks! :)



== Support development of this plugin ==

I develop and maintain this free plugin with love for the WordPress community. To show support, you can [make a cash donation](https://m0n.co/donate), [bitcoin donation](https://m0n.co/bitcoin), or purchase one of my books: 

* [The Tao of WordPress](https://wp-tao.com/)
* [Digging into WordPress](https://digwp.com/)
* [.htaccess made easy](https://htaccessbook.com/)
* [WordPress Themes In Depth](https://wp-tao.com/wordpress-themes-book/)

And/or purchase one of my premium WordPress plugins:

* [BBQ Pro](https://plugin-planet.com/bbq-pro/) - Pro version of Block Bad Queries
* [Blackhole Pro](https://plugin-planet.com/blackhole-pro/) - Pro version of Blackhole for Bad Bots
* [SES Pro](https://plugin-planet.com/ses-pro/) - Super-simple &amp; flexible email signup forms
* [USP Pro](https://plugin-planet.com/usp-pro/) - Pro version of User Submitted Posts

Links, tweets and likes also appreciated. Thanks! :)



== Changelog ==

**20170801**

* Adds new Post Type setting to choose between Posts and Pages
* Adds `%%post_content%%` and `%%post_author%%` shortcodes to Email Alerts
* Adds `%%author%%` shortcode to Auto-Display Images, Email, and URL
* Adds new filter hook, `usp_author_custom_field`
* Adds new filter hook, `usp_post_type`
* Fixes bug related to large file sizes
* Fixes bug related to optional post title
* Fixes bug related to optional email field
* Adds new/refreshed translations for Arabic, Chinese, French, Russian, Persian, German, Serbian, Romanian, Italian, Japanese, Hebrew, Hindi, Turkish, Korean, Polish, Bengali, Panjabi
* Regenerates default translation file
* Moves some FAQs to their own [dedicated post](https://perishablepress.com/faqs-user-submitted-posts/) at Perishable Press
* Moves older changelog items to their own dedicated file, `changelog.txt`, located in the plugin's root directory
* Updates GPL license blurb
* Adds GPL license text file
* Tests on WordPress 4.9 (alpha)

**20170531**

* Fixes bug with Google reCAPTCHA
* Adds localization to featured image variable
* Further tests on WordPress 4.8 (beta)

**20170326**

* Adds Google reCAPTCHA (anti-spam) field
* Adds function to clear form cookies if user logs out
* Adds new Arabic translation (Thanks to Abdeslam Lachhab)
* Adds new french translation by Milehan
* Improves plugin documentation
* Changes "USP" post-filter button to display for WP Posts
* Adds option to send HTML-format email alerts
* Fixes undefined variable notice for filter link
* Adds `%%title_parent%%` for auto-display images
* Adds `%%title%%` for auto-display email and url
* Adds class `.usp-submit` to submit button
* Fixes email validation bug when email optional
* Adds filter hook `usp_editor_content` for `wp_editor()`
* Adds filter hook `usp_return_form` for return link
* Adds fallback for `wp_add_inline_script` for WP &lt; 4.5
* Tweaks sanitization of post content to improve security
* Updates show support panel in plugin settings
* Reorders plugin action links
* Improves default options functionality
* Replaces global `$wp_version` with `get_bloginfo('version')`
* Adds option to customize the "From" email address for alerts
* Refines display of settings panels
* Adds new IP-detection script
* Generates new default translation template
* Tests on WordPress version 4.8

**Previous Changelog Info**

Previous changelog information is available in the `changelog.txt` file, located in the plugin's root directory.


