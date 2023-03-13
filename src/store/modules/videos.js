// initial state
// shape: [{ id, quantity }]
const state = {
    videoPlay: false
};

// getters
const getters = {
    videoPlay: state => state.videoPlay
};

// actions
const actions = {
    toggleVideoPlay({ commit, state }) {
        commit('TOGGLE_VIDEO_PLAY')
    }
};

// mutations
const mutations = {
    ['TOGGLE_VIDEO_PLAY'] (state) {
        state.videoPlay = !state.videoPlay
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}
