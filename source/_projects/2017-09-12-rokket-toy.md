---
extends: _layouts.project
section: content
title: Rokket Toy
date: 2017-09-12
tags:
  - Game Development
---

I thought it would be fun to put the little bit of Unity and C# I've been learning into practice with a super simple project. A sort of 2D Kerbal Space Program leveraging Unity's physics engine, free assets, and rapid development cycle.

Here's my wishlist of features:

* [x] Orbit around the planet
* [x] Implement inverse square law for gravity
* [ ] Launch the rocket with angry birds inspired controls
* [ ] Add some particle effects for the rocket exhaust
* [ ] Atmospheric drag when close to the planet
* [ ] Camera moves to keep rocket in view
* [ ] Sound

[Github repository](https://github.com/danielmorgan/rokket)

## Archive

* ## v0.0.2
  * 2017-09-12
  * Click to launch the rocket forward, gravity is applied as a point in the center
  * [Video](/media/projects/2017-09-12-rokket-toy/rokket-0.0.2.webm)
  * [Playable build](/media/projects/2017-09-12-rokket-toy/0.0.2/index.html)

* ## v0.0.3
  * 2017-09-12
  * Made the planet spin and spruced up it's effects, tweaked controls
  * [Video](/media/projects/2017-09-12-rokket-toy/rokket-0.0.3.webm)
  * [Playable build](/media/projects/2017-09-12-rokket-toy/0.0.3/index.html)

* ## v0.0.4
  * 2017-09-13
  * Introduced a line renderer to show variable thrust. And inverse square law gravity so that as the rocket moves away from the planet it will leave the gravity well. I might remove it though. It's more realistic but I don't think it's as fun.
  * [Video](/media/projects/2017-09-12-rokket-toy/rokket-0.0.4.webm)
  * [Playable build](/media/projects/2017-09-12-rokket-toy/0.0.4/index.html)

* ## v0.0.5
  * 2017-09-17
  * Implemented [an equation](https://en.wikipedia.org/wiki/Trajectory_of_a_projectile) to draw a trajectory line where the rocket will go. The equation is only designed to work on a flat surface though, not around a planet.
  * [Video](/media/projects/2017-09-12-rokket-toy/rokket-0.0.5.webm)
  * [Playable build](/media/projects/2017-09-12-rokket-toy/0.0.5/index.html)
