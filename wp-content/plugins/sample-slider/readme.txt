=== Sample Slider ===
Contributors: mitali.cyrus
Donate link: http://example.com/
Tags: sample, slider, responsive, jQuery, carousel, banner, full-width
Requires at least: 3.4
Tested up to: 3.6
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Very basic shortcode based plugin.


== Description ==

This plugin is just a wordpress integration for Slides JS plugin (http://www.slidesjs.com/). It has a very simple markup. You can embed it in your post/page using simple shortcodes [sample_slider]<img src="your_url/image.png">[/sample_slider]

There are more features yet to come. Looking forward to your contructive feedback. Thank you.

Rightnow its not that customizable. See 'screenshots' for an idea about how it will look. Someone fairly familiar with CSS can edit the looks as they please. We are working to make it as easy to use as possible.

For now:
<ul>
<li>You can create a slider, with navigation and bullets as shown in screenshots</li>
<li>Slider Does not Start Automatically</li>
<li>Height is not customizable</li>
<li>It adapts to the width of the parent element, thus full width depending on where you use it</li>
<li>Any number of images can be added to slidshow</li>
<li>You can use it in Themes files as well - you just have to use the code below:<br>
&lt;?php <br>
$imgs='&lt;img src="some_url'&gt;&lt;img src="some_other_url"&gt;';<br>
echo do_shortcode('[sample_slider]'.$imgs.'[/sample_slider]'); <br>?&gt;
</li>
</ul>

###TESTING:#
<ul>
<li>Google Chrome (So far so good)</li>
<li>Wordpress 3.5 and 3.6 (So far so good)</li>
<li>Wordpress 3.4 (Testing in progress)</li>
</ul>

Well i dont own the Slide JS, only this integration is mine to say. Well, just so you know,
SlidesJS is licensed under the [Apache license](http://www.apache.org/licenses/LICENSE-2.0). Copyright 2013 [Nathan Searles](http://nathansearles.com/). All rights reserved.

== Installation ==

If you are installing it using your wordpress installation:
<ol>
<li> Go to Plugins > Add New > Search "Sample Slider"</li>
<li> Install Now</li>
<li> Activate</li>
<li> Go to Settings > Sample</li>
<li> read the Instructions.</li>
</ol>

If you are downloading it in Zip (compressed) format then 
<ol>
 <li> You can upload it to your wordpress installation</li>
 or
 <li>Directly go to your_wordpress_installtion_directory/wp-content/plugins/ and extract it there. In the end you should get something like this : you_wp_installation/wp-content/plugins/sample-slider</li>
 </ol>


After Installing it, Check Settings > Sample (in your Admin Dashboard) for plugin implementation instruction. Its pretty simple and basic. Still, if you get stuck, feel free to leave a message at the support forum. I'll be happy to help. 

== Frequently Asked Questions ==
None Yet

== Screenshots ==

1. The final result
2. How the code will look in the text editor of your newly created page/post. Note: The colours are used only to make the lines of code distinct.

== Upgrade Notice ==
NO upgrades Yet

== Changelog ==

= 0.1 =
* Fixed some style bugs in pagination.