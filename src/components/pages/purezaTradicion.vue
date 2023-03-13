<template>
    <div id="tradicion" class="row sectionTradicion section">

        <div class="col-md-12 ">
            <h5 class="d-lg-none">PUREZA</h5>
            <h4 class="d-none d-lg-block">Tradición</h4>
            <h4 class="d-lg-none">Tradición</h4>

            <div class="bold d-none d-lg-block">
                LA HISTORIA DE NUESTRA GINEBRA EMPIEZA CON LA
                FUNDACIÓN DE MG DESTILERÍAS EN 1835. MÁS TARDE,
                EN 1940, EMPEZAMOS A ELABORAR UNA DE LAS PRIMERAS
                GINEBRAS DEL PAÍS. AHORA, CON LA EXPERIENCIA DE 75 AÑOS
                Y MÁS DE CINCO GENERACIONES COMPROMETIDAS CON LA
                TRADICIÓN, LA INNOVACIÓN Y LA CALIDAD, VOLVEMOS A
                NUESTROS VALORES TRADICIONALES RECUPERANDO LA
                RECETA ORIGINAL DE 1940: CON ALCOHOL DE CEREALES,
                ENEBRO DE CAMPOS PROPIOS, ELABORACIÓN TRADICIONAL EN
                ALAMBIQUE DE COBRE Y UNA GRADUACIÓN DE 40% VOL.
            </div>

            <div class="bold d-lg-none">
                LA HISTORIA DE NUESTRA
                GINEBRA EMPIEZA CON LA
                FUNDACIÓN DE MG
                DESTILERÍAS EN 1835.
            </div>

            <div class="bold d-lg-none">
                MÁS TARDE, EN 1940, EMPEZAMOS A ELABORAR
                UNA DE LAS PRIMERAS GINEBRAS DEL PAÍS.
                AHORA, CON LA EXPERIENCIA DE 75
                AÑOS Y MÁS DE CINCO GENERACIONES
                COMPROMETIDAS CON LA TRADICIÓN, LA
                INNOVACIÓN Y LA CALIDAD, VOLVEMOS A NUESTROS
                VALORES TRADICIONALES RECUPERANDO LA RECETA
                ORIGINAL DE 1940: CON ALCOHOL DE CEREALES,
                ENEBRO DE CAMPOS PROPIOS, ELABORACIÓN
                TRADICIONAL EN ALAMBIQUE DE COBRE
                Y UNA GRADUACIÓN DE
                40% VOL.
            </div>
        </div>

        <div class="row imagenes d-none d-lg-flex">

            <div class="offset-md-2 col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-1.jpg" class="img-fluid">
                </div>

                <h4>1940</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-2.jpg" class="img-fluid">
                </div>

                <h4>1951</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-3.jpg" class="img-fluid">
                </div>

                <h4>1960</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-4.jpg" class="img-fluid">
                </div>

                <h4>1975</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-5.jpg" class="img-fluid">
                </div>

                <h4>1990</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-6.jpg" class="img-fluid">
                </div>

                <h4>2003</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-7.jpg" class="img-fluid">
                </div>

                <h4>2013</h4>
            </div>

            <div class="col-md-1">
                <div class="contImg">
                    <img src="../../assets/pureza/botellas/ginMG-8.jpg" class="img-fluid">
                </div>

                <h4>2017</h4>
            </div>
        </div>

        <slide-botellas class="d-lg-none"></slide-botellas>
    </div>

</template>

<script>
    const slideBotellas = () => import('components/partials/slideBotellas.vue');

    export default {
        name: "pureza-tradicion",
        components: {
            slideBotellas
        },
    }
</script>

<style scoped>

</style>