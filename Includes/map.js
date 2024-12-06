// Map.js might be used to display a map and list of camping sies
// locations with their coordinates
const locations = [
  { name: 'New York', lat: 40.7128, lng: -74.0060 },
  { name: 'Los Angeles', lat: 34.0522, lng: -118.2437 },
  { name: 'Chicago', lat: 41.8781, lng: -87.6298 },
  // Add more locations as needed
];

// map element and initialize the map
const mapElement = document.getElementById('map');
const map = new google.maps.Map(mapElement, {
  center: { lat: 37.7749, lng: -122.4194 },
  zoom: 4,
  styles: [ // Add some custom styling to the map
    { elementType: 'geometry', stylers: [{ color: '#f5f5f5' }] },
    { elementType: 'labels.text.stroke', stylers: [{ color: '#f5f5f5' }] },
    { elementType: 'labels.text.fill', stylers: [{ color: '#616161' }] },
  ],
});

// Create a list element to hold the location options
const locationList = document.getElementById('location-list');

// Add a click event listener to each location option
locations.forEach((location) => {
  const locationOption = document.createElement('div');
  locationOption.textContent = location.name;
  locationOption.addEventListener('click', () => {
    // Update the map view to show the selected location
    map.setCenter({ lat: location.lat, lng: location.lng });
    map.setZoom(12);
  });
  locationOption.setAttribute('role', 'button'); // Add ARIA attribute for accessibility
  locationOption.setAttribute('aria-label', location.name);
  locationList.appendChild(locationOption);
});