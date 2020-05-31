<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/js/pixeladmin.min.js')}}"></script>
{{--navbar--}}
<script>
        var file = String(document.location).split('/').pop();

        // Remove unnecessary file parts
        file = file.replace(/(\.html).*/i, '$1');

        if (!/.html$/i.test(file)) {
            file = 'index.html';
        }

        // Activate current nav item
        $('body > .px-nav')
            .find('.px-nav-item > a[href="' + file + '"]')
            .parent()
            .addClass('active');

        $('body > .px-nav').pxNav();
        $('body > .px-footer').pxFooter();

        $('#navbar-notifications').perfectScrollbar();
        $('#navbar-messages').perfectScrollbar();
</script>
@stack('custom_js')
