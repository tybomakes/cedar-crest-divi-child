This is a child theme produced by the Elegant Market Place child theme maker. It is solely produced to work with the Divi theme by Elegant Themes.

In this version:

-additional Social Icons for the header and footer can be optionally added to the four icons now controlled by the Divi theme. These additional icons are controlled within the Theme Customizer and Divi Theme Options->General in WP Admin.

To add addtional Social Icons to those offered in this child theme, the includes/social_icons.php can be edited by inserting additional code to that now appearing in this file. As an example, insert the following (depicted between dashed lines) at a location of your choosing. DO NOT INCLUDE DASHED LINES:

<?php endif; ?>
---------------------------------------------------------------------------------------------
	<li class="et-social-icon et-social-newsocial">
		<a href="#" class="icon">
			<span>New Social</span>
		</a>
	</li>
---------------------------------------------------------------------------------------------
<?php if ( 'on' === et_get_option( 'divi_show_tumblr_icon', 'on' ) ) : ?>


Substitute "newsocial" and "New Social" with appropriate naming. You will also need to create needed CSS to display the icon of choice. Currently, all social icons as displayed in this context are font glyphs. There are glyphs within the Divi Module font library that are not currently utilized in this context. You may choose from the following:

Tumbleupon	\e098
Wordpress	\e099
DeviantArt	\e09f
Share		\e0a0
Picassa		\e0a4
GoogleDrive	\e0a5
Blogger		\e0a7
Spotify		\e0a8
Delicious	\e0a9

To use any of the above, you'll need to insert the following and change "newsocial" to match what you've added above. Insert in this child theme's style.css file or anyother convenient custom css panel.

.et-social-newsocial a.icon:before {
	content: "\e0xx";
}