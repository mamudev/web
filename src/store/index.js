import Vue from 'vue'
import Vuex from 'vuex'

import ui from './modules/ui'
import age from './modules/age'
import videos from './modules/videos'
import windowHeight from './modules/windowHeight'
import cocktails from './modules/cocktails'


Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        ui,
        videos,
        age,
        windowHeight,
        cocktails
    }
});
