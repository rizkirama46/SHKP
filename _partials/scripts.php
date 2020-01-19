    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=default,promise,fetch" ></script>
    <script src="assets/js/vendor/modernizr.min.js" ></script>
    <script src="assets/js/vendor/jquery.min.js" ></script>
    <script src="assets/js/vendor/angular.min.js" ></script>
    <script src="assets/js/vendor/object-fit-images.min.js" ></script>
    <script src="assets/js/vendor/angularPagination.min.js" ></script>
    <script src="assets/js/vendor/datatables.min.js" ></script>
    <script src="assets/js/vendor/highcharts.min.js" ></script>
    <script src="assets/js/vendor/flatpickr.min.js" ></script>
    <script src="assets/js/vendor/jquery.clamp.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/sprintf.min.js" ></script>
    <script src="assets/js/vendor/headroom.min.js" ></script>
    <script src="assets/js/vendor/select2.min.js" ></script>
    <script src="assets/js/vendor/dropzone.min.js" ></script>
    <script src="assets/js/vendor/baze.validate.min.js" ></script>
    <script src="assets/js/vendor/slick.min.js" ></script>
    <script src="assets/js/vendor/clipboard.min.js" ></script>
    <script src="assets/js/vendor/vanila-masker.min.js" ></script>
    <script src="assets/js/vendor/sticky.min.js" ></script>
    <script src="assets/js/vendor/tinymce.min.js" ></script>
    <script src="assets/js/vendor/theme.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="assets/js/main.min.js" ></script>

    <script src="assets/js/vendor/jquery.smartbanner.js"></script>
    <script type="text/javascript">
      $(function() { 
        $.smartbanner({
                title: 'Sharinghappiness', // What the title of the app should be in the banner (defaults to <title>)
                author: 'Rumah Zakat', // What the author of the app should be in the banner (defaults to <meta name="author"> or hostname)
                price: 'FREE', // Price of the app
                appStoreLanguage: 'us', // Language code for App Store
                inAppStore: 'On the App Store', // Text of price for iOS
                inGooglePlay: 'In Google Play', // Text of price for Android
                inAmazonAppStore: 'In the Amazon Appstore',
                inWindowsStore: 'In the Windows Store', // Text of price for Windows
                GooglePlayParams: null, // Aditional parameters for the market
                icon: 'https://sharinghappiness.org/files/icon/logo-192.png', // The URL of the icon (defaults to <meta name="apple-touch-icon">)
                iconGloss: null, // Force gloss effect for iOS even for precomposed
                url: 'https://play.google.com/store/apps/details?id=org.rumahzakat.sharinghappiness&hl=en_US', // The URL for the button. Keep null if you want the button to link to the app store.
                button: 'Download', // Text for the install button
                scale: 'auto', // Scale based on viewport size (set to 1 to disable)
                speedIn: 300, // Show animation speed of the banner
                speedOut: 400, // Close animation speed of the banner
                daysHidden: 0, // Duration to hide the banner after being closed (0 = always show banner)
                daysReminder: 0, // Duration to hide the banner after "VIEW" is clicked *separate from when the close button is clicked* (0 = always show banner)
                force: null, // Choose 'ios', 'android' or 'windows'. Don't do a browser check, just always show this banner
                hideOnInstall: true, // Hide the banner after "VIEW" is clicked.
                layer: false, // Display as overlay layer or slide down the page
                iOSUniversalApp: false, // If the iOS App is a universal app for both iPad and iPhone, display Smart Banner to iPad users, too.      
                appendToSelector: 'body', //Append the banner to a specific selector
                onInstall: function() {
                    alert('Click install');
                    // window.location = "https://play.google.com/store/apps/details?id=org.rumahzakat.sharinghappiness&hl=en_US";
                },
                onClose: function() {
                    alert('Click close');
                }
            });



        // Initialisation
        particlesJS.load('particle-canvas', 'assets/particles.json', function() {
        console.log('callback - particles.js config loaded');
        });
       } )
    </script>

    <script>
        window.onload = function() {
            $('.alert-box').addClass('is-active')
            setTimeout(function () {
                $('.alert-box').removeClass('is-active')
            }, 4500);

        };
    </script>
</body>
</html>
