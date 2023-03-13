<template>

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<header class="head clearfix colLogo">
					<div class="inner">
						<img src="../assets/logoBlanco.png">
					</div>
				</header>

				<main role="main" class="inner cover">
					<h1 class="cover-heading">TENGO 18 AÑOS</h1>
					<p class="cover-subheading">(O MÁS)</p>
					<p class="lead">
						<button class="btn btn-lg btn-primary" @click="setMayorEdad()">SI</button>
						<button class="btn btn-lg btn-primary" @click="setMenorEdad()">NO</button>
					</p>
				</main>

				<footer class="foot">
					<div class="inner">
						<span>
							<a href="http://www.disfruta-de-un-consumo-responsable.com" target="_blank">www.disfruta-de-un-consumo-responsable.com</a>
							<span class="grados">40</span>
							<span class="zero">0</span>
						</span>
					</div>
				</footer>

			</div>

		</div>

	</div>

</template>

<script>

    export default {
        methods: {
            setMayorEdad() {
                this.$store.commit('authUser');
				this.$router.push('/');
            },

            setMenorEdad() {
				return false;
            },
        },
        beforeCreate: function() {
            document.body.className = 'edad';
            document.documentElement.className = "edad";
		},
        beforeDestroy: function () {
            document.body.className = '';
            document.documentElement.className = "";
        }
    }
</script>


<style lang="scss">

	@import '../styles/base.scss';

</style>