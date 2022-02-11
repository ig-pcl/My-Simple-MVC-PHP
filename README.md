# My Simple MVC PHP

This is a simple example of a MVC applications in PHP. It's a good example as a tutorial to get learn how MVC works in general.

MVC:

* **The Model** - Concerned with data for CRUD actions.
* **The View** - Concerned with appearance to show data.
* **The Controller** - Concerned with behaviour to make any controll we need.

# Structure
```
Your path
├─── controller
|		└─── ArticleController.php
├─── model
|		├─── AbstractModel.php
|		└─── Article.php
├─── view
|		└─── article
|				└─── indexView.php
|
├─── .htaccess
├─── index.php
└─── README.md
```

## Install

1- Download the repo and extract the source code into your `web` dir.
2- Change `$prefix` inside `index.php` according to your `web` path.
