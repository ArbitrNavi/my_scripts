<script defer>
    jQuery( window ).on( 'elementor/frontend/init', function() {
        if ( typeof elementorFrontend === 'undefined' ) {
            return;
        }

        elementorFrontend.on( 'components:init', function() {
            elementorFrontend.utils.anchors.setSettings( 'selectors.targets', '.dummy-selector' );
        } );
    } );
</script>