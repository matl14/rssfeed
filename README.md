RSS wrapper
==========
This repository is an RSS-wrapper around SimplePie, which is used to display RSS-feeds. The main focus of this repo is using the module with Anax-MVC,  https://github.com/mosbth/Anax-MVC.


How to install
-------------
You can install it using composer as such:
```
"require": {
    "matl14/rssfeed": "dev-master"
},
```
How to use
-----------------------
If you are using this feed with Anax-MVC you can use it as following with your index.php:
```
$app->router->add('rss', function() use ($app) {

    require '../vendor/matl14/rss/src/library/CRSS.php';
    $feed = new \matl14\library\CRSS([
            'http://feeds.reuters.com/news/reutersmedia'
            'http://www.irishtimes.com/cmlink/news-1.1319192',
            'http://www.smhi.se/weatherSMHI2/varningar/smhi_alla_varningar.xml',
            'http://www.independent.ie/breaking-news/irish-news/'
    ]);
    
    $app->theme->setTitle("RSS");    
    $app->views->add('default/page', [
        'title' => 'RSS',        
        'content' => $feed->printFeed(),
    ]);

});

```
This will result in tapping into a feed from reuters.com and displaying the feed.

How to style
---------------------------
If you want to style the rss-feed you can for example style it like this:
```
div.rss {
	width: 700px;
}
.smaller{
	font-size: smaller;
}
```


