<template>
    <div class="container-fluid containerAutenticidad" >

        <autenticidad-principios class="section"></autenticidad-principios>

        <autenticidad-encontrar class="section"></autenticidad-encontrar>

        <autenticidad-cocteles class="section"></autenticidad-cocteles>

    </div>

</template>


<script>
    const autenticidadPrincipios = () => import('./autenticidadPrincipios.vue');
    const autenticidadEncontrar = () => import('./autenticidadEncontrar.vue');
    const autenticidadCocteles = () => import('./autenticidadCocteles.vue');

    export default {
        name: "autenticidad",

        components: {
            autenticidadPrincipios, autenticidadEncontrar, autenticidadCocteles
        }
    }
</script>
