<?php
namespace GoogleAnalytics;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin {
    
    public function _init() {
        $app = App::i();
        
        $trackingID = $this->_config['tracking_id'];
        
        if (preg_match('/^UA-/', $trackingID) !== 1)
            return;
        
        // Load JS & CSS
        $app->hook('mapasculturais.head', function() use ($app, $trackingID) {
            echo "<script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', '$trackingID', 'auto');
              ga('send', 'pageview');

            </script>";
        }, 1000);
        
        
    }

    public function register() {
        
    }
    
}
