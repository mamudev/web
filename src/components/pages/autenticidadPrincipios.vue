<template>
    <div class="row sectionPrincipios section" id="principios">

        <div class="col-md-12 ">
            <h5 class="d-lg-none">AUTENTICIDAD</h5>
            <h4>Principios</h4>

            <div class="bold">
                SI GIN MG FUERA UNA GINEBRA <span>HIPSTER</span> SEGURAMENTE
                VENDERÍAMOS MUCHAS MÁS BOTELLAS. SI LA ANUNCIARA
                GENTE JOVEN Y A LA MODA CON GINTONICS QUE PARECEN
                ENSALADAS, SEGURAMENTE SERÍA CONOCIDA MÁS ALLÁ DE
                LOS BARES DE TODA LA VIDA DÓNDE SE SUELE SERVIR.
            </div>

            <div>
                No es que nos guste complicarnos la vida haciendo las cosas como hace años, es que nosotros somos irremediablemente de
                otra época y eso, por mucho que parezca un contrasentido, no tiene nada que ver con la edad. Mayores y jóvenes, en Gin MG
                somos todos de esa otra época en la que no era necesario demostrar quién es uno colgando fotos en las redes sociales. Así
                que hacemos las cosas tal como nos gustan, preservando la autenticidad y la originalidad de nuestra ginebra al margen de las
                tendencias y las modas, siguiendo nada más que nuestros propios principios.
            </div>
        </div>

        <div class="wrapper video d-none d-lg-block">
            <video @click="playVideo()" poster="/dist/postervideo.png" ref="videoRef" width="100%" height="100%">
                <source src="/dist/ginmgspot.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <transition name="fadeIn">
                <div @click="playVideo()" v-if="!this.$store.state.videos.videoPlay" class="playpause"></div>
            </transition>
        </div>

        <div class="wrapper video d-lg-none">
            <video @click="playVideo()" poster="/dist/postervideo.png" ref="videoRef2" preload="metadata" width="100%" height="100%">
                <source src="/dist/ginmgspotphone.m4v" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <transition name="fadeIn">
                <div @click="playVideo()" v-if="!this.$store.state.videos.videoPlay" class="playpause"></div>
            </transition>
        </div>
    </div>
</template>

<script>
    export default {
        name: "autenticidad-principios",
        methods: {
            playVideo: function(){
                this.$store.dispatch('toggleVideoPlay');

                if (this.$store.state.videos.videoPlay){
                    if (this.$store.state.windowHeight.windowWidth>this.$store.state.windowHeight.responsive)
                        this.$refs.videoRef.play();
                    else
                        this.$refs.videoRef2.play();
                } else{
                    if (this.$store.state.windowHeight.windowWidth>this.$store.state.windowHeight.responsive)
                        this.$refs.videoRef.pause();
                    else
                        this.$refs.videoRef2.pause();
                }
            }
        },
    }
</script>

<style scoped>

</style>