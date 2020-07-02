Shasetsu
========

Shasetsu (Japanese for "Editorial") is a magazine-like sub-theme of Basis. It
was inspired by the look and feel of the [HTML5 UP Editorial template](https://html5up.net/editorial)
which is built around a toggleable sidebar.

On wider screens, Shasetsu overwrites Backdrop's core layout styles to display
the sidebar one-third wide instead of only 25%. On narrow screens, Shasetsu
displays a toggle button which shows and hides the sidebar.

Installation
------------

- Install and enable Shasetsu using the official Backdrop CMS instructions at
https://backdropcms.org/guide/themes.
- Go to *Administer > Site building > Themes*, and make Shasetsu the active,
default theme.

Usage
-----

Shasetsu works in all Backdrop core layout templates. It was however built
with the default layouts in mind, using a particular configuration:

**Home page Layout (Template: Boxton)**

Primary navigation (Dropdown) in the Header

- Header region:
  - Header block (Account menu, Logo, Site name, Site slogan)
    Add your logo on *Administration > Configuration > System > Logo settings*.
  - Primary navigation (Dropdown menu, Maximum depth unlimited)
- Page title: No title
- Top region: No block
- Content region:
  - Hero block
  - Promoted content (for best results promote at least two posts, and upload
    to each post an image via the image field)
- Bottom: No block
- Footer: Powered by Backdrop

**Default Layout (Template: Moscone Flipped)**

Primary navigation (Hierarchical tree) in the Sidebar

- Header region:
  - Header block (Account menu, Logo, Site name, Site slogan)
- Top region: No block
- Content region:
  - Page title combo
  - Breadcrumb
  - Main page content
- Sidebar region:
  - Search form (Hide label and button)
  - Primary navigation (Hierarchical tree, Disable menu toggle button)
  - Several custom blocks or blocks of existing content (e.g. Contact details)
- Bottom: No block
- Footer: Powered by Backdrop

As an alternative for the Default Layout, drag the Header block from the
Header region to the top of the Sidebar region, above the Search form.
(Best results with short Site name and slogan, or no Site slogan at all.)

Overriding CSS and sub-theming
------------------------------

Shasetsu comes with a `skin-shasetsu.css`. Basis (the base theme for
Shasetsu) also includes CSS files, plus template files, theme color settings
and more. To override the Shasetsu CSS styles, or to build a sub-theme of
Shasetsu, refer to the following resources about sub-themes and about
tweaking a theme's CSS.

### Basis
- https://github.com/backdrop/backdrop/blob/1.x/core/themes/basis/README.md
- https://github.com/backdrop/backdrop/blob/1.x/core/themes/basis/css/README.md
- https://backdropcms.org/news/build-sub-theme-basis-default-frontend-theme-backdrop

### API
- https://api.backdropcms.org/documentation/creating-sub-themes

### CSS Injector
The CSS Injector module allows you to add CSS to Backdrop based on configurable
rules. It's useful for adding simple CSS tweaks without modifying the theme.
- https://backdropcms.org/project/css_injector

Project status
--------------

Due to a [Backdrop core issue](https://github.com/backdrop/backdrop-issues/issues/4463),
Shasetsu doesn't have its own color settings. The theme displays the color sets
of Basis instead, which is misleading, especially for the default set.

Apart from that, Shasetsu should work reasonably, but it could need more
testing. Your feedback is most welcome!

Issues
------

Please report bugs, feature requests and other feedback in the Issue queue:
https://github.com/backdrop-contrib/shasetsu/issues

Current Maintainers
-------------------

- [Olaf Grabienski](https://github.com/olafgrabienski)

Credits
-------

- AJ (aj@lkn.io | @ajlkn) for the inspiring Editorial template by HTML5 UP.

License
-------

This project is GPL v2 software.
See the LICENSE.txt file in this directory for the complete text.
