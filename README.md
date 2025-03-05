# Laravel + Livewire + daisyUI Starter Kit

## Introduction

This [Laravel](https://laravel.com) + [Livewire](https://livewire.laravel.com) + [daisyUI](https://daisyui.com) starter
kit provides a robust, modern starting point for building Laravel applications with a Livewire frontend and daisyUI
components.

This Livewire starter kit utilizes Livewire 3, Laravel [Volt](https://livewire.laravel.com/docs/volt),
[Folio](https://laravel.com/docs/12.x/folio), TypeScript, [Tailwind CSS](https://tailwindcss.com) 4 and daisyUI 5.

Livewire is a powerful way of building dynamic, reactive, frontend UIs using just [PHP](https://php.net). It's a great
fit for teams that primarily use Blade templates and are looking for a simpler alternative to JavaScript-driven SPA
frameworks like React and Vue.

Volt is an elegantly crafted functional API for Livewire that supports single-file components, allowing a component's
PHP logic and Blade templates to coexist in the same file.

Folio is a powerful page based router designed to simplify routing in Laravel applications. With Laravel Folio,
generating a route becomes as effortless as creating a Blade template within your application's resources/views/pages
directory.

daisyUI is a UI component library built on top of Tailwind CSS, which provides ready-made component classes that are
fully themable and composable.

### Motivation

Laravel 12's new starter kits are offered with React/Vue + Inertia + shadcn/ui or Livewire with Flux. While
shadcn/ui is open source, Flux is not. While the new starter kit does include some Flux components for free, the
documentation for these is also paywalled, which doesn't seem right to me. daisyUI is a good component library that's
open source, just like shadcn/ui, and it works with plain HTML, which makes it a great fit for Blade and Livewire
components.

The new starter kits are now simply git repos that can be cloned and worked upon, rather than projects created live by
the installer by adding components like Breeze and Jetstream. This makes it easier for anyone to create and offer any
different combinations of technologies as they see fit.

I've been using daisyUI for a while and I'm building this starter kit with it for my own needs, but I do hope someone
else finds it useful as well.

## Status

This is a very new fork, so at the moment, all we have is pre-installed daisyUI and a redone welcome page. The eventual
goal is to replace as many Flux components with the equivalent daisyUI alternatives as possible and finally removing
Flux entirely.

## Official Documentation

Documentation for all Laravel starter kits can be found on the [Laravel website](https://laravel.com/docs/starter-kits).

Documentation for daisyUI is on the [official website](https://daisyui.com/docs).

Docs specific to this starter kit will be included here.

## Components

The following components are available:

| daisyUI                  | Flux                              | Note                                                       |
| ------------------------ | --------------------------------- | ---------------------------------------------------------- |
| `x-daisyui.navlist`      | `flux:navlist`                    |                                                            |
| `x-daisyui.navlist-item` | `flux:navitem`                    |                                                            |
| `x-daisyui.button`       | `flux:button`                     |                                                            |
| `x-daisyui.link`         | `flux:link`                       |                                                            |
| `x-daisyui.heading`      | `flux:heading`, `flux:subheading` | Can be used for both headings.                             |
| `x-daisyui.separator`    | `flux:separator`                  | `variant` behaves differently; `direction`, `align` added. |

In addition to the explicit attributes (like `variant` and `align`), you can pass in any daisyUI or Tailwind CSS class
name and it will be applied to the component. Other HTML attributes will also be passed as-is.

> **Note:** Not all components will be drop-in replacements. For eg. the Flux button component has variants `danger` and
> `filled`, but daisyUI components have `warning` (or `error`) and `neutral` respectively. See daisyUI docs for more
> info.

## Contributing

Feel free to open issues or send pull requests. The contribution guide for the original starter kit can be found in the
[Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

The code of conduct is based on the original Laravel one found
[here](https://laravel.com/docs/contributions#code-of-conduct). In order to ensure that the community is welcoming to
all, please review and abide by the code.

## License

The Laravel + Livewire + DaisyUI starter kit is open-sourced software licensed under the MIT license.
