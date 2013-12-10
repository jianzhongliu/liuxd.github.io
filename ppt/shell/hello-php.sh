#!/bin/bash

cd ../markdown2deckjs/
. ./.virtualenv/bin/activate
python m2d ../markdown/hello-php/$1.md plain.html "$1" > ../deck.js/ppt/$1.html
