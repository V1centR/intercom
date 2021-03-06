window.Modernizr = function (a, b, c) {
    function d(a) {
        n.cssText = a
    }
    function e(a, b) {
        return typeof a === b
    }
    var f, g, h, i = "2.6.2", j = {}, k = b.documentElement, l = "modernizr", m = b.createElement(l), n = m.style, o = ({}.toString, " -webkit- -moz- -o- -ms- ".split(" ")), p = {}, q = [], r = q.slice, s = function (a, c, d, e) {
        var f, g, h, i, j = b.createElement("div"), m = b.body, n = m || b.createElement("body");
        if (parseInt(d, 10))
            for (; d--; )
                h = b.createElement("div"), h.id = e ? e[d] : l + (d + 1), j.appendChild(h);
        return f = ["&#173;", '<style id="s', l, '">', a, "</style>"].join(""), j.id = l, (m ? j : n).innerHTML += f, n.appendChild(j), m || (n.style.background = "", n.style.overflow = "hidden", i = k.style.overflow, k.style.overflow = "hidden", k.appendChild(n)), g = c(j, a), m ? j.parentNode.removeChild(j) : (n.parentNode.removeChild(n), k.style.overflow = i), !!g
    }, t = {}.hasOwnProperty;
    h = e(t, "undefined") || e(t.call, "undefined") ? function (a, b) {
        return b in a && e(a.constructor.prototype[b], "undefined")
    } : function (a, b) {
        return t.call(a, b)
    }, Function.prototype.bind || (Function.prototype.bind = function (a) {
        var b = this;
        if ("function" != typeof b)
            throw new TypeError;
        var c = r.call(arguments, 1), d = function () {
            if (this instanceof d) {
                var e = function () {
                };
                e.prototype = b.prototype;
                var f = new e, g = b.apply(f, c.concat(r.call(arguments)));
                return Object(g) === g ? g : f
            }
            return b.apply(a, c.concat(r.call(arguments)))
        };
        return d
    }), p.touch = function () {
        var c;
        return"ontouchstart"in a || a.DocumentTouch && b instanceof DocumentTouch ? c = !0 : s(["@media (", o.join("touch-enabled),("), l, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (a) {
            c = 9 === a.offsetTop
        }), c
    };
    for (var u in p)
        h(p, u) && (g = u.toLowerCase(), j[g] = p[u](), q.push((j[g] ? "" : "no-") + g));
    return j.addTest = function (a, b) {
        if ("object" == typeof a)
            for (var d in a)
                h(a, d) && j.addTest(d, a[d]);
        else {
            if (a = a.toLowerCase(), j[a] !== c)
                return j;
            b = "function" == typeof b ? b() : b, "undefined" != typeof enableClasses && enableClasses && (k.className += " " + (b ? "" : "no-") + a), j[a] = b
        }
        return j
    }, d(""), m = f = null, function (a, b) {
        function c(a, b) {
            var c = a.createElement("p"), d = a.getElementsByTagName("head")[0] || a.documentElement;
            return c.innerHTML = "x<style>" + b + "</style>", d.insertBefore(c.lastChild, d.firstChild)
        }
        function d() {
            var a = r.elements;
            return"string" == typeof a ? a.split(" ") : a
        }
        function e(a) {
            var b = q[a[o]];
            return b || (b = {}, p++, a[o] = p, q[p] = b), b
        }
        function f(a, c, d) {
            if (c || (c = b), k)
                return c.createElement(a);
            d || (d = e(c));
            var f;
            return f = d.cache[a] ? d.cache[a].cloneNode() : n.test(a) ? (d.cache[a] = d.createElem(a)).cloneNode() : d.createElem(a), f.canHaveChildren && !m.test(a) ? d.frag.appendChild(f) : f
        }
        function g(a, c) {
            if (a || (a = b), k)
                return a.createDocumentFragment();
            c = c || e(a);
            for (var f = c.frag.cloneNode(), g = 0, h = d(), i = h.length; i > g; g++)
                f.createElement(h[g]);
            return f
        }
        function h(a, b) {
            b.cache || (b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag()), a.createElement = function (c) {
                return r.shivMethods ? f(c, a, b) : b.createElem(c)
            }, a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + d().join().replace(/\w+/g, function (a) {
                return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")'
            }) + ");return n}")(r, b.frag)
        }
        function i(a) {
            a || (a = b);
            var d = e(a);
            return!r.shivCSS || j || d.hasCSS || (d.hasCSS = !!c(a, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), k || h(a, d), a
        }
        var j, k, l = a.html5 || {}, m = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i, n = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i, o = "_html5shiv", p = 0, q = {};
        !function () {
            try {
                var a = b.createElement("a");
                a.innerHTML = "<xyz></xyz>", j = "hidden"in a, k = 1 == a.childNodes.length || function () {
                    b.createElement("a");
                    var a = b.createDocumentFragment();
                    return"undefined" == typeof a.cloneNode || "undefined" == typeof a.createDocumentFragment || "undefined" == typeof a.createElement
                }()
            } catch (c) {
                j = !0, k = !0
            }
        }();
        
        
        /*
        var r = {elements: l.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video", shivCSS: l.shivCSS !== !1, supportsUnknownElements: k, shivMethods: l.shivMethods !== !1, type: "default", shivDocument: i, createElement: f, createDocumentFragment: g};
        a.html5 = r, i(b)
    }(this, b), j._version = i, j._prefixes = o, j.testStyles = s, j
}(this, this.document), window.wm = {hostLogin: "#", utils: {}, constants: {LOGIN_PATH: "https://www2.otimonegocio.com.br/login", LOGIN_PATH_MODAL: "https://www2.otimonegocio.com.br", API_ENDPOINT: "/api", AUTH_ENDPOINT: "https://connect.otimonegocio.com.br", TMX_ORGID: "pbi7ucte", STAY_CONNECTED: !0, LOGGED_IN_COOKIE: "logged-in", COOKIE_REGEXP: new RegExp("logged-in=([^;]*)"), COOKIE_DOMAIN: ".otimonegocio.com.br", LOGGED_IN_CLASS: "logged-in", LOGIN_TIMEOUT: 3e3, API_HOST_ENDPOINT: "https://www2.otimonegocio.com.br", CHECKOUT_ENDPOINT: "//www2.otimonegocio.com.br", WEBSTORE_ENDPOINT: "http://www.otimonegocio.com.br", HTTP_IMAGES_PATH: "//static.wmobjects.com.br/webstore/images", CAPTCHA_KEY: "6LfQ3ewSAAAAAI6Badf0mDrXVAEc6UOTyWL__ByK", THUMB_URL: "//static.wmobjects.com.br/", RETARGETING_RECOMMENDER: "http://rtgforeteller.otimonegocio.com.br", RETARGETING_TRACKING: "#", DEFAULT_LOCALE: "pt_BR", PAGINATION_SIZE: 20, FB_CLIENT_ID: "00000"}, toggles: {global: {miniCart: !0, services: !0, bazaarVoice: !0, userDatalayer: !0, adsRealmedia: !0, searchHistory: !0, loader: {exclude: [/realmedia\.com/i, /omniture/i, /data*.*layer/i, /beacon/i]}, newsletter: {enable: !0, showBanner: !0}}, corporate: {services: !1}, shelf: {buyBox: !0, miniCart: !0, services: !0}, offerList: {services: !1}, notification: {cartSize: {enable: !0, updateOnLogin: !1}}, adsRealmedia: {exclude: []}}, isLoggedIn: function () {
        "use strict";
        var a = wm.constants.COOKIE_REGEXP.exec(document.cookie || "");
        return null !== a
    }, onLoadLoginCheck: function () {
        "use strict";
        if (wm.isLoggedIn()) {
            var a = document.documentElement;
            a.className = a.className + " " + wm.constants.LOGGED_IN_CLASS
        }*/
    }}, wm.onLoadLoginCheck();
