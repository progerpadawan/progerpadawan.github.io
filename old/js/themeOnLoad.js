import { swapStyleSheet } from 'styleSwaper.js';

window.onload = function checkThemeOnLoad(){
	if(localStorage.pagestyle === 'dark.css'){
		swapStyleSheet('../css/dark.css');
		localStorage.pagestyle = 'dark.css';
	}else{
		swapStyleSheet('../css/light.css');
		localStorage.pagestyle = 'light.css';
	}
}