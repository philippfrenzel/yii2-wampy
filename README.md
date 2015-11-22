# yii2-wampy

Yii2 Asset wrapper for: https://github.com/KSDaemon/wampy.js/

wampy is a websocket client lib in jquery comparable to autobahnJS. The usage is personally a little bit easier, so I prefered to use this instead of autobahnJS. 

Installation
============
Package is although registered at packagist.org - so you can just add one line of code, to let it run!

add the following line to your composer.json require section:
```json
  "philippfrenzel/yii2-wampy":"*",
```

And ensure, that you have the follwing plugin installed global:

> php composer.phar global require "fxp/composer-asset-plugin:~1.1.0"

Changelog
---------

29-11-2014 Updated to latest 2.2.3 Version of the library

Usage
=====

After adding it to you composer.json, you should be able to just add assets;)
