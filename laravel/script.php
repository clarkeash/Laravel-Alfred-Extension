<?php
$query = $argv[1];
$value = explode(" ", $query, 2);
//$sec = $value[1];
$sec = str_replace("\\", "", $value[1]);
$cmd = str_replace("\\", "", $value[0]);
//shell_exec("cd ~/Sites/$sec ; ");
switch ($cmd) {
	//setup new project
	case 'new':
		if(!empty($sec)){
			fwrite(fopen('tmp.txt','w'), json_encode($sec));
			shell_exec("cd ~/Sites && mkdir $sec && cd $sec");
			shell_exec("cd ~/Sites/$sec ; curl -silent -L https://github.com/laravel/laravel/zipball/master > laravel.zip ; unzip -qq laravel.zip ; rm laravel.zip ; cd *-laravel-* ; mv * .. ; cd .. ; rm -R *-laravel-*");
			shell_exec("cd ~/Sites/$sec ; chmod -R o+w storage;");
			shell_exec("cd ~/Sites/$sec ; curl https://raw.github.com/JeffreyWay/Laravel-Generator/master/generate.php > application/tasks/generate.php");
			shell_exec("cd ~/Sites/$sec ; curl https://raw.github.com/gist/3693377/506ede69c059fa8df1cfc10f72847bc740ec79f1/application.php > application/config/application.php");
			shell_exec("cd ~/Sites/$sec ; php artisan key:generate");
			shell_exec("cd ~/Sites/$sec ; /Applications/Sublime\ Text\ 2.app/Contents/SharedSupport/bin/subl .");
			echo "Your new project has been created!";
		} else {
			echo "Please enter a project directory!";
		}
	break;

	//generate controller
	case 'c':
	case 'controller':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:controller $sec");
			echo "Success!";
		}
	break;


	//generate model
	case 'm':
	case 'model':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:model $sec");
			echo "Success!";
		}
	break;


	//generate view
	case 'v':
	case 'view':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:view $sec");
			echo "Success!";
		}
	break;


	//generate migration
	case 'mig':
	case 'migration':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:migration $sec");
			echo "Success!";
		}
	break;


	//generate assets
	case 'a':
	case 'assets':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:assets $sec");
			echo "Success!";
		}
	break;


	//generate test
	case 't':
	case 'test':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:test $sec");
			echo "Success!";
		}
	break;


	//generate resource
	case 'r':
	case 'resource':
		$dir = json_decode(file_get_contents('tmp.txt'));
		if(empty($dir)){
			echo "No directory set, use the 'project' command";
		}else{
			shell_exec("cd ~/Sites/$dir ; php artisan generate:resource $sec");
			echo "Success!";
		}
	break;


	//get and set the current project directory
	case 'set': //legacy command
	case 'p':
	case 'project':
		//if no parameter is set show current project
		if(empty($sec)){
			$dir = json_decode(file_get_contents('tmp.txt'));
			if(empty($dir)){
				echo "No directory set, use the 'project' command";
			}else{
				echo "Current directory is set to '$dir'";
			}
		//else set a dir, allows changing of projects
		}else{
			fwrite(fopen('tmp.txt','w'), json_encode($sec));
			echo "Directory set to $sec";
		}
	break;


	//list laravel projects
	case 'l':
	case 'list':
		$dir = json_decode(file_get_contents('tmp.txt'));
		//returns all directories containing a "laravel" directory
		$output = shell_exec("cd ~/Sites ; du -d 2 | grep 'laravel' | awk '{print $2}'");
		$output = str_replace('./', '', $output);
		$output = str_replace('/laravel', '', $output);
		echo 'Available projects: '.$output;
	break;

	//--------------------------//
	default:
		# code...
		break;
}
