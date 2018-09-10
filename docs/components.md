---
layout: default
title: Components
permalink: /components/
---

# Components

<p class="lead">Rubine is a project by ChangeWindows with the goal of bringing the Microsoft Fluent Design System to Bootstrap. This project is in a very early stage and there is still much to do. But check out what we already have.</p>

## Navbar

### Acrylic navbar

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