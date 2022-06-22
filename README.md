# WordPress React starter theme

Work in progress.

Build with [Inertia.js](https://inertiajs.com) and [server-side adapter for WordPress](https://github.com/boxybird/inertia-wordpress/).

## Installation

composer install<br />
npm install<br />

## Build & Watch

npm run watch<br />
npm build<br />

## ToDo 

v0.1.0
- [x] Drink coffee
- [x] add/fix laravel mix and scss (moved to webpack instead of mix)
- [x] add wp navigation / add this to react Header component
- [x] add wp custom logo / add this to react Header component
- [x] Move index.php logic to app/Controllers
- [x] Add support for [Yoast](https://yoast.com/wordpress/plugins/seo/)
- [x] Render all meta tag values in controllers use collectYoastMeta class, then remove them from php head
- [x] Check webpack build for asset files like png, svg, fonts etc.
- [x] Build a simple theme website to showcase theme and test theme performance
- [x] Need a cool theme logo :D
- [x] Create better webpack [mini-css-extract-plugin](https://webpack.js.org/plugins/mini-css-extract-plugin/)html-webpack-plugin)
- [x] Clean-up package.json
- [ ] Add footer

v0.2.0
- [ ] Add Authentication support for front-end login / register
- [ ] Testing, testing