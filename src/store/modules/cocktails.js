import axios from 'axios';

// initial state
const state = {
    cocktails: [],
    cocktail: []
};

// mutations
const mutations = {
    SET_COCKTAILS(state, payload) {
        state.cocktails = payload;
    },
    SET_COCKTAIL(state, payload) {
        state.cocktail = payload;
    },
};

const actions = {
    getCocktails({commit}){
        return new Promise((resolve, reject) => {
            axios.get('https://ginmg.com/api/public/cocktails')
                .then(response => {
                    commit('SET_COCKTAILS', response.data);
                    //resolve(response.data.data);
                })
                .catch(error => {
                    const {message} = error.response.data;
                    reject({message})
                })
        })
    },
    getCocktail({commit}, payload){
        return new Promise((resolve, reject) => {
            const {name} = payload;

            axios.get('https://ginmg.com/api/public/cocktails/'+name)
                .then(response => {
                    commit('SET_COCKTAIL', response.data);
                    //resolve(response.data.data);
                })
                .catch(error => {
                    const {message} = error.response.data;
                    reject({message})
                })
        })
    },
};

export default {
  state,
  mutations,
  actions
};
