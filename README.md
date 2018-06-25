<h1>WPSSO REST API</h1>

<table>
<tr><th align="right" valign="top" nowrap>Plugin Name</th><td>WPSSO REST API</td></tr>
<tr><th align="right" valign="top" nowrap>Summary</th><td>WPSSO Core add-on to provide an array of meta tags and Schema markup in the WordPress REST API post, term and user queries.</td></tr>
<tr><th align="right" valign="top" nowrap>Stable Version</th><td>1.0.0</td></tr>
<tr><th align="right" valign="top" nowrap>Requires At Least</th><td>WordPress 4.7</td></tr>
<tr><th align="right" valign="top" nowrap>Tested Up To</th><td>WordPress 4.9.6</td></tr>
<tr><th align="right" valign="top" nowrap>Contributors</th><td>jsmoriss</td></tr>
<tr><th align="right" valign="top" nowrap>License</th><td><a href="https://www.gnu.org/licenses/gpl.txt">GPLv3</a></td></tr>
<tr><th align="right" valign="top" nowrap>Tags / Keywords</th><td>rest, api, rest api, meta tags, schema, markup</td></tr>
</table>

<h2>Description</h2>

<p style="margin:0;"><img class="readme-icon" src="https://surniaulula.github.io/wpsso-rest-api/assets/icon-256x256.png"></p>

<p>The WPSSO REST API add-on includes a <code>head</code> element in the WordPress REST API query result, to provide an <code>html</code> and <code>parts</code> array.</p>

<p>The <code>html</code> array includes the HTML formatted meta tags and Schema JSON-LD (aka LD+JSON) scripts, as they appear in the webpage head section.</p>

<p>The <code>parts</code> array offers the HTML meta tag attributes (aka "the parts") as individual arrays, making it easier and faster to extract the content of any meta tag.</p>

<p>There are no plugin settings &mdash; simply <em>download</em>, <em>install</em> and <em>activate</em>.</p>

<h3>WPSSO Core Plugin Prerequisite</h3>

<p>WPSSO REST API (aka WPSSO REST) is an add-on for the WPSSO Core plugin.</p>

<h3>An Example REST API Query Result</h3>

<pre class="lang:default decode:true " >{
  "id": 1031,
  "date": "2013-03-15T17:23:27",
  "date_gmt": "2013-03-15T22:23:27",
  "guid": {
    "rendered": "http://wptest.io/demo/?p=1031"
  },
  "modified": "2013-03-15T17:23:27",
  "modified_gmt": "2013-03-15T22:23:27",
  "slug": "tiled-gallery",
  "status": "publish",
  "type": "post",
  "link": "http://wptest.io/2013/03/15/tiled-gallery/",
  "title": {
    "rendered": "Tiled Gallery"
  },
  "content": {
    "rendered": "\n&lt;!-- wpsso schema image for pinterest pin it button --&gt;\n&lt;div class=\"wpsso-schema-image-for-pinterest\" style=\"display:none;\"&gt;\n&lt;img src=\"http://wptest.io/wp-content/uploads/2013/03/captain-america-800x1212.jpg\" width=\"0\" height=\"0\" style=\"width:0;height:0;\" data-pin-description=\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\" alt=\"\"/&gt;\n&lt;/div&gt;&lt;!-- .wpsso-schema-image-for-pinterest --&gt;\n\n&lt;p&gt;This is a test for Jetpack&amp;#8217;s Tiled Gallery.&lt;/p&gt;\n&lt;p&gt;You can install &lt;a title=\"Jetpack for WordPress\" href=\"http://jetpack.me/\" target=\"_blank\"&gt;Jetpack&lt;/a&gt; or &lt;a title=\"Slim Jetpack\" href=\"http://wordpress.org/extend/plugins/slimjetpack/\" target=\"_blank\"&gt;Slim Jetpack&lt;/a&gt; to test it out.&lt;/p&gt;\n\n\t\t&lt;style type='text/css'&gt;\n\t\t\t#gallery-1 {\n\t\t\t\tmargin: auto;\n\t\t\t}\n\t\t\t#gallery-1 .gallery-item {\n\t\t\t\tfloat: left;\n\t\t\t\tmargin-top: 10px;\n\t\t\t\ttext-align: center;\n\t\t\t\twidth: 25%;\n\t\t\t}\n\t\t\t#gallery-1 img {\n\t\t\t\tborder: 2px solid #cfcfcf;\n\t\t\t}\n\t\t\t#gallery-1 .gallery-caption {\n\t\t\t\tmargin-left: 0;\n\t\t\t}\n\t\t\t/* see gallery_shortcode() in wp-includes/media.php */\n\t\t&lt;/style&gt;\n\t\t&lt;div id='gallery-1' class='gallery galleryid-1031 gallery-columns-4 gallery-size-thumbnail'&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/fight-club/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/fight-club-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"Fight Club\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/fight-club-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/fight-club-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/fight-club-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/fight-club-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1038\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/spider-man/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/spider-man-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"The Amazing Spider Man\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/spider-man-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/spider-man-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/spider-man-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/spider-man-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1041\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/man-of-steel/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/man-of-steel-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"Man Of Steel\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/man-of-steel-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/man-of-steel-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/man-of-steel-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/man-of-steel-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1040\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/captain-america/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/captain-america-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"Captain America\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/captain-america-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/captain-america-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/captain-america-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/captain-america-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1261\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;&lt;br style=\"clear: both\" /&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/ironman-2/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/ironman-2-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"Iron Man 2\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/ironman-2-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/ironman-2-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/ironman-2-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/ironman-2-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1039\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;&lt;dl class='gallery-item'&gt;\n\t\t\t&lt;dt class='gallery-icon portrait'&gt;\n\t\t\t\t&lt;a href='http://wptest.io/2013/03/15/tiled-gallery/the-dark-knight-rises/'&gt;&lt;img width=\"150\" height=\"150\" src=\"http://wptest.io/wp-content/uploads/2013/03/the-dark-knight-rises-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail\" alt=\"The Dark Knight Rises\" srcset=\"http://wptest.io/wp-content/uploads/2013/03/the-dark-knight-rises-150x150.jpg 150w, http://wptest.io/wp-content/uploads/2013/03/the-dark-knight-rises-60x60.jpg 60w, http://wptest.io/wp-content/uploads/2013/03/the-dark-knight-rises-150x150@2x.jpg 300w, http://wptest.io/wp-content/uploads/2013/03/the-dark-knight-rises-60x60@2x.jpg 120w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-wp-pid=\"1042\" nopin=\"nopin\" /&gt;&lt;/a&gt;\n\t\t\t&lt;/dt&gt;&lt;/dl&gt;\n\t\t\t&lt;br style='clear: both' /&gt;\n\t\t&lt;/div&gt;\n\n&lt;p&gt;This is some text after the Tiled Gallery just to make sure that everything spaces nicely.&lt;/p&gt;\n",
    "protected": false
  },
  "excerpt": {
    "rendered": "&lt;p&gt;This is a test for Jetpack&amp;#8217;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.&lt;/p&gt;\n",
    "protected": false
  },
  "author": 21,
  "featured_media": 0,
  "comment_status": "open",
  "ping_status": "open",
  "sticky": false,
  "template": "",
  "format": "standard",
  "meta": [],
  "categories": [
    15,
    16,
    17
  ],
  "tags": [],
  "head": {
    "html": [
      "&lt;!-- generator:1 --&gt;&lt;meta name=\"generator\" content=\"WPSSO Core 4.5.3-dev.2/L\"/&gt;\n",
      "&lt;!-- generator:2 --&gt;&lt;meta name=\"generator\" content=\"WPSSO BC 1.1.4/F\"/&gt;\n",
      "&lt;!-- generator:3 --&gt;&lt;meta name=\"generator\" content=\"WPSSO JSON 1.28.2-dev.2/L\"/&gt;\n",
      "&lt;!-- generator:4 --&gt;&lt;meta name=\"generator\" content=\"WPSSO REST 1.0.0/F\"/&gt;\n",
      "&lt;!-- generator:5 --&gt;&lt;meta name=\"generator\" content=\"WPSSO UM 1.10.1/F\"/&gt;\n",
      "&lt;link rel=\"publisher\" href=\"https://plus.google.com/+SurniaUlula\"/&gt;\n",
      "&lt;link rel=\"shortlink\" href=\"http://wptest.io/?p=1031\"/&gt;\n",
      "&lt;meta property=\"og:url\" content=\"http://wptest.io/2013/03/15/tiled-gallery/\"/&gt;\n",
      "&lt;meta property=\"og:type\" content=\"article\"/&gt;\n",
      "&lt;meta property=\"og:locale\" content=\"en_US\"/&gt;\n",
      "&lt;meta property=\"og:site_name\" content=\"Surnia Ulula (Admin)\"/&gt;\n",
      "&lt;meta property=\"og:title\" content=\"Tiled Gallery\"/&gt;\n",
      "&lt;meta property=\"og:description\" content=\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\"/&gt;\n",
      "&lt;!-- og:image:1 --&gt;&lt;meta property=\"og:image\" content=\"http://wptest.io/wp-content/uploads/2013/03/captain-america-600x315.jpg\"/&gt;\n",
      "&lt;!-- og:image:1 --&gt;&lt;meta property=\"og:image:width\" content=\"600\"/&gt;\n",
      "&lt;!-- og:image:1 --&gt;&lt;meta property=\"og:image:height\" content=\"315\"/&gt;\n",
      "&lt;meta property=\"article:publisher\" content=\"https://www.facebook.com/SurniaUlulaCom\"/&gt;\n",
      "&lt;meta property=\"article:published_time\" content=\"2013-03-15T22:23:27+00:00\"/&gt;\n",
      "&lt;meta property=\"article:modified_time\" content=\"2013-03-15T22:23:27+00:00\"/&gt;\n",
      "&lt;meta property=\"og:updated_time\" content=\"2013-03-15T22:23:27+00:00\"/&gt;\n",
      "&lt;meta name=\"weibo:article:create_at\" content=\"2013-03-15 22:23:27\"/&gt;\n",
      "&lt;meta name=\"weibo:article:update_at\" content=\"2013-03-15 22:23:27\"/&gt;\n",
      "&lt;meta name=\"twitter:domain\" content=\"wptest.io\"/&gt;\n",
      "&lt;meta name=\"twitter:site\" content=\"@surniaululacom\"/&gt;\n",
      "&lt;meta name=\"twitter:title\" content=\"Tiled Gallery\"/&gt;\n",
      "&lt;meta name=\"twitter:description\" content=\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\"/&gt;\n",
      "&lt;meta name=\"twitter:card\" content=\"summary_large_image\"/&gt;\n",
      "&lt;meta name=\"twitter:image\" content=\"http://wptest.io/wp-content/uploads/2013/03/captain-america-600x909.jpg\"/&gt;\n",
      "&lt;meta name=\"author\" content=\"Jared Erickson\"/&gt;\n",
      "&lt;script type=\"application/ld+json\"&gt;{\"@id\":\"http://wptest.io/2013/03/15/tiled-gallery#id/blog.posting\",\"@context\":\"https://schema.org\",\"@type\":\"BlogPosting\",\"mainEntityOfPage\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"sameAs\":[\"http://wptest.io/?p=1031\"],\"name\":\"Tiled Gallery\",\"description\":\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"text\":\"This is a test for Jetpack's Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"inLanguage\":\"en_US\",\"datePublished\":\"2013-03-15T22:23:27+00:00\",\"dateModified\":\"2013-03-15T22:23:27+00:00\",\"publisher\":{\"@context\":\"https://schema.org\",\"@type\":\"Corporation\",\"url\":\"http://wptest.io\",\"name\":\"Surnia Ulula (Admin)\",\"description\":\"Computer Software Corporation\",\"logo\":{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"https://wpsso.com/wp-content/uploads/wpsso-text-banner-wide-600x60.png\",\"width\":600,\"height\":60},\"sameAs\":[\"https://www.facebook.com/SurniaUlulaCom\",\"https://plus.google.com/+SurniaUlula\",\"https://twitter.com/surniaululacom\"]},\"author\":{\"@context\":\"https://schema.org\",\"@type\":\"Person\",\"name\":\"Jared Erickson\"},\"image\":[{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"http://wptest.io/wp-content/uploads/2013/03/captain-america-800x1212.jpg\",\"name\":\"Captain America\",\"description\":\"Captain America\",\"fileFormat\":\"image/jpeg\",\"width\":800,\"height\":1212}],\"commentCount\":\"0\",\"headline\":\"Tiled Gallery\"}&lt;/script&gt;\n",
      "&lt;script type=\"application/ld+json\"&gt;{\"@id\":\"http://wptest.io/2013/03/15/tiled-gallery#id/breadcrumb.list/post-format-gallery\",\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"ItemList\",\"url\":\"http://wptest.io/category/post-format-gallery/\",\"sameAs\":[],\"name\":\"Gallery\",\"description\":\"Posts in this category test the gallery post format.\",\"mainEntityOfPage\":\"http://wptest.io/category/post-format-gallery/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"url\":\"http://wptest.io/2012/11/02/many-categories/\"}]}},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"BlogPosting\",\"mainEntityOfPage\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"sameAs\":[\"http://wptest.io/?p=1031\"],\"name\":\"Tiled Gallery\",\"description\":\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"text\":\"This is a test for Jetpack's Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"inLanguage\":\"en_US\",\"datePublished\":\"2013-03-15T22:23:27+00:00\",\"dateModified\":\"2013-03-15T22:23:27+00:00\",\"publisher\":{\"@context\":\"https://schema.org\",\"@type\":\"Corporation\",\"url\":\"http://wptest.io\",\"name\":\"Surnia Ulula (Admin)\",\"description\":\"Computer Software Corporation\",\"logo\":{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"https://wpsso.com/wp-content/uploads/wpsso-text-banner-wide-600x60.png\",\"width\":600,\"height\":60},\"sameAs\":[\"https://www.facebook.com/SurniaUlulaCom\",\"https://plus.google.com/+SurniaUlula\",\"https://twitter.com/surniaululacom\"]},\"author\":{\"@context\":\"https://schema.org\",\"@type\":\"Person\",\"name\":\"Jared Erickson\"},\"image\":[{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"http://wptest.io/wp-content/uploads/2013/03/captain-america-800x1212.jpg\",\"name\":\"Captain America\",\"description\":\"Captain America\",\"fileFormat\":\"image/jpeg\",\"width\":800,\"height\":1212}],\"commentCount\":\"0\",\"headline\":\"Tiled Gallery\"}}]}&lt;/script&gt;\n",
      "&lt;script type=\"application/ld+json\"&gt;{\"@id\":\"http://wptest.io/2013/03/15/tiled-gallery#id/breadcrumb.list/images\",\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"ItemList\",\"url\":\"http://wptest.io/category/images/\",\"sameAs\":[],\"name\":\"Images\",\"description\":\"Posts in this category test images in various ways.\",\"mainEntityOfPage\":\"http://wptest.io/category/images/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"url\":\"http://wptest.io/2013/03/15/featured-image-vertical/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":3,\"url\":\"http://wptest.io/2013/03/15/featured-image-horizontal/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":4,\"url\":\"http://wptest.io/2013/01/10/image-alignment/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":5,\"url\":\"http://wptest.io/2012/12/06/post-format-image-caption/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":6,\"url\":\"http://wptest.io/2012/12/05/post-format-image/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":7,\"url\":\"http://wptest.io/2012/11/02/many-categories/\"}]}},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"BlogPosting\",\"mainEntityOfPage\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"sameAs\":[\"http://wptest.io/?p=1031\"],\"name\":\"Tiled Gallery\",\"description\":\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"text\":\"This is a test for Jetpack's Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"inLanguage\":\"en_US\",\"datePublished\":\"2013-03-15T22:23:27+00:00\",\"dateModified\":\"2013-03-15T22:23:27+00:00\",\"publisher\":{\"@context\":\"https://schema.org\",\"@type\":\"Corporation\",\"url\":\"http://wptest.io\",\"name\":\"Surnia Ulula (Admin)\",\"description\":\"Computer Software Corporation\",\"logo\":{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"https://wpsso.com/wp-content/uploads/wpsso-text-banner-wide-600x60.png\",\"width\":600,\"height\":60},\"sameAs\":[\"https://www.facebook.com/SurniaUlulaCom\",\"https://plus.google.com/+SurniaUlula\",\"https://twitter.com/surniaululacom\"]},\"author\":{\"@context\":\"https://schema.org\",\"@type\":\"Person\",\"name\":\"Jared Erickson\"},\"image\":[{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"http://wptest.io/wp-content/uploads/2013/03/captain-america-800x1212.jpg\",\"name\":\"Captain America\",\"description\":\"Captain America\",\"fileFormat\":\"image/jpeg\",\"width\":800,\"height\":1212}],\"commentCount\":\"0\",\"headline\":\"Tiled Gallery\"}}]}&lt;/script&gt;\n",
      "&lt;script type=\"application/ld+json\"&gt;{\"@id\":\"http://wptest.io/2013/03/15/tiled-gallery#id/breadcrumb.list/jetpack\",\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"ItemList\",\"url\":\"http://wptest.io/category/jetpack/\",\"sameAs\":[],\"name\":\"Jetpack\",\"description\":\"Posts in this category test Jetpack features.\",\"mainEntityOfPage\":\"http://wptest.io/category/jetpack/\",\"itemListElement\":[{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":1,\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"url\":\"http://wptest.io/2012/12/02/post-format-video-videopress/\"},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":3,\"url\":\"http://wptest.io/2012/11/02/many-categories/\"}]}},{\"@context\":\"https://schema.org\",\"@type\":\"ListItem\",\"position\":2,\"item\":{\"@context\":\"https://schema.org\",\"@type\":\"BlogPosting\",\"mainEntityOfPage\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"url\":\"http://wptest.io/2013/03/15/tiled-gallery/\",\"sameAs\":[\"http://wptest.io/?p=1031\"],\"name\":\"Tiled Gallery\",\"description\":\"This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"text\":\"This is a test for Jetpack's Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.\",\"inLanguage\":\"en_US\",\"datePublished\":\"2013-03-15T22:23:27+00:00\",\"dateModified\":\"2013-03-15T22:23:27+00:00\",\"publisher\":{\"@context\":\"https://schema.org\",\"@type\":\"Corporation\",\"url\":\"http://wptest.io\",\"name\":\"Surnia Ulula (Admin)\",\"description\":\"Computer Software Corporation\",\"logo\":{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"https://wpsso.com/wp-content/uploads/wpsso-text-banner-wide-600x60.png\",\"width\":600,\"height\":60},\"sameAs\":[\"https://www.facebook.com/SurniaUlulaCom\",\"https://plus.google.com/+SurniaUlula\",\"https://twitter.com/surniaululacom\"]},\"author\":{\"@context\":\"https://schema.org\",\"@type\":\"Person\",\"name\":\"Jared Erickson\"},\"image\":[{\"@context\":\"https://schema.org\",\"@type\":\"ImageObject\",\"url\":\"http://wptest.io/wp-content/uploads/2013/03/captain-america-800x1212.jpg\",\"name\":\"Captain America\",\"description\":\"Captain America\",\"fileFormat\":\"image/jpeg\",\"width\":800,\"height\":1212}],\"commentCount\":\"0\",\"headline\":\"Tiled Gallery\"}}]}&lt;/script&gt;\n"
    ],
    "parts": [
      [
        "meta",
        "name",
        "generator",
        "content",
        "WPSSO Core 4.5.3-dev.2/L",
        "generator:1"
      ],
      [
        "meta",
        "name",
        "generator",
        "content",
        "WPSSO BC 1.1.4/F",
        "generator:2"
      ],
      [
        "meta",
        "name",
        "generator",
        "content",
        "WPSSO JSON 1.28.2-dev.2/L",
        "generator:3"
      ],
      [
        "meta",
        "name",
        "generator",
        "content",
        "WPSSO REST 1.0.0/F",
        "generator:4"
      ],
      [
        "meta",
        "name",
        "generator",
        "content",
        "WPSSO UM 1.10.1/F",
        "generator:5"
      ],
      [
        "link",
        "rel",
        "author",
        "href",
        "",
        ""
      ],
      [
        "link",
        "rel",
        "publisher",
        "href",
        "https://plus.google.com/+SurniaUlula",
        ""
      ],
      [
        "link",
        "rel",
        "shortlink",
        "href",
        "http://wptest.io/?p=1031",
        ""
      ],
      [
        "meta",
        "property",
        "fb:app_id",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "og:url",
        "content",
        "http://wptest.io/2013/03/15/tiled-gallery/",
        ""
      ],
      [
        "meta",
        "property",
        "og:type",
        "content",
        "article",
        ""
      ],
      [
        "meta",
        "property",
        "og:locale",
        "content",
        "en_US",
        ""
      ],
      [
        "meta",
        "property",
        "og:site_name",
        "content",
        "Surnia Ulula (Admin)",
        ""
      ],
      [
        "meta",
        "property",
        "og:title",
        "content",
        "Tiled Gallery",
        ""
      ],
      [
        "meta",
        "property",
        "og:description",
        "content",
        "This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.",
        ""
      ],
      [
        "meta",
        "property",
        "og:video",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "og:image",
        "content",
        "http://wptest.io/wp-content/uploads/2013/03/captain-america-600x315.jpg",
        "og:image:1"
      ],
      [
        "meta",
        "property",
        "og:image:width",
        "content",
        "600",
        "og:image:1"
      ],
      [
        "meta",
        "property",
        "og:image:height",
        "content",
        "315",
        "og:image:1"
      ],
      [
        "meta",
        "property",
        "og:image:cropped",
        "content",
        "0",
        "og:image:1"
      ],
      [
        "meta",
        "property",
        "og:image:id",
        "content",
        "1261",
        "og:image:1"
      ],
      [
        "meta",
        "property",
        "article:author",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "article:publisher",
        "content",
        "https://www.facebook.com/SurniaUlulaCom",
        ""
      ],
      [
        "meta",
        "property",
        "article:published_time",
        "content",
        "2013-03-15T22:23:27+00:00",
        ""
      ],
      [
        "meta",
        "property",
        "article:modified_time",
        "content",
        "2013-03-15T22:23:27+00:00",
        ""
      ],
      [
        "meta",
        "property",
        "article:expiration_time",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "article:section",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "article:tag",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "property",
        "og:updated_time",
        "content",
        "2013-03-15T22:23:27+00:00",
        ""
      ],
      [
        "meta",
        "property",
        "article:author:name",
        "content",
        "Jared Erickson",
        ""
      ],
      [
        "meta",
        "name",
        "schema:type:id",
        "content",
        "blog.posting",
        ""
      ],
      [
        "meta",
        "name",
        "schema:type:url",
        "content",
        "https://schema.org/BlogPosting",
        ""
      ],
      [
        "meta",
        "name",
        "schema:type:context",
        "content",
        "https://schema.org",
        ""
      ],
      [
        "meta",
        "name",
        "schema:type:name",
        "content",
        "BlogPosting",
        ""
      ],
      [
        "meta",
        "name",
        "weibo:article:create_at",
        "content",
        "2013-03-15 22:23:27",
        ""
      ],
      [
        "meta",
        "name",
        "weibo:article:update_at",
        "content",
        "2013-03-15 22:23:27",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:domain",
        "content",
        "wptest.io",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:site",
        "content",
        "@surniaululacom",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:title",
        "content",
        "Tiled Gallery",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:description",
        "content",
        "This is a test for Jetpack&amp;#039;s Tiled Gallery. You can install Jetpack or Slim Jetpack to test it out. This is some text after the Tiled Gallery just to make sure that everything spaces nicely.",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:creator",
        "content",
        "",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:card",
        "content",
        "summary_large_image",
        ""
      ],
      [
        "meta",
        "name",
        "twitter:image",
        "content",
        "http://wptest.io/wp-content/uploads/2013/03/captain-america-600x909.jpg",
        ""
      ],
      [
        "meta",
        "name",
        "author",
        "content",
        "Jared Erickson",
        ""
      ]
    ]
  },
  "_links": {
    "self": [
      {
        "href": "http://wptest.io/wp-json/wp/v2/posts/1031"
      }
    ],
    "collection": [
      {
        "href": "http://wptest.io/wp-json/wp/v2/posts"
      }
    ],
    "about": [
      {
        "href": "http://wptest.io/wp-json/wp/v2/types/post"
      }
    ],
    "author": [
      {
        "embeddable": true,
        "href": "http://wptest.io/wp-json/wp/v2/users/21"
      }
    ],
    "replies": [
      {
        "embeddable": true,
        "href": "http://wptest.io/wp-json/wp/v2/comments?post=1031"
      }
    ],
    "version-history": [
      {
        "href": "http://wptest.io/wp-json/wp/v2/posts/1031/revisions"
      }
    ],
    "wp:attachment": [
      {
        "href": "http://wptest.io/wp-json/wp/v2/media?parent=1031"
      }
    ],
    "wp:term": [
      {
        "taxonomy": "category",
        "embeddable": true,
        "href": "http://wptest.io/wp-json/wp/v2/categories?post=1031"
      },
      {
        "taxonomy": "post_tag",
        "embeddable": true,
        "href": "http://wptest.io/wp-json/wp/v2/tags?post=1031"
      }
    ],
    "curies": [
      {
        "name": "wp",
        "href": "https://api.w.org/{rel}",
        "templated": true
      }
    ]
  }
}</pre>


<h2>Installation</h2>

<h3 class="top">Install and Uninstall</h3>

<ul>
<li><a href="https://wpsso.com/docs/plugins/wpsso-rest-api/installation/install-the-plugin/">Install the WPSSO REST Add-on</a></li>
<li><a href="https://wpsso.com/docs/plugins/wpsso-rest-api/installation/uninstall-the-plugin/">Uninstall the WPSSO REST Add-on</a></li>
</ul>


<h2>Frequently Asked Questions</h2>

<h3 class="top">Frequently Asked Questions</h3>

<ul>
<li>None</li>
</ul>


<h2>Other Notes</h2>

<h3>Other Notes</h3>
<h3 class="top">Additional Documentation</h3>

<ul>
<li>None</li>
</ul>

