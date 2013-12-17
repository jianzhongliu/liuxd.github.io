#!/bin/bash

cd ../ppt/markdown2deckjs/
. ./.virtualenv/bin/activate
python m2d ../md/$1.md plain.html "$1" > ../deck.js/ppt/$1.html
