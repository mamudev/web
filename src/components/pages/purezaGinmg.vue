<template>
    <div>
        <slide-ginmg id="ginmg" class="section" ></slide-ginmg>
    </div>
</template>

<script>
    const slideGinmg = () => import('components/partials/slideGinmg.vue');

    export default {
        components: { slideGinmg},
        name: "pureza-ginmg"
    }
</script>

<style scoped>

</style>