cassidy-cms
===========

A simple single page website CMS

Server Requirements
-------------------
Web Server (Apache, Nginx, Lighttpd, etc)
php < 5.3
gd php module

Installation
------------
1. Upload the archive file to your webserver
2. Unpack the archive file to the web directory where you want to run Cassidy
3. Edit inc/config.php with your desired settings
4. Change permissions on the cache directory so Cassidy can write to it. (0755
   should be fine)

Configuration
-------------
1. Add/remove articles in the article folder and change the numbering so they
   are in the order you want them rendered, ie. 01-about.html will be rendered
   first.
2. Edit the articles to your liking.
3. If you are using the gallery article or slideshow article, upload
   files to the "gallery" and "slides" directories respectively.

Create an Article Type
----------------------

You can easily create your own article types using the following syntax:

    <article id="article-type">
        { HTML & PHP STUFF HERE }
    </article>

Save this file as NN-article-type.php and place it into the article directory.
Replace "NN" with the order number you want the article to be displayed as.

File Structure
--------------

Cassidy uses the following file structure:

    /
    index.php
    /articles
        about.php
        ...
        contact.php
    /themes/{Theme Name}
        /css
        /js
        /images
    /inc
        config.php
        template.php
    /cache
