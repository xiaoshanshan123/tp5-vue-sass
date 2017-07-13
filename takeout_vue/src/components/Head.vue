<template>
	<div class="head clearfix">
		<img class="avatar" :src="seller.avatar">
		<div class="title">
			<span class="icon"></span>
			<span class="text">{{seller.name}}</span>
		</div>
		<div class="delivery">
			<span class="deli-name">{{seller.description}}</span>
			<span class="deli-time">/{{seller.deliveryTime}}分钟送达</span>
		</div>
		<div class="discount">
			<span class="icon" :class="iconType[seller.supports[0].type]"></span>
			<span class="desc">{{seller.supports[0].description}}</span>
		</div>
		<div class="discount-num" v-if="seller.supports.length">
			<span class="num">{{seller.supports.length}}个</span>
			<span class="iconfont icon-right_arrow "></span>
		</div>
		<div class="notice clearfix">
			<span class="icon"></span>
			<span class="text">{{seller.bulletin}}</span>
			<span class="iconfont icon-right_arrow"></span>
		</div>
	</div>
</template>
<script>
	export default{
		props:['seller'],
		data(){
			return{
				iconType:['decrease','discount','guarantee','invoice']
			}
		},
		methods:{

		},
		created(){
			console.log(this.seller)

		}
	}
</script>
<style lang="scss" scoped>
	@import '../assets/css/mixin.scss';

	$bg-d:rgba(0,0,0,.2);

	.head {
		padding:24px 12px 46px 24px;
		background-color: rgba(7,17,27,.5);
		color:#fff;
		position: relative;
		font-size: 0;
		.avatar {
			width:64px;
			height:64px;
			float: left;
			margin-right: 16px;
			border-radius: 5px;
		}
		.title {
			font-size: 0;
			margin-left: 18px;
			vertical-align: top;
			margin-bottom: 8px;
			font-weight: bold;
			.text {
				font-size:16px;
				line-height: 18px;
			}
			.icon {
				display: inline-block;
				vertical-align: top;
				width: 30px;
				height: 18px;	
				@include bg-icon(brand);
				background-size: 30px 18px;
				margin-right: 6px;
			}
		}
		.delivery {
			font-size: 12px;;
			line-height: 12px;
			margin-bottom: 10px;
		}
		.discount {
			font-size: 0;
			line-height: 12px;
			.desc{
				font-size: 10px;
			}
			.icon {
				display: inline-block;
				width: 12px;
				height:12px;
				background-size: 12px 12px;
				vertical-align: top;
				margin-right: 4px;
				&.decrease {
					@include bg-icon(decrease_1);
				}
				&.discount {
					@include bg-icon(discount_1);
				}
			}
		}
		.discount-num {
			position:absolute;
			right: 12px;
			bottom:46px;
			display: inline-block;
			text-align: center;
			border-radius: 14px;
			font-size: 0;
			padding:7px 8px;
			background-color: $bg-d;
			cursor: pointer;
			.num {
				font-size: 10px;
				line-height: 12px;
			}
			.iconfont {
				font-size: 10px;
				margin-left: 2px;
			}
		}
		.notice {
			position: absolute;
			bottom: 0;
			left:0;
			width: 100%;
			height: 28px;
			line-height: 28px;
			font-size: 0;
			background-color:$bg-d;
			.icon {
				display: inline-block;
				width:22px;
				height: 12px;
				@include bg-icon(bulletin);
				background-size: 22px 12px;
				margin-right: 4px;
				margin-left: 12px;
				vertical-align: top;
				margin-top: 8px;
			}
			.text {
				display: inline-block;
				width: 90%;
				font-size: 10px;
				overflow: hidden;
				text-overflow:ellipsis;
				white-space: nowrap;
				text-align: left;
			}
			.iconfont{
				display: inline-block;
				float: right;
				margin-right: 12px;
				font-size: 10px;
				vertical-align: top;
			}
		}

	}


</style>
