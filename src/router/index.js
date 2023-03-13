import Vue from "vue";
import Router from "vue-router";
import store from "store";
import Meta from "vue-meta";

const Pureza = resolve => require(["components/pages/Pureza.vue"], resolve);
const Autenticidad = resolve =>
  require(["components/pages/Autenticidad.vue"], resolve);
const PoliticaCookies = resolve =>
  require(["components/pages/PoliticaCookies.vue"], resolve);
const PoliticaPrivacidad = resolve =>
  require(["components/pages/PoliticaPrivacidad.vue"], resolve);
const AvisoLegal = resolve =>
  require(["components/pages/AvisoLegal.vue"], resolve);
const EdizioBerezia = resolve =>
  require(["components/pages/EdizioBerezia.vue"], resolve);
const Cocktails = resolve =>
    require(["components/pages/Cocktails.vue"], resolve);
const CocktailsFicha = resolve =>
    require(["components/pages/CocktailsFicha.vue"], resolve);

Vue.use(Router);
Vue.use(Meta);

const router = new Router({
  mode: "history",
  scrollBehavior: function(to, from, savedPosition) {
    if (to.hash) {
      if (document.querySelector(to.hash)) {
        if (store.state.windowHeight.scrolled)
          $("html,body")
            .stop()
            .animate({ scrollTop: $(to.hash).offset().top - 75 }, 1000);
        else
          $("html,body")
            .stop()
            .animate({ scrollTop: $(to.hash).offset().top - 125 }, 1000);
      }
      return false;
    } else {
      $("html,body")
        .stop()
        .animate({ scrollTop: 0 }, 1000);
    }
  },
  routes: [
    {
      path: "/",
      name: "inicio",
      meta: { requiresLegalAge: true, showHeader: true }
    },
    {
      path: "/autenticidad",
      name: "autenticidad",
      component: Autenticidad,
      meta: { requiresLegalAge: true, showFoot: true, showHeader: true }
    },
    {
      path: "/pureza",
      name: "pureza",
      component: Pureza,
      meta: { requiresLegalAge: true, showFoot: true, showHeader: true }
    },
    {
      path: "/politica-cookies",
      name: "politica-cookies",
      component: PoliticaCookies,
      meta: { requiresLegalAge: false, noInicio: true, showFoot: true, showHeader: true }
    },
    {
      path: "/politica-privacidad",
      name: "politica-privacidad",
      component: PoliticaPrivacidad,
      meta: { requiresLegalAge: false, noInicio: true, showFoot: true, showHeader: true }
    },
    {
      path: "/aviso-legal",
      name: "aviso-legal",
      component: AvisoLegal,
      meta: { requiresLegalAge: false, noInicio: true, showFoot: true, showHeader: true }
    },
    {
      path: "/edizio-berezia",
      name: "edizio-berezia",
      component: EdizioBerezia,
      meta: { requiresLegalAge: true, showFoot: true, noInicio: true, showHeader: true }
    },
    {
      path: "/cocktails",
      name: "cocktails",
      component: Cocktails,
      meta: { requiresLegalAge: true, showFoot: false, noInicio: true, showHeader: false }
    },
    {
      path: "/ficha/:name",
      name: "ficha",
      component: CocktailsFicha,
      meta: { requiresLegalAge: true, showFoot: false, noInicio: true, showHeader: false }
    },
    {
      path: "/404",
      meta: { requiresLegalAge: false }
    },
    {
      path: "*",
      redirect: "/404",
      meta: { requiresLegalAge: false }
    }
  ]
});

export default router;
