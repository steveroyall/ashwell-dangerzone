 <span class="boldtext">1. How do I installed eBusiness onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;eBusiness.&quot; Via ftp, upload the &quot;eBusiness&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to upload the plugin files. Inside the zip folder you downloaded there will be a folder named &quot;plugin.&quot; Within this folder are several other files and folders which need to be uploaded to your Wordpress plugins directory. This directory will be located at /public_html/blog/wp-content/plugins. Once you have the plugins uploaded you will need to activate them via your Wordpress control panel. Login to your wordpress admin area and click on the &quot;plugins&quot; link. Activate the following plugins: WP Page Navi</p> 
  <p>Next you need to select eBusiness and make it your default theme. Click on the design link, and under the themes tab locate eBusiness from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>eBusiness utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Name&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandwidth left) </p> 
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the eBusiness directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try following <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent">In this theme, the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located in the Photoshop Files/ folder, or by opening the logo PSD file located at Photoshop Files folder. Replace the edited logo with the old logo by placing it in the following directory: theme/eBusiness/images. If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/eBusiness.psd. You will notice that there are three folders within the Photoshop Files folder. Each of these correlates to one of the three eBusiness skins. You should open the folder that corresponds to the skin you are using, then look for the logo file that corresponds to the color scheme you are using. For example, if you are using the Radiate skin and the Blue color scheme you would want to open logo-Radiate-Blue.psd or logo-Radiate-Blue_blank.png. </div> 
 
<span class="boldtext">4. How do I manage advertisements on my blog? </span> 
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Appearances&quot; and then &quot;Current Theme Options&quot; to reveal the various theme options. </div> 
 
<span class="boldtext">5. How do I set up my homepage?</span> 
<div class="indent"> 
  <p>The homepage consists of two main elements, the Slider on the top of the page, and the &quot;page&quot; items that represent the main content of the page. Both of these are editable via the eBusiness theme options page. To edit the slider items you should customize the Homepage &gt;&gt; Slider 1/2/3 section of the theme options page.</p> 
  <p> To change what content appears in the main area of the homepage you should adjust the Page ID settings in the Homepage &gt;&gt; Main Options tab. For example, to change the content that appears on the top of the page next to the Recent News section you would want to edit the &quot;Content Area 1 Page ID&quot; field. This is where you input the page id of the page you want to be displayed in this area. You must first create a page in wp-admin, and then input the numerical ID of that page into the field. You can add up to 4 different pages on the homepage using the Homepage tab. </p> 
</div> 
 
<span class="boldtext">6. Using video in the homepage slider.</span> 
<div class="indent"> 
  <p>When adding video to the homepage slider there is one requirement. wmode="transparent" must be added to the &lt;embed&gt; tag. For example, if you copied the following embed code from vimeo:
  
  
  </p> 
  <p> &lt;embed src=&quot;<a target="_blank" href="http://vimeo.com/moogaloop.swf?clip_id=1084537&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1">http://vimeo.com/moogaloop.swf?clip_id=1084537&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1</a>&quot; type=&quot;application/x-shockwave-flash&quot; allowfullscreen=&quot;true&quot; allowscriptaccess=&quot;always&quot; width=&quot;400&quot; height=&quot;225&quot;&gt;&lt;/embed&gt; </p> 
  <p>you would need to change it to this:</p> 
  <p>&lt;embed src=&quot;<a target="_blank" href="http://vimeo.com/moogaloop.swf?clip_id=1084537&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1">http://vimeo.com/moogaloop.swf?clip_id=1084537&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1</a>&quot; <strong>wmode=&quot;transparent&quot;</strong> type=&quot;application/x-shockwave-flash&quot; allowfullscreen=&quot;true&quot; allowscriptaccess=&quot;always&quot; width=&quot;400&quot; height=&quot;225&quot;&gt;&lt;/embed&gt; </p> 
</div> 
 
<span class="boldtext">7. How do I set up my blog section?</span> 
<div class="indent"> 
  <p>If you are using the Page-Based structure you can still have a blog section. However, in order for your visitors to find it you will need to add a link to your blog section in the pages navigation bar. The first thing you should do is add a new category in wp-admin entitled &quot;Blog&quot; (or whatever you want to call it). Now that you have created the section you will need to add the URL to the section to the navigation bar. Go to the eBusiness Theme Options page and click the &quot;Navigation&quot; tab. Choose &quot;Enable&quot; in the &quot;Enable/Disable Blog Link&quot; field. Next paste the URL to your Blog section in the &quot;Input URL to Blog Category&quot; field. Finally you can customize the Text you want to be used in the navigation bar link by editing the &quot;Input Blog Link Text&quot; field. </p> 
</div> 
 
<span class="boldtext">8. How do I add the description bar to my Pages?</span> 
<div class="indent"> 
  <p>These are created using custom fields. When you create your page, scroll down below the text editor and you will see a custom fields section. Create a custom field with the Name &quot;Description&quot; (this is case sensitive) and a Value of what text you want to be placed within the description bar. </p> 
</div> 