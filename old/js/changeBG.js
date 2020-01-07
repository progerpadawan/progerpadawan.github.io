function buttonCheckTheme(){
	if(localStorage.pagestyle === 'dark.css'){
		swapStyleSheet('../css/light.css');
		localStorage.pagestyle = 'light.css';
	}else{
		swapStyleSheet('../css/dark.css');
		localStorage.pagestyle = 'dark.css';
	}
}

		