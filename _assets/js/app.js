/* 

    +------------------+
    |sn3cf             |
    |p+=*              |
    |-j1               |
    |=+                |
    |f          #  ##  |
    |           # #    |
    |           #  ##  |
    |        #  #    # |
    |         ##   ##  |
    +------------------+
    jsstyle.github.com 

    =============================================

    G5Framework

    =============================================

    TODO : Concatenate & Minify JS Pre-production

    ---------------------------------------------

    00 jQuery 1.9.0

        01 jQuery Metadata
        02 Utility
        03 Tabs

    ==============================================

*/

(function(){

    //Strict within entire scope
    'use strict';

    //App
    var WebApp;

    //Console.log Fallback
    if ( !window.console ) { 
        window.console = function(){
            this.log = function(str) {};
            this.dir = function(str) {};
        };
    }

    //Load Primary Assets (From CDN, fallback to local version)
    yepnope([
        {
            load: [
                '//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'
            ],
            complete: function(){
                if ( !window.jQuery ) {
                    yepnope([
                        {
                            load: [
                                '_assets/js/libs/jquery-1.9.0.min.js'
                            ],
                            complete: function(){
                                console.log('G5: CDN Failed - Loaded local version of jQuery.');
                            }
                        }
                    ]);
                }
            }
        },
        {
            load: [
                '_assets/js/libs/jquery.metadata.js',
                '_assets/js/utility.js',
                '_assets/js/tabs.js',
                '_assets/js/icon-set-polyfill.js'
            ],
            complete: function(){

                //Loaded
                console.log('G5: Primary JS Loaded');

                //Ready
                $(function(){

                    console.log('G5: DOM Ready');

                    //Load Secondary Assets & Add Functionalty
                    //Assets that don't need to be immediately loaded and/or executed
                    WebApp = new G5App;
                    WebApp.init({
                        iOsOrientationChangeFix: true,
                        placeholderFallBack: true,
                        customInput: true,
                        simpleModals: true,
                        jQueryFormValidation: true
                    });

                    (function(){

                        if ( WebApp.cache.body.is('.demo-page') ) {
                            yepnope([
                                {
                                    load: [
                                        '_assets/js/demo-page.js'
                                    ],
                                    complete: function(){
                                        console.log('G5: Demo Page JS Loaded');
                                    }
                                }
                            ]);
                        }

                    }());

                });

            }
        }
        
    ]);

})();
