<template>
	<div class="layout">
		<v-head :seller="seller" v-if="seller"></v-head>
	</div>
</template>
<script>
	import head from '../components/Head'
	import { GET_SELLER } from '../api/api'
	export default{
		data(){
			return{
				seller:''
			}
		},

		methods:{
			getSeller(){
				let para={
					id:1
				}
				GET_SELLER(para).then(res=>{
					if(res.data.code === 200){
						this.seller = res.data.data
					}
				})
			}
		},
		created(){
			this.getSeller();
		},
		components:{
			VHead:head
		}
	}
</script>
<style scoped lang="scss">
	@import '../assets/css/mixin.scss';

</style>