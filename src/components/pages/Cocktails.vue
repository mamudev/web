<template>
    <article class="ck-container">
        <header class="ck-section ck-header ">
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
        <section class="ck-section ck-gallery-div">
            <div class="ck-title">
                <span>NO SABÍAS LO QUE PODÍA HACER</span><br>
                <span class="red">TU GIN DE SIEMPRE</span>
            </div>

            <div class="ck-gallery container">
                <div class="ck-gallery-row row">
                    <div class="ck-gallery-cocktel col-lg-3" v-for="(cocktail, key) in cocktails">
                        <router-link :to="'ficha/'+cocktail.url"  >
                            <div class="img-container">
                                <img :src="'/dist/'+cocktail.foto_gallery" class="img-fluid">
                            </div>
                            <div class="ck-gallery-text" :class="{ 'corpse-reviver': cocktail.name==='CORPSE REVIVER Nº2' }">
                                <span>{{ cocktail.name }}</span>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
        </section>
    </article>

</template>

<script>

    export default {
        computed: {
            cocktails(){
                return this.$store.state.cocktails.cocktails;
            },
        },
        created() {
            this.getCocktails();
        },
        methods: {
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
        metaInfo: {
            // if no subcomponents specify a metaInfo.title, this title will be used
            title: 'Gin MG Classic Cocktails',
            // if no subcomponents specify a metaInfo.title, this title will be used
            description: 'Gin MG Classic Cocktails es una selección de recetas de cócteles clásicos hechos con ginebra. ¡Por que no sabías lo que podía hacer tu gin de siempre!',
        }
    }
</script>