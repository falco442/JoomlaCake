# Introduction

This application is a modified version of CakePHP 2.6.7. It allows to use CakePHP as an application inside Joomla, in a subdirectory of Joomla root folder. 

It takes the same users of Joomla users database table, and (by default) allows only to logged in users in Joomla to do anything.

Also allows to perform login either from Joomla, or from CakePHP itself, with the option “Remember me”.


# Version notes

* CakePHP version: 2.6.7
* Joomla version: 2.5.28

# Install

## Manual install

* Download the package
* Extract the package into an arbitrary subdirectory of your Joomla rootdir, example `joomla-root-dir/cake`

## Using Git

* Go to your Joomla root directory
* use the command `git clone https://github.com/falco442/JoomlaCake.git`

## Setup

The application is ready to interact with the Joomla database, inheriting all necessary (database, table prefix, db username and db password).

The database configuration for User model is already provided, reading automatically the `configuration.php` in the root folder of your Joomla installation.

The user table is the Joomla's one, so the User model use the `$joomla` configuration in `app/Config/database.php`.

If you want to add the default database configuration, you can edit `app/Config/database.php` and add another configuration.

**Don't forget to change the `Security.salt` and `Security.cipherSeed` values in `app/Config/core.php`!!**

# How it works

## Login

The login function (and view) is already provided, as the user->index function. You can execute your login either from your Joomla site (and after visite `http://your-joomla-site/your-cake-dir`) or from your CakePHP application. Both method work.

## Programming

You can program as you want, like it was a simple CakePHP application, with all MVC you want.


## Notes

* The version of CakePHP I used is the 2.6.7
* This application allows all logged in users to do anything. Be careful.


