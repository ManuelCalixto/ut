function iniciarMap() {
    let coord = { lat: 18.3487454331945, lng: -100.63327951458747 };
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: coord
    });
    let marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}