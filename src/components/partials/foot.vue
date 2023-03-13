<template>
  <div class="container-fluid footer">
    <div class="row d-none d-lg-flex">
      <div class="col-lg-4 copyright">© 2018 Gin MG - All rights reserved.</div>
      <div class="col-lg-4 webConsumo">
        <a
          href="http://www.disfruta-de-un-consumo-responsable.com"
          target="_blank"
          rel="nofollow"
        >www.disfruta-de-un-consumo-responsable.com</a>
        <span>
          40
          <span class="zero">0</span>
        </span>
      </div>
      <div class="col-lg-4 rrss">
        Síguenos –
        <span class="iconSidebar">
          <a href="https://www.facebook.com/ginmg.es/" target="_blank">
            <img
              src="/dist/face_icon.png?c12b1787e8353bed6fff1cb186c63351"
              class="icon"
              title
              style
            >
          </a>
          <a href="https://www.instagram.com/ginmg_es/?hl=es" target="_blank">
            <img src="/dist/insta_icon.png?d4ce3d8e5bd19315a6de63e729345e47" class="icon">
          </a>
          <a href="mailto:GinMG@amergourmet.com" title="GinMG@amergourmet.com" target="_blank">
            <img src="/dist/mail_icon.png?6f12acd78ba2d740e1620b7f1397236d" class="icon">
          </a>
          <a href="https://www.youtube.com/channel/UCT-vKCtv0b6AcLIoQ86zHjw" target="_blank">
            <img src="/dist/youtube_icon.png?f006e94552b146f45c8cfcfc9bfcb606" class="icon">
          </a>
        </span>
      </div>
    </div>

    <div class="row d-lg-none">
      <div class="col-12 webConsumo">
        <a
          href="http://www.disfruta-de-un-consumo-responsable.com"
          target="_blank"
          rel="nofollow"
        >www.disfruta-de-un-consumo-responsable.com</a>
        <span>
          40
          <span class="zero">0</span>
        </span>
      </div>
      <div class="col-12 rrss">
        <span class="iconSidebar">
          <a href="https://www.facebook.com/ginmg.es/" target="_blank">
            <img
              src="/dist/face_icon.png?c12b1787e8353bed6fff1cb186c63351"
              class="icon"
              title
              style
            >
          </a>
          <a href="https://www.instagram.com/ginmg_es/?hl=es" target="_blank">
            <img src="/dist/insta_icon.png?d4ce3d8e5bd19315a6de63e729345e47" class="icon">
          </a>
          <a href="mailto:GinMG@amergourmet.com" title="GinMG@amergourmet.com" target="_blank">
            <img src="/dist/mail_icon.png?6f12acd78ba2d740e1620b7f1397236d" class="icon">
          </a>
          <a href="https://www.youtube.com/channel/UCT-vKCtv0b6AcLIoQ86zHjw" target="_blank">
            <img src="/dist/youtube_icon.png?f006e94552b146f45c8cfcfc9bfcb606" class="icon">
          </a>
        </span>
      </div>
      <div class="col-12 copyright">© 2018 Gin MG - All rights reserved.</div>
    </div>

    <div class="row">
      <div class="col-12 footerLegal">
        <router-link tag="a" to="/aviso-legal">Aviso legal</router-link>
        <span>-</span>
        <router-link tag="a" to="/politica-privacidad">Política de Privacidad</router-link>
        <span>-</span>
        <router-link tag="a" to="/politica-cookies">Política de cookies</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "foot"
};
</script>