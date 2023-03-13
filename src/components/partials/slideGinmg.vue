<template>
    <div>
        <div id="ginmg" class="row sectionGinMG ginmg1">
            <transition name="fade">
                <img :src="imgSection1" :key="imgSection1" :style="{ height: this.heightginmg1 + 'px'}" class="d-none d-lg-block">
            </transition>
            <img src="../../assets/pureza/ginmg1_1.jpg" class="img-fluid d-lg-none">

            <div class="col-lg-6">
                <h5 class="d-lg-none">PUREZA</h5>
                <h4>Gin MG</h4>

                <div class="strong">
                    NUEVA
                    BOTELLA
                    NO TAN
                    NUEVA.
                </div>

            </div>

            <div class="col-lg-6 txtFirst">
                LA NUEVA BOTELLA DE
                GIN MG ES UN
                HOMENAJE A LA
                BOTELLA ORIGINAL DE
                1940 Y A LA RECETA DE
                ENTONCES QUE HOY
                HEMOS RECUPERADO.
            </div>

        </div>

        <div class="row sectionGinMG ginmg2">
            <transition name="fade">
                <img :src="imgSection2" :key="imgSection2" :style="{ height: this.heightginmg2 + 'px'}" class=" d-none d-lg-block">
            </transition>
            <img src="../../assets/pureza/ginmg2_1.jpg" class="img-fluid d-lg-none">

            <div class="col-lg-6 title">
                CLÁSICA.
            </div>

            <div class="col-lg-6 txt">

                <div class="">
                    Ginebra transparente, translúcida, con el borde
                    acerado y destellos parpadeantes en su fondo
                    limpio y brillante. Un destilado elegante y fino en
                    nariz, con abundancia de notas de enebro y hierba
                    mojada, algo punzante pero muy balsámica y con
                    recuerdos finos de resina. En la boca es una
                    ginebra sabrosa y delicada, muy aromática y con
                    muchos recuerdos de bayas de enebro. Denota un
                    período de destilación ejemplar por la buena
                    integración de su alcohol y la suavidad, redondez
                    y elegancia de su final largo.
                </div>

                <div class="listado">
                    <div class="row">

                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/eye.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En vista presenta un color limpio y brillante,<br>
                            con destellos metálicos en el borde.
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/nose.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En nariz se presenta elegante y fino,<br>
                            con notas a enebro y hierba fresca.
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/mouth.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En boca se presenta sabrosa y sutil,<br>
                            con mucha presencia de las bayas de enebro.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row sectionGinMG ginmg3">
            <transition name="fade">
                <img :src="imgSection3" :key="imgSection3" :style="{ height: this.heightginmg3 + 'px'}" class=" d-none d-lg-block">
            </transition>
            <img src="../../assets/pureza/ginmg3_1.jpg" class="img-fluid d-lg-none">

            <div class="col-lg-6 title">
                FRESA.
            </div>

            <div class="col-lg-6 txt">
                <div>
                    Gin MG Fresa contiene aromas naturales de
                    fresa. Sus ingredientes son 100% naturales: 
					sin artificios, sin aditivos, sin potenciadores.
                </div>

                <div class="listado fresa">

                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/eye.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En vista se presenta de color rosado,<br>
                            limpio y brillante.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/nose.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En nariz desprende un fino sabor a fresa<br>
                            y enebro con una agradable nota cítrica.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="../../assets/icons/mouth.png" class="img-fluid">
                        </div>

                        <div class="col-10 col-lg-11">
                            En boca se presenta fresca, suave y dulce<br>
                            con un característico sabor a fresa.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "slide-pureza",
        components: {

        },
        data() {
            return {
                imgSection1: "/dist/ginmg1.jpg",
                imgSection2: "/dist/ginmg2.jpg",
                imgSection3: "/dist/ginmg3.jpg",

                heightginmg1: 'auto',
                heightginmg2: 'auto',
                heightginmg3: 'auto'
            }
        },
        methods: {
            changeImg1: function () {
                this.imgSection1= (this.imgSection1==="/dist/ginmg1.jpg") ? "/dist/ginmg4.jpg" : "/dist/ginmg1.jpg" ;

                setTimeout(this.changeImg2, 3000);
            },
            changeImg2: function () {
                this.imgSection2= (this.imgSection2==="/dist/ginmg2.jpg") ? "/dist/ginmg5.jpg" : "/dist/ginmg2.jpg" ;

                setTimeout(this.changeImg3, 3000);
            },
            changeImg3: function () {
                this.imgSection3= (this.imgSection3==="/dist/ginmg3.jpg") ? "/dist/ginmg6.jpg" : "/dist/ginmg3.jpg" ;

                setTimeout(this.changeImg1, 9000);
            },

            changeAltura: function () {
                this.heightginmg1= $('.ginmg1').height();
                this.heightginmg2= $('.ginmg2').height();
                this.heightginmg3= $('.ginmg3').height();
            }
        },
        created: function () {
            setTimeout(this.changeImg1, 9000);
            this.changeAltura();

            this.$nextTick(function() {
                let that= this;

                window.addEventListener('resize', function() {
                    that.changeAltura();
                });
            });
        }
    }
</script>