<template>
    <div class="container-fluid containerPureza" >

        <pureza-tradicion></pureza-tradicion>

        <pureza-artesania></pureza-artesania>

        <pureza-ginmg></pureza-ginmg>

    </div>

</template>


<script>
    const purezaTradicion = () => import('./purezaTradicion.vue');
    const purezaArtesania = () => import('./purezaArtesania.vue');
    const purezaGinmg = () => import('./purezaGinmg.vue');

    export default {
        name: "pureza",
        components: {
            purezaTradicion, purezaArtesania, purezaGinmg
        },

    }
</script>
