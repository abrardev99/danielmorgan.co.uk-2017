# danielmorgan.co.uk

Personal blog/portfolio/gallery. Built with static site generator [Jigsaw](https://github.com/tightenco/jigsaw).

## Install

http://jigsaw.tighten.co/docs/installation/

```
git clone https://github.com/danielmorgan/danielmorgan.co.uk
cd danielmorgan.co.uk
composer install
yarn install --pure-lockfile
```

## Develop

```
npm run watch
```

## Deploy

http://jigsaw.tighten.co/docs/deploying-your-site/

```
gulp --production && jigsaw build production
git add build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages
```
