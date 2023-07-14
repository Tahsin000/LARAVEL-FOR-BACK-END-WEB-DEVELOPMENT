<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>

<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>

<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>

<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>


<script nonce="bf7c08de-4eda-4bf0-bdf7-5bebd5ce70d9">
    (function(w, d) {
        ! function(f, g, h, i) {
            f[h] = f[h] || {};
            f[h].executed = [];
            f.zaraz = {
                deferred: [],
                listeners: []
            };
            f.zaraz.q = [];
            f.zaraz._f = function(j) {
                return function() {
                    var k = Array.prototype.slice.call(arguments);
                    f.zaraz.q.push({
                        m: j,
                        a: k
                    })
                }
            };
            for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
            f.zaraz.init = () => {
                var m = g.getElementsByTagName(i)[0],
                    n = g.createElement(i),
                    o = g.getElementsByTagName("title")[0];
                o && (f[h].t = g.getElementsByTagName("title")[0].text);
                f[h].x = Math.random();
                f[h].w = f.screen.width;
                f[h].h = f.screen.height;
                f[h].j = f.innerHeight;
                f[h].e = f.innerWidth;
                f[h].l = f.location.href;
                f[h].r = g.referrer;
                f[h].k = f.screen.colorDepth;
                f[h].n = g.characterSet;
                f[h].o = (new Date).getTimezoneOffset();
                if (f.dataLayer)
                    for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                            ...t[1],
                            ...u[1]
                        })), {}))) zaraz.set(s[0], s[1], {
                        scope: "page"
                    });
                f[h].q = [];
                for (; f.zaraz.q.length;) {
                    const v = f.zaraz.q.shift();
                    f[h].q.push(v)
                }
                n.defer = !0;
                for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => {
                    try {
                        f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                    } catch {
                        f[h]["z_" + x.slice(7)] = w.getItem(x)
                    }
                }));
                n.referrerPolicy = "origin";
                n.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                m.parentNode.insertBefore(n, m)
            };
            ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
</script>

<script src="{{ asset('js/main.js') }}"></script>

<script async src="{{ asset('https://www.googletagmanager.com/gtag/js?id=UA-23581568-13') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="{{ asset(' https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816') }}" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e32ad1e7e24403b","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>