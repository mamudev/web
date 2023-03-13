import Vue from 'vue'
import router from 'router'
import store from 'store'
import VueMeta from 'vue-meta'

import Web from './components/Web.vue'
import Edad from './components/Edad.vue'

window.not_found = function () {
	console.log('Not found:' + router.currentRoute.fullPath);

	router.replace('/404');
};

window.not_found_unless = function (condition) {
	if (! condition) {
		not_found();
	}
};

window.clone = function (obj) {
	return JSON.parse(JSON.stringify(obj));
};

Vue.use(VueMeta, {
	// optional pluginOptions
	refreshOnceOnNavigation: true
});

var vm = new Vue({
	el: '#app',
    store,
	router,
	render: function (createElement) {
		//Compruebo si le ha dado al boton de Mayor de Edad para Cargar el layout de la web o la pagina de Edad.
		return createElement(Web);
	}
});
