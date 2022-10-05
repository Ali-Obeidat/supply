const checkbox = document.getElementById('toggle-switch');
const toggle_me = document.getElementById('toggle-me');
const Property = document.getElementById('manufacturing-year');
checkbox.onclick = function () {
    checkbox.checked = !checkbox.checked;
    if (checkbox.checked) {

        Property.style.display = 'flex'
        // console.log(toggle_me.checked );
    }
    if (!checkbox.checked) {
        Property.style.display = 'none'
        // console.log(toggle_me.checked );
        // console.log('not hi');
    }
}

$('#one-way-tab').on('click', function () {
    one_way_tab = document.getElementById('one-way-tab')
    round_trip_tab = document.getElementById('round-trip-tab')
    one_way_tab.classList.add("btn-primary");
    round_trip_tab.classList.remove("btn-primary");
    round_trip_tab.style = 'color: #6184F0; padding: 10px !important;font-weight: 600;';
    // one_way_tab.classList.add("active");
    round_trip_tab.classList.remove("active");

})
$('#round-trip-tab').on('click', function () {
    one_way_tab = document.getElementById('one-way-tab')
    round_trip_tab = document.getElementById('round-trip-tab')
    round_trip_tab.classList.add("btn-primary");
    round_trip_tab.style = 'color: #FFFFFFAD; padding: 10px !important;font-weight: 600;';

    one_way_tab.classList.remove("btn-primary");
    // round_trip_tab.classList.add("active");
    one_way_tab.classList.remove("active");


})
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

