# Plan

###Creating a new project

---
Command `l4 new project $$$`

* Check if directory $$$ already exists (yes then output error)
* clone laravel into $$$
* rm -rf .git folder (this is laravels history no good to us)
* chmod o+w storage dir
* update composer.json (add generator task)
* update app.php providers - link to generator task
* download composer
* run composer install
* set application key
* open in sublime

###Creating a controller
---

Command `l4 new controller $$$`

* Check if controller $$$ already exists
* Create new controller
	  
	
###Creating a model
---

Command `l4 new model $$$`

* Check if model $$$ already exists
* Create new model