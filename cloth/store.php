<?php
	require_once 'config.php';
	require_once 'function.php';
	cloth_get_current_user();
	$result=fetch_all('select * from tshirt order by sale desc limit 3');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mg小象店铺</title>
    <link rel="stylesheet" type="text/css" href="css/beforeafter.css">
    <link rel="stylesheet" href="css/store.css"/>
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="js/nprogress/nprogress.css">
    <script src="js/nprogress/nprogress.js"></script>
</head>
<body>
<script>NProgress.start()</script>
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
            <li><a href="#" style="color:#f22e00;">亲，请登陆</a></li>
            <li><a href="#">免费注册</a></li>
            <li><a href="#">手机逛淘宝</a></li>
        </ul>
        <ul class="right">
            <li>
                <div class="nav1">
                    <span class="daohang"></span>
                    <a href="#">网站导航</a>
                    <span class="xiabiao" style="margin-left:-4px"></span>
                </div>
                <div class="listsum" style="width:1188px;left:44px">
                    <div class="list_wrap">
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
                    </div>
                    <div class="list_wrap">
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
                    </div>
                    <div class="list_wrap">
                        <div class="list_n3">
                            <h4 style="color:#d75696;">阿里APP</h4>
                            <ul class="list_nav">
                                <li style="33%"><a href="#">淘宝</a></li>
                                <li style="width:33%"><a href="#">天猫</a></li>
                                <li style="width:33%"><a href="#">支付宝</a></li>
                                <li style="width:33%"><a href="#">聚划算</a></li>
                                <li style="width:33%"><a href="#">飞猪</a></li>
                                <li style="width:33%"><a href="#">蚂蚁聚宝</a></li>
                                <li style="width:33%"><a href="#">旺信</a></li>
                                <li style="width:33%"><a href="#">闲鱼</a></li>
                                <li style="width:33%"><a href="#">阿里钱盾</a></li>
                                <li style="width:33%"><a href="#">钉钉</a></li>
                                <li style="width:33%"><a href="#">高德地图</a></li>
                                <li style="width:33%"><a href="#">点点虫</a></li>
                                <li style="width:33%"><a href="#">虾米音乐</a></li>
                                <li style="width:33%"><a href="#">淘票票</a></li>
                                <li style="width:33%"><a href="#">菜鸟裹裹</a></li>
                                <li style="width:33%"><a href="#">爱逛街</a></li>
                                <li style="width:33%"><a href="#">拍卖会</a></li>
                                <li style="width:33%"><a href="#">阿里云</a></li>
                                <li style="width:33%"><a href="#">网商银行</a></li>
                                <li style="width:33%"><a href="#">阿里邮箱</a></li>
                                <li style="width:33%"><a href="#">阿里众包</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="list_wrap">
                        <div class="list_n4">
                            <h4 style="color:#2e9fdb;">精彩推荐集</h4>
                            <ul class="list_nav">
                                <li style="width:49%"><a href="#">余额宝</a></li>
                                <li style="width:49%"><a href="#">大牌捡宝</a></li>
                                <li style="width:49%"><a href="#">淘公仔</a></li>
                                <li style="width:49%"><a href="#">浏览器</a></li>
                                <li style="width:49%"><a href="#">淘宝香港</a></li>
                                <li style="width:49%"><a href="#">淘宝台湾</a></li>
                                <li style="width:49%"><a href="#">淘宝全球</a></li>
                                <li style="width:49%"><a href="#">淘宝东南亚</a></li>
                                <li style="width:49%"><a href="#">闺蜜淘货</a></li>
                                <li style="width:49%"><a href="#">大众评审</a></li>
                                <li style="width:49%"><a href="#">淘工作</a></li>
                            </ul>
                        </div>
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
                        <li>
                            <a href="#">消费者客服</a>
                        </li>
                        <li>
                            <a href="#">卖家客服</a>
                        </li>
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
                        <li><a href="#">免费开店</a></li>
                        <li><a href="#">已卖出的宝贝</a></li>
                        <li><a href="#">售出中的宝贝</a></li>
                        <li><a href="#">卖家服务市场</a></li>
                        <li><a href="#">卖家培训中心</a></li>
                        <li><a href="#">体检中心</a></li>
                        <li><a href="#">问商友</a></li>
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
                        <li><a href="#">收藏的宝贝</a></li>
                        <li><a href="#">收藏的店铺</a></li>
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
                        <li><a href="#">已买到的宝贝</a></li>
                        <li><a href="#">我的足迹</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="contents_wrap">
    <div class="contents">
        <div class="contents_header">
            <div class="logo">
                <a href="#"></a>
            </div>
            <div class="search_wrap">
                <div class="search">
                    <div class="baby">
                        <em>宝贝</em>
                        <span></span>
                    </div>
                    <div class="input_wrap">
                        <input type="text" placeholder="请输入要搜索的关键字"/>
                        <span class="xiangji"></span>
                    </div>
                </div>
                <div class="button_wrap">
                    <button class="search_btn"></button>
                </div>
            </div>
        </div>
        <div class="allbaby_wrap">
            <div class="allbaby">所有宝贝</div>
        </div>
        <div class="main_wrap">
            <div class="main">
                <div class="banner">
                    <div class="banner_left">
                        <img src="images/banner_left.jpg" alt=""/>
                        <h1>MG小象欧美街拍时尚女装</h1>
                    </div>
                    <div class="banner_right">
                        <img src="images/banner_right.jpg" alt=""/>
                    </div>
                </div>
                <div class="classify_wrap">
                    <div class="classify">
                        <div class="classheader">
                            <h1>
                                所有分类
                                <span class="icon-circle-right"></span>
                            </h1>
                            <div class="classcontent"></div>
                            <div class="closeclass">
                                <i style="font-style: normal">收起筛选</i>
                                <span class="xiab"></span>
                            </div>
                        </div>
                        <div class="classmain">
                            <form action="" id="form1">
                                <span>面料:</span>
                                <a href="#">棉</a>
                                <a href="#">聚酯纤维</a>
                                <a href="#">粘胶</a>
                            </form>
                            <form action="" id="form2">
                                <span>领型:</span>
                                <a href="#">圆领</a>
                                <a href="#">娃娃领</a>
                                <a href="#">v领</a>
                            </form>
                            <form action="" id="form3">
                                <span>颜色:</span>
                                <div class="form_wrap">
                                    <a href="#"><span class="chance"></span><i>白色</i></a>
                                    <a href="#"><span class="chance"></span><i>粉色</i></a>
                                    <a href="#"><span class="chance"></span><i>黑色</i></a>
                                    <a href="#"><span class="chance"></span><i>蓝色</i></a>
                                    <a href="#"><span class="chance"></span><i>紫色</i></a>
                                    <a href="#"><span class="chance"></span><i>绿色</i></a>
                                    <a href="#" class="more-chance">多选</a>
                                </div>
                                <div class="btn3 btn-more">
                                    <span class="sub">提交</span>
                                    <span class="cancel">取消</span>
                                </div>
                            </form>
                            <form action="" id="form4">
                                <span>风格:</span>
                                <div class="form_wrap">
                                    <a href="#"><span class="chance"></span><i>甜美</i></a>
                                    <a href="#"><span class="chance"></span><i>日系</i></a>
                                    <a href="#"><span class="chance"></span><i>印花</i></a>
                                    <a href="#"><span class="chance"></span><i>街头</i></a>
                                    <a href="#"><span class="chance"></span><i>欧美</i></a>
                                    <a href="#"><span class="chance"></span><i>学院</i></a>
                                    <a href="#"><span class="chance"></span><i>修身</i></a>
                                    <a href="#"><span class="chance"></span><i>网红</i></a>
                                    <a href="#" class="more-chance">多选</a>
                                </div>
                                <div class="btn4 btn-more">
                                    <span class="sub">提交</span>
                                    <span class="cancel">取消</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sale">
                    <h3>商店商品</h3>
                    <div class="sale_list">
                        <ul class="ul_list" width='940px'></ul>
                    </div>
                </div>
                <ul id="pagination-demo" class="pagination-sm"></ul>
            </div>
        </div>
    </div>
    <div class="r_contents">
        <h1>推荐热卖单品</h1>
        <div class="sale">
            <div class="sale_list">
                <ul class="ul_list">
                    <?php foreach($result as $item):?>
                    <li style="float:none;">
                        <a class='sale_img'>
                            <img width="197px" height="230px" src='climg/<?php $img=explode(",",$item["pic"]);echo $img[0];?>'>
                        </a>
                        <a class='sale_name'>
                            <span><?php echo $item['title'];?></span>
                        </a>
                        <div class='line_3'>
                            <a class='new'>
                                <span>￥</span>
                                <em><?php echo $item['price'];?></em>
                            </a>
                            <a class='salesum'>
                                月销<em><?php echo $item['sale'];?></em>笔
                            </a>
                        </div>
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contents fixed_tool">
    <div class="logo">
        <a href="#"></a>
    </div>
    <div class="search_wrap">
        <div class="search">
            <div class="baby">
                <em>宝贝</em>
                <span></span>
            </div>
            <div class="input_wrap">
                <input type="text" placeholder="请输入要搜索的关键字"/>
                <span class="xiangji"></span>
            </div>
        </div>
        <div class="button_wrap">
            <button class="search_btn"></button>
        </div>
    </div>
    <div class="close"></div>
</div>
<div id="bottom" >
    <ul class="b">
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
<script src="js/store.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap/js/bootstrap.min.js"></script>
<script src="js/twbs-pagination/jquery.twbsPagination.min.js"></script>
<script>NProgress.done()</script>
<script>
    $(function(){
        loadPageData(1);
        $('a').on('click',function(e){
            e.preventDefault();
            return false;
        });
        var fixed_tool=$('.fixed_tool');
        var close=$('.close');
        var closeclass=$('.closeclass');
        var classmain=$('.classmain');
        var lock=true;
        var closeclasslock=true;
        var more_chance=$('.more-chance');
        var form1_a=$('#form1 a');
        var form2_a=$('#form2 a');
        var form3_a=$('#form3 a');
        var form4_a=$('#form4 a');
        var liningname;
        var collarname;
        var classcontent=$('.classcontent');
        var chance=$('.chance');
        var btn3_sub=$('.btn3 .sub');
        var btn4_sub=$('.btn4 .sub');
        var color=[];
        var str_color;
        var style=[];
        var str_style;
        var input_text;
        $(document).scroll(function(){
            var scrollH=$(document).scrollTop();
            if(scrollH>50){
                if(lock){
                    fixed_tool.css('display','block');
                }
            }else{
                fixed_tool.css('display','none');
                lock=true;
            }
        });
        close.on('click',function(){
            fixed_tool.css('display','none');
            lock=false;
        });
        closeclass.on('click',function(){
            if(closeclasslock){
                classmain.slideUp();
                $(this).find('i').text('显示筛选');
                $(this).find('span').text('');
                closeclasslock=false;
            }else{
                classmain.slideDown();
                $(this).find('i').text('收起筛选');
                $(this).find('span').text('');
                closeclasslock=true;
            }
        });
        more_chance.each(function(index,elem){
            elem.lock=true;
        });
        more_chance.on('click',function(){
            if(this.lock){
                $(this).parent().find('.chance').css('display','inline-block');
                $(this).parent().parent().find('.btn-more').css('display','block');
                this.lock=false;
            }else{
                $(this).parent().find('.chance').css('display','none');
                $(this).parent().parent().find('.btn-more').css('display','none');
                this.lock=true;
            }
        });
        form1_a.on('click',function(){
            liningname=$(this).text();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.liningname').length==0){
                classcontent.html(classcontent.html()+"<a class='liningname'>面料："+liningname+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.liningname').html("面料："+liningname+"<span class='closec'></span>");
            }
        });
        form2_a.on('click',function(){
            collarname=$(this).text();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.collarname').length==0){
                classcontent.html(classcontent.html()+"<a class='collarname'>领型："+collarname+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.collarname').html("领型："+collarname+"<span class='closec'></span>");
            }
        });
        form3_a.on('click',function(){
            str_color=$(this).find('i').text();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.color').length==0){
                classcontent.html(classcontent.html()+"<a class='color'>颜色："+str_color+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.color').html("颜色："+str_color+"<span class='closec'></span>");
            }
        });
        form4_a.on('click',function(){
            str_style=$(this).find('i').text();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.style').length==0){
                classcontent.html(classcontent.html()+"<a class='style'>颜色："+str_style+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.style').html("颜色："+str_style+"<span class='closec'></span>");
            }
        });
        chance.each(function(index,elem){
            elem.lock=true;
        });
        $('#form3 .chance').on('click',function(){
            if(this.lock){
                $(this).text('');
                this.lock=false;
                color.push($(this).parent().find('i').text());
            }else{
                $(this).text('');
                this.lock=true;
                var text=$(this).parent().find('i').text();
                for(var i=0;i<color.length;i++){
                   if(text==color[i]) {
                        color.splice(i,1);
                   }
                }
            }
        });
        $('#form4 .chance').on('click',function(){
            if(this.lock){
                $(this).text('');
                this.lock=false;
                style.push($(this).parent().find('i').text());
            }else{
                $(this).text('');
                this.lock=true;
                var text=$(this).parent().find('i').text();
                for(var i=0;i<style.length;i++){
                    if(text==style[i]) {
                        style.splice(i,1);
                    }
                }
            }
        });
        btn3_sub.on('click',function(){
            str_color=color.toString();
            console.log(str_color);
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.color').length==0){
                classcontent.html(classcontent.html()+"<a class='color'>颜色："+str_color+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.color').html("颜色："+str_color+"<span class='closec'></span>");
            }
        });
        $('.classcontent').on('click','.liningname',function(){
            liningname="";
            $(this).remove();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
        });
        $('.classcontent').on('click','.collarname',function(){
            collarname="";
            $(this).remove();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
        });
        $('.classcontent').on('click','.color',function(){
            str_color="";
            $(this).remove();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
        });
        $('.classcontent').on('click','.style',function(){
            str_style="";
            $(this).remove();
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
        });
        btn4_sub.on('click',function(){
            str_style=style.toString();
            console.log(str_style);
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
            if(classcontent.has('a.style').length==0){
                classcontent.html(classcontent.html()+"<a class='style'>风格："+str_style+"<span class='closec'></span></a>");
            }else{
                classcontent.find('a.style').html("风格："+str_style+"<span class='closec'></span>");
            }
        });
        $('.btn-more .cancel').on('click',function(){
            $(this).parent().slideUp();
            $(this).parent().parent().find('.chance').text('');
            $(this).parent().parent().find('.chance').css('display','none');
            var more_chance=$(this).parent().parent().find('.more-chance');
            more_chance[0].lock=true;
        });
        $('.ul_list').on('click','li',function(){
            var id=$(this).data('id');
            $.ajax({
                type:'GET',
                url:'/control/finddetail.php',
                data:{
                    id:id
                },
                success:function(data){
                    if(data!=[]){
                        window.location.href = "/detail_goods.php";
                    }
                },
                beforeSend:function(){
                    NProgress.start();
                },
                complete:function(){
                    NProgress.done();
                }
            });
        });
        $('.search_btn').on('click',function(){
            input_text=$(this).parent().prev().find('.input_wrap input').val();
            console.log($(this).parent().prev().find('.input_wrap input')[0]);
            console.log(input_text);
            loadPageData(1,liningname,collarname,str_color,str_style,input_text);
        });
//页码
        function loadPageData(page,liningname,collarname,str_color,str_style,input_text){
            $.ajax({
                type:'GET',
                url:'/control/stor.php',
                data:{
                        page:page,
                        liningname:liningname,
                        collarname:collarname,
                        str_color:str_color,
                        str_style:str_style,
                        input_text:input_text
                    },
                success: function(res) {
                    $('#pagination-demo').twbsPagination("destroy");
                    if (page > res.toal_page) {
                        loadPageData(res.toal_page);
                        return;
                    }
                    if (res.stores == []) {
                        $('.ul_list').html(' ');
                        $('#pagination-demo').twbsPagination("destroy");
                        return;
                    }
                    $('#pagination-demo').twbsPagination({
                        totalPages: res.toal_page,
                        visiablePages: 5,//显示的页面
                        startPage: page,
                        initiateStartPageClick: false,
                        first: '&laquo;',
                        last: '&raquo;',
                        prev: '&lt;',
                        next: '&gt;',
                        onPageClick: function (e, page) {
                            loadPageData(page, liningname, collarname, str_color, str_style,input_text);
                        }
                    });
                    var ul_list = document.getElementsByClassName("ul_list")[0];
                    var sale_li = "";
                    for (var i = 0; i < res.stores.length; i++) {
                        var s = res.stores[i];
                        var imgs = s.pic;
                        console.log(s.pic);
                        var img = imgs.split(',')[0];
                        console.log(img);
                        var saleEvery = "<li data-id='"+s.id+"'><a class='sale_img'><img width='197px' height='230px' src='climg/" + img + "'></a><a class='sale_name'><span>" + s.title + "</span></a><div class='line_2'></div><div class='line_3'><a class='new'><span>￥</span><em>" + s.price + "</em></a><a class='salesum'>月销<em>" + s.sale + "</em>笔</a></div></li>";
                        sale_li += saleEvery;
                        ul_list.innerHTML = "" + sale_li;
                    }
                    $('.input_wrap input').val(input_text);
                },
                beforeSend:function(){
                    NProgress.start();
                },
                complete:function(){
                    NProgress.done();
                }
             });
        }
    });
</script>
</body>
</html>