Laravel-Alfred-Extension
========================
I have not managed to get the alfred updater to work so you may be best 'watching' this repo for updates. 

This extension is for [Alfred](http://www.alfredapp.com/) and you require the [Powerpack](http://www.alfredapp.com/powerpack/).

With this extension you can create a new laravel project with the latest version of [laravel](http://laravel.com/) and run generator tasks with the generator by [Jeffrey Way](https://twitter.com/jeffrey_way).

<br>

Please download, delete the current extension and drag the 'laravel' folder into the extensions page of alfred. This version should allow support for the alfred extension updater.

##Instructions

####New Project
```laravel new project1```

This will create a directory called 'project1' in your sites directory and laravel will be installed there.
####Change Project
```laravel set project2```

If you have more than 1 project on the go you can switch between them using the 'set' command. Then you can run the generator commands below.

####Generator Commands
All of the following commands use the [laravel generator](https://github.com/jeffreyway/laravel-generator) by Jeffrey Way. So see the readme on that page for more info.

######Generate a controller
```laravel c controllername```
or 
```laravel controller controllername```
Will generate a contoller called controllername.

As we are using Jeffs generator you can doing the following
```laravel c admin index show edit```
and this will create methods for that controller like so:

```php
<?php 

class Admin_Controller extends Base_Controller 
{

	public function action_index()
	{

	}

	public function action_show()
	{

	}

	public function action_edit()
	{

	}

}
```

You can use the following in a similar fashion:

`laravel model item` or `laravel m item`

`laravel view item` or `laravel v item`

`laravel migration item` or `laravel mig item`

`laravel assets item` or `laravel a item`

`laravel test item` or `laravel t item`

`laravel resource item` or `laravel r item`

##Comments &amp; Suggestions

If you have any comments or suggestions for this extension the please comment on my [blog post](http://ashleyclarke.me/laravel-alfred-extension/) or log them as an issue here on git hub. Thanks.
