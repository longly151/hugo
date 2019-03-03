<script type="text/javascript">
    (function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        } /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();

</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/soledad.pencidesign.com\/soledad-coffee-blog\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        },
        "cached": "1"
    };
    /* ]]> */

</script>
<script type='text/javascript' src='/public/client/js/scripts.js'></script>
<script type='text/javascript' src='/public/client/js/demobar.js'></script>
<script type='text/javascript' src='/public/client/js/libs-script.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ajax_var_more = {
        "url": "http:\/\/soledad.pencidesign.com\/soledad-coffee-blog\/wp-admin\/admin-ajax.php",
        "nonce": "074326d12e"
    };
    /* ]]> */

</script>
<script type='text/javascript' src='/public/client/js/main.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ajax_var = {
        "url": "http:\/\/soledad.pencidesign.com\/soledad-coffee-blog\/wp-admin\/admin-ajax.php",
        "nonce": "074326d12e"
    };
    /* ]]> */

</script>
<script type='text/javascript' src='/public/client/js/post-like.js'></script>
<script type='text/javascript' src='/public/client/js/wp-embed.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */

</script>
<script type='text/javascript' src='/public/client/js/forms-api.min.js'></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-103837940-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-103837940-1');

</script>
