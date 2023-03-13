<template>
  <div>
  <img class="iconSidebarMenu " v-if="!this.$store.state.ui.sidebarOpen"  src="../../assets/icons/menu.png" @click="handleClick">
  <img class="iconSidebarMenu " v-if="this.$store.state.ui.sidebarOpen"  src="../../assets/icons/close.png" @click="handleClick">
  </div>
</template>

<script>

  export default {
      name: 'sidebar-toggle',
      computed: {
          open () {
              return this.$store.state.ui.sidebarOpen
          },
      },
      methods: {
          handleClick () {
              this.$store.dispatch('toggleSidebar')
          }
      }
  }

</script>
