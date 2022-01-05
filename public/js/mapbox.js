console.log(data)
const count = Object.keys(data).length
mapboxgl.accessToken = 'pk.eyJ1Ijoic3F1YWRzdW1hdGVyYSIsImEiOiJja3Zvbm94YzdlOXo3MndxNjN0ajB1YW83In0.Tzjf_iDfer8P1tByQaFv2Q';
const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/squadsumatera/ckvoopqwg6mtn14mzl1ojtlda',
    center: [107.63167466707868, -6.973086866052292],
    zoom: 9

});

const geojson = {
    type: 'FeatureCollection',
    features: []
};
for (let i = 0; i < count; i++) {
    geojson.features.push({
        type: 'Location' + (i + 1),
        geometry: {
            type: 'Point' + (i + 1),
            coordinates: [parseFloat(data[i]['institutions']['latitude_institutions']), parseFloat(data[i]['institutions']['longitude_institutions'])]
        },
        properties: {
            title: data[i]['institutions']['name_institutions'],
            description: data[i]['institutions']['address_institutions']
        }
    })
}
console.log(geojson)
for (const feature of geojson.features) {
    const el = document.createElement('div');
    el.className = 'marker';
    new mapboxgl.Marker(el)
        .setLngLat(feature.geometry.coordinates)
        .setPopup(
            new mapboxgl.Popup({offset: 25}) // add popups
                .setHTML(
                    `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
                )
        )
        .addTo(map);
}
