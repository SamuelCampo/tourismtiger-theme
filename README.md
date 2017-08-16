# Tourism Tiger 2
> Tourism Tiger 2 for use as a starting template for building custom Wordpress sites. Uses pre-processor LESS, HTML5, jQuery, and Gulp for all processing tasks. Syncs changes across local development devices with BrowserSync. 

![](screenshot.png)

## Installation for Production
1. Load [GitHub Updater](https://github.com/afragen/github-updater/wiki/Installation). That plugin allows you to update the theme to the latest version.
2. Go to WP Dashboard -> Settings -> GitHub Updater -> Install Theme 
3. Fill the link of this repository to *Theme URI* field and press Install Theme button.

## Developer's environment
> Requirements: Node.js

### Prepare Back-end side
1. Prepare local web-server based on PHP. 
2. Set up Database.
3. Install [the latest version](https://wordpress.org/download/) of Wordpress.
4. Finish Wordpress installation through your browser.


### Prepare Front-end side
1. Install the latest version of the theme. Run following commands in your terminal.
```
$ cd path/to/root/wp-content/themes # go to wordpress themes directory
$ mkdir tourismtiger-theme && cd tourismtiger-theme # create and enter to the theme's directory
$ git init && git remote add origin https://github.com/Dzvonkevich/tourismtiger-theme.git # add remote repository
$ git pull origin master # get the latest version of the theme
```
2. Create and switch to your branch. Forbitten make commits to master branch!
```
$ git checkout -b name-of-your-branch 
```
3. Install Gulp dependences. 
```
$ npm install
```
4. Install Bower dependences. 
```
$ bower install
```
4. Check the build command. 
```
$ gulp
```
> If command _gulp_ works, dev-envinroment was set up successful. 

### List of Gulp tasks
Terminal commands | Description
------------ | -------------
`$ gulp` | run `build` task as default
`$ gulp build` | handle less, javascript, images and fonts sources, and move from ./src/ to ./assets/
`$ gulp build-watch` | run `build` and run `build again when something is changed`
`$ gulp build-webserver` | same as `build-watch` + open the site in you browser and reload it automatically
`$ gulp deploy --b "branch-name" --c "commit name"` | re-build project, commit and push it to repository. usage example. It's similar to `gulp && git add --all && git commit -m "commit name" && git push origin branch-name`
