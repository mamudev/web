<template>
  <div
    class="sidebar"
    :class="{ scrolled: this.$store.state.windowHeight.scrolled }"
    :style="{ height: this.$store.state.windowHeight.heightSidebar + 'px' }"
  >
    <div class="sidebarText">
      <span>
        <router-link tag="strong" :to="{ name: 'autenticidad' }"
          >AUTENTICIDAD</router-link
        >
        <ul>
          <router-link tag="li" class="principios" to="/autenticidad#principios"
            >Principios</router-link
          >
          <router-link tag="li" class="encontrar" to="/autenticidad#encontrar"
            >Encontrar</router-link
          >
          <router-link tag="li" class="cocteles" to="/autenticidad#cocteles"
            >Perfect Serve</router-link
          >
        </ul>
      </span>

      <span>
        <router-link tag="strong" :to="{ name: 'pureza' }">PUREZA</router-link>
        <ul>
          <router-link tag="li" class="tradicion" to="/pureza#tradicion"
            >Tradición</router-link
          >
          <router-link tag="li" class="artesania" to="/pureza#artesania"
            >Artesanía</router-link
          >
          <router-link tag="li" class="ginmg" to="/pureza#ginmg"
            >Gin MG</router-link
          >
        </ul>
      </span>

      <span
              style="display: block; margin-bottom: 25px; text-transform: uppercase;"
      >
        <router-link tag="a"to="/edizio-berezia">Edizio Berezia</router-link>
      </span>

      <span
              style="display: block; margin-bottom: 25px; text-transform: uppercase;"
      >
        <router-link tag="a" to="/cocktails">¡Haz tu cóctel!</router-link>
      </span>

      <span class="iconSidebar">
        <a href="https://www.facebook.com/ginmg.es/" target="_blank">
          <img class="icon" src="../../assets/icons/face_icon.png" />
        </a>
        <a href="https://www.instagram.com/ginmg_es/?hl=es" target="_blank">
          <img class="icon" src="../../assets/icons/insta_icon.png" />
        </a>
        <a
          href="mailto:GinMG@amergourmet.com"
          title="GinMG@amergourmet.com"
          target="_blank"
        >
          <img class="icon" src="../../assets/icons/mail_icon.png" />
        </a>
        <a
          href="https://www.youtube.com/channel/UCT-vKCtv0b6AcLIoQ86zHjw"
          target="_blank"
        >
          <img class="icon" src="../../assets/icons/youtube_icon.png" />
        </a>
      </span>
    </div>
  </div>
</template>

<script>
import { TweenMax, Power4 } from "gsap";

export default {
  name: "sidebar",

  mounted() {
    TweenMax.set(this.$el, {
      x: this.$el.offsetWidth
    });

    this.$store.commit("checkHeight");

    this.$nextTick(function() {
      let that = this;

      window.addEventListener("resize", function(e) {
        that.$store.commit("checkHeight");
      });

      window.addEventListener("orientationchange", function() {
        that.$store.commit("checkHeight");
      });
    });
  },

  computed: {
    open() {
      return this.$store.state.ui.sidebarOpen;
    }
  },

  watch: {
    open: function(open) {
      const dX = open ? 0 : this.$el.offsetWidth;

      TweenMax.to(this.$el, 0.6, {
        x: dX,
        ease: Power4.easeOut
      });
    }
  }
};
</script>
