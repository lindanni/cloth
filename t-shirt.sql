/*
MySQL Data Transfer
Source Host: localhost
Source Database: t-shirt
Target Host: localhost
Target Database: t-shirt
Date: 2019/6/27 0:09:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for collar
-- ----------------------------
DROP TABLE IF EXISTS `collar`;
CREATE TABLE `collar` (
  `collarid` int(11) NOT NULL auto_increment,
  `collarname` varchar(255) default NULL,
  PRIMARY KEY  (`collarid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lining
-- ----------------------------
DROP TABLE IF EXISTS `lining`;
CREATE TABLE `lining` (
  `liningid` int(11) NOT NULL auto_increment,
  `liningname` varchar(28) default NULL,
  PRIMARY KEY  (`liningid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tshirt
-- ----------------------------
DROP TABLE IF EXISTS `tshirt`;
CREATE TABLE `tshirt` (
  `id` varchar(64) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(64) NOT NULL,
  `repertory` int(64) NOT NULL,
  `sale` int(64) NOT NULL,
  `liningid` int(255) NOT NULL,
  `collarid` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `pic` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL default '0',
  `username` varchar(28) default NULL,
  `userpassword` int(11) default NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `collar` VALUES ('1', '圆领');
INSERT INTO `collar` VALUES ('2', '娃娃领');
INSERT INTO `collar` VALUES ('3', 'v领');
INSERT INTO `lining` VALUES ('1', '棉');
INSERT INTO `lining` VALUES ('2', '聚酯纤维');
INSERT INTO `lining` VALUES ('3', '粘胶');
INSERT INTO `tshirt` VALUES ('1', 'MG小象皮丘联名款网纱t恤女2019春夏新款短袖上衣圆领宽松体恤衫', '39', '155', '17', '2', '1', '白色', '街头,欧美,文艺', '1/1big.jpg,1/1small.jpg,1/2big.jpg,1/2small.jpg,1/3big.jpg,1/3small.jpg,1/4big.jpg,1/4small.jpg,1/5big.jpg,1/5small.jpg');
INSERT INTO `tshirt` VALUES ('10', '飞天小象女装mg小象心机懒人白体彩砖红色网红t恤女小众夏潮修身', '39', '267', '580', '2', '1', '粉色 白色 黑色', '甜美,日系,学院', '2/1big.jpg,2/1small.jpg,2/2big.jpg,2/2small.jpg,2/3big.jpg,2/3small.jpg,2/4big.jpg,2/4small.jpg,2/5big.jpg,2/5small.jpg');
INSERT INTO `tshirt` VALUES ('11', 'MG小象短袖t恤女春装2019新款韩版学生衣服荷叶袖宽松亮片上衣潮', '39', '374', '212', '1', '1', '粉红色', '甜美,学院,文艺', '3/1big.jpg,3/1small.jpg,3/2big.jpg,3/2small.jpg,3/3big.jpg,3/3small.jpg,3/4big.jpg,3/4small.jpg,3/5big.jpg,3/5small.jpg');
INSERT INTO `tshirt` VALUES ('12', 'MG小象短袖牛油果绿t恤女2019新款夏装宽松学生印花纯棉半袖上衣', '39', '3255', '179', '1', '1', '绿色 粉色 白色 紫色', '印花,学院', '4/1big.jpg,4/1small.jpg,4/2big.jpg,4/2small.jpg,4/3big.jpg,4/3small.jpg,4/4big.jpg,4/4small.jpg,4/5big.jpg,4/5small.jpg');
INSERT INTO `tshirt` VALUES ('13', '皮卡丘联名款 MG小象网纱t恤女2019夏装新款蓝色短袖上衣宽松丅恤', '28', '126', '96', '2', '1', '白色', '学院,网红', '5/1big.jpg,5/1small.jpg,5/2big.jpg,5/2small.jpg,5/3big.jpg,5/3small.jpg,5/4big.jpg,5/4small.jpg,5/5big.jpg,5/5small.jpg');
INSERT INTO `tshirt` VALUES ('14', 'MG小象棉短袖T恤女刺绣印花小清新体恤2019新款蝴蝶结心机上衣', '49', '723', '3193', '1', '1', '绿色 蓝色 白色', '欧美,街头', '6/1big.jpg,6/1small.jpg,6/2big.jpg,6/2small.jpg,6/3big.jpg,6/3small.jpg,6/4big.jpg,6/4small.jpg,6/5big.jpg,6/5small.jpg');
INSERT INTO `tshirt` VALUES ('15', 'MG小象夏装2019新款韩版网红同款衣服条纹开叉宽松中长款圆领短袖', '79', '196', '845', '1', '1', '蓝色 红色', '学院,街头', '7/1big.jpg,7/1small.jpg,7/2big.jpg,7/2small.jpg,7/3big.jpg,7/3small.jpg,7/4big.jpg,7/4small.jpg,7/5big.jpg,7/5small.jpg');
INSERT INTO `tshirt` VALUES ('16', 'MG小象哆啦A梦联名款短袖小清新简约牛油果绿T恤女长款宽松抹茶绿', '59', '9463', '37', '1', '1', '绿色 橘色', '街头,欧美,印花', '8/1big.jpg,8/1small.jpg,8/2big.jpg,8/2small.jpg,8/3big.jpg,8/3small.jpg,8/4big.jpg,8/4small.jpg,8/5big.jpg,8/5small.jpg');
INSERT INTO `tshirt` VALUES ('17', 'MG小象闺蜜装修身短袖POLO衫T恤上衣夏季韩版中长款针织连衣裙女', '44', '1973', '972', '2', '2', '绿色 蓝色', '学院', '9/1big.jpg,9/1small.jpg,9/2big.jpg,9/2small.jpg,9/3big.jpg,9/3small.jpg,9/4big.jpg,9/4small.jpg,9/5big.jpg,9/5small.jpg');
INSERT INTO `tshirt` VALUES ('18', 'MG小象休闲短袖T恤女装2019新款潮夏V领时尚宽松韩版心机薄款上衣', '59', '2659', '970', '3', '3', '黑色 白色 橘色', '街头,网红', '10/1big.jpg,10/1small.jpg,10/2big.jpg,10/2small.jpg,10/3big.jpg,10/3small.jpg,10/4big.jpg,10/4small.jpg,10/5big.jpg,10/5small.jp');
INSERT INTO `tshirt` VALUES ('19', '哆啦A梦联名款 MG小象短袖条纹T恤女2019新款夏圆领纯棉打底体恤', '59', '3055', '1516', '1', '1', '红黄蓝条纹 白蓝条纹', '欧美,修身', '11/1big.jpg,11/1small.jpg,11/2big.jpg,11/2small.jpg,11/3big.jpg,11/3small.jpg,11/4big.jpg,11/4small.jpg,11/5big.jpg,11/5small.jp');
INSERT INTO `tshirt` VALUES ('2', '女装2019新款mg小象网红泫雅风短袖女可可里小姐少女潮流宽松', '48', '138', '39', '1', '1', '白色 红色 黑色 杏色 ', '甜美,日系', '12/1big.jpg,12/1small.jpg,12/2big.jpg,12/2small.jpg,12/3big.jpg,12/3small.jpg,12/4big.jpg,12/4small.jpg,12/5big.jpg,12/5small.jp');
INSERT INTO `tshirt` VALUES ('20', '哆啦A梦联名款 MG小象套装女夏2019新款短袖T恤高腰半身裙两件套', '69', '1600', '1968', '1', '1', '粉色 蓝色', '学院,印花', '13/1big.jpg,13/1small.jpg,13/2big.jpg,13/2small.jpg,13/3big.jpg,13/3small.jpg,13/4big.jpg,13/4small.jpg,13/5big.jpg,13/5small.jp');
INSERT INTO `tshirt` VALUES ('21', '哆啦A梦联名款 MG小象个性T恤女装短袖2019新款夏装学生宽松上衣', '79', '41', '1437', '1', '1', '黑色 白色 橘色', '街头,欧美,印花', '14/1big.jpg,14/1small.jpg,14/2big.jpg,14/2small.jpg,14/3big.jpg,14/3small.jpg,14/4big.jpg,14/4small.jpg,14/5big.jpg,14/5small.jp');
INSERT INTO `tshirt` VALUES ('22', '哆啦A梦联名款 MG小象短袖印花T恤女装2019新款纯棉宽松学生上衣', '59', '19', '95', '1', '1', '红色 黑色 粉色', '学院,印花', '15/1big.jpg,15/1small.jpg,15/2big.jpg,15/2small.jpg,15/3big.jpg,15/3small.jpg,15/4big.jpg,15/4small.jpg,15/5big.jpg,15/5small.jp');
INSERT INTO `tshirt` VALUES ('23', '哆啦A梦联名款 MG小象扎染印花T恤短袖女2019新款夏宽松体恤上衣', '69', '59', '20', '1', '1', '粉色 蓝色', '印花,学院,文艺', '16/1big.jpg,16/1small.jpg,16/2big.jpg,16/2small.jpg,16/3big.jpg,16/3small.jpg,16/4big.jpg,16/4small.jpg,16/5big.jpg,16/5small.jp');
INSERT INTO `tshirt` VALUES ('24', 'MG小象彩虹条纹T恤短袖女2019新款夏装宽松休闲体恤甜美心机上衣', '59', '83', '1288', '1', '1', '浅色彩虹色 深色彩虹色', '欧美,街头', '17/1big.jpg,17/1small.jpg,17/2big.jpg,17/2small.jpg,17/3big.jpg,17/3small.jpg,17/4big.jpg,17/4small.jpg,17/5big.jpg,17/5small.jp');
INSERT INTO `tshirt` VALUES ('25', 'MG小象小心机T恤女短袖夏装2019新款潮韩版体恤学生休闲宽松上衣', '59', '97', '1284', '1', '1', '黄色 红色 白色', '街头,文艺,学院', '18/1big.jpg,18/1small.jpg,18/2big.jpg,18/2small.jpg,18/3big.jpg,18/3small.jpg,18/4big.jpg,18/4small.jpg,18/5big.jpg,18/5small.jp');
INSERT INTO `tshirt` VALUES ('26', '皮卡丘联名款 MG小象白色t恤短袖女2019新款夏装上衣宽松打底衫', '69', '185', '2190', '1', '1', '蓝色 白色', '街头,欧美', '19/1big.jpg,19/1small.jpg,19/2big.jpg,19/2small.jpg,19/3big.jpg,19/3small.jpg,19/4big.jpg,19/4small.jpg,19/5big.jpg,19/5small.jp');
INSERT INTO `tshirt` VALUES ('27', '皮卡丘联名款 MG小象学院风套装女新款夏粉色甜美T恤少女百褶短裙', '69', '136', '21', '1', '2', '白色 粉色', '甜美,日系,学院', '20/1big.jpg,20/1small.jpg,20/2big.jpg,20/2small.jpg,20/3big.jpg,20/3small.jpg,20/4big.jpg,20/4small.jpg,20/5big.jpg,20/5small.jp');
INSERT INTO `tshirt` VALUES ('28', 'MG小象短袖T恤女2019新款夏季韩版网纱拼接学生少女显瘦宽松上衣', '69', '22', '741', '1', '1', '扎染马卡龙色', '街头,欧美,网红', '21/1big.jpg,21/1small.jpg,21/2big.jpg,21/2small.jpg,21/3big.jpg,21/3small.jpg,21/4big.jpg,21/4small.jpg,21/5big.jpg,21/5small.jp');
INSERT INTO `tshirt` VALUES ('29', 'MG小象短袖T恤女装2019新款潮夏季休闲条纹宽松韩版时尚亮片上衣', '59', '71', '591', '1', '1', '红黄蓝条纹', '欧美,修身', '22/1big.jpg,22/1small.jpg,22/2big.jpg,22/2small.jpg,22/3big.jpg,22/3small.jpg,22/4big.jpg,22/4small.jpg,22/5big.jpg,22/5small.jp');
INSERT INTO `tshirt` VALUES ('3', '皮卡丘联名款MG小象网纱t恤女2019夏装新款蓝色短袖上衣宽松丅恤', '98', '5009', '4357', '1', '1', '白色 粉色', '街头,文艺', '23/1big.jpg,23/1small.jpg,23/2big.jpg,23/2small.jpg,23/3big.jpg,23/3small.jpg,23/4big.jpg,23/4small.jpg,23/5big.jpg,23/5small.jp');
INSERT INTO `tshirt` VALUES ('30', 'MG小象蜡笔小新联名款条纹短袖T恤女新款夏洋气个性短款宽松上衣', '69', '2', '530', '1', '1', '红色 绿色', '印花,甜美', '24/1big.jpg,24/1small.jpg,24/2big.jpg,24/2small.jpg,24/3big.jpg,24/3small.jpg,24/4big.jpg,24/4small.jpg,24/5big.jpg,24/5small.jp');
INSERT INTO `tshirt` VALUES ('31', 'MG小象短袖针织衫女纯色2019新款夏季韩版时尚修身短款性感上衣潮', '49', '208', '350', '3', '3', '红色 绿色 黑色', '修身,网红', '25/1big.jpg,25/1small.jpg,25/2big.jpg,25/2small.jpg,25/3big.jpg,25/3small.jpg,25/4big.jpg,25/4small.jpg,25/5big.jpg,25/5small.jp');
INSERT INTO `tshirt` VALUES ('32', '哆啦A梦联名款 MG小象长袖休闲T恤女新款学生时尚不规则简约罩衫', '49', '20', '1', '3', '1', '白色', '甜美,日系,学院', '26/1big.jpg,26/1small.jpg,26/2big.jpg,26/2small.jpg,26/3big.jpg,26/3small.jpg,26/4big.jpg,26/4small.jpg,26/5big.jpg,26/5small.jp');
INSERT INTO `tshirt` VALUES ('33', '哆啦A梦联名 MG小象短袖T恤情侣装宽松时尚韩版2019新款体恤上衣', '69', '346', '1089', '1', '1', '红色 白色 黑色', '学院,印花', '27/1big.jpg,27/1small.jpg,27/2big.jpg,27/2small.jpg,27/3big.jpg,27/3small.jpg,27/4big.jpg,27/4small.jpg,27/5big.jpg,27/5small.jp');
INSERT INTO `tshirt` VALUES ('34', 'MG小象宽松T恤女小众时尚2019新款夏季短款休闲洋气小心机上衣潮', '39', '5', '475', '1', '1', '绿色 黑色', '甜美,日系', '28/1big.jpg,28/1small.jpg,28/2big.jpg,28/2small.jpg,28/3big.jpg,28/3small.jpg,28/4big.jpg,28/4small.jpg,28/5big.jpg,28/5small.jp');
INSERT INTO `tshirt` VALUES ('35', 'MG小象短袖t恤女2019新款夏宽松韩版字母撞色纯棉休闲体恤上衣潮', '49', '32', '58', '1', '1', '撞色', '学院,印花', '29/1big.jpg,29/1small.jpg,29/2big.jpg,29/2small.jpg,29/3big.jpg,29/3small.jpg,29/4big.jpg,29/4small.jpg,29/5big.jpg,29/5small.jp');
INSERT INTO `tshirt` VALUES ('36', '蜡笔小新联名 MG小象短袖卡通印花T恤女新款夏季露肩宽松心机上衣', '59', '86', '349', '1', '1', '白色 深灰', '印花,学院,文艺', '30/1big.jpg,30/1small.jpg,30/2big.jpg,30/2small.jpg,30/3big.jpg,30/3small.jpg,30/4big.jpg,30/4small.jpg,30/5big.jpg,30/5small.jp');
INSERT INTO `tshirt` VALUES ('37', '哆啦A梦联名 MG小象心机t恤女新款小众宽松短袖纯棉卡通印花上衣', '59', '13', '380', '1', '1', '白色 灰色 墨蓝色', '街头,文艺', '31/1big.jpg,31/1small.jpg,31/2big.jpg,31/2small.jpg,31/3big.jpg,31/3small.jpg,31/4big.jpg,31/4small.jpg,31/5big.jpg,31/5small.jp');
INSERT INTO `tshirt` VALUES ('38', '蜡笔小新联名款 MG小象T恤女夏短袖POLO衫2019新款高腰格子半身裙', '88', '20', '2', '1', '2', '粉色 黄色 紫色', '甜美,日系,学院', '32/1big.jpg,32/1small.jpg,32/2big.jpg,32/2small.jpg,32/3big.jpg,32/3small.jpg,32/4big.jpg,32/4small.jpg,32/5big.jpg,32/5small.jp');
INSERT INTO `tshirt` VALUES ('39', 'MG小象短袖气质针织T恤女装2019新款潮夏季纯色v领性感露锁骨上衣', '49', '81', '290', '3', '3', '黑色 姜黄色 米杏色', '街头,欧美,网红', '33/1big.jpg,33/1small.jpg,33/2big.jpg,33/2small.jpg,33/3big.jpg,33/3small.jpg,33/4big.jpg,33/4small.jpg,33/5big.jpg,33/5small.jp');
INSERT INTO `tshirt` VALUES ('4', '哆啦A梦联名款MG小象纯棉T恤网红短袖2019新款半袖学生宽松上衣', '69', '285', '7500', '1', '1', '白色 嫩紫色 蓝绿色', '街头,印花,文艺', '34/1big.jpg,34/1small.jpg,34/2big.jpg,34/2small.jpg,34/3big.jpg,34/3small.jpg,34/4big.jpg,34/4small.jpg,34/5big.jpg,34/5small.jp');
INSERT INTO `tshirt` VALUES ('40', 'MG小象短袖纯棉T恤女2019新款韩版休闲宽松蝴蝶结设计感心机上衣', '49', '211', '51', '1', '2', '白色 黄色 粉色 藏蓝色', '甜美,学院,文艺，日系', '35/1big.jpg,35/1small.jpg,35/2big.jpg,35/2small.jpg,35/3big.jpg,35/3small.jpg,35/4big.jpg,35/4small.jpg,35/5big.jpg,35/5small.jp');
INSERT INTO `tshirt` VALUES ('5', 'MG小象2019春夏女装修身糖果色ins超火短袖网红T恤上衣夜店女装', '118', '238', '8', '2', '1', '黄色 粉色 绿色 白色 玫红色', '修身,网红', '36/1big.jpg,36/1small.jpg,36/2big.jpg,36/2small.jpg,36/3big.jpg,36/3small.jpg,36/4big.jpg,36/4small.jpg,36/5big.jpg,36/5small.jp');
INSERT INTO `tshirt` VALUES ('6', 'MG小象牛油果绿套装女2019新款夏装短袖减龄t恤洋气半身裙两件套', '69', '468', '233', '1', '2', '白色 绿色', '网红,文艺,学院', '37/1big.jpg,37/1small.jpg,37/2big.jpg,37/2small.jpg,37/3big.jpg,37/3small.jpg,37/4big.jpg,37/4small.jpg,37/5big.jpg,37/5small.jp');
INSERT INTO `tshirt` VALUES ('7', '2019不一样的情侣装mg小象夏装卡通可可里小姐印花短袖t恤上衣', '55', '1996', '4', '1', '1', '白色 黄色 黑色', '街头,欧美', '38/1big.jpg,38/1small.jpg,38/2big.jpg,38/2small.jpg,38/3big.jpg,38/3small.jpg,38/4big.jpg,38/4small.jpg,38/5big.jpg,38/5small.jp');
INSERT INTO `tshirt` VALUES ('8', 'MG小象短袖T恤女小众2019新款个性心机不规则设计感学生短款上衣', '39', '19855', '59', '2', '1', '白色 黄色 黑色', '街头,欧美', '39/1big.jpg,39/1small.jpg,39/2big.jpg,39/2small.jpg,39/3big.jpg,39/3small.jpg,39/4big.jpg,39/4small.jpg,39/5big.jpg,39/5small.jp');
INSERT INTO `tshirt` VALUES ('9', '防晒衣长袖t恤女冰丝小飞象爆款ins糖果色宽松小象女装mg小象t桖', '59', '415', '32', '1', '1', '绿色 橘色 粉色 白色 黑色 黄色', '学院,印花,网红', '40/1big.jpg,40/1small.jpg,40/2big.jpg,40/2small.jpg,40/3big.jpg,40/3small.jpg,40/4big.jpg,40/4small.jpg,40/5big.jpg,40/5small.jp');
INSERT INTO `user` VALUES ('1', '狗蛋', '123');
