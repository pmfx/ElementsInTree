# ElementsInTree

With ElementsInTree plugin user gets access to all Elements and Modules inside MODX Evolution Manager sidebar as long as his role permissions allows it.

![screenshot_1](http://image.prntscr.com/image/1683ce232a4d45d888e68b813c472d18.png)

**Requirements**

This plugin requires MODX Evolution 1.2 or later.

**History**

- 2016-11-29 Margin-bottom fix, added missing $modx_textdir #32 (Deesen)
- 2016-11-27 Refactor with new API (yama)
- 2016-11-23 Refactor with new API (yama)
- 2016-11-21 Separate bootstrap and body code and code refactor; Bring API up to date (yama)
- 2016-11-17 Elements context menu (Deesen)
- 2016-11-16 Tabs, search form and action buttons positioned fix on top (Deesen); Remember scroll-positions after init/reload (Deesen); Categories and elements wrapped in a DIV-container with overflow-y:auto instead of using frame-scrollbar (Deesen)
- 2016-11-15 Action buttons next to filter form (pmfx)
- 2016-11-15 Fix wrong collapse state at first installation (Deesen); Fix "possible CSFR attempt" when using "update elements" button (Deesen); Added lock-icon display, reload elementsInTree more often to update lock-icons (Deesen)
- 2016-10-31 Prevent Users from submitting filtered elements (Nicola)
- 2016-10-31 Avoid first category collapse-flicker on reload (Deesen)
- 2016-10-30 Auto refresh list when adding/saving/deleting Element (Deesen)
- 2016-10-24 Removed "jumping" when buttons are moved to tab (pmfx)
- 2016-10-24 Added option to move tree buttons into Site Tree tab (pmfx/Deesen)
- 2016-10-23 Shift-mouseclick on category collapses/expands all categories using localStorage to remember collapsible states (Deesen)
- 2016-10-22 Improved quicksearch: Hide categories, Show "uncategorized"-category for modules (Deesen)
- 2016-10-19 Added configuration option to unify tree frame style with main frame for MODxRE2 (pmfx)
- 2016-10-17 Added configuration option to set custom Site Tree tab title (pmfx)
- 2016-10-16 Fixed Modules tab permissions (pmfx)
- 2016-10-16 Added Modules tab (Nicola1971)
- 2016-10-13 Make plugin compatible with MODX install script (pmfx)
- 2016-10-11 Added Bootstrap category accordion (Nicola1971)
- 2016-10-11 Added FontAwesome icons to elements on lists (Nicola1971)
- 2016-10-10 Added live search/filtering feature (pmfx)
- 2016-10-06 Added configuration option to use icons or not (pmfx)
- 2016-10-05 Tabs have icons instead of text shortcut now (pmfx)
- 2016-10-01 Modified by Piotr Matysiak (pmfx) to respect MODX roles (hasPermission)

**Credits**

Plugin originaly created by Dmi3yy https://github.com/dmi3yy