<template>
    <article class="ck-container">
        <header class="ck-section ck-header" :class="'ck-header-'+cocktail.url">
            <div class="ck-header-title">
                <span class="ck-header-gin">
                    GIN MG
                </span>
                <span class="ck-subheader-classic">
                    CLASSIC
                </span>
                <br>
                <span class="ck-subheader-cocktails">
                    COCKTAILS
                </span>
            </div>
        </header>
        <section class="ck-section ck-sheet-div">

            <div class="ck-sheet-title-div">
                <h1 class="ck-sheet-title">{{ cocktail.name }}</h1>
            </div>
            <div class="ck-sheet-info">
                {{ cocktail.description }}
            </div>
            <div class="ck-sheet-arrow">
                <a href="#ingredients">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                    </svg>
                </a>
            </div>
            <div class="ck-sheet-row" id="ingredients">
                <div class="ck-sheet-info__half ck-sheet-info__ingredients">
                    <h2>INGREDIENTES</h2>

                    <ul>
                        <li v-for="ingredient in cocktail.ingredients"> {{ ingredient.ingredient }} </li>
                    </ul>
                </div>

                <div class="ck-sheet-info__half ck-sheet-info__video">
                    <iframe type="text/html"
                            :src="cocktail.video"
                            frameborder="0"
                            allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>

            <div class="ck-sheet-row">
                <div class="ck-sheet-info__half ck-sheet-info__receipt">
                    <h2>CÓMO ELABORARLO</h2>

                    <ol>
                        <li v-for="recipe in cocktail.recipes"> {{ recipe.recipe }} </li>
                    </ol>

                    <div class="ck-sheet-info__share">
                        <h2>COMPARTE</h2>
                        <br>
                        <span class="ck-sheet-info__icon">
                            <a :href="'https://www.facebook.com/sharer/sharer.php?u=https://ginmg.com/ficha/'+cocktail.url" target="_blank">
                              <img class="icon" src="../../assets/cocktails/face.png" />
                            </a>
                            &nbsp;
                            <a :href="'https://wa.me/?text=https://ginmg.com/ficha/'+cocktail.url" target="_blank">
                              <img class="icon" src="../../assets/cocktails/wa.png" width="45"/>
                            </a>
                            &nbsp;
                            <a :href="'http://www.twitter.com/share?url=https://ginmg.com/ficha/'+cocktail.url" target="_blank">
                              <img class="icon" src="../../assets/cocktails/twt.png" />
                            </a>
                          </span>
                    </div>
                </div>

                <div class="ck-sheet-info__half ck-sheet-info__img">
                    <img :src="'/dist/'+cocktail.foto_sheet">
                </div>
            </div>
            <div class="ck-sheet-row ck-row-swiper">
                <h2>OTROS CÓCTELES</h2>

                <div class="swiper-container">
                    <div class="swiper-button-prev" slot="button-prev"></div>
                    <div class="swiper-button-next" slot="button-next"></div>

                    <swiper class="ck-sheet-swipe-div " :options="swiperOption">
                        <swiper-slide class="ck-sheet-swipe " v-for="(cocktail, key) in cocktails">
                            <a href="#"  @click="getCocktail(cocktail.url)"  >
                                <div class="img-container">
                                    <img :src="'/dist/'+cocktail.foto_gallery" class="img-fluid">
                                </div>
                                <div class="ck-gallery-text">
                                    <span>{{ cocktail.name }}</span>
                                </div>
                            </a>
                        </swiper-slide>
                    </swiper>
                </div>

            </div>

        </section>

    </article>

</template>

<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper'

    export default {
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                swiperOption: {
                    slidesPerView: 3,
                    spaceBetween: 150,
                    slidesPerGroup: 3,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        // when window width is >= 640px
                        1400: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    autoplay: {
                        delay: 5000,
                    },
                }
            }
        },
        computed: {
            cocktails(){
                return this.$store.state.cocktails.cocktails;
            },
            cocktail(){
                return this.$store.state.cocktails.cocktail;
            },
        },
        created() {
            let name = this.$route.params.name;

            this.getCocktail(name);
            this.getCocktails();
        },
        methods: {
            getCocktail(name){
                this.$store.dispatch('getCocktail', { name })
                    .then(success => {
                        console.log(success);
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },

            getCocktails(){
                this.$store.dispatch('getCocktails')
                    .then(() => {
                        console.log('e');
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
        },
        metaInfo () {
            return {
                title: 'Gin MG Classic Cocktails - '+this.cocktail.name,
                meta: [
                    { vmid: 'description', name: 'description', content: this.cocktail.description }
                ]
            }
        }
    }
</script>
