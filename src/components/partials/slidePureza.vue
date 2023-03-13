<template>
    <swiper class="swipeSlider"  ref="mySwiper" :options="swiperOption" :style="{ height: this.$store.state.windowHeight.height + 'px'}">
        <swiper-slide class="slidePureza1 slide">
            <span class=" d-none d-lg-block">
                UNA BOTELLA NUEVA <br>
                PARA HACER LAS COSAS <br>
                A LA VIEJA USANZA.
            </span>

            <span class="d-lg-none">
                UNA BOTELLA NUEVA
                PARA HACER LAS COSAS
                A LA VIEJA USANZA.
            </span>
        </swiper-slide>
        <swiper-slide class="slidePureza2 slide">
            <span>
                ENEBRO DE <br>
                CAMPOS <br>
                PROPIOS.
            </span>
        </swiper-slide>
        <swiper-slide class="slidePureza3 slide">
            <span>
                LONDON <br>
                DRY GIN <br>
            </span>
        </swiper-slide>
        <swiper-slide class="slidePureza4 slide">
            <span class=" d-none d-lg-block">
                MUCHO QUE <br>
                CONTAR
            </span>

            <span class="d-lg-none">
                MUCHO QUE
                CONTAR
            </span>
        </swiper-slide>

        <div class="swiper-pagination2" slot="pagination"></div>
    </swiper>
</template>

<script>

    import { swiper, swiperSlide } from 'vue-awesome-swiper'

    export default {
        name: "slide-pureza",
        components: {
            swiper,
            swiperSlide
        },
        data() {
            var that= this;

            return {
                swiperOption: {
                    pagination: {
                        el: '.swiper-pagination2',
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
        }
    }
</script>

