<template>
    <div class="container-fluid container-inicio" :style="{ height: this.$store.state.windowHeight.height + 'px'}" >
        <div class="row">

            <router-link tag="div" :to="{name: 'autenticidad'}" class="sections" id="colAutenticidad" :class="[ section1, colAutenticidad]" >

                <div v-if="this.section1==='section1_small' || this.section1==='section1' ">
                    <h1 v-if="(this.$route.name==='inicio') || (this.$store.state.windowHeight.windowWidth>this.$store.state.windowHeight.responsive && this.$route.name==='pureza')">
                        AUTEN-<br>
                        TICIDAD
                    </h1>

                    <h1 v-if="this.$store.state.windowHeight.windowWidth<this.$store.state.windowHeight.responsive && this.$route.name==='pureza' ">
                        AUTENTICIDAD
                    </h1>

                    <i v-if="this.$route.name==='pureza'" class="arrow flaticon-arrows-1"></i>
                </div>

                <template v-if="this.section1==='slide'">
                    <slide-autenticidad></slide-autenticidad>
                    <a class="scroll scrollAutenticidad"><span target="#principios" @click="scrollDown($event)"></span></a>
                </template>

            </router-link>

            <router-link tag="div" :to="{name: 'pureza'}"  class="sections" id="colPureza" :class="[ section2, colPureza ]" >

                <div v-if="this.section2==='section2_small' || this.section2==='section2' ">
                    <i v-if="this.$route.name==='autenticidad'" class="arrow flaticon-arrows"></i>

                    <h1>
                        PUREZA
                    </h1>
                </div>

                <template v-if="this.section2==='slide'">
                    <slide-pureza></slide-pureza>
                    <a class="scroll scrollPureza"><span target="#tradicion" @click="scrollDown($event)"></span></a>
                </template>

            </router-link>

        </div>
    </div>
</template>

<script>
    const slideAutenticidad =  () => import('components/partials/slideAutenticidad.vue');
    const slidePureza =  () => import('components/partials/slidePureza.vue');

    export default {
        name: "container-inicio",
        components: {
            slideAutenticidad, slidePureza
        },
        data() {
            return {
                section1: "section1",
                section2: "section2",
                colAutenticidad: "col-6",
                colPureza: "col-6",
            }
        },

        methods: {
            setClasses: function (route) {
                if(route==='inicio'){
                    this.section1= "section1";
                    this.section2= "section2";

                    this.colAutenticidad="col-6";
                    this.colPureza="col-6";
                }

                if(route==='autenticidad'){
                    this.section2= "section2_small";
                    this.section1= "slide";

                    this.colPureza="col-3";
                    this.colAutenticidad="col-9";
                }

                if(route==='pureza'){
                    this.section2= "slide";
                    this.section1= "section1_small";

                    this.colPureza="col-9";
                    this.colAutenticidad="col-3";
                }
            },

            scrollDown: function(event){
                //event.preventDefault();

                $('html, body').animate({ scrollTop: $($(event.target).attr("target")).offset().top}, 500, 'linear');
            }
        },
        mounted: function () {
            this.setClasses(this.$route.name);


            this.$nextTick(function() {
                let that= this;

                window.addEventListener('resize', function() {
                    that.$store.commit('getWindowWidth');
                    that.setClasses(that.$route.name);
                });
            });
        },
        watch:{
            $route (to){
                this.setClasses(to.name);
            },
        },
    }
</script>

<style scoped>

</style>