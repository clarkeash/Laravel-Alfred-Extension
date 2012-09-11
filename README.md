<pre>
   __                           _                                       
  / /  __ _ _ __ __ ___   _____| |                                      
 / /  / _` | '__/ _` \ \ / / _ \ |                                      
/ /__| (_| | | | (_| |\ V /  __/ |                                      
\____/\__,_|_|  \__,_| \_/ \___|_|                                      
                                                                        
   _   _  __              _     __      _                 _             
  /_\ | |/ _|_ __ ___  __| |   /__\_  _| |_ ___ _ __  ___(_) ___  _ __  
 //_\\| | |_| '__/ _ \/ _` |  /_\ \ \/ / __/ _ \ '_ \/ __| |/ _ \| '_ \ 
/  _  \ |  _| | |  __/ (_| | //__  >  <| ||  __/ | | \__ \ | (_) | | | |
\_/ \_/_|_| |_|  \___|\__,_| \__/ /_/\_\\__\___|_| |_|___/_|\___/|_| |_|
                                                                                                                                                                                                                                                                 
</pre>
More Info: http://ashleyclarke.me/laravel-alfred-extension/

Download extension via the [downloads tab](https://github.com/clarkeash/Laravel-Alfred-Extension/downloads).

##Instructions

####New Project
<pre>laravel new project1</pre>

This will create a directory called 'project1' in your sites directory and laravel will be installed there.
####Change Project
```bash
	laravel set project2
```

If you have more than 1 project on the go you can switch between them using the 'set' command. Then you can run the generator commands below.

####Generator Commands
All of the following commands use the [laravel generator](https://github.com/jeffreyway/laravel-generator) by Jeffrey Way. So see the readme on that page for more info.

######Generate a controller
```bash
	laravel c controllername
```

or

```bash
	laravel controller controllername
```

Will generate a contoller called controllername.

As we are using Jeffs generator you can doing the following

```bash
	laravel c admin index show edit
```

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
