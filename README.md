# acd-website
RHoK Melbourne Winter 2018 - ACD Website refresh (http://acd.org.au/)

# Development

## Developing locally
If you have docker installed you can:

```
docker-compose up
```

And get a local wordpress instance running linked to the development directory. You'll need to install wordpress, manually enable the `acd` theme and install & activate the `gutenberg` and `acd-guten-blocks` plugins (you only need to do this once unless you delete your mysql volume).

To automatically recompile the plugin while developing, do:

```
cd wp-content/plugins/acd-guten-blocks/; npm start
```

## Deploying the plugin
We're doing lazy CD - to compile and deploy the `acd-guten-blocks` plugin add a `.git/hooks/pre-commit` file containing this (should work for both linux and windows.. hopefully):

```
#!/bin/sh

echo "Building acd-guten-blocks distribution"

cd wp-content/plugins/acd-guten-blocks
npm run build
cd ../../..
git add wp-content/plugins/acd-guten-blocks/dist/*
```