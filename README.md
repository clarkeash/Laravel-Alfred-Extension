Laravel-Alfred-Extension
========================

This is the development section for v2 which will support laravel 4

Useage of this plugin assumes you have git & composer setup.

<br><br>
Planned Features:
==================
1. The basic functionality will be the same: download the latest version, set application key, make the storage directory writable etc.

2. It seems that tasks are being removed from L4, so the generator task that v1 takes advantage of in order to make creating migration, controllers etc easy will not be possible. Although this is not possible there are some features in L4 that help with just not as extensive so, some of the functionality of the generator task will be ported into the extension.

3. This extension will make use of git and composer when downloading a new project, so this will be a requirement of the system.

4. There will be the ability to set the default db settings (driver, host, username, password) and this will be set automatically and the db name can be set via the extension. (deafult can be overridden when setting up db)

5. As with the db settings, you will be able to have default mail settings stored.

6. …


As Laravel 4 is still in alpha, this feature list is very much subject to change. If you have any ideas of features then please create an issue on this branch.

Also when using composer it takes longer to download the laravel application, so I may store a copy of L4 and the run composer update so that the extension sets up a project faster.