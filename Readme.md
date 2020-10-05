# PHP Line Spitter
Companion project for [depicture](https://github.com/ItsAlxl/depicture).

PHP Line Spitter reads lines from `.txt` files located in `/lists/` and provides them as a JSON array.

## names.php
`/names.php` responds with a JSON array of the names of all the available lists (i.e. the basenames of the `.txt` files located in `/lists/`).

## lists.php
`/lists.php` responds with a JSON array of the lines inside the lists. If not otherwise specified, it will respond with the lines of all the lists. Specific lists can be specified in two ways:

`/lists.php?n[]=list-name-1&n[]=list-name-2` responds with the lines of the lists specified by the `n` array.

`/lists.php?n=list-name` responds with the lines of the list specified by `n`.