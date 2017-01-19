# mapasculturais-googleanalytics
Google Analytics plugin for Mapas Culturais

# Installation and activation

Download and place this plugin inside you plugins folder located at protected/application/plugins and rename its folder to GoogleAnalytics.

Edit your config.php to activate the plugin and inform you Tracking ID: 

```PHP

'plugins' => [

    //... other plugin you may have...
    'mapasculturais-googleanalytics' => [
        'namespace' => 'GoogleAnalytics',
        'config' => [
            'tracking_id' => 'UA-123456'
        ]
    ]
],

```

Your tracking is a string starting with "UA-". In order to get it, visit your Google Analytics panel. Go to the ADMIN tab, then under the "PROPERTY" column click on "Tracking info" and then "Tracking Code".
