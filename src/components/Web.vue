<template>
  <div id="app">
    <edad v-if="!legalAge" @acceptAge="acceptAge"> </edad>
    <nav
      class="navbar navbar-dark fixed-top navbar-expand-lg"
      :class="[{'scrolled':fixedNavbar}, {'responsive': this.$store.state.windowHeight.windowWidth<this.$store.state.windowHeight.responsive}]"
    >
      <cookie-law theme="dark-lime">
        <div slot="message">
           Utilizamos cookies, propias de tipo técnico necesarias para el correcto funcionamiento del sitio web. En cualquier caso, para más información puede acceder a <a href="https://ginmg.com/politica-cookies">Política de Cookies</a>. Asimismo, puedes obtener más información haciendo clic en <a href="https://ginmg.com/politica-cookies">Más información</a>
        </div>
      </cookie-law>

      <div class="navbar-brand" id>
        <ul class="navbar-nav mr-auto">
          <router-link
            tag="div"
            :to="{name: 'autenticidad'}"
            class="nav-item d-none d-lg-block"
            :class="{'active': activeAut }"
            exact
          >
            <a class="nav-link linksHeader" href="#">AUTENTICIDAD</a>
          </router-link>

          <router-link tag="div" to="/" class="nav-img" active-class="active">
            <transition name="fadeIn">
              <img
                id="logoHeader"
                :src="[fixedNavbar ? '/dist/logoBlancoSmall.png': '/dist/logoBlanco.png' ]"
              >
            </transition>
          </router-link>

          <router-link
            tag="div"
            :to="{name: 'pureza'}"
            class="nav-item d-none d-lg-block"
            :class="{'active': activePur }"
            exact
          >
            <a class="nav-link linksHeader" href="#">PUREZA</a>
          </router-link>
        </ul>
      </div>

      <sidebar-toggle class="nav-item d-none d-lg-block"></sidebar-toggle>

      <button
        id="toggler"
        class="navbar-toggler collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#collapsingNavbarMd"
      >
        <img class="openNav" src="../assets/icons/menu.png">
        <img class="closeNav" src="../assets/icons/close.png">
      </button>

      <navbar></navbar>
    </nav>

    <subnav></subnav>

    <containerInicio v-if="!this.$route.meta.noInicio"></containerInicio>

    <router-view></router-view>

    <sidebar></sidebar>

    <back-to-top class="d-lg-none" bottom="20px" right="20px">
      <button type="button" class="btn btn-to-top" style="background-color:black">
        <img class="openNav" src="../assets/icons/angle-up.png">
      </button>
    </back-to-top>

    <foot v-if="!!this.$route.meta.showFoot"></foot>
  </div>
</template>

<script>
const Subnav = () => import("components/partials/subnav.vue");
const Sidebar = () => import("components/partials/sidebar.vue");
const SidebarToggle = () => import("components/partials/sidebarToggle.vue");
const containerInicio = () => import("components/partials/containerInicio.vue");
const navbar = () => import("components/partials/navbar.vue");
const foot = () => import("components/partials/foot.vue");
const edad = () => import("components/Edad.vue");

import BackToTop from "vue-backtotop";
import { TweenMax, Power4 } from "gsap";
import CookieLaw from 'vue-cookie-law';
export default {
  components: {
    CookieLaw,
    edad,
    Sidebar,
    SidebarToggle,
    Subnav,
    containerInicio,
    navbar,
    foot,
    BackToTop
  },

  data() {
    return {
      fixedNavbar: false
    };
  },

  computed: {
    activeAut() {
      return this.$route.name === "autenticidad";
    },

    activePur() {
      return this.$route.name === "pureza";
    },

    showHeader(){
      return this.$route.meta.showHeader;
    },

    legalAge(){
      return this.$store.state.age.legalAge;
    }
  },
  mounted: function() {

    this.$store.commit("getWindowWidth");

    this.$nextTick(function() {
      let that = this;

      window.addEventListener("orientationchange", function() {
        if (!that.$store.state.videos.videoPlay) {
          switch (window.orientation) {
            case -90 || 90:
              that.$router.push("/");
              break;
            default:
              that.$router.push("/");
              break;
          }
        }
      });


        window.addEventListener("scroll", function () {
          that.$store.commit("getWindowWidth");
          that.fixedNavbar = false;

          if (window.scrollY > 1) {
            document.body.className = "scrolled";

            that.$store.commit("changeHeightScrolled");
            that.$store.commit("setScrolled", true);

            TweenMax.to(".linksHeader", 0.8, {
              width: 85,
              margin: "0",
              ease: Power4.easeOut
            });

            if (
                    that.$store.state.windowHeight.windowWidth >
                    that.$store.state.windowHeight.responsive
            ) {
              TweenMax.to("#logoHeader", 0.8, {
                width: 85,
                margin: "10px 0 5px 0",
                ease: Power4.easeOut
              });
              TweenMax.to(".scrolled .iconSidebarMenu, .navbar-toggler", 0.8, {
                width: 35,
                margin: "20px 0 5px 0",
                ease: Power4.easeOut
              });

              that.fixedNavbar = true;
            } else {
              TweenMax.to("#logoHeader", 0.8, {
                width: 125,
                margin: "15px 0 10px",
                ease: Power4.easeOut
              });

              TweenMax.to(".scrolled .iconSidebarMenu, .navbar-toggler", 0.8, {
                width: 50,
                margin: "40px 0 20px",
                ease: Power4.easeOut
              });
            }
          } else {
            document.body.className = "web";

            that.$store.commit("changeHeight");
            that.$store.commit("setScrolled", false);

            TweenMax.to("#logoHeader", 0.8, {
              width: 150,
              margin: "30px 0 20px 0",
              ease: Power4.easeOut
            });

            TweenMax.to(".linksHeader", 0.8, {
              margin: "40px 0 20px 0",
              ease: Power4.easeOut
            });

            TweenMax.to(".scrolled .iconSidebarMenu, .navbar-toggler", 0.8, {
              width: 45,
              margin: "60px 0 20px 0",
              ease: Power4.easeOut
            });

            if (
                    that.$store.state.windowHeight.windowWidth >
                    that.$store.state.windowHeight.responsive
            )
              that.fixedNavbar = false;
          }

          that.$store.commit("checkHeight");
        });

      $(window).on("resize scroll", function() {
        $(".section").each(function() {
          var activeColor = $(this).attr("id");

          if (activeSection($(this))) {
            $("." + activeColor).addClass("active");
          } else {
            $("." + activeColor).removeClass("active");
          }
        });
      });
    });
  },
  methods: {
    acceptAge() {
      document.body.className = "web";

    },
  },
  metaInfo: {
    // if no subcomponents specify a metaInfo.title, this title will be used
    title: 'Gin MG. La ginebra española clásica y extra seca - Web Oficial',
    // if no subcomponents specify a metaInfo.title, this title will be used
    description: 'Gin MG es una ginebra London Dry Gin clásica con una receta elaborada en 1940 por Manuel Giró en MG Destilerías. Una ginebra transparente, translúcida y extra seca. Gin MG. Muy Gin.',
  }
};

function activeSection(div) {
  var elementTop = div.offset().top;
  var elementBottom = elementTop + div.outerHeight();

  var viewportTop = $(window).scrollTop() + 100;
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
}
</script>







