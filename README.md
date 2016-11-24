# Octobercms Leaflet Integration Plugin

# Introduction

[Leaflet](http://leafletjs.com ) is "an open-source JavaScript library
                                         for mobile-friendly interactive maps"
# Supported
                               
* Map
* Provider:
  * Mapbox
* Layers:
  * Marker
  * Circle
  * Polygon
* Popups  


# Example

This example is build on [quick start](http://leafletjs.com/examples/quick-start/) example from leaflet.

## Mapbox
1. You require an [Mapbox](https://www.mapbox.com/studio/) account.
1. Navigate to Classic -> Mapbox Editor Projects
1. Create a new Mapbox Editor project
1. After you choose the style, save the project
1. In the projects overview, you'll see your project id, that is required later
1. You also need an API access token. You can find it under Account -> API access token

## Create a new map
 
1. Navigate to Maps, in Octobercms backend.
1. Create a new map
1. Insert a name and copy and paste your Mapbox project id and your API access token.
1. After that you can add objects at the buttom.
1. Possible parameters for objects can be found on [Leaflet documentation](http://leafletjs.com/reference-1.0.2.html). 

## Display map

1. Open a cms page
1. Add map component 
1. Select the map, that you want to display and set the properties.
1. Include the `{% component 'map' %}` in the cms page.


