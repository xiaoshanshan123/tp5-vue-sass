<template>
	<div class="head">
		<img class="avatar" :src="seller.avatar">
	</div>
</template>
<script>
	export default{
		props:['seller'],
		data(){
			return{

			}
		},
		methods:{

		},
		created(){
			console.log(this.seller)
		}
	}
</script>
<style lang="scss">
	.head {
		img {
			width:64px;
			height:64px;
		}
	}


</style>
