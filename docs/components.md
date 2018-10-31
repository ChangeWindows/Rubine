---
layout: default
title: Components
permalink: /components/
---

# Components

<p class="lead">We're still working on the vast majority of Bootstrap's components, so check back for future versions.</p>

## Buttons

### Default buttons

<button type="button" class="btn btn-accent">Accent</button>
<button type="button" class="btn btn-dynamic">Dynamic</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>

```html
<button type="button" class="btn btn-accent">Accent</button>
<button type="button" class="btn btn-dynamic">Dynamic</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>
```

### Outlines

<button type="button" class="btn btn-outline-accent">Accent</button>
<button type="button" class="btn btn-outline-dynamic">Dynamic</button>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>

```html
<button type="button" class="btn btn-outline-accent">Accent</button>
<button type="button" class="btn btn-outline-dynamic">Dynamic</button>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
```

## Navigation Bar

<div class="alert alert-warning">The Navbar-component is not complete in this release.</div>

In Rubine, the navbar imitates in-app acrylic thanks to the classes mentioned in Style. By adding `acrylic opacity-dynamic-80` as classes to the `nav`-element, the "Dynamic Color" navbar can be made with an acrylic effect that will follow the theme specified at the `body`-element. Scroll this image below to the top to get a clear sense of what the navbar looks like. Beyond that, the navbar also contains `:hover`-states, `.active`-states and more to align with Fluent Design's NavigationBar control.

<nav class="navbar navbar-expand-lg navbar-light acrylic opacity-dynamic-80 mt-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">Dynamic Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark acrylic opacity-dark-80 mt-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">Dark Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light acrylic opacity-light-80 mt-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">Light Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark acrylic opacity-accent-80 mt-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">Accent Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Item</a></li>
            </ul>
        </div>
    </div>
</nav>

## Navigation Pane

<div class="alert alert-warning">The Navview-component is not complete in this release.</div>

The Navigation View component, or Navview for short, is a navigation system often used in the Microsoft Design Language. There are multiple different behaviors to it as well as a number of different looks (Pane and Bar, or better known as the hambruger menu and a more classic menu bar). If you are looking for a Bar-like implementation, please see the Navbar component. The Navview component focuses on the Left Pane implementation.

As an example you can see the navigation used on this documentation. As of Rubine 0.1, there are 2 modes to the Navview. The default behavior as used on all documentation pages or the `.navview-cover`-behavior as used on the home page of our documentation. The first will move the content to the right while the second will cover the content, which also shows off the acrylic material.