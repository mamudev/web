<template>
    <swiper class="swipeSlider" :options="swiperOption" :style="{ height: this.$store.state.windowHeight.height + 'px'}">
        <swiper-slide class="slideAutenticidad1 slide">
            <span>
                DEJA DE <br>
                MOLAR
            </span>
        </swiper-slide>
        <swiper-slide class="slideAutenticidad2 slide">
            <span>
                FUERA<br>
                POSES
            </span>
        </swiper-slide>
        <swiper-slide class="slideAutenticidad3 slide">
            <span>
                SIM-PLI- <br>
                FI-CA <br>
            </span>
        </swiper-slide>
        <swiper-slide class="slideAutenticidad4 slide">
            <span>
                NADA QUE <br>
                ESCONDER
            </span>
        </swiper-slide>

        <div class="swiper-pagination" slot="pagination"></div>
    </swiper>
</template>

<script>

    import { swiper, swiperSlide } from 'vue-awesome-swiper'

    export default {
        name: "slide-autenticidad",
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                swiperOption: {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    observer: true,
                    width: (window.innerWidth - (window.innerWidth*25/100)),
                    observeParents: true,
                    autoplay: {
                        delay: 3000,
                        //disableOnInteraction: true
                    },
                }
            }
        },
    }
</script>

