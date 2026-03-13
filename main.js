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

        var sections = main.querySelectorAll(".page");
        for (var i = 0; i < sections.length; i++) {
            sections[i].classList.remove("page--active");
        }

        var target = document.getElementById("page-" + pageId);
        if (!target) {
            return;
        }

        target.classList.add("page--active");
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

        var sections = main.querySelectorAll(".page");
        for (var i = 0; i < sections.length; i++) {
            sections[i].classList.remove("page--active");
        }

        var target = document.getElementById("page-" + pageId);
        if (!target) {
            return;
        }

        target.classList.add("page--active");
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
})();
