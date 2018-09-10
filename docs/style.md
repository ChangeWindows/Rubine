---
layout: default
title: Style
permalink: /style/
---

# Typography
## Headings
Default headings of course get a nice Fluent look. While you can use `h1`-tags to style them, if you don't want the HTML structure that comes along with the tag and only want the style, you can also use the equivalent class like `.h1`.

<div class="jumbotron typography-preview">
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
</div>
Many of the elements in Rubine will use classes that are of the type `[*-]dynamic[-*]`, what this means is that these modifier classes do not have a fixed color. Instead, they look at the theme to decide which color they should take on. The theme classes `.theme-light` and `.theme-dark` have to be aplied to the `body`-tag.

## Subheadings
The `small`-tag can be used in combination with the heading elements.

<div class="jumbotron typography-preview">
    <h3>
        Rubine
        <small class="text-muted">the Fluent CSS</small>
    </h3>
</div>

## Display headings
Need something bigger than the regular headings? Well, that's what the `.display-[1|2|3|4]`-classes are for.

<div class="jumbotron typography-preview">
    <h1 class="display-1">Display 1</h1>
    <h1 class="display-2">Display 2</h1>
    <h1 class="display-3">Display 3</h1>
    <h1 class="display-4">Display 4</h1>
</div>

## Lead
Make pharagraphs catch the eye of your readers faster with the `.lead`-class.

<div class="jumbotron typography-preview">
    <p class="lead">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
</div>

# Colors
## Background colors
Fluent Design has a broad set of colors, all of them are available to you with Rubine.

### `.bg-red-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-red-800"><p>800</p></div>
    <div class="color-block bg-red-700"><p>700</p></div>
    <div class="color-block bg-red-600"><p>600</p></div>
    <div class="color-block-lg bg-red-500"><p>500</p></div>
    <div class="color-block bg-red-400"><p>400</p></div>
    <div class="color-block bg-red-300"><p>300</p></div>
    <div class="color-block bg-red-200"><p>200</p></div>
</div>

### `.bg-dark-orange-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-dark-orange-800"><p>800</p></div>
    <div class="color-block bg-dark-orange-700"><p>700</p></div>
    <div class="color-block bg-dark-orange-600"><p>600</p></div>
    <div class="color-block-lg bg-dark-orange-500"><p>500</p></div>
    <div class="color-block bg-dark-orange-400"><p>400</p></div>
    <div class="color-block bg-dark-orange-300"><p>300</p></div>
    <div class="color-block bg-dark-orange-200"><p>200</p></div>
</div>

### `.bg-orange-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-orange-800"><p>800</p></div>
    <div class="color-block bg-orange-700"><p>700</p></div>
    <div class="color-block bg-orange-600"><p>600</p></div>
    <div class="color-block-lg bg-orange-500"><p>500</p></div>
    <div class="color-block bg-orange-400"><p>400</p></div>
    <div class="color-block bg-orange-300"><p>300</p></div>
    <div class="color-block bg-orange-200"><p>200</p></div>
</div>

### `.bg-light-orange-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-light-orange-800"><p>800</p></div>
    <div class="color-block bg-light-orange-700"><p>700</p></div>
    <div class="color-block bg-light-orange-600"><p>600</p></div>
    <div class="color-block-lg bg-light-orange-500"><p>500</p></div>
    <div class="color-block bg-light-orange-400"><p>400</p></div>
    <div class="color-block bg-light-orange-300"><p>300</p></div>
    <div class="color-block bg-light-orange-200"><p>200</p></div>
</div>

### `.bg-amber-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-amber-800"><p>800</p></div>
    <div class="color-block bg-amber-700"><p>700</p></div>
    <div class="color-block bg-amber-600"><p>600</p></div>
    <div class="color-block-lg bg-amber-500"><p>500</p></div>
    <div class="color-block bg-amber-400"><p>400</p></div>
    <div class="color-block bg-amber-300"><p>300</p></div>
    <div class="color-block bg-amber-200"><p>200</p></div>
</div>

### `.bg-yellow-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-yellow-800"><p>800</p></div>
    <div class="color-block bg-yellow-700"><p>700</p></div>
    <div class="color-block bg-yellow-600"><p>600</p></div>
    <div class="color-block-lg bg-yellow-500"><p>500</p></div>
    <div class="color-block bg-yellow-400"><p>400</p></div>
    <div class="color-block bg-yellow-300"><p>300</p></div>
    <div class="color-block bg-yellow-200"><p>200</p></div>
</div>

### `.bg-lime-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-lime-800"><p>800</p></div>
    <div class="color-block bg-lime-700"><p>700</p></div>
    <div class="color-block bg-lime-600"><p>600</p></div>
    <div class="color-block-lg bg-lime-500"><p>500</p></div>
    <div class="color-block bg-lime-400"><p>400</p></div>
    <div class="color-block bg-lime-300"><p>300</p></div>
    <div class="color-block bg-lime-200"><p>200</p></div>
</div>

### `.bg-green-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-green-800"><p>800</p></div>
    <div class="color-block bg-green-700"><p>700</p></div>
    <div class="color-block bg-green-600"><p>600</p></div>
    <div class="color-block-lg bg-green-500"><p>500</p></div>
    <div class="color-block bg-green-400"><p>400</p></div>
    <div class="color-block bg-green-300"><p>300</p></div>
    <div class="color-block bg-green-200"><p>200</p></div>
</div>

### `.bg-sea-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-sea-800"><p>800</p></div>
    <div class="color-block bg-sea-700"><p>700</p></div>
    <div class="color-block bg-sea-600"><p>600</p></div>
    <div class="color-block-lg bg-sea-500"><p>500</p></div>
    <div class="color-block bg-sea-400"><p>400</p></div>
    <div class="color-block bg-sea-300"><p>300</p></div>
    <div class="color-block bg-sea-200"><p>200</p></div>
</div>

### `.bg-turquoise-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-turquoise-800"><p>800</p></div>
    <div class="color-block bg-turquoise-700"><p>700</p></div>
    <div class="color-block bg-turquoise-600"><p>600</p></div>
    <div class="color-block-lg bg-turquoise-500"><p>500</p></div>
    <div class="color-block bg-turquoise-400"><p>400</p></div>
    <div class="color-block bg-turquoise-300"><p>300</p></div>
    <div class="color-block bg-turquoise-200"><p>200</p></div>
</div>

### `.bg-teal-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-teal-800"><p>800</p></div>
    <div class="color-block bg-teal-700"><p>700</p></div>
    <div class="color-block bg-teal-600"><p>600</p></div>
    <div class="color-block-lg bg-teal-500"><p>500</p></div>
    <div class="color-block bg-teal-400"><p>400</p></div>
    <div class="color-block bg-teal-300"><p>300</p></div>
    <div class="color-block bg-teal-200"><p>200</p></div>
</div>

### `.bg-cyan-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-cyan-800"><p>800</p></div>
    <div class="color-block bg-cyan-700"><p>700</p></div>
    <div class="color-block bg-cyan-600"><p>600</p></div>
    <div class="color-block-lg bg-cyan-500"><p>500</p></div>
    <div class="color-block bg-cyan-400"><p>400</p></div>
    <div class="color-block bg-cyan-300"><p>300</p></div>
    <div class="color-block bg-cyan-200"><p>200</p></div>
</div>

### `.bg-blue-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-blue-800"><p>800</p></div>
    <div class="color-block bg-blue-700"><p>700</p></div>
    <div class="color-block bg-blue-600"><p>600</p></div>
    <div class="color-block-lg bg-blue-500"><p>500</p></div>
    <div class="color-block bg-blue-400"><p>400</p></div>
    <div class="color-block bg-blue-300"><p>300</p></div>
    <div class="color-block bg-blue-200"><p>200</p></div>
</div>

### `.bg-cobalt-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-cobalt-800"><p>800</p></div>
    <div class="color-block bg-cobalt-700"><p>700</p></div>
    <div class="color-block bg-cobalt-600"><p>600</p></div>
    <div class="color-block-lg bg-cobalt-500"><p>500</p></div>
    <div class="color-block bg-cobalt-400"><p>400</p></div>
    <div class="color-block bg-cobalt-300"><p>300</p></div>
    <div class="color-block bg-cobalt-200"><p>200</p></div>
</div>

### `.bg-cornflower-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-cornflower-800"><p>800</p></div>
    <div class="color-block bg-cornflower-700"><p>700</p></div>
    <div class="color-block bg-cornflower-600"><p>600</p></div>
    <div class="color-block-lg bg-cornflower-500"><p>500</p></div>
    <div class="color-block bg-cornflower-400"><p>400</p></div>
    <div class="color-block bg-cornflower-300"><p>300</p></div>
    <div class="color-block bg-cornflower-200"><p>200</p></div>
</div>

### `.bg-indigo-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-indigo-800"><p>800</p></div>
    <div class="color-block bg-indigo-700"><p>700</p></div>
    <div class="color-block bg-indigo-600"><p>600</p></div>
    <div class="color-block-lg bg-indigo-500"><p>500</p></div>
    <div class="color-block bg-indigo-400"><p>400</p></div>
    <div class="color-block bg-indigo-300"><p>300</p></div>
    <div class="color-block bg-indigo-200"><p>200</p></div>
</div>

### `.bg-violet-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-violet-800"><p>800</p></div>
    <div class="color-block bg-violet-700"><p>700</p></div>
    <div class="color-block bg-violet-600"><p>600</p></div>
    <div class="color-block-lg bg-violet-500"><p>500</p></div>
    <div class="color-block bg-violet-400"><p>400</p></div>
    <div class="color-block bg-violet-300"><p>300</p></div>
    <div class="color-block bg-violet-200"><p>200</p></div>
</div>

### `.bg-mulberry-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-mulberry-800"><p>800</p></div>
    <div class="color-block bg-mulberry-700"><p>700</p></div>
    <div class="color-block bg-mulberry-600"><p>600</p></div>
    <div class="color-block-lg bg-mulberry-500"><p>500</p></div>
    <div class="color-block bg-mulberry-400"><p>400</p></div>
    <div class="color-block bg-mulberry-300"><p>300</p></div>
    <div class="color-block bg-mulberry-200"><p>200</p></div>
</div>

### `.bg-deep-purple-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-deep-purple-800"><p>800</p></div>
    <div class="color-block bg-deep-purple-700"><p>700</p></div>
    <div class="color-block bg-deep-purple-600"><p>600</p></div>
    <div class="color-block-lg bg-deep-purple-500"><p>500</p></div>
    <div class="color-block bg-deep-purple-400"><p>400</p></div>
    <div class="color-block bg-deep-purple-300"><p>300</p></div>
    <div class="color-block bg-deep-purple-200"><p>200</p></div>
</div>

### `.bg-purple-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-purple-800"><p>800</p></div>
    <div class="color-block bg-purple-700"><p>700</p></div>
    <div class="color-block bg-purple-600"><p>600</p></div>
    <div class="color-block-lg bg-purple-500"><p>500</p></div>
    <div class="color-block bg-purple-400"><p>400</p></div>
    <div class="color-block bg-purple-300"><p>300</p></div>
    <div class="color-block bg-purple-200"><p>200</p></div>
</div>

### `.bg-light-purple-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-light-purple-800"><p>800</p></div>
    <div class="color-block bg-light-purple-700"><p>700</p></div>
    <div class="color-block bg-light-purple-600"><p>600</p></div>
    <div class="color-block-lg bg-light-purple-500"><p>500</p></div>
    <div class="color-block bg-light-purple-400"><p>400</p></div>
    <div class="color-block bg-light-purple-300"><p>300</p></div>
    <div class="color-block bg-light-purple-200"><p>200</p></div>
</div>

### `.bg-raspberry-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-raspberry-800"><p>800</p></div>
    <div class="color-block bg-raspberry-700"><p>700</p></div>
    <div class="color-block bg-raspberry-600"><p>600</p></div>
    <div class="color-block-lg bg-raspberry-500"><p>500</p></div>
    <div class="color-block bg-raspberry-400"><p>400</p></div>
    <div class="color-block bg-raspberry-300"><p>300</p></div>
    <div class="color-block bg-raspberry-200"><p>200</p></div>
</div>

### `.bg-pink-*`
<div class="jumbotron color-preview">
    <div class="color-block bg-pink-800"><p>800</p></div>
    <div class="color-block bg-pink-700"><p>700</p></div>
    <div class="color-block bg-pink-600"><p>600</p></div>
    <div class="color-block-lg bg-pink-500"><p>500</p></div>
    <div class="color-block bg-pink-400"><p>400</p></div>
    <div class="color-block bg-pink-300"><p>300</p></div>
    <div class="color-block bg-pink-200"><p>200</p></div>
</div>

## Text colors
Text colors follow the same system as background colors but use the `.text-` prefix, additionally, the `-200` and `-800` color variants are not available.

<div class="jumbotron text-color-preview">
    <div class="row">
        <div class="col-2 bg-blue-200"><p>200</p></div>
        <div class="col-10 bg-blue-200"><p>Text can be black</p><p class="text-blue-500">Text can be -500</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-300"><p>300</p></div>
        <div class="col-10 bg-blue-300"><p>Text can be black</p><p class="text-blue-600">Text can be -600</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-400"><p>400</p></div>
        <div class="col-10 bg-blue-400"><p>Text can be black</p><p class="text-blue-700">Text can be -700</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-500"><p>500</p></div>
        <div class="col-5 bg-blue-500"><p>Text can be black</p><p class="text-blue-700">Text can be -700</p></div>
        <div class="col-5 bg-blue-500"><p class="text-white">Text can be white</p><p class="text-blue-700">Text can be -700</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-600"><p>600</p></div>
        <div class="col-10 bg-blue-600"><p class="text-white">Text can be white</p><p class="text-blue-300">Text can be -300</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-700"><p>700</p></div>
        <div class="col-10 bg-blue-700"><p class="text-white">Text can be white</p><p class="text-blue-400">Text can be -400</p></div>
    </div>
    <div class="row">
        <div class="col-2 bg-blue-800"><p>800</p></div>
        <div class="col-10 bg-blue-800"><p class="text-white">Text can be white</p><p class="text-blue-500">Text can be -500</p></div>
    </div>
</div>