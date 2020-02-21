<?php
	session_start();
	$store=$_SESSION['store'];
	$imgs=explode(",",$store['pic']);
	$colors=explode(" ",$store['color']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>物品</title>
	<link rel="stylesheet" type="text/css" href="css/detail_goods.css">
	<link rel="stylesheet" type="text/css" href="css/beforeafter.css">
	<style type="text/css">
</style>
</head>
<body>
	<body>
	<div class="header">
		<div class="content">
			<ul class="left">
				<li>
					<div class="china">
						<a href="#" style="color:#6C6C6C">中国大陆</a>
						<span class="xiabiao"></span>
					</div>
					<div class="list_address">
						<ul class="addre">
							<li>全球</li>
							<li>中国大陆</li>
							<li>香港</li>
							<li>台湾</li>
							<li>澳门</li>
							<li>韩国</li>
							<li>马来西亚</li>
							<li>澳大利亚</li>
							<li>新加坡</li>
							<li>新西兰</li>
							<li>加拿大</li>
							<li>美国</li>
							<li>日本</li>
						</ul>
					</div>
				</li>
				<li><a href="#" style="color:#f22e00;">欢迎登录</a></li>
				<li><a href="#">消息</a></li>
				<li><a href="#">手机逛淘宝</a></li>
			</ul>
			<ul class="right">
				<li>
					<div class="nav1">
						<span class="daohang"></span>
						<a href="#">网站导航</a>
						<span class="xiabiao" style="margin-left:-4px"></span>
					</div>
					<div class="listsum">
						<div class="list_n1">
							<h4 style="color:#fc4200">主题市场</h4>
							<ul class="list_nav">
								<li style="width:23%"><a href="#">女装</a></li>
								<li style="width:23%"><a href="#">男装</a></li>
								<li style="width:23%"><a href="#">内衣</a></li>
								<li style="width:23%"><a href="#">鞋靴</a></li>
								<li style="width:23%"><a href="#">箱包</a></li>
								<li style="width:23%"><a href="#">婴童</a></li>
								<li style="width:23%"><a href="#">家电</a></li>
								<li style="width:23%"><a href="#">数码</a></li>
								<li style="width:23%"><a href="#">手机</a></li>
								<li style="width:23%"><a href="#">美妆</a></li>
								<li style="width:23%"><a href="#">珠宝</a></li>
								<li style="width:23%"><a href="#">眼镜</a></li>
								<li style="width:23%"><a href="#">手表</a></li>
								<li style="width:23%"><a href="#">运动</a></li>
								<li style="width:23%"><a href="#">户外</a></li>
								<li style="width:23%"><a href="#">乐器</a></li>
								<li style="width:23%"><a href="#">游戏</a></li>
								<li style="width:23%"><a href="#">动漫</a></li>
								<li style="width:23%"><a href="#">影视</a></li>
								<li style="width:23%"><a href="#">美食</a></li>
								<li style="width:23%"><a href="#">鲜花</a></li>
								<li style="width:23%"><a href="#">宠物</a></li>
								<li style="width:23%"><a href="#">农资</a></li>
								<li style="width:23%"><a href="#">房产</a></li>
								<li style="width:23%"><a href="#">装修</a></li>
								<li style="width:23%"><a href="#">建材</a></li>
								<li style="width:23%"><a href="#">家具</a></li>
								<li style="width:23%"><a href="#">百货</a></li>
								<li style="width:23%"><a href="#">汽车</a></li>
								<li style="width:23%"><a href="#">二手车</a></li>
								<li style="width:23%"><a href="#">办公</a></li>
								<li style="width:23%"><a href="#">制定</a></li>
								<li style="width:23%"><a href="#">教育</a></li>
								<li style="width:23%"><a href="#">卡券</a></li>
								<li style="width:23%"><a href="#">本地</a></li>
							</ul>
						</div>
						<div class="list_n2">
							<h4 style="color:#9fb838;">特色市场</h4>
							<ul class="list_nav">
								<li style="width:33%"><a href="#">iFashion</a></li>
								<li style="width:33%"><a href="#">爱逛街</a></li>
								<li style="width:33%"><a href="#">美妆秀</a></li>
								<li style="width:33%"><a href="#">全球购</a></li>
								<li style="width:33%"><a href="#">腔调</a></li>
								<li style="width:33%"><a href="#">淘女郎</a></li>
								<li style="width:33%"><a href="#">星店</a></li>
								<li style="width:33%"><a href="#">极有家</a></li>
								<li style="width:33%"><a href="#">按里拍卖</a></li>
								<li style="width:33%"><a href="#">淘宝众筹</a></li>
								<li style="width:33%"><a href="#">中国质造</a></li>
								<li style="width:33%"><a href="#">飞猪</a></li>
								<li style="width:33%"><a href="#">亲宝贝</a></li>
								<li style="width:33%"><a href="#">闲鱼</a></li>
								<li style="width:33%"><a href="#">农资</a></li>
								<li style="width:33%"><a href="#">天天特价</a></li>
								<li style="width:33%"><a href="#">Outlets</a></li>
								<li style="width:33%"><a href="#">俪人购</a></li>
								<li style="width:33%"><a href="#">聚名平品</a></li>
								<li style="width:33%"><a href="#">淘抢购</a></li>
								<li style="width:33%"><a href="#">全球精选</a></li>
								<li style="width:33%"><a href="#">非常大牌</a></li>
								<li style="width:33%"><a href="#">试用</a></li>
								<li style="width:33%"><a href="#">量贩团</a></li>
								<li style="width:33%"><a href="#">阿里翻译</a></li>
							</ul>
						</div>
						<div class="list_n3">
							<h4 style="color:#d75696;">阿里APP</h4>
							<ul class="list_nav">
								<li><a href="#">淘宝</a></li>
								<li><a href="#">天猫</a></li>
								<li><a href="#">支付宝</a></li>
								<li><a href="#">聚划算</a></li>
								<li><a href="#">飞猪</a></li>
								<li><a href="#">蚂蚁聚宝</a></li>
								<li><a href="#">旺信</a></li>
								<li><a href="#">闲鱼</a></li>
								<li><a href="#">阿里钱盾</a></li>
								<li><a href="#">钉钉</a></li>
								<li><a href="#">高德地图</a></li>
								<li><a href="#">点点虫</a></li>
								<li><a href="#">虾米音乐</a></li>
								<li><a href="#">淘票票</a></li>
								<li><a href="#">菜鸟裹裹</a></li>
								<li><a href="#">爱逛街</a></li>
								<li><a href="#">拍卖会</a></li>
								<li><a href="#">阿里云</a></li>
								<li><a href="#">网商银行</a></li>
								<li><a href="#">阿里邮箱</a></li>
								<li><a href="#">阿里众包</a></li>
							</ul>
						</div>
						<div class="list_n4">
							<h4 style="color:#2e9fdb;">精彩推荐集</h4>
							<ul class="list_nav">
								<li><a href="#">余额宝</a></li>
								<li><a href="#">大牌捡宝</a></li>
								<li><a href="#">淘公仔</a></li>
								<li><a href="#">浏览器</a></li>
								<li><a href="#">淘宝香港</a></li>
								<li><a href="#">淘宝台湾</a></li>
								<li><a href="#">淘宝全球</a></li>
								<li><a href="#">淘宝东南亚</a></li>
								<li><a href="#">闺蜜淘货</a></li>
								<li><a href="#">大众评审</a></li>
								<li><a href="#">淘工作</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="customer">
						<a href="#">联系客服</a>
						<span class="xiabiao"></span>
					</div>
					<div class="list_cus">
						<ul class="list_customer">
							<li>消费者客服</li>
							<li>卖家客服</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="seller">
						<a href="#">卖家中心</a>
						<span class="xiabiao" ></span>
					</div>
					<div class="list_sel">
						<ul class="list_seller">
							<li>免费开店</li>
							<li>已卖出的宝贝</li>
							<li>售出中的宝贝</li>
							<li>卖家服务市场</li>
							<li>卖家培训中心</li>
							<li>体检中心</li>
							<li>问商友</li>
						</ul>
					</div>
				</li>
				<li><a href="#">商品分类</a></li>
				<li>
					<div class="shoucang">
						<span class="xing"></span>
						<a href="#">收藏夹</a>
						<span class="xiabiao"></span>
					</div>
					<div class="list_shouc">
						<ul class="list_shoucang">
							<li>收藏的宝贝</li>
							<li>收藏的店铺</li>
						</ul>
					</div>
				</li>
				<li>
					<span class="gouwuche"></span>
					<a href="#">购物车</a>
					<span class="num">0</span>
					<span class="xiabiao"></span>
				</li>
				<li>
					<div class="mytaobao">
						<a href="#" style="color:#6C6C6C">我的淘宝</a>
						<span class="xiabiao"></span>
					</div>
					<div class="list_mytao">
						<ul class="list_mytaobao">
							<li>已买到的宝贝</li>
							<li>我的足迹</li>
						</ul>
					</div>
				</li>	
			</ul>
		</div>
	</div>
	<div class="top_wrap">
		<div id="top">
			<div class="logo"></div>
			<div class="search">
				<button type="button" class="search_store">搜本店</button>
				<button type="button" class="search_goods">搜淘宝</button>
				<div class="in">
					<input type="text"/>
				</div>
			</div>
		</div>
	</div>
	
	<div id="banner">
		<img src="detail_goods/haiwai.png" alt="">
	</div>
	<!-- 整体 -->
	<div class="nav">
		<div class="shouye">首页</div>
	</div>
	<div id="bd">
		<div class="bd-z">
		<div class="bd-tu">
			<img src="climg/<?php echo $imgs[0];?>" alt="" class="big_img">
			<span class="move"></span>
		</div>
		<div class="show_kuang"></div>
		<div class="goodsimg_list">
			<ul class="img_list">
				<li class="show">
					<img src="climg/<?php echo $imgs[0];?>" alt="">
				</li>
				<li>
					<img src="climg/<?php echo $imgs[2];?>" alt="">
				</li>
				<li>
					<img src="climg/<?php echo $imgs[4];?>" alt="">
				</li>
				<li>
					<img src="climg/<?php echo $imgs[6];?>" alt="">
				</li>
				<li>
					<img src="climg/<?php echo $imgs[8];?>" alt="">
				</li>
			</ul>
		</div>
		<div class ="bd-sc">
			<a class="shouc_goods">
				<img src="detail_goods/xin.png" alt="">
				<span>收藏商品</span>
			</a>
			<em>(xxxx人气)</em>
		</div>
	</div>
		<!-- 价格 -->
		<div class="bd-item">
			<div class="i-title"><?php echo $store['title'];?></div>
			<!--1 -->
			<div class="price_wrap">
				<div class="i-price">
					<div class="jiaoyi">
						<em><?php echo $store['sale'];?></em>
						<br/>
						<span>交易成功</span>
					</div>
					<div class="price">
						<span class="i-p2-1 small">淘宝价</span>
						<em class="big">￥</em>
						<em class="price_new big"><?php echo $store['price'];?></em>
					</div>
				</div>
			</div>	
			<!-- 尺码，颜色，数量 -->
			<div class="goods_detail">
				<div class="detail_wrap">
					<div class="detail">
						<span>尺寸</span>
						<ul class="detail_list">
							<li>S</li>
							<li>M</li>
							<li>L</li>
							<li>XL</li>
						</ul>
					</div>
				</div>
				<div class="detail_wrap">
					<div class="detail">
						<span>颜色</span>
						<ul class="detail_list">
							<?php foreach($colors as $item):?>
								<li><?php echo $item;?></li>
							<?php endforeach?>
						</ul>
					</div>
				</div>
				<div class="number_wrap">
					<div class="number">
						<span class="num">数量</span>
						<div class="add_wrap">
							<div class="amount">
								<a href="#" class="reduce">-</a>
								<input class="seller_sum" type="text" value="1">
								<a href="#" class="add">+</a>
							</div>
						</div>
						<span class="text">&nbsp;&nbsp;件</span>
					</div>
				</div>
				<div class="detail_close">x</div>
				<div class="msg_wrap">
					<div class="msg">请勾选您要的商品信息！</div>
					<div class="detail_btn">确定</div>
				</div>
			</div>
			
			<div class="pay_wrap">
				<div class="pay">
					<div class="pay_btn">立即购买</div>
					<div class="gouwuche_btn">加入购物车</div>
				</div>
			</div>
		</div>
		<!-- 推荐 -->
		<div class="right_wrap">
			<div class="dian_wrap">
				<div class="top_img">
					<img src="detail_goods/guan.png" alt="">
				</div>
				<div class="guan_wrap">
					<ul class="guan_list">
						<li>
							<em class="dian_name">MG小象</em>
						</li>
						<li>
							<dt>信誉：</dt>
							<dd><img src="detail_goods/san_guan.png" alt=""></dd>
						</li>
						<li>
							<dt>掌柜：</dt><dd>js1045544836</dd>
						</li>
						<li>
							<dt>联系：</dt>
							<dd><img src="detail_goods/lianxi.png" alt=""></dd>
						</li>
						<li>
							<dt>资质：</dt>
							<dd><img src="detail_goods/zizhi.png" alt=""></dd>
						</li>
					</ul>
					<div class="server_wrap">
						<div class="server">
							<dl>
								<dt>描述</dt>
								<dd>4.8</dd>
							</dl>
							<dl>
								<dt>服务</dt>
								<dd>4.8</dd>
							</dl>
							<dl>
								<dt>物流</dt>
								<dd>4.8</dd>
							</dl>
						</div>
					</div>
					<div class="dian_btn">
						<a href="#" class="in_dian">进入店铺</a>
						<a href="#" class="shouc_dian">收藏店铺</a>
					</div>
				</div>
			</div>
			<div class="kan_wrap">
				<div class="kan">
					<span class="kan_title">看了又看</span>
					<ul>
						<li><img src="climg/<?php echo $imgs[0];?>" alt=""></li>
						<li><img src="climg/<?php echo $imgs[2];?>" alt=""></li>
						<li><img src="climg/<?php echo $imgs[4];?>" alt=""></li>
						<li><img src="climg/<?php echo $imgs[6];?>" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="fix_shouc_wrap start">
		<div class="fix_shouc">
			<a href="#" class="close"></a>
			<form action="" id="form_shouc">
				<div class="fav_msg">
					<div class="msg">
						<span></span>
						<div class="g_u">
							<p>确认收藏该宝贝？</p>
						</div>
					</div>
				</div>
				<div class="item_img">
					<img src="big_goodsimg/kerun1.jpg" alt="">
					<div class="info">
						<div class="item_title">瘦瘦靴2018秋冬新款马丁靴尖头裸靴百搭高跟粗跟单靴加fafa</div>
						<div class="item_seller"></div>
						<div class="item_price">299</div>
					</div>
				</div>
				<p class="btns">
					<button type="submit"></button>
				</p>
			</form>
		</div>
	</div>
	<div class="fix_shouc_wrap success">
		<div class="fav_msg">
			<div class="msg">
				<span></span>
				<div class="g_u">
					<p>成功加入收藏夹</p>
				</div>
			</div>
		</div>
	</div>
	<div class="fix_shouc_wrap agin">
		<div class="fav_msg">
			<div class="msg">
				<span></span>
				<div class="g_u">
					<p>已经收藏过此宝贝 ！</p>
				</div>
			</div>
		</div>
	</div>
	<div class="parameter_wrap">
		<div class="parameter">
			<span class="par_title">产品参数</span>
			<ul>
				<li>品牌：MG小象 |</li>
				<li>销售渠道类型：纯电商 |</li>
				<li>风格：<?php echo $store['style'];?> |</li>
				<li>领型：<?php echo $store['collarname'];?> |</li>
				<li>颜色：<?php echo $store['color'];?> |</li>
				<li>尺码：S M L |</li>
				<li>面料：<?php echo $store['liningname'];?></li>
			</ul>
		</div>
	</div>
	<div id="bottom" style="width:1140px;margin:0 auto">
		<ul class="b" style="margin-left:0px">
			<li class="b-6"><a href="#">阿里巴巴集团</a><b>|</b></li>
			<li class="b-3"><a href="#">淘宝网</a>   <b>|</b></li>
			<li class="b-2"><a href="#">天猫</a><b>|</b></li>
			<li class="b-3"><a href="#">聚划算</a><b>|</b></li>
			<li class="b-5"><a href="#">全球速卖通</a><b>|</b></li>
			<li class="b-10"><a href="#">阿里巴巴国际交易市场</a><b>|</b></li>
			<li class="b-8"><a href="#">1688</a><b>|</b></li>
			<li class="b-4"><a href="#">阿里妈妈</a><b>|</b></li>
			<li class="b-2"><a href="#">飞猪</a><b>|</b></li>
			<li class="b-5"><a href="#">阿里云计算</a><b>|</b></li>
			<li  class="b-7"><a href="#">Alios</a><b>|</b></li>
			<li class="b-4"><a href="#">阿里通信</a><b>|</b></li>
			<li class="b-2"><a href="#">一淘</a><b>|</b></li>
			<li class="b-2"><a href="#">万网</a><b>|</b></li>
			<li class="b-2"><a href="#">高德</a><b>|</b></li>
			<li class="b-2"><a href="#">UC</a><b>|</b></li>
			<li class="b-2"><a href="#">友盟</a></li>
			<li class="b-2"><a href="#">虾米</a><b>|</b></li>
			<li class="b-3"><a href="#">大麦网</a><b>|</b></li>
			<li class="b-2"><a href="#">钉钉</a><b>|</b></li>
			<li class="b-3"><a href="#">支付宝</a><b>|</b></li>
			<li class="b-2"><a href="#">优酷</a><b>|</b></li>
			<li class="b-2"><a href="#">土豆</a><b>|</b></li>
			<li class="b-4"><a href="#">阿里健康</a><b>|</b></li>
			<li class="b-4"><a href="#">阿里影业</a><b>|</b></li>
			<li class="b-4"><a href="#">阿里体育</a><b>|</b></li>
			<li class="b-4"><a href="#">网商银行</a><b>|</b></li>
		</ul>
	</div>
	<div id="gy">
		<ul class="g">
			<li><a href="#">关于淘宝</a></li>
			<li><a href="#">合作伙伴</a></li>
			<li><a href="#">营销中心</a></li>
			<li><a href="#">廉政举报</a></li>
			<li><a href="#">联系客服</a></li>
			<li><a href="#">开放平台</a></li>
			<li><a href="#">诚征英才</a></li>
			<li><a href="#">联系我们</a></li>
			<li><a href="#">网站地图</a></li>
			<li><a href="#">法律保护及隐私权政策</a></li>
			<li><a href="#">知识产权</a><b>|</b></li>
			<li>? 2003-现在 Taobao.com 版权所有</li>
		</ul>
	</div>
	<div id="wl">
		<ul class="w">
			<li><a href="#">网络文化经营许可证：浙网文[2016]0268-027号</a></li>
			<li><a href="#">增值电信业务经营许可证：浙B2-2008224</a><b>|</b></li>
			<li>信息网络传播视听许可证：1109364号</li>
			<li>互联网违法和不良信息举报电话：0571-81683755 blxxjb@alibaba-inc.com</li>
		</ul>	
	</div>	
	<div id="zg">
		<ul class="z">
			<li><a href="#"><img="g.png"/>浙公网安备 33010002000078号</a><b>|</b></li>
			<li>（浙）网械平台备字[2018]第00004号</li>
			<li><a href="#"><b>|</b>出版物网络交易平台服务经营备案证：新出发浙备字第002号</a><b>|</b></li>
			
			<li><a href="#">互联网药品信息服务资格证书编号：（浙）-经营性-2018-0010</a></li>
		</ul>	       
	</div>	
	<script type="text/javascript" src="js/detail_goods.js"></script>

</body>
</html>