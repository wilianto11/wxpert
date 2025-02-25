<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/wxpert.png') }}">


    <title>WXPERT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *,
            :before,
            :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            *,
            :before,
            :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before,
            :after {
                --tw-content: ""
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            button,
            input:where([type=button]),
            input:where([type=reset]),
            input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button,
            [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
    </style>
</head>

<body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/"
                class="relative flex items-center inline-block h-5 h-full font-black leading-none transition-transform duration-300 ease-in-out hover:scale-105">
                <img src="{{ asset('assets/img/wxpert.png') }}" alt="Deskripsi Gambar"
                    class="w-auto h-10 hover:filter hover:invert">
                <span class="ml-0 text-3xl font-bold text-gray-800 hover:text-pink-600 ">XPERT<span
                        class="text-pink-500">.</span></span>
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">

                <a href="#features"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-pink-600">Features</a>
                <a href="#pricing"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-pink-600">Pricing</a>
                <a href="#testimonials"
                    class="font-bold duration-100 transition-color hover:text-pink-600">Testimonials</a>

                @if (Route::has('login'))
                    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="w-full py-2 font-bold text-center text-pink-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="w-full py-2 font-bold text-center text-pink-500">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Get
                                    Started</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
            @if (Route::has('login'))
                <div
                    class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0 hover:text-indigo-600">Dashboard</a>
                    @else<a href="{{ route('login') }}"
                            class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0 hover:text-indigo-600">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full hover:text-pink-600 lg:shadow-none hover:shadow-xl">Get
                                Register</a>
                        @endif
                    @endauth
                    <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block transition-transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 "
                        viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                                <stop stop-color="#E614F2" offset="0%" />
                                <stop stop-color="#FC3832" offset="100%" />
                            </linearGradient>
                            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                                <stop stop-color="#657DE9" offset="0%" />
                                <stop stop-color="#1C0FD7" offset="100%" />
                            </linearGradient>
                            <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                                id="a">
                                <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"
                                    in="shadowBlurOuter1" />
                            </filter>
                            <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                                id="d">
                                <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"
                                    in="shadowBlurOuter1" />
                            </filter>
                            <path
                                d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                                id="b" />
                            <path
                                d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                                id="e" />
                        </defs>
                        <g fill="none" fill-rule="evenodd" opacity=".9">
                            <g transform="rotate(65 416.452 409.167)">
                                <use fill="#000" filter="url(#a)" xlink:href="#b" />
                                <use fill="url(#c)" xlink:href="#b" />
                            </g>
                            <g transform="rotate(29 421.929 414.496)">
                                <use fill="#000" filter="url(#d)" xlink:href="#e" />
                                <use fill="url(#f)" xlink:href="#e" />
                            </g>
                        </g>
                    </svg>
                </div>
            @endauth

            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

    </div>
</header>


<main class="mt-6">
    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1
                    class="relative mb-4 text-3xl font-black leading-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 sm:text-6xl xl:mb-8">
                    Butuh Website Profesional yang Menarik & Powerfull?
                </h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Tingkatkan bisnis dan
                    personal branding Anda dengan website modern.</p>
                <div class="relative mb-8 w-full h-16">
                    <div class="text-5xl font-bold tracking-wide text-animate w-full h-full">
                        <span
                            class="absolute w-full bg-gradient-to-r from-blue-400 via-blue-600 to-blue-800 text-transparent bg-clip-text opacity-0">Website
                            Design</span>
                        <span
                            class="absolute w-full bg-gradient-to-r from-green-400 via-green-600 to-green-800 text-transparent bg-clip-text opacity-0">E-Commerce</span>
                        <span
                            class="absolute w-full bg-gradient-to-r from-yellow-400 via-yellow-600 to-yellow-800 text-transparent bg-clip-text opacity-0">SEO</span>
                        <span
                            class="absolute w-full bg-gradient-to-r from-red-400 via-red-600 to-red-800 text-transparent bg-clip-text opacity-0">Google
                            Ads</span>
                    </div>
                </div>
                <style>
                    @keyframes fadeInOut {
                        0% {
                            opacity: 0;
                            transform: translateY(10px);
                        }

                        10% {
                            opacity: 1;
                            transform: translateY(0);
                        }

                        30% {
                            opacity: 1;
                            transform: translateY(0);
                        }

                        40% {
                            opacity: 0;
                            transform: translateY(-10px);
                        }

                        100% {
                            opacity: 0;
                            transform: translateY(-10px);
                        }
                    }

                    .text-animate span {
                        position: absolute;
                        animation: fadeInOut 8s infinite;
                    }

                    .text-animate span:nth-child(1) {
                        animation-delay: 0s;
                    }

                    .text-animate span:nth-child(2) {
                        animation-delay: 2s;
                    }

                    .text-animate span:nth-child(3) {
                        animation-delay: 4s;
                    }

                    .text-animate span:nth-child(4) {
                        animation-delay: 6s;
                    }
                </style>
                <a href="https://wa.me/085186660723"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0 hover:scale-105 transition duration-300">💡
                    Gratis konsultasi & demo! Klik sekarang! 🔥</a>
                <!-- Integrates with section -->
                <div class="flex-col hidden mt-12 sm:flex lg:mt-24">
                    <p class="mb-4 text-sm font-medium tracking-widest text-gray-500 uppercase">Integrates With</p>
                    <div class="flex">
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-black"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#FF2D20]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Laravel</title>
                            <path
                                d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#5FA04E]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Node.js</title>
                            <path
                                d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#61DAFB]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>React</title>
                            <path
                                d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#06B6D4]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Tailwind CSS</title>
                            <path
                                d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#4E56A6]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Livewire</title>
                            <path
                                d="M12.001 0C6.1735 0 1.4482 4.9569 1.4482 11.0723c0 2.0888.5518 4.0417 1.5098 5.709.2492.2796.544.4843.9649.4843 1.3388 0 1.2678-2.0644 2.6074-2.0644 1.3395 0 1.4111 2.0644 2.75 2.0644 1.3388 0 1.2659-2.0644 2.6054-2.0644.5845 0 .9278.3967 1.2403.8398-.2213-.2055-.4794-.3476-.8203-.3476-1.1956 0-1.3063 1.6771-2.2012 2.1406v4.5097c0 .9145.7418 1.6563 1.6562 1.6563.9145 0 1.6563-.7418 1.6563-1.6563v-5.8925c.308.4332.647.8144 1.2207.8144 1.3388 0 1.266-2.0644 2.6055-2.0644.465 0 .7734.2552 1.039.58-.1294-.0533-.2695-.0878-.4297-.0878-1.1582 0-1.296 1.574-2.1171 2.0937v2.4356c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902V16.371c.3234.4657.6684.8945 1.2774.8945.7955 0 1.093-.7287 1.4843-1.3203.6878-1.4704 1.0743-3.1245 1.0743-4.873C22.5518 4.9569 17.8284 0 12.001 0zm-.5664 2.877c2.8797 0 5.2148 2.7836 5.2148 5.8066 0 3.023-1.5455 5.1504-5.2148 5.1504-3.6693 0-5.2149-2.1274-5.2149-5.1504S8.5548 2.877 11.4346 2.877zM10.0322 4.537a1.9554 2.1583 0 00-1.955 2.1582 1.9554 2.1583 0 001.955 2.1582 1.9554 2.1583 0 001.9551-2.1582 1.9554 2.1583 0 00-1.955-2.1582zm-.3261.664a.9777.9961 0 01.9785.9962.9777.9961 0 01-.9785.996.9777.9961 0 01-.9766-.996.9777.9961 0 01.9766-.9961zM6.7568 15.6935c-1.0746 0-1.2724 1.3542-1.9511 1.9648v1.7813c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902v-3.1817c-.2643-.3237-.5767-.5644-1.0293-.5644Z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#02569B]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Flutter</title>
                            <path
                                d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#47A248]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>MongoDB</title>
                            <path
                                d="M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115-.28-.394-.53-.954-.735-1.44-.036.495-.055.685-.523 1.184-.723.566-4.438 3.682-4.74 10.02-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0111.91 24h.481c.114-1.032.284-2.056.51-3.07.417-.296.604-.463.85-.693a11.342 11.342 0 003.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695-.381-.045-.765-1.76-.765-2.405z" />
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#4479A1]"
                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>MySQL</title>
                            <path
                                d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z" />
                        </svg>
                    </div>
                </div>
                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%"
                            id="linearGradient-1">
                            <stop stop-color="#5C54DB" offset="0%" />
                            <stop stop-color="#6A82E7" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%"
                            filterUnits="objectBoundingBox" id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
                                in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                        opacity=".9" class="transition duration-300 hover:scale-105 hover:opacity-100">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="{{ asset('assets/img/landing-wxpert.png') }}"
                        class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12 transition duration-300 hover:scale-105 hover:opacity-100">
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->
    <!-- fEATURE SECTION START -->
    <section class="py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="mb-10 lg:mb-16 flex justify-center items-center flex-col gap-x-0 gap-y-6 lg:gap-y-0 lg:flex-row lg:justify-between max-md:max-w-lg max-md:mx-auto">
                <div class="relative w-full text-center lg:text-left lg:w-2/4">
                    <h2
                        class="text-4xl font-bold bg-gradient-to-r from-blue-500 to-green-500 bg-clip-text text-transparent leading-[3.25rem] lg:mb-6 mx-auto max-w-max lg:max-w-md lg:mx-0">
                        Nikmati fitur terbaik dengan produk kami!
                    </h2>
                </div>
                <div class="relative w-full text-center  lg:text-left lg:w-2/4">
                    <p class="text-lg font-normal text-gray-500 mb-5">Kami menawarkan berbagai kemudahan untuk
                        menyederhanakan semua transaksi keuangan Anda tanpa syarat tambahan.</p>
                    <a href="https://wa.me/085186660723" target="_blank"
                        class="flex flex-row items-center justify-center gap-2 text-base font-semibold text-indigo-600 lg:justify-start hover:text-indigo-700 ">Konsultasi
                        sekarang gratis!
                    </a>
                </div>
            </div>
            <div
                class="flex justify-center items-center  gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
                <div
                    class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                    <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                        <img src="data:image/png;base64,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"
                            alt="drawing">
                    </div>
                    <h4
                        class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">
                        Desain Fleksibel</h4>
                    <p
                        class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                        Tersedia berbagai template modern dan responsif yang dapat disesuaikan dengan kebutuhan
                        Anda.
                    </p>
                </div>
                <div
                    class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                    <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACbUlEQVR4nO2WMUgbURjH35J7DgVpwbjVqR1c6iKUgmAOHNqpSxenagPt6OKigVZwEKza4uRkhtrRi7kKpvGSS4sQQYgdGm+IiyGkCYjiGKJf+QIt+t675s67xLR9H/zhuPzf/b/fve/uQogsWbJkdWRF9NCT6bhajOgq3KSm42pxKq4+dg3QCc1Hfit0dI0duOmm1SuSAJG/aQcgHRiADIXLqmco90zM6kOnrA9l14TIO6sPnbI+zOK86cCAcwCTLrEXKBu3v7JBK5uDlleAlc1Bi/VhFuc16ZKz5vdIAEylyl5gO3mPA9C2+rNeAbSt/izrwyweQKlib80BvihPRUELnx5xI5RN9pleAbLJPpP1YZbIi705GR/NyfyjDo2gZ4BDI8gB2D4HJtWa3P1bPWDSGruwtH1nRxRyku7e9Qpwku7eFXkxUwBQwx7tATLKhChkXb8v3IG6QY+9AtQNeizyYqZwjDLKhD2AoZRFi+Y2HtZFIecpeuEVAFL0QuTFTKHfUCr2AFFShiiBy6p9DMLY8jA8m39wRePLocZvvL/XP/9aD+eHKCnZA6ySBXZBJRGGRe0NF7AYm4HK55dcwI/kK9/81cQ4D7BK5v8E0IUQtbUgoCqJF7Cfz8Ne3mqE4J1C4TGe2z84aDSFdxaFx3jOL/+3/PcGxK9+IErewntCSbPKWQXoRBGn9c8BFM/OryX2OiOjYVfK+Qlwd67kShJgVO5AQY5QTj7EBfkWAvkatdx9yMYmX7fmQ9auL/G7D+v+A/il/wLgeStGqJ0AI378mYuldqAVcgsQY9ZLgJjcgXB7RkiWLFmySLvqJ9LU6dtZn5U8AAAAAElFTkSuQmCC"
                            alt="shop">
                    </div>
                    <h4
                        class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">
                        E-commerce Terintegrasi</h4>
                    <p
                        class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                        Solusi lengkap untuk bisnis online dengan fitur pembayaran, pengelolaan produk, dan promosi
                        yang mudah
                    </p>
                </div>
                <div
                    class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                    <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACNElEQVR4nO2dMU7DMBSGewkqJpxGlUCJhACBBJm4BwwcgANwjhyBg7B0Q0xl4AbsGTOBDGWpoHGS5+Qv/T7JqtTFUj7ee/azGyYTAAAAAAAAAAAAAAAAANiMS/KFm+UfwSPJF9Hn6DjPv8B1eFit52gro+M8O8F8frLnkmxpIeTuqQwaCPmDND2euiR/XaWQ70+EjB8ZB7Pszbls30rI4cUlEdJXhv/eSkhT+iJlBcjwECFCMjzUECEZHoQIyfCQsoRkeCjqQjI8CBlw05emx9OgNkuXXhbL3s20jYy+sDEUkuGhlyUkw4MQIRkeUpaQDA9F3UiGMzrpQ4iBDMuTPoQYpSm3esDVzX3QQEjkmuEQolXA3ZqQq6NzImQsGb8JaUpfpKzIS1tHhGjtMxw1REeGByFiO3BHytKR4aGoi/WmHKssHRkehIie9FVsDMeX4WGVJXrSV9Fc7CfD+hyjImV1lxHjHKOil/Xzl549t7k3tf4g6/fboIGQ0Af7dTEte2kjAyGCrEdIUZwRIUpCXEP6ImUNLKQgQsaFoi4GQsQgZYlBURcDIWIgRAyEGGHdpa3ZGPYUYtylrRFiI+ThcRk0EBIZhJTaQrLTayJESUhT+iJlRYYIKbVTFkV9ZBBSakcIRX1kKOqldoSwyhoZhJRESM2tk+EjpDC6dWL1O/WtebN1rFVWbXSV1OrVGlvzMv5Y+5AaIREPpHZ1JAP8gxeE5FpCAAAAAAAAAAAAAAAAJtvFJ5ED0fm/Q0tTAAAAAElFTkSuQmCC"
                            alt="positive-dynamic--v1">

                    </div>
                    <h4
                        class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">
                        Optimasi SEO </h4>
                    <p
                        class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                        Meningkatkan visibilitas website di mesin pencari dengan fitur SEO otomatis.
                    </p>
                </div>


                <div
                    class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                    <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            viewBox="0 0 64 64">
                            <linearGradient id="4kXag7aWDZG56P3e36kb0a_43987_gr1" x1="48" x2="48"
                                y1="29.833" y2="35.539" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#6dc7ff"></stop>
                                <stop offset="1" stop-color="#e6abff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0a_43987_gr1)"
                                d="M53.91,30c-0.47,2.84-2.94,5-5.91,5c-2.97,0-5.44-2.16-5.91-5H53.91z"></path>
                            <linearGradient id="4kXag7aWDZG56P3e36kb0b_43987_gr2" x1="21" x2="21"
                                y1="22.833" y2="37.504" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#6dc7ff"></stop>
                                <stop offset="1" stop-color="#e6abff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0b_43987_gr2)"
                                d="M28,23v10c-2.21,0-4,1.79-4,4H14C14,29.27,20.27,23,28,23z"></path>
                            <linearGradient id="4kXag7aWDZG56P3e36kb0c_43987_gr3" x1="32" x2="32"
                                y1="2" y2="61.397" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#1a6dff"></stop>
                                <stop offset="1" stop-color="#c822ff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0c_43987_gr3)"
                                d="M58,29c1.103,0,2-0.897,2-2v-2c0-1.103-0.897-2-2-2H47.483C42.972,16.732,35.734,13,28,13 C14.767,13,4,23.767,4,37s10.767,24,24,24c6.837,0,13.322-2.914,17.878-8H58c1.103,0,2-0.897,2-2v-2c0-1.103-0.897-2-2-2 c0-3.962-2.321-7.382-5.67-9C55.679,36.382,58,32.962,58,29z M58,27H38v-2h20V27z M36,49v2c0,0.686,0.348,1.293,0.876,1.653 C34.185,54.188,31.163,55,28,55c-9.587,0-17.426-7.541-17.949-17h13.05c0.465,2.279,2.484,4,4.899,4c2.757,0,5-2.243,5-5 c0-2.414-1.721-4.434-4-4.899V19.05c3.806,0.206,7.359,1.574,10.287,3.95H38c-1.103,0-2,0.897-2,2v2c0,1.103,0.897,2,2,2 c0,3.962,2.322,7.382,5.67,9C40.322,39.618,38,43.038,38,47C36.897,47,36,47.897,36,49z M28,34c1.654,0,3,1.346,3,3s-1.346,3-3,3 s-3-1.346-3-3S26.346,34,28,34z M27,32.101C25.044,32.5,23.5,34.044,23.101,36h-13.05C10.556,26.874,17.874,19.556,27,19.051V32.101 z M28,59C15.869,59,6,49.131,6,37s9.869-22,22-22c6.594,0,12.795,2.963,16.958,8h-2.701C38.512,19.19,33.35,17,28,17 C16.972,17,8,25.972,8,37s8.972,20,20,20c4.372,0,8.504-1.389,11.983-4h3.113C39.03,56.836,33.645,59,28,59z M58,51H38v-2h20V51z M56,47H40c0-4.072,3.06-7.436,7-7.931V41h2v-1.931C52.94,39.564,56,42.928,56,47z M49,36.931V35h-2v1.931 c-3.94-0.495-7-3.859-7-7.931h16C56,33.072,52.94,36.436,49,36.931z">
                            </path>
                            <linearGradient id="4kXag7aWDZG56P3e36kb0d_43987_gr4" x1="45" x2="45"
                                y1="2" y2="61.397" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#1a6dff"></stop>
                                <stop offset="1" stop-color="#c822ff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0d_43987_gr4)"
                                d="M49.949 17.536L41.465 9.05 40.051 10.464 48.535 18.95z"></path>
                            <linearGradient id="4kXag7aWDZG56P3e36kb0e_43987_gr5" x1="11" x2="11"
                                y1="2" y2="61.397" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#1a6dff"></stop>
                                <stop offset="1" stop-color="#c822ff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0e_43987_gr5)"
                                d="M15.949 10.464L14.535 9.05 6.051 17.536 7.465 18.95z"></path>
                            <linearGradient id="4kXag7aWDZG56P3e36kb0f_43987_gr6" x1="28" x2="28"
                                y1="2" y2="61.397" gradientUnits="userSpaceOnUse"
                                spreadMethod="reflect">
                                <stop offset="0" stop-color="#1a6dff"></stop>
                                <stop offset="1" stop-color="#c822ff"></stop>
                            </linearGradient>
                            <path fill="url(#4kXag7aWDZG56P3e36kb0f_43987_gr6)"
                                d="M28,11c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S25.794,11,28,11z M28,5 c1.103,0,2,0.897,2,2s-0.897,2-2,2s-2-0.897-2-2S26.897,5,28,5z">
                            </path>
                        </svg>

                    </div>
                    <h4
                        class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">
                        Dukungan 24/7</h4>
                    <p
                        class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                        Tim ahli siap membantu Anda kapan saja melalui berbagai kanal komunikasi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- fEATURE SECTION END -->
    <!-- Pricing Section -->
    <div class="relative bg-gray-50 py-16 md:py-24 lg:py-32">
        <div class="max-w-6xl mx-auto text-center">
            <!-- Judul -->
            <p
                class="text-2xl font-semibold uppercase tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
                Our Pricing
            </p>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mt-4">
                Simple, Transparent Pricing for Everyone
            </h2>
            <p class="mt-4 text-lg text-gray-600">Pilih paket terbaik untuk kebutuhan bisnis Anda.</p>
        </div>

        <!-- Pricing Cards -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-6">
            @foreach ($services as $service)
                <div
                    class="relative group p-8 bg-white shadow-lg rounded-2xl border border-gray-200 overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <!-- Header -->
                    <div
                        class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $service->title }}</h3>
                        <p class="mt-2 text-lg text-gray-600">{{ number_format($service->price, 2, ',', '.') }}
                            IDR</p>
                    </div>

                    <!-- Features -->
                    <ul class="mt-6 space-y-4 text-gray-700">
                        <li class="flex items-center group">
                            <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-125 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="group-hover:text-indigo-600 transition-colors duration-300">Super Fast
                                Performance</span>
                        </li>
                        <li class="flex items-center group">
                            <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-125 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="group-hover:text-indigo-600 transition-colors duration-300">User-Friendly
                                Interface</span>
                        </li>
                        <li class="flex items-center group">
                            <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-125 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="group-hover:text-indigo-600 transition-colors duration-300">24/7 Support &
                                Updates</span>
                        </li>
                    </ul>


                    <!-- CTA Button -->
                    <div class="mt-8">
                        <a href="{{ Auth::check() ? route('services.show', $service->slug) : route('login') }}"
                            class="block w-full px-6 py-4 text-lg font-semibold text-center text-white bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-lg shadow-lg hover:scale-105 transition duration-300">
                            Select This Plan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Pricing Section -->



    <!-- End Pricing Section -->

    <!-- Start Testimonials -->
    <div id="testimonials"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex-col items-center">
                <div
                    class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <p
                        class="my-5 text-base font-medium tracking-tight uppercase bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                        Customers Story
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight bg-gradient-to-r from-blue-500 via-teal-500 to-green-500 bg-clip-text text-transparent sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        Testimonials
                    </h2>
                    <p class="my-6 text-xl font-medium text-gray-500">
                        Jangan hanya percaya pada kata-kata kami, lihat sendiri cerita dan pengalaman pelanggan kami
                        yang luar biasa
                    </p>
                </div>
                @if ($testimonials->isNotEmpty())
                    <div
                        class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full">
                        @foreach ($testimonials->chunk(2) as $chunk)
                            <div class="w-full xl:w-1/2 {{ !$loop->first ? 'xl:pl-8' : 'xl:pr-8' }}">
                                @foreach ($chunk as $testimonial)
                                    <blockquote
                                        class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease {{ !$loop->first ? 'mt-16' : '' }}">
                                        <div class="flex flex-col pr-10">
                                            <div class="relative pl-12">
                                                <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                    <path
                                                        d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                                </svg>
                                                <p class="mt-2 text-base text-gray-600">
                                                    {{ $testimonial->message }}</p>
                                                <!-- Rating Stars -->
                                                <div class="mt-2 pl-12 text-yellow-500">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <span
                                                            class="{{ $i <= $testimonial->rating ? 'text-yellow-500' : 'text-gray-300' }}">&#9733;</span>
                                                    @endfor
                                                </div>
                                            </div>

                                            <h3
                                                class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">
                                                {{ $testimonial->user->name }}
                                                <span class="mt-1 text-sm leading-5 text-gray-500 truncate"> -
                                                    {{ $testimonial->user->job_title ?? 'Customer' }}</span>
                                            </h3>
                                        </div>
                                        <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                                            src="{{ !empty($testimonial->user->profile_picture) ? $testimonial->user->profile_picture : asset('assets/img/cat.png') }}"
                                            alt="{{ $testimonial->user->name }}">
                                    </blockquote>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- End Testimonials -->

</main>

<footer class="bg-gray-900 text-white py-6 px-3">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <p class="text-sm flex items-center">
            <img src="{{ asset('assets/img/wxpert.png') }}" alt="Logo" class="h-5 w-5 mr-2 filter invert">
            &copy; 2025 WXPERT.XYZ. All rights reserved.
        </p>
        <div class="flex space-x-4">
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-black"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>GitHub</title>
                <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#FF2D20]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Laravel</title>
                <path
                    d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#5FA04E]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Node.js</title>
                <path
                    d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#61DAFB]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>React</title>
                <path
                    d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#06B6D4]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Tailwind CSS</title>
                <path
                    d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#4E56A6]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Livewire</title>
                <path
                    d="M12.001 0C6.1735 0 1.4482 4.9569 1.4482 11.0723c0 2.0888.5518 4.0417 1.5098 5.709.2492.2796.544.4843.9649.4843 1.3388 0 1.2678-2.0644 2.6074-2.0644 1.3395 0 1.4111 2.0644 2.75 2.0644 1.3388 0 1.2659-2.0644 2.6054-2.0644.5845 0 .9278.3967 1.2403.8398-.2213-.2055-.4794-.3476-.8203-.3476-1.1956 0-1.3063 1.6771-2.2012 2.1406v4.5097c0 .9145.7418 1.6563 1.6562 1.6563.9145 0 1.6563-.7418 1.6563-1.6563v-5.8925c.308.4332.647.8144 1.2207.8144 1.3388 0 1.266-2.0644 2.6055-2.0644.465 0 .7734.2552 1.039.58-.1294-.0533-.2695-.0878-.4297-.0878-1.1582 0-1.296 1.574-2.1171 2.0937v2.4356c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902V16.371c.3234.4657.6684.8945 1.2774.8945.7955 0 1.093-.7287 1.4843-1.3203.6878-1.4704 1.0743-3.1245 1.0743-4.873C22.5518 4.9569 17.8284 0 12.001 0zm-.5664 2.877c2.8797 0 5.2148 2.7836 5.2148 5.8066 0 3.023-1.5455 5.1504-5.2148 5.1504-3.6693 0-5.2149-2.1274-5.2149-5.1504S8.5548 2.877 11.4346 2.877zM10.0322 4.537a1.9554 2.1583 0 00-1.955 2.1582 1.9554 2.1583 0 001.955 2.1582 1.9554 2.1583 0 001.9551-2.1582 1.9554 2.1583 0 00-1.955-2.1582zm-.3261.664a.9777.9961 0 01.9785.9962.9777.9961 0 01-.9785.996.9777.9961 0 01-.9766-.996.9777.9961 0 01.9766-.9961zM6.7568 15.6935c-1.0746 0-1.2724 1.3542-1.9511 1.9648v1.7813c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902v-3.1817c-.2643-.3237-.5767-.5644-1.0293-.5644Z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#02569B]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Flutter</title>
                <path
                    d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#47A248]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>MongoDB</title>
                <path
                    d="M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115-.28-.394-.53-.954-.735-1.44-.036.495-.055.685-.523 1.184-.723.566-4.438 3.682-4.74 10.02-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0111.91 24h.481c.114-1.032.284-2.056.51-3.07.417-.296.604-.463.85-.693a11.342 11.342 0 003.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695-.381-.045-.765-1.76-.765-2.405z" />
            </svg>
            <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:fill-[#4479A1]"
                role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>MySQL</title>
                <path
                    d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z" />
            </svg>
        </div>
    </div>
</footer>

</div>
</div>
</div>
</body>
<script>
    if (document.getElementById('nav-mobile-btn')) {
        document.getElementById('nav-mobile-btn').addEventListener('click', function() {
            if (this.classList.contains('close')) {
                document.getElementById('nav').classList.add('hidden');
                this.classList.remove('close');
            } else {
                document.getElementById('nav').classList.remove('hidden');
                this.classList.add('close');
            }
        });
    }
</script>

</html>
