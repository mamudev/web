// initial state
const state = {
  legalAge: false
};

// mutations
const mutations = {
  authUser(state) {
    state.legalAge = true;

    localStorage.setItem("legalAge", state.legalAge);
    // sessionStorage.setItem('legalAge', state.legalAge);
  },
  checkLegalAge(state) {
    // Variable solo accesible en esta función (let)
    let legalAge = localStorage.getItem("legalAge");
    // let legalAge = sessionStorage.getItem('legalAge');

    if (legalAge) {
      state.legalAge = true;
    }
  }
};

export default {
  state,
  mutations
};
