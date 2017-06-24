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

### Installing



```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc
