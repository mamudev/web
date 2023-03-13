<template>
  <div
    class="navbar-collapse collapse"
    id="collapsingNavbarMd"
    v-if="
      this.$store.state.windowHeight.windowWidth <
        this.$store.state.windowHeight.responsive
    "
  >
    <div class="autenticidad">
      <router-link
        tag="strong"
        :to="{ name: 'autenticidad' }"
        active-class="active"
        >AUTENTICIDAD</router-link
      >
      <ul class="navbar-nav">
        <router-link tag="li" class="principios" to="/autenticidad#principios"
          >Principios</router-link
        >
        <router-link tag="li" class="encontrar" to="/autenticidad#encontrar"
          >Encontrar</router-link
        >
        <router-link tag="li" class="cocteles" to="/autenticidad#cocteles"
          >¿Cócteles?</router-link
        >
      </ul>
    </div>

    <div class="pureza">
      <router-link tag="strong" :to="{ name: 'pureza' }" active-class="active"
        >PUREZA</router-link
      >
      <ul class="navbar-nav">
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
    </div>

    <div class="pureza">
      <router-link tag="a" to="/edizio-berezia" style="color: inherit; text-transform: uppercase;">
        <strong>Edizio Berezia</strong>
      </router-link>
    </div>

    <div class="pureza">
        <router-link tag="a" to="/cocktails" style="color: inherit; text-transform: uppercase;">
          <strong>¡Haz tu cóctel!</strong>
        </router-link>
    </div>

    <div class="iconNavbar">
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
    </div>
  </div>
</template>

<script>
export default {
  name: "navbar"
};
</script>

<style scoped></style>
