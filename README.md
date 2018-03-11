# Worthem

Worthem is a boiler-plate for developing wordpress themes
fast without and tries to limit the time spending up the environment.

## Getting Started

Worthem is build on-top of some dependencies which are required
in order for it to work.
### Prerequisites [PHP]
We will work with [Composer](https://getcomposer.org/) as our dependency manager.

Create a new project in direct into into it and run
```
composer init
```
Follow the guidelines to create the new project. When done,
open the newly created file *composer.json* and insert the
following lines which will add [WordPress Core Installer](https://github.com/johnpbloch/wordpress-core-installer) to the dependencies.
```
"require": {
    "php": ">=5.5",
	"johnpbloch/wordpress-core-installer": "~0.2",
	"johnpbloch/wordpress-core": "dev-master"
},
"extra" : {
    "installer-paths" : {
        "wordpress/wp-content/plugins/{$name}/" : ["type:wordpress-plugin"],
        "wordpress/wp-content/themes/{$name}/" : ["type:wordpress-theme"]
    }
}
```

Save and run

```
composer install
```
### Prerequisites [JS]
We will work with[NPM](https://www.npmjs.com/) as our dependency manager.

Begin by installing [NPM](https://github.com/JeffreyWay/laravel-mix) through NPM or Yarn, and then copying the example Mix file to your project root.
```bash
mkdir my-app && cd my-app
npm init -y
npm install laravel-mix --save-dev
cp -r node_modules/laravel-mix/setup/webpack.mix.js ./
```

You should now have the following directory structure:

* `node_modules/`
* `package.json`
* `webpack.mix.js`


`webpack.mix.js` is your configuration layer on top of webpack. Most of your time will be spent here.

Head over to your webpack.mix.js file:

```js
let mix = require('laravel-mix');

mix.js('src/app.js', 'dist')
   .sass('src/app.scss', 'dist')
   .setPublicPath('dist');
```

Take note of the source paths, and create the directory structure to match \(or, of course, change them to your preferred structure\). You're all set now. Compile everything down by running `node_modules/.bin/webpack` from the command line. You should now see:

* `dist/app.css`
* `dist/app.js`
* `dist/mix-manifest.json` (Your asset dump file, which we'll discuss later.)

Nice job! Now get to work on that project.

#### NPM Scripts

As a tip, consider adding the following NPM scripts to your `package.json` file, to speed up your workflow. Laravel installs will already include this.

```js
  "scripts": {
    "dev": "NODE_ENV=development webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
    "watch": "NODE_ENV=development webpack --watch --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
    "hot": "NODE_ENV=development webpack-dev-server --inline --hot --config=node_modules/laravel-mix/setup/webpack.config.js",
    "production": "NODE_ENV=production webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
  }
```
