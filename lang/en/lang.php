<?php return [
    'plugin' => [
        'name' => 'Leaflet',
        'description' => 'Integration of Leaflet',
    ],
    'permissions' => [
        'maps' => [
            'tab' => 'Maps',
            'label' => 'Manage the maps with objects'
        ]
    ],
    'common' => [
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'maps' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Name of the map.',
            'comment' => 'The name should be unique.',
        ],
        'mapbox_id' => [
            'label' => 'Mapbox Map ID',
            'placeholder' => 'username.123abc456',
            'comment' => 'The map id can be copied from Mapbox studio: Classic -> Editor projects.',
        ],
        'mapbox_access_token' => [
            'label' => 'Mapbox Access Token',
            'placeholder' => 'pk.....',
            'comment' => 'The access token can be find on Mapbox studio: Account -> API access tokens.',
        ],
        'form' => [
            'providers' => [
                'heading' => 'Providers',
                'comment' => 'Select one provider that is used to display the map (only Mapbox supported right now).',
            ],
            'mapbox' => [
                'heading' => 'Mapbox',
                'comment' => 'For using Mapbox register at https://www.mapbox.com and create a project under https://www.mapbox.com/studio/classic/projects/. After that insert the map id and your public API token',
            ],
        ],
        'object_count' => 'Object count'
    ],
    'objects' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'A marker.',
            'comment' => 'The name should be unique.',
        ],
        'type' => [
            'label' => 'Type',
            'placeholder' => 'Select an item...',
            'comment' => 'This defines the type of the object.',
            'marker' => 'Marker',
            'circle' => 'Circle',
            'polygon' => 'Polygon',
        ],
        'position' => [
            'label' => 'Position',
            'placeholder' => '12.34, -12.43',
            'comment' => 'The position should be in "latitude,longitude" format, for polygons use "[lat1,long1],[lat2,long2],...".',
        ],
        'parameters' => [
            'label' => 'Parameters',
            'placeholder' => '{color: \'red\'}',
            'comment' => 'The parameters should be in JSON format.',
        ],
        'popup' => [
            'label' => 'Popup',
            'comment' => 'Value of the popup of the object.' ,
        ],
    ],
    'component' => [
        'name' => 'Map',
        'description' => 'Displays a map.',
        'map' => [
            'title' => 'Map',
            'description' => 'Map to display',
        ],
        'show_only_object' => [
            'title' => 'Object/-s',
            'description' => 'Displays only one element or all objects.',
            'all' => 'All'
        ],
        'fieldId' => [
            'title' => 'Element ID',
            'description' => 'Element ID of the map div container.',
        ],
        'height' => [
            'title' => 'Display height',
            'description' => 'Height of the map.',
        ],
        'latitude' => [
            'title' => 'Latitude',
            'description' => 'Latitude of the map frame.',
        ],
        'longitude' => [
            'title' => 'Longitude',
            'description' => 'Latitude of the map frame.',
        ],
        'zoom' => [
            'title' => 'Zoom',
            'description' => 'Initial zoom level of the map.',
        ],

    ]
];