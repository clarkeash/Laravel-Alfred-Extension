Laravel-Alfred-Extension
========================

More Info: http://ashleyclarke.me/laravel-alfred-extension/

Download extension via the [downloads tab](https://github.com/clarkeash/Laravel-Alfred-Extension/downloads).

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
