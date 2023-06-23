let center = [51.53586801523524,46.00847810717271];

function init() {
	let map = new ymaps.Map('map', {
		center: center,
		zoom: 17
	});
	map.controls.remove('geolocationControl');
	map.controls.remove('searchControl'); 
	map.controls.remove('trafficControl');
	map.controls.remove('typeSelector');
	map.controls.remove('fullscreenControl'); 
	map.controls.remove('zoomControl'); 
	map.controls.remove('rulerControl'); 
	map.behaviors.disable(['scrollZoom']); 
}
ymaps.ready(init);
const d20 = new Date();
console.log(d20.getMonth());
console.log(d20.getDate());
const Month = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'];
function getdateuser(t = new Date()) {
  let D = (t.getDate());
  let M = Month[t.getMonth()];
  return `${D} ${M}`
}
document.getElementById('getdateuser1').innerHTML = getdateuser();
document.getElementById('getdateuser2').innerHTML = getdateuser();
document.getElementById('getdateuser3').innerHTML = getdateuser();
document.getElementById('getdateuser4').innerHTML = getdateuser();
document.getElementById('getdateuser5').innerHTML = getdateuser();
document.getElementById('getdateuser6').innerHTML = getdateuser();

