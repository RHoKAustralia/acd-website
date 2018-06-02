# acd-website
RHoK Melbourne Winter 2018 - ACD Website refresh (http://acd.org.au/)

We're doing lazy CD - to develop the `acd-guten-blocks` plugin add a `.git/hooks/pre-commit` file containing this (should work for both linux and windows.. hopefully):

```
#!/bin/sh

echo "Building acd-guten-blocks distribution"

cd wp-content/plugins/acd-guten-blocks
npm run build
cd ../../..
git add wp-content/plugins/acd-guten-blocks/dist/*
```