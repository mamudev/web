// initial state
// shape: [{ id, quantity }]
const state = {
  sidebarOpen: false
};

// getters
const getters = {
  sidebarOpen: state => state.sidebarOpen
};

// actions
const actions = {
  toggleSidebar ({ commit, state }) {
    commit('TOGGLE_SIDEBAR')
  }
};

// mutations
const mutations = {
  ['TOGGLE_SIDEBAR'] (state) {
    state.sidebarOpen = !state.sidebarOpen
  }
};

export default {
  state,
  getters,
  actions,
  mutations
}
