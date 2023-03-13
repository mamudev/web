<template>
    <transition name="fade">
        <div class="d-none d-lg-block subnav  navbar-expand-md fixed-top" v-if="showSubnav">

            <div class="container-fluid subNavAutenticidad" v-if="showSubnavAutenticidad">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="subnav-pager">
                            <router-link tag="li" class="nav-item principios" to="/autenticidad#principios">
                                Principios
                            </router-link>
                            <router-link tag="li" class="nav-item encontrar" to="/autenticidad#encontrar">
                                Encontrar
                            </router-link>
                            <router-link tag="li" class="nav-item cocteles" to="/autenticidad#cocteles">
                                ¿Cócteles?
                            </router-link>
                        </ul>
                    </div>

                    <div class="col-md-3">

                    </div>
                </div>
            </div>

            <div class="container-fluid subNavPureza" v-if="showSubnavPureza">
                <div class="row">
                    <div class="col-md-3">
                        <div>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <ul class="subnav-pager">
                            <router-link tag="li" class="nav-item tradicion" to="/pureza#tradicion">
                                Tradición
                            </router-link>
                            <router-link tag="li" class="nav-item artesania" to="/pureza#artesania">
                                Artesanía
                            </router-link>
                            <router-link tag="li" class="nav-item ginmg" to="/pureza#ginmg">
                                Gin mg
                            </router-link>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        name: "subnav",

        data() {
            return {
                showSubnav: false,
                showSubnavPureza: false,
                showSubnavAutenticidad: false
            }
        },

        methods: {

            setClasses: function (route) {
                if(route==='inicio'){
                    this.showSubnav= false;
                }

                if(route==='autenticidad'){
                    this.showSubnav= true;
                    this.showSubnavPureza= false;
                    this.showSubnavAutenticidad= true;
                }

                if(route==='pureza'){
                    this.showSubnav= true;
                    this.showSubnavPureza= true;
                    this.showSubnavAutenticidad= false;
                }
            }
        },
        watch: {

            $route (to){
                if (this.$store.state.windowHeight.scrolled) {
                    this.setClasses(to.name);
                }
            },

            '$store.state.windowHeight.scrolled' () {
                if (this.$store.state.windowHeight.scrolled){
                    this.setClasses(this.$route.name);
                } else{
                    this.showSubnav=false;
                }
            }
        },

    }
</script>
