const city = document.getElementById('city');
const district = document.getElementById('district');

limitDistricts(city.value);

city.addEventListener('change', handleCityChange);

function limitDistricts(cityId) {
  for (let i = 0; i < district.options.length; i++) {
    district.options[i].classList.remove('d-none');
    if (district.options[i].getAttribute('data-city-id') != cityId && district.options[i].getAttribute('data-city-id') != null) {
      district.options[i].classList.add('d-none');
    }
  }
}

function handleCityChange(event) {
  limitDistricts(event.target.value);
  district.remove(district.selectedIndex);
  district.selected=null;
  district.value=null;
}


