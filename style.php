<?php

$page = 'style';

include('header.php')
?>
<div class="content">
    <div class="container">
        <h1>Typography</h1>
        <h2>Headings</h2>
        <p>Default headings of course get a nice Fluent look. While you can use <code>h1</code>-tags to style them, if you don't want the HTML structure that comes along with the tag and only want the style, you can also use the equivalent class like <code>.h1</code>.</p>
        <div class="jumbotron typography-preview">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
        <p>Many of the elements in Rubine will use classes that are of the type <code>[*-]dynamic[-*]</code>, what this means is that these modifier classes do not have a fixed color. Instead, they look at the theme to decide which color they should take on. The theme classes <code>.theme-light</code> and <code>.theme-dark</code> have to be aplied to the <code>body</code>-tag.</p>
        <h2>Subheadings</h2>
        <p>The <code>small</code>-tag can be used in combination with the heading elements.</p>
        <div class="jumbotron typography-preview">
            <h3>
                Rubine
                <small class="text-muted">the Fluent CSS</small>
            </h3>
        </div>
        <h2>Display headings</h2>
        <p>Need something bigger than the regular headings? Well, that's what the <code>.display-[1|2|3|4]</code>-classes are for.</p>
        <div class="jumbotron typography-preview">
            <h1 class="display-1">Display 1</h1>
            <h1 class="display-2">Display 2</h1>
            <h1 class="display-3">Display 3</h1>
            <h1 class="display-4">Display 4</h1>
        </div>
        <h2>Lead</h2>
        <p>Make pharagraphs catch the eye of your readers faster with the <code>.lead</code>-class.</p>
        <div class="jumbotron typography-preview">
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>
        <h1>Colors</h1>
        <h2>Background colors</h2>
        <p>Fluent Design has a broad set of colors, all of them are available to you with Rubine.</p>
        <h3><code>.bg-red-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-red-800"><p>800</p></div>
            <div class="color-block bg-red-700"><p>700</p></div>
            <div class="color-block bg-red-600"><p>600</p></div>
            <div class="color-block-lg bg-red-500"><p>500</p></div>
            <div class="color-block bg-red-400"><p>400</p></div>
            <div class="color-block bg-red-300"><p>300</p></div>
            <div class="color-block bg-red-200"><p>200</p></div>
        </div>
        <h3><code>.bg-dark-orange-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-dark-orange-800"><p>800</p></div>
            <div class="color-block bg-dark-orange-700"><p>700</p></div>
            <div class="color-block bg-dark-orange-600"><p>600</p></div>
            <div class="color-block-lg bg-dark-orange-500"><p>500</p></div>
            <div class="color-block bg-dark-orange-400"><p>400</p></div>
            <div class="color-block bg-dark-orange-300"><p>300</p></div>
            <div class="color-block bg-dark-orange-200"><p>200</p></div>
        </div>
        <h3><code>.bg-orange-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-orange-800"><p>800</p></div>
            <div class="color-block bg-orange-700"><p>700</p></div>
            <div class="color-block bg-orange-600"><p>600</p></div>
            <div class="color-block-lg bg-orange-500"><p>500</p></div>
            <div class="color-block bg-orange-400"><p>400</p></div>
            <div class="color-block bg-orange-300"><p>300</p></div>
            <div class="color-block bg-orange-200"><p>200</p></div>
        </div>
        <h3><code>.bg-light-orange-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-light-orange-800"><p>800</p></div>
            <div class="color-block bg-light-orange-700"><p>700</p></div>
            <div class="color-block bg-light-orange-600"><p>600</p></div>
            <div class="color-block-lg bg-light-orange-500"><p>500</p></div>
            <div class="color-block bg-light-orange-400"><p>400</p></div>
            <div class="color-block bg-light-orange-300"><p>300</p></div>
            <div class="color-block bg-light-orange-200"><p>200</p></div>
        </div>
        <h3><code>.bg-amber-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-amber-800"><p>800</p></div>
            <div class="color-block bg-amber-700"><p>700</p></div>
            <div class="color-block bg-amber-600"><p>600</p></div>
            <div class="color-block-lg bg-amber-500"><p>500</p></div>
            <div class="color-block bg-amber-400"><p>400</p></div>
            <div class="color-block bg-amber-300"><p>300</p></div>
            <div class="color-block bg-amber-200"><p>200</p></div>
        </div>
        <h3><code>.bg-yellow-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-yellow-800"><p>800</p></div>
            <div class="color-block bg-yellow-700"><p>700</p></div>
            <div class="color-block bg-yellow-600"><p>600</p></div>
            <div class="color-block-lg bg-yellow-500"><p>500</p></div>
            <div class="color-block bg-yellow-400"><p>400</p></div>
            <div class="color-block bg-yellow-300"><p>300</p></div>
            <div class="color-block bg-yellow-200"><p>200</p></div>
        </div>
        <h3><code>.bg-lime-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-lime-800"><p>800</p></div>
            <div class="color-block bg-lime-700"><p>700</p></div>
            <div class="color-block bg-lime-600"><p>600</p></div>
            <div class="color-block-lg bg-lime-500"><p>500</p></div>
            <div class="color-block bg-lime-400"><p>400</p></div>
            <div class="color-block bg-lime-300"><p>300</p></div>
            <div class="color-block bg-lime-200"><p>200</p></div>
        </div>
        <h3><code>.bg-green-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-green-800"><p>800</p></div>
            <div class="color-block bg-green-700"><p>700</p></div>
            <div class="color-block bg-green-600"><p>600</p></div>
            <div class="color-block-lg bg-green-500"><p>500</p></div>
            <div class="color-block bg-green-400"><p>400</p></div>
            <div class="color-block bg-green-300"><p>300</p></div>
            <div class="color-block bg-green-200"><p>200</p></div>
        </div>
        <h3><code>.bg-sea-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-sea-800"><p>800</p></div>
            <div class="color-block bg-sea-700"><p>700</p></div>
            <div class="color-block bg-sea-600"><p>600</p></div>
            <div class="color-block-lg bg-sea-500"><p>500</p></div>
            <div class="color-block bg-sea-400"><p>400</p></div>
            <div class="color-block bg-sea-300"><p>300</p></div>
            <div class="color-block bg-sea-200"><p>200</p></div>
        </div>
        <h3><code>.bg-turquoise-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-turquoise-800"><p>800</p></div>
            <div class="color-block bg-turquoise-700"><p>700</p></div>
            <div class="color-block bg-turquoise-600"><p>600</p></div>
            <div class="color-block-lg bg-turquoise-500"><p>500</p></div>
            <div class="color-block bg-turquoise-400"><p>400</p></div>
            <div class="color-block bg-turquoise-300"><p>300</p></div>
            <div class="color-block bg-turquoise-200"><p>200</p></div>
        </div>
        <h3><code>.bg-teal-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-teal-800"><p>800</p></div>
            <div class="color-block bg-teal-700"><p>700</p></div>
            <div class="color-block bg-teal-600"><p>600</p></div>
            <div class="color-block-lg bg-teal-500"><p>500</p></div>
            <div class="color-block bg-teal-400"><p>400</p></div>
            <div class="color-block bg-teal-300"><p>300</p></div>
            <div class="color-block bg-teal-200"><p>200</p></div>
        </div>
        <h3><code>.bg-cyan-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-cyan-800"><p>800</p></div>
            <div class="color-block bg-cyan-700"><p>700</p></div>
            <div class="color-block bg-cyan-600"><p>600</p></div>
            <div class="color-block-lg bg-cyan-500"><p>500</p></div>
            <div class="color-block bg-cyan-400"><p>400</p></div>
            <div class="color-block bg-cyan-300"><p>300</p></div>
            <div class="color-block bg-cyan-200"><p>200</p></div>
        </div>
        <h3><code>.bg-blue-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-blue-800"><p>800</p></div>
            <div class="color-block bg-blue-700"><p>700</p></div>
            <div class="color-block bg-blue-600"><p>600</p></div>
            <div class="color-block-lg bg-blue-500"><p>500</p></div>
            <div class="color-block bg-blue-400"><p>400</p></div>
            <div class="color-block bg-blue-300"><p>300</p></div>
            <div class="color-block bg-blue-200"><p>200</p></div>
        </div>
        <h3><code>.bg-cobalt-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-cobalt-800"><p>800</p></div>
            <div class="color-block bg-cobalt-700"><p>700</p></div>
            <div class="color-block bg-cobalt-600"><p>600</p></div>
            <div class="color-block-lg bg-cobalt-500"><p>500</p></div>
            <div class="color-block bg-cobalt-400"><p>400</p></div>
            <div class="color-block bg-cobalt-300"><p>300</p></div>
            <div class="color-block bg-cobalt-200"><p>200</p></div>
        </div>
        <h3><code>.bg-cornflower-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-cornflower-800"><p>800</p></div>
            <div class="color-block bg-cornflower-700"><p>700</p></div>
            <div class="color-block bg-cornflower-600"><p>600</p></div>
            <div class="color-block-lg bg-cornflower-500"><p>500</p></div>
            <div class="color-block bg-cornflower-400"><p>400</p></div>
            <div class="color-block bg-cornflower-300"><p>300</p></div>
            <div class="color-block bg-cornflower-200"><p>200</p></div>
        </div>
        <h3><code>.bg-indigo-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-indigo-800"><p>800</p></div>
            <div class="color-block bg-indigo-700"><p>700</p></div>
            <div class="color-block bg-indigo-600"><p>600</p></div>
            <div class="color-block-lg bg-indigo-500"><p>500</p></div>
            <div class="color-block bg-indigo-400"><p>400</p></div>
            <div class="color-block bg-indigo-300"><p>300</p></div>
            <div class="color-block bg-indigo-200"><p>200</p></div>
        </div>
        <h3><code>.bg-violet-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-violet-800"><p>800</p></div>
            <div class="color-block bg-violet-700"><p>700</p></div>
            <div class="color-block bg-violet-600"><p>600</p></div>
            <div class="color-block-lg bg-violet-500"><p>500</p></div>
            <div class="color-block bg-violet-400"><p>400</p></div>
            <div class="color-block bg-violet-300"><p>300</p></div>
            <div class="color-block bg-violet-200"><p>200</p></div>
        </div>
        <h3><code>.bg-mulberry-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-mulberry-800"><p>800</p></div>
            <div class="color-block bg-mulberry-700"><p>700</p></div>
            <div class="color-block bg-mulberry-600"><p>600</p></div>
            <div class="color-block-lg bg-mulberry-500"><p>500</p></div>
            <div class="color-block bg-mulberry-400"><p>400</p></div>
            <div class="color-block bg-mulberry-300"><p>300</p></div>
            <div class="color-block bg-mulberry-200"><p>200</p></div>
        </div>
        <h3><code>.bg-deep-purple-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-deep-purple-800"><p>800</p></div>
            <div class="color-block bg-deep-purple-700"><p>700</p></div>
            <div class="color-block bg-deep-purple-600"><p>600</p></div>
            <div class="color-block-lg bg-deep-purple-500"><p>500</p></div>
            <div class="color-block bg-deep-purple-400"><p>400</p></div>
            <div class="color-block bg-deep-purple-300"><p>300</p></div>
            <div class="color-block bg-deep-purple-200"><p>200</p></div>
        </div>
        <h3><code>.bg-purple-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-purple-800"><p>800</p></div>
            <div class="color-block bg-purple-700"><p>700</p></div>
            <div class="color-block bg-purple-600"><p>600</p></div>
            <div class="color-block-lg bg-purple-500"><p>500</p></div>
            <div class="color-block bg-purple-400"><p>400</p></div>
            <div class="color-block bg-purple-300"><p>300</p></div>
            <div class="color-block bg-purple-200"><p>200</p></div>
        </div>
        <h3><code>.bg-light-purple-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-light-purple-800"><p>800</p></div>
            <div class="color-block bg-light-purple-700"><p>700</p></div>
            <div class="color-block bg-light-purple-600"><p>600</p></div>
            <div class="color-block-lg bg-light-purple-500"><p>500</p></div>
            <div class="color-block bg-light-purple-400"><p>400</p></div>
            <div class="color-block bg-light-purple-300"><p>300</p></div>
            <div class="color-block bg-light-purple-200"><p>200</p></div>
        </div>
        <h3><code>.bg-raspberry-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-raspberry-800"><p>800</p></div>
            <div class="color-block bg-raspberry-700"><p>700</p></div>
            <div class="color-block bg-raspberry-600"><p>600</p></div>
            <div class="color-block-lg bg-raspberry-500"><p>500</p></div>
            <div class="color-block bg-raspberry-400"><p>400</p></div>
            <div class="color-block bg-raspberry-300"><p>300</p></div>
            <div class="color-block bg-raspberry-200"><p>200</p></div>
        </div>
        <h3><code>.bg-pink-*</code></h3>
        <div class="jumbotron color-preview">
            <div class="color-block bg-pink-800"><p>800</p></div>
            <div class="color-block bg-pink-700"><p>700</p></div>
            <div class="color-block bg-pink-600"><p>600</p></div>
            <div class="color-block-lg bg-pink-500"><p>500</p></div>
            <div class="color-block bg-pink-400"><p>400</p></div>
            <div class="color-block bg-pink-300"><p>300</p></div>
            <div class="color-block bg-pink-200"><p>200</p></div>
        </div>
        <h2>Text colors</h2>
        <p>Text colors follow the same system as background colors but use the <code>.text-</code> prefix, additionally, the <code>-200</code> and <code>-800</code> color variants are not available.</p>
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
    </div>
</div>
<?php include('footer.php') ?>