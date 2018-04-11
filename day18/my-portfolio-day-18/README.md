# My Portfolio ‒ Bootstrap version

First website to learn HTML and CSS basics. Static web with pure HTML/CSS (no compilation of preprocessors etc.). No JavaScript as well.

Based on [graphic proposal on Moqups.com](https://app.moqups.com/Jana-V/0umitZwyaA/view/page/aa9df7b72)

It is a clone of the [same website built without any framework](https://github.com/codingbootcamppraha/winter-2018-my-portfolio), just pure HTML and CSS.

## Stack

Run `$ npm install` in the root folder (in the same where the `package.json` is). Use default gulp task to watch your files: `$ gulp`.

For the browser serve the compiled/copied files from the `dist/` folder (created via gulp task, it is not part of the repository ‒ see `.gitignore`).

We compile one single stylesheet `/dist/css/style.css` based on the `/src/scss/style.scss` ‒ the only SCSS not prefixed with underscore `_`. Add as many partial SCSS files as you like, to keep your codebase oragnised. While adding new SCSS files don’t forget following steps:

1. Create new SCSS file in `/src/scss` folder.
2. Prefix it with underscore `_`.
3. Add it to `@import` in `/src/scss/_custom-styles.scss`.

## Bootstrap

We use [Bootstrap 4 final version](https://getbootstrap.com/) (no alpha or beta releases). Recommended workflow:

1. Add Bootstrap classes to the HTML.
2. Change Bootstrap variables in `/src/scss/_custom-variables.scsscustom`.
3. Add your custom rules to `/src/scss/_custom-styles`.

---

## Processing the form

The form is process by primitive PHP script bluntly outputting sent data. For making it work, be sure you are running your local PHP server. Otherwise the PHP code won’t be run, just printed out as plain text in your browser (or offered to download).