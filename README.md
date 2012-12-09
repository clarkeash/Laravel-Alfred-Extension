Laravel-Alfred-Extension
========================

***Just a note that I am working on a new version for Laravel 4***

This extension will now automatically update itself as of version 1.4
To check your version at any time run ```laravel version```


This extension is for [Alfred](http://www.alfredapp.com/) and you require the [Powerpack](http://www.alfredapp.com/powerpack/).

With this extension you can create a new laravel project with the latest version of [laravel](http://laravel.com/) and run generator tasks with the generator by [Jeffrey Way](https://twitter.com/jeffrey_way).
<br>

###Installation
If you are using an old version please delete that first then:

Download this repo and drag the laravel folder into the extensions tab of alfred preferences.

##Instructions
By default all new projects will be stored in the Sites directory inside your home folder. You may change this if you work from another directory. You use the following command 

```laravel directory path/to/directory/```

e.g. if you use MAMP you would do the following ```laravel directory /Applications/MAMP/htdocs/``` <b>This directory must end with a trailing slash!</b>


####New Project
```laravel new project1```

This will create a directory called 'project1' in your sites directory and laravel will be installed there.
####Change Project
```laravel project project2```

If you have more than 1 project on the go you can switch between them using the 'project' command. Then you can run the generator commands below.

You can run ```laravel project``` without a secondary command and that will tell you the current project.

You may also list all the laravel projects by running ```laravel list```.


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

####Migrations
After creating a migration with ```laravel mig item``` you will want to migrate it, you can do this by doing the following:

Firstly you need to setup the migrations table with ```laravel install```.

Then you can migrate your migration with ```laravel migrate```.

You can also rollback a migration at anytime with ```laravel rollback```.

####Artisan
This extension is mainly a wrapper that runs commands through artisan. If you need to run any other commands through artisan then you can do the following ```laravel artisan command```.

####The Editor
I have had a few requests to either change the editor or disable it when creating a new project.

I am looking into new editors but for now you can do ```laravel editordisable``` to disable it and ```laravel editorenable``` to enable it again.

##Comments &amp; Suggestions

If you have any comments or suggestions for this extension the please comment on my [blog post](http://ashleyclarke.me/laravel-alfred-extension/) or log them as an issue here on git hub. Thanks.
