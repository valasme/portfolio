<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dimitris Valasellis — Software engineer building clean, full-stack applications with Laravel and PHP.">
    <meta name="keywords" content="Dimitris Valasellis, software engineer, Laravel, PHP, full-stack developer, web developer, BasicEMS, MyTasks, MyChat">
    <meta name="author" content="Dimitris Valasellis">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
    <meta name="theme-color" content="#262626">
    <meta name="color-scheme" content="dark">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta property="og:title" content="Dimitris Valasellis">
    <meta property="og:description" content="Software engineer building clean, full-stack applications with Laravel and PHP.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('og.png') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Dimitris Valasellis">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Dimitris Valasellis">
    <meta name="twitter:description" content="Software engineer building clean, full-stack applications with Laravel and PHP.">
    <meta name="twitter:image" content="{{ asset('og.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <title>{{ config('app.name', 'Dimitris Valasellis') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-[#262626] text-white font-sans leading-relaxed min-h-screen antialiased overflow-x-hidden [text-rendering:optimizeLegibility]">
    <div class="loading-bar" id="loading-bar" role="progressbar" aria-label="Page loading" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-live="polite"></div>

    <main class="relative w-full min-h-screen" id="main">
        {{-- Home --}}
        <section class="hidden w-full min-h-screen items-center justify-center page--active" id="page-home" aria-label="Home" style="display: flex;">
            <div class="text-center flex flex-col items-center gap-4 px-6">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-[#3f3f46] shrink-0">
                    <img class="w-full h-full object-cover block" src="{{ asset('image.jpeg') }}" alt="Photo of Dimitris Valasellis" width="96" height="96" loading="eager" decoding="async">
                </div>
                <h1 class="text-[1.75rem] font-semibold tracking-tight text-white">Dimitris Valasellis</h1>
                <p class="text-base text-[#a1a1aa] font-normal">Software Engineer</p>
                <nav class="flex gap-6 mt-2 flex-wrap justify-center" aria-label="Main navigation">
                    <a class="text-[#d4d4d8] no-underline text-[0.9375rem] font-normal underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#projects" data-page="projects">Projects</a>
                    <a class="text-[#d4d4d8] no-underline text-[0.9375rem] font-normal underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#about" data-page="about">About</a>
                    <a class="text-[#d4d4d8] no-underline text-[0.9375rem] font-normal underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#contact" data-page="contact">Contact</a>
                </nav>
            </div>
        </section>

        {{-- Projects --}}
        <section class="hidden w-full min-h-screen items-start justify-start px-6 py-16 max-md:py-12 max-md:px-5 max-sm:py-8 max-sm:px-4" id="page-projects" aria-label="Projects">
            <div class="w-full max-w-160 mx-auto">
                <nav class="mb-8" aria-label="Back navigation">
                    <a class="text-[#a1a1aa] no-underline text-sm font-normal underline-offset-4 inline-block hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-page="home" aria-label="Go back to home">&larr; Back</a>
                </nav>
                <h2 class="text-2xl font-semibold tracking-tight text-white mb-8">Projects</h2>
                <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed mb-8">Due to funding, I&apos;m not able to make every single app I&apos;ve made live yet, so they&apos;re staying on GitHub for now.</p>
                <ul class="flex flex-col gap-8" role="list">
                    <li class="border-b border-[#3f3f46] pb-8" role="listitem">
                        <div class="flex items-baseline justify-between gap-4 mb-2 flex-wrap max-sm:flex-col max-sm:gap-1">
                            <h3 class="text-lg font-semibold text-white">BasicEMS</h3>
                            <a class="text-[0.8125rem] text-[#71717a] no-underline underline-offset-4 shrink-0 hover:underline hover:text-[#d4d4d8] focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9iYXNpYy1lbXMubGFyYXZlbC5jbG91ZA==" target="_blank" rel="noopener noreferrer" aria-label="BasicEMS live demo">Live &rarr;</a>
                        </div>
                        <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed mb-3">An employee management system built with Laravel for very small businesses, providing a simple and reliable way to manage employees, roles, and basic administrative tasks. The project focuses on clarity and practicality, keeping the system lightweight and easy to maintain, and is suitable both for small teams and as a Laravel learning project.</p>
                        <span class="text-[0.8125rem] text-[#71717a] font-normal inline-block">Laravel &middot; PHP</span>
                    </li>
                    <li class="border-b border-[#3f3f46] pb-8" role="listitem">
                        <div class="flex items-baseline justify-between gap-4 mb-2 flex-wrap max-sm:flex-col max-sm:gap-1">
                            <h3 class="text-lg font-semibold text-white">MyTasks</h3>
                            <a class="text-[0.8125rem] text-[#71717a] no-underline underline-offset-4 shrink-0 hover:underline hover:text-[#d4d4d8] focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9naXRodWIuY29tL3ZhbGFzbWUvbXktdGFza3M=" target="_blank" rel="noopener noreferrer" aria-label="MyTasks on GitHub">GitHub &rarr;</a>
                        </div>
                        <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed mb-3">A straightforward task management application built with Laravel for individuals and small teams, offering a simple and dependable way to create, organise, and track tasks. The project prioritises clarity and ease of use, keeping the interface clean and the codebase lightweight, making it ideal for personal productivity or as a hands-on Laravel learning project.</p>
                        <span class="text-[0.8125rem] text-[#71717a] font-normal inline-block">Laravel &middot; PHP</span>
                    </li>
                    <li class="pb-0" role="listitem">
                        <div class="flex items-baseline justify-between gap-4 mb-2 flex-wrap max-sm:flex-col max-sm:gap-1">
                            <h3 class="text-lg font-semibold text-white">MyChat</h3>
                            <a class="text-[0.8125rem] text-[#71717a] no-underline underline-offset-4 shrink-0 hover:underline hover:text-[#d4d4d8] focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9naXRodWIuY29tL3ZhbGFzbWUvbXktY2hhdA==" target="_blank" rel="noopener noreferrer" aria-label="MyChat on GitHub">GitHub &rarr;</a>
                        </div>
                        <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed mb-3">A modern, secure messaging app built with Laravel that keeps things simple and reliable. MyChat focuses on clarity and practicality, providing a lightweight foundation for personal projects or as a learning tool for Laravel development.</p>
                        <span class="text-[0.8125rem] text-[#71717a] font-normal inline-block">Laravel &middot; PHP</span>
                    </li>
                </ul>
            </div>
        </section>

        {{-- About --}}
        <section class="hidden w-full min-h-screen items-start justify-start px-6 py-16 max-md:py-12 max-md:px-5 max-sm:py-8 max-sm:px-4" id="page-about" aria-label="About">
            <div class="w-full max-w-160 mx-auto">
                <nav class="mb-8" aria-label="Back navigation">
                    <a class="text-[#a1a1aa] no-underline text-sm font-normal underline-offset-4 inline-block hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-page="home" aria-label="Go back to home">&larr; Back</a>
                </nav>
                <h2 class="text-2xl font-semibold tracking-tight text-white mb-8">About</h2>
                <div class="flex flex-col gap-4">
                    <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed">I am a software engineer who builds practical, maintainable applications with Laravel. I value clarity, simplicity, and writing code that is easy to understand and work with.</p>
                    <p class="text-[0.9375rem] text-[#a1a1aa] leading-relaxed">My focus is on creating lightweight tools that solve real problems without unnecessary complexity.</p>
                </div>
            </div>
        </section>

        {{-- Contact --}}
        <section class="hidden w-full min-h-screen items-start justify-start px-6 py-16 max-md:py-12 max-md:px-5 max-sm:py-8 max-sm:px-4" id="page-contact" aria-label="Contact">
            <div class="w-full max-w-160 mx-auto">
                <nav class="mb-8" aria-label="Back navigation">
                    <a class="text-[#a1a1aa] no-underline text-sm font-normal underline-offset-4 inline-block hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-page="home" aria-label="Go back to home">&larr; Back</a>
                </nav>
                <h2 class="text-2xl font-semibold tracking-tight text-white mb-8">Contact</h2>
                <p class="text-[0.9375rem] text-[#a1a1aa] mb-6">Get in touch.</p>
                <ul class="flex flex-col gap-3" role="list">
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="bWFpbHRvOnZhbGFzZWxsaXMubWVAZ21haWwuY29t" data-t="dmFsYXNlbGxpcy5tZUBnbWFpbC5jb20=" aria-label="Send email"></a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9naXRodWIuY29tL3ZhbGFzbWU=" target="_blank" rel="noopener noreferrer" aria-label="GitHub profile">GitHub</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9saW5rZWRpbi5jb20vaW4vdmFsYXNlbGxpc2RpbWl0cmlz" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">LinkedIn</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9sZWV0Y29kZS5jb20vdS92YWxhc21lLw==" target="_blank" rel="noopener noreferrer" aria-label="LeetCode profile">LeetCode</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly94LmNvbS92YWxhc2VsbGlz" target="_blank" rel="noopener noreferrer" aria-label="X profile">X</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly90aHJlYWRzLm5ldC9AZHYudmFsYXM=" target="_blank" rel="noopener noreferrer" aria-label="Threads profile">Threads</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly95b3V0dWJlLmNvbS9AdmFsYXNtZQ==" target="_blank" rel="noopener noreferrer" aria-label="YouTube channel">YouTube</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9yZWRkaXQuY29tL3VzZXIvdmFsYXNtZQ==" target="_blank" rel="noopener noreferrer" aria-label="Reddit profile">Reddit</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9pbnN0YWdyYW0uY29tL2R2LnZhbGFz" target="_blank" rel="noopener noreferrer" aria-label="Instagram profile">Instagram</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9waW50ZXJlc3QuY29tL3ZhbGFzZWxsaXNtZQ==" target="_blank" rel="noopener noreferrer" aria-label="Pinterest profile">Pinterest</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9zdGVhbWNvbW11bml0eS5jb20vaWQvdmFsYXNtZQ==" target="_blank" rel="noopener noreferrer" aria-label="Steam profile">Steam</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9uYW1lbWMuY29tL3ZhbGFzbWU=" target="_blank" rel="noopener noreferrer" aria-label="NameMC profile">NameMC</a>
                    </li>
                    <li class="text-[0.9375rem] text-[#d4d4d8]" role="listitem">
                        <a class="text-[#d4d4d8] no-underline underline-offset-4 hover:underline hover:text-white focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-2 focus-visible:rounded-sm" href="#" data-h="aHR0cHM6Ly9ndW5zLmxvbC92YWxhc2VsbGlz" data-t="Z3Vucy5sb2wvdmFsYXNlbGxpcw==" target="_blank" rel="noopener noreferrer" aria-label="guns.lol profile"></a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <script>
    (function () {
        "use strict";

        var VALID_PAGES = ["home", "projects", "about", "contact"];
        var DEFAULT_PAGE = "home";
        var BASE_TITLE = "Dimitris Valasellis";

        var loadingBar = document.getElementById("loading-bar");
        var main = document.getElementById("main");
        var activePage = null;
        var barTimer = null;

        function isValidPage(id) {
            return VALID_PAGES.indexOf(id) !== -1;
        }

        function sanitizePageId(raw) {
            if (typeof raw !== "string") {
                return DEFAULT_PAGE;
            }
            var cleaned = raw.replace(/^#/, "").toLowerCase().trim();
            return isValidPage(cleaned) ? cleaned : DEFAULT_PAGE;
        }

        function parseHash() {
            try {
                return sanitizePageId(window.location.hash);
            } catch (e) {
                return DEFAULT_PAGE;
            }
        }

        function resetBarState() {
            if (barTimer) {
                clearTimeout(barTimer);
                barTimer = null;
            }
            loadingBar.classList.remove(
                "loading-bar--running",
                "loading-bar--finishing",
                "loading-bar--fading"
            );
        }

        function runLoadingBar(callback) {
            if (!loadingBar) {
                if (typeof callback === "function") {
                    callback();
                }
                return;
            }

            resetBarState();
            void loadingBar.offsetHeight;

            loadingBar.setAttribute("aria-valuenow", "0");

            requestAnimationFrame(function () {
                loadingBar.classList.add("loading-bar--running");
                loadingBar.setAttribute("aria-valuenow", "70");

                barTimer = setTimeout(function () {
                    loadingBar.classList.remove("loading-bar--running");
                    loadingBar.classList.add("loading-bar--finishing");
                    loadingBar.setAttribute("aria-valuenow", "100");

                    barTimer = setTimeout(function () {
                        if (typeof callback === "function") {
                            callback();
                        }

                        loadingBar.classList.remove("loading-bar--finishing");
                        loadingBar.classList.add("loading-bar--fading");

                        barTimer = setTimeout(function () {
                            resetBarState();
                            loadingBar.setAttribute("aria-valuenow", "0");
                        }, 450);
                    }, 250);
                }, 500);
            });
        }

        function showPage(pageId) {
            pageId = sanitizePageId(pageId);

            if (activePage === pageId) {
                return;
            }

            if (!main) {
                return;
            }

            var sections = main.querySelectorAll("section");
            for (var i = 0; i < sections.length; i++) {
                sections[i].style.display = "none";
            }

            var target = document.getElementById("page-" + pageId);
            if (!target) {
                return;
            }

            target.style.display = "flex";
            activePage = pageId;

            try {
                window.scrollTo({ top: 0, left: 0, behavior: "instant" });
            } catch (e) {
                window.scrollTo(0, 0);
            }

            updateDocumentTitle(pageId);
            setFocusToPage(target);
        }

        function updateDocumentTitle(pageId) {
            if (pageId === DEFAULT_PAGE) {
                document.title = BASE_TITLE;
            } else {
                var name = pageId.charAt(0).toUpperCase() + pageId.slice(1);
                document.title = name + " \u2014 " + BASE_TITLE;
            }
        }

        function setFocusToPage(section) {
            var heading = section.querySelector("h1, h2");
            if (!heading) {
                return;
            }
            if (!heading.hasAttribute("tabindex")) {
                heading.setAttribute("tabindex", "-1");
            }
            try {
                heading.focus({ preventScroll: true });
            } catch (e) {
                heading.focus();
            }
        }

        function navigate(pageId) {
            pageId = sanitizePageId(pageId);

            if (activePage === pageId) {
                return;
            }

            try {
                if (pageId === DEFAULT_PAGE) {
                    history.pushState(null, "", window.location.pathname);
                } else {
                    history.pushState(null, "", "#" + pageId);
                }
            } catch (e) {
                window.location.hash = pageId === DEFAULT_PAGE ? "" : pageId;
            }

            runLoadingBar(function () {
                showPage(pageId);
            });
        }

        function decodeBase64(str) {
            try {
                return atob(str);
            } catch (e) {
                return "";
            }
        }

        function hydrateObfuscatedLinks() {
            var links = document.querySelectorAll("[data-h]");
            for (var i = 0; i < links.length; i++) {
                var el = links[i];
                var encoded = el.getAttribute("data-h");
                if (encoded) {
                    el.setAttribute("href", decodeBase64(encoded));
                    el.removeAttribute("data-h");
                }
                var encodedText = el.getAttribute("data-t");
                if (encodedText) {
                    el.textContent = decodeBase64(encodedText);
                    el.removeAttribute("data-t");
                }
            }
        }

        function handleLinkClick(e) {
            var node = e.target;
            var link = null;

            while (node && node !== main) {
                if (node.hasAttribute && node.hasAttribute("data-page")) {
                    link = node;
                    break;
                }
                node = node.parentNode;
            }

            if (!link) {
                return;
            }

            var pageId = link.getAttribute("data-page");
            if (!pageId) {
                return;
            }

            e.preventDefault();
            navigate(pageId);
        }

        if (main) {
            main.addEventListener("click", handleLinkClick);

            main.addEventListener("keydown", function (e) {
                if (e.key !== "Enter" && e.key !== " ") {
                    return;
                }

                var node = e.target;
                var link = null;

                while (node && node !== main) {
                    if (node.hasAttribute && node.hasAttribute("data-page")) {
                        link = node;
                        break;
                    }
                    node = node.parentNode;
                }

                if (link && link.tagName !== "A") {
                    e.preventDefault();
                    navigate(link.getAttribute("data-page"));
                }
            });
        }

        window.addEventListener("popstate", function () {
            var pageId = parseHash();
            runLoadingBar(function () {
                showPage(pageId);
            });
        });

        showPage(parseHash());
        hydrateObfuscatedLinks();
    })();
    </script>

    <style>
        .loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 2px;
            width: 100%;
            z-index: 9999;
            pointer-events: none;
            transform-origin: left center;
            transform: scaleX(0);
            background-color: #a1a1aa;
            opacity: 0;
        }
        .loading-bar--running {
            opacity: 1;
            transform: scaleX(0.7);
            transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0s;
        }
        .loading-bar--finishing {
            opacity: 1;
            transform: scaleX(1);
            transition: transform 0.25s cubic-bezier(0, 0, 0.2, 1), opacity 0s;
        }
        .loading-bar--fading {
            opacity: 0;
            transform: scaleX(1);
            transition: opacity 0.4s ease;
        }
        [tabindex="-1"]:focus {
            outline: none;
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
        }
        @media (prefers-contrast: high) {
            .text-\[0\.9375rem\].text-\[\#a1a1aa\] { color: #e4e4e7; }
            .text-\[0\.8125rem\].text-\[\#71717a\] { color: #a1a1aa; }
        }
    </style>
</body>
</html>
