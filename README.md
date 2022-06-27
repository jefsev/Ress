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

v0.1.x
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
- [X] Fix autoprefixer, currently not working. (Note to self, read docs better and more often ;P) 
- [ ] Add footer

v0.2.x
- [x] Login form works thanks to [pr](https://github.com/jefsev/Ress/pull/37) JarvicB
- [ ] Frontend error handeling with React of wp_login_form instead of redirecting to wp-login.php
- [ ] Add frontend password rest form
- [ ] Add frontend Register form support
- [ ] Add .env for dev and production
- [ ] Add cssnano [cssnano](https://cssnano.co/docs/getting-started/)
- [ ] [Code splitting](https://webpack.js.org/guides/code-splitting/)
- [ ] Testing, testing