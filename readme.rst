Vim introduction workshop
=========================

.. contents::

This information can be found at https://github.com/DanielSiepmann/vim-introduction-workshop

Welcome
-------

First things first, how to start and *quit* Vim.

To start Vim, just type ``vim`` into the terminal.

To exit Vim, try ``CTRL+C`` like for nearly all CLIs. Vim will display a help message
in the bottom left with instructions how to quit Vim:

   Type  :qa!  and press <Enter> to abandon all changes and exit Vim

So lets type in `:qa!`` to quit Vim again.

To open a file, just add it as argument: ``vim readme.rst``. Type this in to start.

Settings
--------

By default Vim comes with no useful settings. Most developers like line numbers which
can be turned on by typing ``:set number``.

.. note::

   On Ubuntu, Vim comes pre configured. To use no configuration, use ``vim -u NONE``.

Run ``vim -u NONE lorem-ipsum.md`` and type ``:set number`` to activate line numbers.

If you quit Vim and re open the file, line numbers are gone. Settings adjusted within
a session are not persisted. We get back to that later.

Beside line number, syntax highlighting would be awesome. Activate it using ``:syntax on``.

The modes
---------

We now have the basics, let's learn some basic concepts.

Vim is a mode editor. Most editors are mode less.

What is a mode?

NORMAL
^^^^^^

This is the default mode when you start Vim. If you open a file, e.g. ``vim lorem-ipsum.md``
keys are used to navigate in this file. E.g. use ``h``, ``j``, ``k`` and ``l`` to move the
cursor around.

TASK: Navigate a bit within ``lorem-ipsum.md``.

Press ``ESC`` from any mode to come back to the ``NORMAL`` mode.

VISUAL
^^^^^^

Sometimes you want to highlight something, e.g. for a presentation or to interact
with the highlighted parts.

You can enter different Visual Modes, e.g.

``v``
   Will start ``VISUAL`` mode where you can highlight stuff using the same keys as in
   ``NORMAL`` Mode.

   TASK: Highlight line 19.

``V``
   ``VISUAL LINE`` to highlight lines, useful for presentations.

   TASK: Highlight line 19.

``CTRL+v``
   ``VISUAL BLOCK`` to highlight blocks, useful for tables.

   TASK: Highlight column 2.

INSERT
^^^^^^

Insert some text, keys will be passed through as insertions.

Enter the ``INSERT`` mode by one of the following keys:

``a``
   Append behind the cursor

``i``
   Insert at the cursor

``A``
   Append at the end if line

``I``
   Insert at beginning of the line

TASK: Insert todays date at the end of the file.

REPLACE
^^^^^^^

Replace some text, keys will be passed through as replacements. 

``r``
   Replaces a single character.

``R``
   Switches to ``REPLACE`` mode.

TASK: Replace last line with todays date.

COMMAND
^^^^^^^

Executes commands within Vim, e.g. adjust settings or quit.

``:``
   Inserts the command mode. The cursor will be set to the command line.
   The command mode has auto completion, just press ``TAB``.

   TASK: Activate line numbers, quit Vim.

And there are more Modes.

Better movement
---------------

So far we now that we can move around in ``NORMAL`` mode with ``h``, ``j`, ``k`` and ``l``.
There are more keys to move around. E.g.:

``G``
   Go to end of file.

``gg``
   Go to beginning of file.

Most movements can be prefixed with a count, that's called Vim Grammar. So to move to
Line x type ``xG``.

TASK: Highlight Line 19 by jumping to Line 19.

Most of the time we are not working with text documents but source code. So how to
move efficiently within source code? We will explain the help, to allow you to figure
out yourself.

Help
----

Vim has a huuuuge documentation on board. This can be accessed via ``:help``.

The help consists of a guide, reference, topics and plugins.

Code navigation
---------------

1 Motions
^^^^^^^^^

Let's check out ``:help object-motions`` to get further movements.

TASK: ``vim lorem-ipsum.php`` and navigate to the 2nd method via ``]]``

2 Plugins
^^^^^^^^^

There are a bunch of plugins and even some plugin manager to choose from.

To navigate within Code I use CTRLP and Tagbar in combination with Universal Ctags.

* TASK: Check out the benefits, run ``nvim lorem-ipsum.php`` and type in ``,r``.

* TASK: Check out the benefits, run ``nvim lorem-ipsum.php`` and type in ``,b``.

3 Go to definition
^^^^^^^^^^^^^^^^^^

Vim provides support for tags out of the box. Using ``CTRL+]`` we can jump to the
definition of something.

TASK: Run ``vim lorem-ipsum2.php`` to to the constructor and run ``CTRL+]`` on
``LoremUpsum`` type hint.

4 Jumps
^^^^^^^

Before we already mentioned "jump" in some movements. Some movements are "jumps"
which are saved within the jumplist, see ``:help jumplist``.

Like with undo and redo, you can jump forth and back within the jumplist. This is
especially useful once you navigate within source code, e.g. to the definition of a
Framework method, you dig deeper and deeper and go back to where you was. It's like
the back and forth within your browser on Wikipedia, just for your code.

TASK: Jump to getSum() and come back.

5 Searching
^^^^^^^^^^^

Vim provides a search *mode* of course. Just type ``/`` and search. The search can be
configured in many ways and uses regular expressions.

TASK: Search for *mode*.

To search on a project range, use one of the many external tools like grep, git-grep,
ack, ag, …

Efficient editing
-----------------

We now know some basics to move within source code. What about editing?

Let's change the content of an PHP if condition to just false.

TASK: Change content of if condition within ``lorem-ipsum.php`` within the ``getSum``
method.

Vim provides operators within the ``NORMAL`` mode. These can be copy, delete, change,
uppercase. In our case we want to change the condition = ``c``. Following Vim Grammar,
this can be combined with either a count as prefix, or a motion as suffix.

In our case we want to change text within ``()`` as this is the condition in PHP. We
can achieve this by typing ``ci(`` within the braces.

Editing remote files
--------------------

Vim implements different protocols and can open .gz or .zip files out of the box.
Also scp:// and other protocols are support. This way one can edit remote files from
local computer using his Vim.

To open a remote file type ``vim scp://daniel-siepmann.de/apps/staemme/allys.py``.

Or from within vim ``:e scp://daniel-siepmann.de/apps/staemme/allys.py``.

See ``:help scp``

Also you can open files under the cursor with system settings using ``gx``. To open a
file under cursor with vim use ``gf``.

TASK: Edit the file
https://tmp.daniel-siepmann.de/events/nca18/workshop-vim/example.html with vim.

Vimrc
-----

Vim will load specific files during startup and in specific circumstances. The main
file is ~/.vimrc on load. To persist settings, e.g. turned on line numbers, write
them down into the file.

Like shell scripts, the file consists of Vim commands. E.g. turning line numbers on
results in ``:set number``, so write ``set number`` to the file.

This way you can tune Vim to *YOUR* editor. You will not find two Vim users out there
with the same setup. Vim is always *YOUR* editor.

Completion
----------

Wait, an editor has completion? Yes, and Vim has a lot!

See: ``:help ins-completion`` It's a new mode! You can insert the mode inside the
insert mode by typing ``CTRL+x`` followed by the completion mode.

TASK: Insert the word "hello" right here, using completion: 

TASK: Insert the filename "lorem-ipsum2.php" right here, using completion: 

TASK: Insert this chapter name right here, using completion: 

The registers
-------------

Vim comes with a lot of "clipboards". You have installed some fancy application for
that? No need inside Vim. Clipboards within Vim are called registers. And there are a
lot of them. Some are auto filled, some are up to you.

See ``:help registers`` You can copy stuff from within a file using ``"yyy`` or
``"ayy`` where ``"a`` and ``"y`` is the register to copy to and ``yy`` is the motion,
yank current line. As always, this can be combined with already known motions.

To paste from a register, use ``"yp`` where ``"y`` again is the register and ``p`` or
``P`` is the paste after or before.

TASK: Yank this line and add it to "The dot".

TASK: Yank the first paragraph of "The registers" and paste if after this sentence.

The dot
-------

Last time I didn't mention the "dot". Once you learn to make atomic operations within
Vim, the dot becomes a huge productivity increase. He will repeat the last atomic
operation, e.g. you insert a comma to the end of a line, you can repeat that.

TASK: Add a comma at the end of the first array entry within lorem-ipsum2.php and
repeat the change for the two following lines.

Macros
------

Some might already know macros from Microsoft Excel or other editors. Vim also comes
with editors. A single macro is just a recorded set of keystrokes which can be
re-played.

Each macro is saved into a register. Thus it can be saved, loaded and modified.

The change done within "The dot" section can be achieved using a macro.

To record a macro type ``qq`` where the first ``q`` starts the recording and the 2nd
``q`` defined the register.

To replay a macro type ``@q`` where ``@`` starts the playback and ``q`` is the
register. As most of the time you can prefix the playback with a count, e.g. ``2@q``
will repeat macro ``q`` two times.

TASK: Repeat the task from "The dot" using a macro.

Buffers
-------

What are buffers?

How to switch buffers?

How to list buffers?

Settings Part 2
---------------

We now should now all we need to work effectively with Vim. Still we didn't cover
settings very well. We know how to show line numbers and how to store settings. But
what kind of settings do we have, what can we achieve with settings?

Syntax highlighting
^^^^^^^^^^^^^^^^^^^

E.g. add the following to highlight hearts in red::

   hi ERROR ctermfg=9
   match ERROR /♥/

TASK: Highlight the word TYPO3 in orange.
Tip: Color code for orange is 214

See: ``:help hi`` ``:help match``

Autocommands
^^^^^^^^^^^^

You know events from Symfony, or signals / slots from TYPO3? You will love
autocommands in Vim.

See: ``:help autocommand``

Workflows
---------

Now some workflows from my daily work within Vim.

Linting
^^^^^^^

Executing tests
^^^^^^^^^^^^^^^

Rendering docs
^^^^^^^^^^^^^^

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
