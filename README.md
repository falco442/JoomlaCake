# Versions

* CakePHP version: 2.6.7
* Joomla version: 2.5.28

# Install

## Manual install

* Download the package
* Extract the package into an arbitrary subdirectory of your Joomla rootdir, example `joomla-root-dir/cake`

## Setup

The application is ready to interact with the Joomla database, inheriting all necessary (database, table prefix, db username and db password).

The user table is the Joomla's one, so it takes the `$useTable` and `$tablePrefix` variables once again.

If you want to change the global database configuration, you can edit `app/Config/database.php` and add another configuration, using the variable `$useDbConfig` in your models.

**Don't forget to change the `Security.salt` and `Security.cipherSeed` values in `app/Config/core.php`!!**

# How it works

## Login

The login is already provided, as the user->index function. You can execute your login either from your Joomla site (and after visite `http://your-joomla-site/your-cake-dir`) or from your CakePHP application. Both method work.

## Programming

You can program as you want, like it was a simple CakePHP application, with all MVC you want.


## Notes

The version of CakePHP I used is the 2.6.7


