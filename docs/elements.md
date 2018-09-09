---
layout: default
title: Elements
permalink: /elements/
---

<div class="content">
    <div class="container">
        <h1>Fluent Elements</h1>
        <h2>Themes</h2>
        <p>A number of the elements in Rubine will use classes that are of the type <code>[*-]dynamic[-*]</code>, what this means is that these modifier classes do not have a fixed color. Instead, they look at the theme to decide which color they should take on. The theme classes <code>.theme-light</code> and <code>.theme-dark</code> have to be aplied to the <code>body</code>-tag.</p>
        <h2>Accent color</h2>
        <p>Like <code>[*-]dynamic[-*]</code>, Rubine will also provide <code>[*-]accent[-*]</code>-classes. These classes result in Rubine following the color specified with the <code>$accent</code>-variable in the Rubine SASS file. For Rubine 0.1, we haven't yet released this file so you'll have to do with the default blue color Rubine 0.1 is shipping with. Note that the docs use Rubine as accent color and not Blue.</p>
        <h2>Acrylic</h2>
        <p>Rubine introduces the <code>.acrylic</code>-class to make your element have an acrylic effect. This effect will add blur and a noise layer to the element.</p>
        <p>Note that the blur effect only works in Microsoft Edge 17+, Apple Safari and Google Chrome with Experimental Web Features enabled. For more information see <a href="https://caniuse.com/#feat=css-backdrop-filter">Can I Use</a>.</p>
        <div class="acrylic-preview">
            <div class="row">
                <div class="col">
                    <div class="acrylic">
                        <div class="row">
                            <div class="col">
                                <div class="demo-block"><code>.acrylic</code></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Opacity</h2>
        <p>The <code>.opacity-[light|dark|accent]-[20|40|60|80]</code>-can be used to apply a color to the element, mostly to use in combination with <code>.acrylic</code>.</p>
        <div class="acrylic-preview">
            <div class="row">
                <div class="col">
                    <div class="acrylic">
                        <div class="row">
                            <div class="col">
                                <div class="demo-block opacity-light-20"><code>.acrylic .opacity-light-20</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dark-20"><code>.acrylic .opacity-dark-20</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-accent-20"><code>.acrylic .opacity-accent-20</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dynamic-20"><code>.acrylic .opacity-dynamic-20</code></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="demo-block opacity-light-40"><code>.acrylic .opacity-light-40</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dark-40"><code>.acrylic .opacity-dark-40</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-accent-40"><code>.acrylic .opacity-accent-40</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dynamic-40"><code>.acrylic .opacity-dynamic-40</code></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="demo-block opacity-light-60"><code>.acrylic .opacity-light-60</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dark-60"><code>.acrylic .opacity-dark-60</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-accent-60"><code>.acrylic .opacity-accent-60</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dynamic-60"><code>.acrylic .opacity-dynamic-60</code></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="demo-block opacity-light-80"><code>.acrylic .opacity-light-80</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dark-80"><code>.acrylic .opacity-dark-80</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-accent-80"><code>.acrylic .opacity-accent-80</code></div>
                            </div>
                            <div class="col">
                                <div class="demo-block opacity-dynamic-80"><code>.acrylic .opacity-dynamic-80</code></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Shadow</h2>
        <p>Note that shadows won't be visible most of the time when <code>.theme-dark</code> is appliedas they will often appear on dark backgrounds.</p>
        <div class="shadow-preview">
            <div class="row">
                <div class="col">
                    <div class="demo-block acrylic shadow-lg"><code>.shadow-lg</code></div>
                </div>
                <div class="col">
                    <div class="demo-block acrylic shadow-md"><code>.shadow-md</code></div>
                </div>
                <div class="col">
                    <div class="demo-block acrylic shadow-sm"><code>.shadow-sm</code></div>
                </div>
            </div>
        </div>
    </div>
</div>