# WordPress Project Skeleton

WordPress application skeleton is project template to use WordPress with composer and Git. This would be very helpful when developing WordPress project as a team or enterprise level.

## Installation

### Download or Clone

Download using "Download ZIP" option or clone the repository using one of the following command based on your references.

HTTPS:
`https://github.com/Shifrin/wp-skeleton.git`

SSH:
`git@github.com:Shifrin/wp-skeleton.git`

GitHub Cli:
`gh repo clone Shifrin/wp-skeleton`

### Install

Run composer install
`composer install`

### Configurations

You can find a `config.php` inside the config folder once composer installed finished, if not create one from the `config.sample.php`. And adjust configurations according to your environment.

Make sure `index.php` inside the public folder exists if not copy `index.php` from WordPress directory (`public/wp`) and fix the path of `wp-blog-header.php`.
