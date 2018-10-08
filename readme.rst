Vim introduction workshop
=========================

Welcome
-------

First things first, how to start and *quit* Vim.

To start Vim, just type `vim` into the terminal.

To exit Vim, try `CTRL+C` like for nearly all CLIs. Vim will display a help message
in the bottom left with instructions how to quit Vim:

   Type  :qa!  and press <Enter> to abandon all changes and exit Vim

So lets type in `:qa!` to quit Vim again.

Settings
--------

By default Vim comes with no useful settings. Most developers like line numbers which
can be turned on by typing `:set number`.

Run `vim lorem-ipsum.md` and type `:set number` to activate line numbers.

If you quit Vim and re open the file, line numbers are gun. Settings adjusted within
a session are not persisted. We get back to that later.

The concepts
------------

We now have the basics, let's learn some basic concepts.

Vim is a mode editor. Most editors are mode less.

What is a mode?

NORMAL
^^^^^^

This is the default mode when you start Vim. If you open a file, e.g. `vim lorem-ipsum.md`
keys are used to navigate in this file. E.g. use `h`, `j`, `k` and `l` to move the
cursor around.

TASK: Navigate a bit within `lorem-ipsum.md`.

Press `ESC` from any mode to come back to the `NORMAL` mode.

VISUAL
^^^^^^

Sometimes you want to highlight something, e.g. for a presentation or to interact
with the highlighted parts.

You can enter different Visual Modes, e.g.

`v`
   Will start `VISUAL` mode where you can highlight stuff using the same keys as in
   `NORMAL` Mode.

   TASK: Highlight line 19.

`V`
   `VISUAL LINE` to highlight lines, useful for presentations.

   TASK: Highlight line 19.

`CTRL+v`
   `VISUAL BLOCK` to highlight blocks, useful for tables.

   TASK: Highlight column 2.

INSERT
^^^^^^

Insert some text, keys will be passed through as insertions.

Enter the `INSERT` mode by one of the following keys:

`a`
   Append behind the cursor

`i`
   Insert at the cursor

`A`
   Append at the end if line

`I`
   Insert at beginning of the line

TASK: Insert todays date at the end of the file.

REPLACE
^^^^^^^

Replace some text, keys will be passed through as replacements. 

`r`
   Replaces a single character.

`R`
   Switches to `REPLACE` mode.

TASK: Replace last line with todays date.

COMMAND
^^^^^^^

Executes commands within Vim, e.g. adjust settings or quit.

`:`
   Inserts the command mode. The cursor will be set to the command line.
   The command mode has auto completion, just press `TAB`.

   TASK: Activate line numbers, quit Vim.

And there are more Modes.

Better movement
---------------

So far we now that we can move around in `NORMAL` mode with `h`, `j`, `k` and `l`.
There are more keys to move around. E.g.:

`G`
   Go to end of file.

`gg`
   Go to beginning of file.

Most movements can be prefixed with a count, that's called Vim Grammar. So to move to
Line x type `xG`.

TASK: Highlight Line 19 by jumping to Line 19.

Most of the time we are not working with text documents but source code. So how to
move efficiently within source code? We will explain the help, to allow you to figure
out yourself.

Help
----

Vim has a huuuuge documentation on board. This can be accessed via `:help`.

The help consists of a guide, reference, topics and plugins.

Code navigation Part 1
----------------------

Let's check out `:help object-motions` to get further movements.

TASK: `vim lorem-ipsum.php` and navigate to the 2nd method via `]]`

Code navigation Part 2 Plugins
------------------------------

There are a bunch of plugins and even some plugin manager to choose from.

To navigate within Code I use CTRLP and Tagbar in combination with Universal Ctags.

* TASK: Check out the benefits, run `nvim lorem-ipsum.php` and type in `,r`.

* TASK: Check out the benefits, run `nvim lorem-ipsum.php` and type in `,b`.

Code navigation Part 3 Go to definition
---------------------------------------

Vim provides support for tags out of the box. Using `CTRL+]` we can jump to the
definition of something.

TASK: Run `vim lorem-ipsum2.php` to to the constructor and run `CTRL+]` on
`LoremUpsum` type hint.

Efficient editing
-----------------

We now know some basics to move within source code. What about editing?

Let's change the content of an PHP if condition to just false.

TASK: Change content of if condition within `lorem-ipsum.php` within the `getSum`
method.

Vim provides operators within the `NORMAL` mode. These can be copy, delete, change,
uppercase. In our case we want to change the condition = `c`. Following Vim Grammar,
this can be combined with either a count as prefix, or a motion as suffix.

In our case we want to change text within `()` as this is the condition in PHP. We
can achieve this by typing `ci(` within the braces.

What's next?
------------

That were some basics. What is most important to you? What would you miss when using
Vim? Let's provide some guidance to make you more productive within Vim in your daily
work.

References
----------

* https://daniel-siepmann.de/Posts/Migrated/2015-10-10-vim-linklist.html

* https://vimawesome.com/plugin/ctrlp-vim-red

* https://vimawesome.com/plugin/tagbar

* https://ctags.io/
