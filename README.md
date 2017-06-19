# WP Template Stater Kit #

* /src - source code from that folder contains html, js, less, image and font files which will be compiled to /assets destination.
* /assets - contains a compiled from /src folder files which are used on front-end side of a site. **Warning: Don't edit the files from that folder.**
* gulpfile.js - configuration Gulp
* functions.js - configuration Wordpress
* package.json - node package manager configs.  

-----------------------------------

## Get started ##

### 1. Pull last version ###

```
#!git
mkdir path/to/your/repository
cd path/to/your/repository
git init
git remote add origin master https://{{ repository link }}.git
git pull origin master
```

-----------------------------------

### 2. Do some changes ###

If you would like editing **front-end** part of template like as html, css, js, images you should complete next steps:

2.1. Create and switch to a new branch via Git Brash Terminal
```
#!git
git chackout -b name_branch
```
2.2. Run Gulp via NodeJS terminal
```
#!npm
cd path/to/your/repository
gulp
```
2.3. Edit front end and remember all files will compiling **from src/ to root**.
 
2.4. After finish editing you should change version of template in stype.css

2.5. The last: you sholud push you changes to server and merge with master branch.
```
#!git
git status
git add --all 
git commit -m "Description"
git push origin branch_name
```

-----------------------------------

### 3. What does Wordpress Kit include? ###

**Front-end**

* [Data aload](https://github.com/pazguille/aload)
* [jQuery Mask](https://igorescobar.github.io/jQuery-Mask-Plugin/)
* [Slick Slider](http://kenwheeler.github.io/slick/)
* [Tooltips](http://ytiurin.github.io/html5tooltipsjs/)
* [SmoothState](https://github.com/miguel-perez/smoothState.js)
* [Wow.js](https://github.com/matthieua/WOW)
* [SocIcon](http://www.socicon.com/chart.php)
* [MagnificPopup](http://dimsemenov.com/plugins/magnific-popup/)

**Admin Panel Plugins**

* Polylang
