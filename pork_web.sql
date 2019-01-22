-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 12 月 15 日 21:05
-- 伺服器版本: 10.1.36-MariaDB
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `pork_web`
--
CREATE DATABASE IF NOT EXISTS `pork_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `pork_web`;

-- --------------------------------------------------------

--
-- 資料表結構 `collect`
--

CREATE TABLE `collect` (
  `user` int(50) NOT NULL,
  `recipe` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_ID` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`member_ID`, `email`, `nickname`, `password`) VALUES
(1, 'test1', 'XXX', 't1'),
(2, 'test2', '測試二號', 't2'),
(3, '123123', 'ddd', '123123');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `message_ID` int(10) NOT NULL,
  `ti` datetime NOT NULL,
  `author` int(10) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `recipe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`message_ID`, `ti`, `author`, `content`, `recipe`) VALUES
(1, '2018-11-24 03:01:12', 1, '測試測試測試', 4),
(2, '2018-11-23 19:43:52', 1, '一二', 7),
(3, '2018-11-23 20:05:20', 2, 'AAAA嘿嘿嘿嘿嘿11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111<br>\r\n2222222222222222<br>\r\n333', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `recipe`
--

CREATE TABLE `recipe` (
  `recipe_ID` int(11) NOT NULL,
  `recipe_name` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `ingredient` mediumtext NOT NULL,
  `procedue` mediumtext NOT NULL,
  `image` varchar(10) NOT NULL COMMENT '副檔名',
  `CTR` int(11) NOT NULL COMMENT '點擊率',
  `part` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `recipe`
--

INSERT INTO `recipe` (`recipe_ID`, `recipe_name`, `author`, `ingredient`, `procedue`, `image`, `CTR`, `part`) VALUES
(1, '蔥鹽豬肉丼', 1, '食材:<br>\r\n雙醬肉片或其他肉片 300g<br>\r\n蔥綠 (切末) 2~3支<br>\r\n<br>\r\n蔥鹽醬汁:<br>\r\n水	4大匙<br>\r\n酒	2大匙<br>\r\n米霖	1大匙<br>\r\n鹽	2/3小匙<br>\r\n片栗粉	1/2小匙<br>\r\n蒜泥	2瓣<br>\r\n薑泥	1小塊', '1.將1/2量蔥末加入  蔥鹽醬汁，調好準備<br>\r\n2.鍋放一點點油，開中火，放入肉片，兩面煎至赤赤<br>\r\n3.轉中小火，倒入蔥鹽醬汁 ，拌炒至醬汁變稠即可將肉片鋪在飯上，撒細蔥即可<br>\r\n4.將肉片鋪在飯上，撒細蔥即可', 'jpg', 26, '1'),
(2, '日式千層白菜豬肉鍋', 2, '山東大白菜　1/4顆（大）<br>\r\n梅花肉火鍋肉片	250克<br>\r\n青江菜	四小棵<br>\r\n紅蘿蔔	一條<br>\r\n鴻喜菇	1/2包<br>\r\n牛頭牌昆布海鮮高湯　一罐', '1.先將所有食材備好<br>\r\n2.大白菜去頭逐葉清洗乾淨，青江菜去頭逐葉清洗乾淨，胡蘿蔔去皮切大薄片狀<br>\r\n3.取一片大白菜依序鋪上兩片胡蘿蔔片～兩片青江菜葉～兩片火鍋肉片，連續這個疊法疊三層<br>\r\n4.將步驟3的食材切成四等份擺入砂鍋內，依序排列到滿<br>\r\n5.在中間部份再壓縮些許空間塞入鴻喜菇<br>\r\n6.倒入整罐牛頭牌昆布海鮮高湯，開火蓋蓋煮至滾沸轉小火續煮五分鐘即可熄火', 'jpg', 4, '1'),
(3, '日式炸豬排', 2, '豬里肌 150g <br>\r\n鹽 少許<br>\r\n低筋麵粉 適量<br>\r\n蛋液 1顆<br>\r\n麵包粉 適量<br>\r\n高麗菜絲 適量', '1.將厚約一公分的豬里肌洗淨拭乾水份，較厚的地方劃開攤平，斷筋並以肉鎚和刀背拍鬆打散纖維，撒上少許鹽巴、胡椒粉靜置十分鐘備用。<br>\r\n<br>\r\n2.依序沾裹麵粉->蛋液->麵包粉，再重覆一次以上動作後將粉料壓緊壓實，靜置10分鐘反潮。<br>\r\n<br>\r\n3.用鑄鐵鍋或平底鍋，倒入植物油，油量高度略1.5公分淹過肉排即可，熱油至150度（丟一小塊麵粉進鍋先沉底後才浮起即中油溫），放入豬排炸3分鐘至金黃熟透後撈起瀝油，續調至大火，放入豬排回鍋再炸10-15秒逼出油份後撈起並瀝乾油份即可。<br>\r\n<br>\r\n4.外酥內軟的美味炸豬排，搭配爽脆高麗菜絲，依喜好蘸伍斯特醬或千島醬享用，不必上餐廳也可以享用道地的日式家庭料理喔！', 'jpg', 1, '2'),
(4, '蒜香豬頰肉', 2, '豬頰肉	300g<br>\r\n蔥	2支<br>\r\n蒜	5瓣<br>\r\n辣椒	1/2支<br>\r\n<br>\r\n調味料:<br>\r\n鹽磨海鹽　適量<br>\r\n白胡椒粉　適量<br>\r\n', '1.豬頰肉切片，約0.5公分厚即可，蔥切蔥花、蒜切蒜末，辣椒切片備用<br>\r\n2.熱鍋加些許油，將豬頰肉煎熟，是否煎至金黃色則看個人喜號<br>\r\n3.煎好的豬頰肉取出待用。<br>\r\n4.熱鍋加油，放入蒜末炒出香氣，可直接用煎肉的鍋子接著煮，這裡我是有換鍋<br>\r\n5.最後依序加入豬頰肉，蔥花，辣椒片拌炒，起鍋前加入適量海鹽和胡椒粉即完成。', 'jpg', 86, '1'),
(5, '滷肉飯', 1, '豬五花(帶豬皮) 350g<br>\r\n蒜頭 6瓣(切末)<br>\r\n冰糖 1大匙<br>\r\n白胡椒粉  少許<br>\r\n雞蛋 2顆<br>\r\n紅蔥頭酥 半碗<br>\r\n醬油 80cc<br>\r\n五香粉 少許<br>\r\n水 適量', '1.電鍋將豬皮和五花肉蒸熟<br>\r\n2.蒸熟後的豬皮和五花肉，切成小丁(手切的肉會比機器切的煮起來口感更好更美味<br>\r\n3.炒鍋內倒入做法1的豬皮和五花肉丁，炒出豬油後加入蒜頭碎炒香<br>\r\n4.作法3再加入紅蔥頭酥 .醬油.冰糖.五香粉和白胡椒粉等調味料和水，煮至大滾<br>\r\n5.水煮蛋煮好剝殼,加入作法4,用小火慢慢煨到肉上色(移至陶鍋更佳,煮出來的滷肉會比一般鍋子煮的味道更香醇)<br>\r\n6.大約煮45～60分鐘,就好囉!', 'jpg', 74, '3'),
(6, '德國豬腳', 1, '豬前腿腿庫   2隻<br>\r\n<br>\r\n乾醃料:<br>\r\n鹽 3大匙<br>\r\n粗磨黑胡椒  3大匙<br>\r\n<br>\r\n濕醃料:<br>\r\n洋蔥 1顆<br>\r\n蒜頭 1大把<br>\r\n黑胡椒粒 1大匙<br>\r\n黑麥啤酒 1200ml<br>\r\n月桂葉 4片<br>\r\n西洋芹 5根<br>\r\n紅蘿蔔 2根<br>\r\n八角 3粒<br>\r\n鹽 2大匙', '1.豬腳洗乾淨擦乾, 橫向畫上幾刀, 抹上乾醃料, 放入鍋中醃漬半天<br>\r\n2.濕醃料 中的大蒜拍碎, 蔬菜切大段大丁, 與香料調味料一起放入鍋中後倒入啤酒, 啤酒盡量醃過整隻豬腳, 放冰箱醃漬1天以上<br>\r\n3.小火煮滾後開大火把髒污泡泡撈掉, 之後再轉小火悶煮2~3小時(有悶燒鍋的話就小火滾一小時後放入悶燒鍋4小時)<br>\r\n4.烤箱上火轉最大預熱, 豬腳表面縱向剪開幾刀, 刷上鍋裡的豬油讓表皮更加酥脆, 進烤箱烤至豬皮酥脆(約1.5hr), 期間要記得翻面塗油烤勻<br>\r\n5.[蜂蜜芥末醬] 如果有原味的第戎芥末醬, 可以芥末醬:水:蜂蜜=3:2:1 的比例調和使用, 風味大勝一般的現成芥末醬', 'jpg', 28, '4'),
(7, '韓式白菜燉豬前腿肉', 2, '豬前腿肉　400 g<br>\r\n韓國白菜（津菜）800 g<br>\r\n紅椒　1 隻<br>\r\n<br>\r\n食材:<br>\r\n洋蔥1/2 個<br>\r\n<br>\r\n豬肉調味：<br>\r\n鹽	1 茶匙<br>\r\n糖	1 茶匙<br>\r\n醬油	1.5 湯匙<br>\r\n<br>\r\n醬料：<br>\r\n韓式味噌醬　1.5湯匙<br>\r\n韓式辣醬　1 茶匙<br>\r\n醬油　1.5 湯匙<br>\r\n麻油　1 茶匙<br>\r\n韓國燒酒　1 湯匙<br>\r\n糖　1 茶匙<br>\r\n薑汁　1 茶匙<br>\r\n蒜末　1 湯匙<br>\r\n芝麻　1.5 湯匙<br>\r\n', '1.將豬肉切成5cm ×5 cm大小<br>\r\n2.白菜切成大塊, 洋蔥切幼絲，辣椒切絲，在一個容量較大的鍋子內，加油一湯匙，開中火，待油熱後，放下豬肉及洋蔥，直至豬肉兩邊煎成金黃色，加上鹽一茶匙，糖一茶匙，醬油1.5湯匙調味，放下白菜在豬肉面上，加上辣椒<br>\r\n加上鹽一茶匙，糖一茶匙，醬油1.5湯匙調味<br>\r\n3.將芝麻磨成芝麻碎<br>\r\n4.在一個碗內， 醬汁材料放入及拌好，然後放入鍋子裏，加蓋開小火煮20分鐘便完成', 'jpg', 20, '1'),
(8, '古早味炸排骨', 1, '大里肌肉 4片（2盒）<br>\r\n<br>\r\n醃料:<br>\r\n醬油 2～2.5大匙<br>\r\n米酒 2.5大匙<br>\r\n蠔油 1大匙<br>\r\n蒜泥 適量（2～3瓣）<br>\r\n五香粉 1小匙<br>\r\n肉桂粉 1小匙<br>\r\n水 4～5大匙<br>\r\n糖 0.5～1大匙<br>\r\n白胡椒粉 適量<br>\r\n粗黑胡椒粒 適量<br>\r\n<br>\r\n粉漿糊:<br>\r\n木薯粉 3.5大匙<br>\r\n太白粉 1.5大匙<br>\r\n全蛋 1顆<br>\r\n水 3大匙', '1.大里肌肉買回來，要先在筋膜的地方劃幾刀斷筋，這樣在油炸或煎的時候，肉片才不會捲起，不夠平整。<br>\r\n2.斷筋後，將大里肌肉放進塑膠袋，用肉槌或菜刀把里肌肉拍鬆拍薄，成片狀。<br>\r\n3.將醃料混合調成醬汁，將排骨肉放進去兩面均勻沾上醃料醬汁，放進冰箱醃一晚。<br>\r\n4.調粉糊，另取一個鋼盆（鍋），將食譜中所有粉類倒入鍋中，打一顆全蛋，再加3大匙的水一起調勻成粉糊。<br>\r\n5.將排骨肉放進去沾裹粉漿，每一面都要均勻沾裹上粉漿。靜置15～20分鐘之後，等粉糊被排骨肉吸收成濃稠狀，即可下鍋煎炸。<br>\r\n6.煎（炸）至兩面金黃即可瀝油起鍋！', 'jpg', 4, '2'),
(9, '青蘿蔔豬頸骨煲湯', 1, '豬勁骨：一大塊（店家會幫你切成小塊）<br>\r\n青蘿蔔：1條<br>\r\n蜜棗：1粒<br>\r\n南杏：1大匙<br>\r\n紅蘿蔔：1/2條', '1. 蜜棗稍微洗淨、南杏洗淨泡水，青蘿蔔削皮切塊備用。<br>\r\n2. 煮一鍋水，水滾後將排骨放入川燙，稍煮一下，讓水血都出來。（不必煮都熟）<br>\r\n3. 倒出來後用水洗淨一下。<br>\r\n4. 鍋中加入8杯水隨即將所有材料放入鍋中。<br>\r\n5. 待水滾後，改為中小火慢慢煲煮2小時。<br>\r\n6. 開蓋加入些許鹽調味即可。', 'jpg', 2, '1'),
(10, '紅燒豬肋排', 1, '豬肋排（腹脇排）2400克<br>\r\n水 3杯半<br>\r\n醬油 1/2杯<br>\r\n糖 3~4大匙<br>\r\n五香粉 適量<br>\r\n胡椒粉 適量', '1.肋排先用滾水汆燙一下，撈起。<br>\r\n2.另用水3杯半加調味料煮沸。把肋排下鍋，蓋鍋蓋，先用中火煮15分鐘，再改小火燜煮1小時半即軟透。<br>\r\n3.燜煮的中途要翻幾次面，順便檢查湯汁份量，如果火太大讓湯汁太少，可以酌量加點水，以免焦底（雖然有點焦底也非常香）。<br>\r\n4.完成時約剩一杯濃稠的湯汁，淋在肋排上即可上桌。如果剩的湯汁很多，可以開大火燒煮到濃稠，再淋在肋排上。<br>\r\n5.骨頭可以輕易抽出，肉用筷子即可夾開，不必用刀叉。\r\n', 'jpg', 6, '3'),
(11, '香滷豬腱肉', 1, '豬腱 兩人份<br>\r\n八角 4顆<br>\r\n蔥 2根<br>\r\n薑 5片<br>\r\n辣椒 1根<br>\r\n<br>\r\n調味料:<br>\r\n醬油 4匙<br>\r\n米酒 3匙<br>\r\n糖 2匙<br>\r\n五香粉 適量<br>\r\n白胡椒粉 適量', '1.豬腱略燙過，備好辛香料。<br>\r\n2.熱油鍋，爆香辛香料，加入八角。<br>\r\n3.加入調味料，水半淹過食材煮滾後關小火燉煮1小時，（也可以移至電鍋燉煮，外鍋2杯水）。<br>\r\n4.放涼後切片，再淋上些許醬汁，就可以上桌啦。', 'jpg', 5, '4'),
(12, '香滷豬腳', 1, '豬腳 1隻<br>\r\n蒜頭 8-10瓣<br>\r\n老薑(可略) 1小塊<br>\r\n青蔥(可略) 3-5根<br>\r\n辣椒(可略) 1條<br>\r\n醬油 120-150cc<br>\r\n冰糖 1大匙<br>\r\n米酒 50-80cc<br>\r\n水 適量<br>\r\n胡椒粉(粒) 少許', '1.先將豬腳去除雜毛與髒物，清洗乾淨。<br>\r\n2.起一鍋適量的水，煮滾後放入豬腳汆燙約3分鐘。<br>\r\n3.起鍋再將豬腳清洗乾淨。<br>\r\n4.另起鍋，放入豬腳(可先再放入適量的油，將豬腳再把外層煎的微微洽洽)，再加入蒜頭，老薑，青蔥，辣椒，冰糖，醬油觸鍋，拌至上醬色。<br>\r\n5.再加入水(約蓋過食材)與米酒及胡椒粉，煮滾後試味道，湯汁約比一般的湯鹹一點即可。(可由醬油或水調整鹹度)<br>\r\n6.以小火，蓋鍋蓋燉煮，一般瓦斯約煮1.5小時，期間可適時的觀看並翻動一下，湯汁減少，可適量的補入水再煮。(可用壓力鍋較省時，約25-30分鐘，時間請參考各自品牌的烹煮時間)<br>\r\n7.最後，試一下口感，若是自己喜愛的軟Q度，即可關火，起鍋盛盤(碗)。', 'jpg', 4, '4'),
(13, '酥炸排骨酥', 2, '排骨 1000克<br>\r\n麵粉 20~30克<br>\r\n地瓜粉 適量<br>\r\n<br>\r\n調味料:<br>\r\n蒜 1頭<br>\r\n醬油 3大匙<br>\r\n米酒 2小匙<br>\r\n味醂 1大匙<br>\r\n五香粉 1小匙<br>\r\n水 3大匙', '1.排骨洗淨剁成小塊，加入所有調味料抓均，放入冰箱冷藏醃半天或過夜。<br>\r\n2.麵粉加入醃好的排骨中拌勻，將排骨均勻沾上地瓜粉，沾好地瓜粉的排骨放置5~10分鐘。<br>\r\n3.熱油約160度，下排骨炸至金黃酥脆。<br>\r\n4.起鍋瀝油，撒上胡椒鹽即可。', 'jpg', 2, '2'),
(14, '蔥爆松阪豬肉片', 2, '松阪豬切片 一份<br>\r\n蔥段 6支<br>\r\n蒜末辣椒末 2匙<br>\r\n<br>\r\n調味料:<br>\r\n高湯或水 2大匙<br>\r\n有機素蠔油 2大匙<br>\r\n酒 一匙<br>\r\n', '1.起油鍋爆香蔥段後，先撈起來。<br>\r\n2.同一鍋，放入肉片與辛香料一起拌炒。<br>\r\n3.將調味料先調好，（酒、高湯、有機素蠔油先拌勻）。<br>\r\n4.等肉片炒到反白，倒入調味料，煮到收汁。<br>\r\n5.最後將剛爆好的蔥拌入即可完成。', 'jpg', 1, '1'),
(15, '豬龍骨蘿蔔湯', 2, '豬龍骨 約600g<br>\r\n薑 3~4片<br>\r\n蔥 2根<br>\r\n扁魚乾末 約20g<br>\r\n白蘿蔔 1條<br>\r\n香菜 5根<br>\r\n水 3000cc<br>\r\n<br>\r\n調味料:<br>\r\n鹽 1小匙<br>\r\n白胡椒粉 1茶匙<br>\r\n', '1.扁魚乾烤到微焦捲曲大約15分鐘搗碎備用，洗淨青蔥及薑切段備用，洗淨白蔔蔔切塊備用。<br>\r\n2.準備一鍋冷水直接下豬龍骨，滾水汆燙到血水全釋放出來熄火(洗去腥味)。<br>\r\n3.撈起龍骨後沖冷水，洗淨附著在骨頭上的血水殘渣。<br>\r\n4.另外準備3000cc冷水將龍骨入鍋，先以大火煮滾。<br>\r\n5.水微滾時加入扁魚碎末及蔥段、薑片去味。<br>\r\n6.大火煮滾高湯時湯面會起浮沫，可稍微用濾網撈除；後續以小火熬煮約2~2.5小時。<br>\r\n7.另一小鍋滾水加入白蘿蔔燉煮，再加入剛剛熬煮的龍骨高湯約500cc，中小火煮約30分鐘，加入鹽、胡椒粉調味最後加香菜即可裝碗。', 'jpg', 4, '1'),
(16, '橙汁里肌', 2, '家樂福嚴選里肌肉排 100克<br>\r\n<br>\r\n醃料:<br>\r\n太白粉 1/4匙<br>\r\n玉米粉 1/4匙<br>\r\n蛋液 1/2匙<br>\r\n柳丁汁 1/4匙<br>\r\n<br>\r\n醬汁:<br>\r\n糖 少許<br>\r\n柳丁汁 1/2匙<br>\r\n檸檬汁 1/4匙<br>\r\n醬油 1/2匙', '1.使用家樂福嚴選里肌肉排，並將柳丁、檸檬擠成汁，雞蛋打成蛋液備用。<br>\r\n2.將里肌肉排放入醃料中，醃至10分鐘。<br>\r\n3.鍋子燒乾後，放少許油，將里肌肉排煎至金黃，撈起備用。<br>\r\n4.鍋中放入醬汁，並放入里肌肉排，拌炒至醬汁收乾，即可食用。', 'jpg', 1, '2');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_ID`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_ID`);

--
-- 資料表索引 `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_ID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `message_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
