<template>
    <swiper :options="swiperOption" >
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-1.jpg" class="img-fluid">

                <h4>1940</h4>
            </div>

        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-2.jpg" class="img-fluid">

                <h4>1951</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-3.jpg" class="img-fluid">

                <h4>1960</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-4.jpg" class="img-fluid">

                <h4>1975</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-5.jpg" class="img-fluid">

                <h4>1990</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-6.jpg" class="img-fluid">

                <h4>2003</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-7.jpg" class="img-fluid">

                <h4>2013</h4>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="contImg">
                <img src="../../assets/pureza/botellas/ginMG-8.jpg" class="img-fluid">

                <h4>2017</h4>
            </div>
        </swiper-slide>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
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
                    slidesPerView: 1,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    observer: true,
                    observeParents: true,
                    autoplay: {
                        delay: 3000,
                       // disableOnInteraction: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    colors: {
                        white: '#ffffff',
                        black: '#000000',
                    },
                }
            }
        },

    }
</script>

