// initial state
const state = {
    scrolled: false,
    height: 0,
    heightSidebar: 0,
    navbarHeight: 165,

    windowWidth: 0,
    responsive: 991
};

// mutations
const mutations = {
    checkHeight(state) {

        state.height = ((window.innerHeight-165)<575) ? 575 : (window.innerHeight-165);
        state.heightSidebar = (window.innerHeight-state.navbarHeight);
    },

    changeHeightScrolled(state) {
        state.navbarHeight = 80;
    },

    changeHeight(state) {
        state.navbarHeight = 165;
    },

    setScrolled(state, value){
        state.scrolled=value;
    },

    getWindowWidth(state) {
        state.windowWidth = window.innerWidth;
    },
};

export default {
    state,
    mutations
}
