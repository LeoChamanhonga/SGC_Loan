DROP TABLE IF EXISTS aboutus;

CREATE TABLE `aboutus` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`abid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO aboutus VALUES("1","<p>Welcome to Loan Management System. Developed by Optimum Linkup Computers</p>\n");


DROP TABLE IF EXISTS advcash;

CREATE TABLE `advcash` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `acct_email` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO advcash VALUES("1","Cryptos?rid=782752","jdjjdjj@gjj.com","2017-03-27 12:53:46");


DROP TABLE IF EXISTS backup;

CREATE TABLE `backup` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("10","Cryptos?rid=782752","0.1","134N7BmQZHSj2WU7kUaN8fFada32GpBXbg","2017-04-03 07:37:40");
INSERT INTO backup VALUES("11","Cryptos?rid=782752","0.1","134N7BmQZHSj2WU7kUaN8fFada32GpBXbg","2017-04-03 08:14:12");
INSERT INTO backup VALUES("15","Cryptos?rid=782752","0.1","134N7BmQZHSj2WU7kUaN8fFada32GpBXbg","2017-04-03 09:30:28");
INSERT INTO backup VALUES("18","Cryptos?rid=782752","0.15","134N7BmQZHSj2WU7kUaN8fFada32GpBXbg","2017-04-03 10:59:36");


DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `banaid` int(11) NOT NULL AUTO_INCREMENT,
  `bannar` text NOT NULL,
  PRIMARY KEY (`banaid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO banner VALUES("2","bannar/sld5.jpg");
INSERT INTO banner VALUES("3","bannar/sld2.jpg");


DROP TABLE IF EXISTS bitcoin;

CREATE TABLE `bitcoin` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `Address` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO bitcoin VALUES("4","Cryptos?rid=782752","134N7BmQZHSj2WU7kUaN8fFada32GpBXbg","2017-03-27 12:17:23");


DROP TABLE IF EXISTS countries;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(200) NOT NULL DEFAULT '',
  `alpha_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;

INSERT INTO countries VALUES("1","Afghanistan","fl","afg");
INSERT INTO countries VALUES("2","Aland Islands","ax","ala");
INSERT INTO countries VALUES("3","Albania","al","alb");
INSERT INTO countries VALUES("4","Algeria","dz","dza");
INSERT INTO countries VALUES("5","American Samoa","as","asm");
INSERT INTO countries VALUES("6","Andorra","ad","and");
INSERT INTO countries VALUES("7","Angola","ao","ago");
INSERT INTO countries VALUES("8","Anguilla","ai","aia");
INSERT INTO countries VALUES("9","Antarctica","aq","ata");
INSERT INTO countries VALUES("10","Antigua and Barbuda","ag","atg");
INSERT INTO countries VALUES("11","Argentina","ar","arg");
INSERT INTO countries VALUES("12","Armenia","am","arm");
INSERT INTO countries VALUES("13","Aruba","aw","abw");
INSERT INTO countries VALUES("14","Australia","au","aus");
INSERT INTO countries VALUES("15","Austria","at","aut");
INSERT INTO countries VALUES("16","Azerbaijan","az","aze");
INSERT INTO countries VALUES("17","Bahamas","bs","bhs");
INSERT INTO countries VALUES("18","Bahrain","bh","bhr");
INSERT INTO countries VALUES("19","Bangladesh","bd","bgd");
INSERT INTO countries VALUES("20","Barbados","bb","brb");
INSERT INTO countries VALUES("21","Belarus","by","blr");
INSERT INTO countries VALUES("22","Belgium","be","bel");
INSERT INTO countries VALUES("23","Belize","bz","blz");
INSERT INTO countries VALUES("24","Benin","bj","ben");
INSERT INTO countries VALUES("25","Bermuda","bm","bmu");
INSERT INTO countries VALUES("26","Bhutan","bt","btn");
INSERT INTO countries VALUES("27","Bolivia, Plurinational State of","bo","bol");
INSERT INTO countries VALUES("28","Bonaire, Sint Eustatius and Saba","bq","bes");
INSERT INTO countries VALUES("29","Bosnia and Herzegovina","ba","bih");
INSERT INTO countries VALUES("30","Botswana","bw","bwa");
INSERT INTO countries VALUES("31","Bouvet Island","bv","bvt");
INSERT INTO countries VALUES("32","Brazil","br","bra");
INSERT INTO countries VALUES("33","British Indian Ocean Territory","io","iot");
INSERT INTO countries VALUES("34","Brunei Darussalam","bn","brn");
INSERT INTO countries VALUES("35","Bulgaria","bg","bgr");
INSERT INTO countries VALUES("36","Burkina Faso","bf","bfa");
INSERT INTO countries VALUES("37","Burundi","bi","bdi");
INSERT INTO countries VALUES("38","Cambodia","kh","khm");
INSERT INTO countries VALUES("39","Cameroon","cm","cmr");
INSERT INTO countries VALUES("40","Canada","ca","can");
INSERT INTO countries VALUES("41","Cape Verde","cv","cpv");
INSERT INTO countries VALUES("42","Cayman Islands","ky","cym");
INSERT INTO countries VALUES("43","Central African Republic","cf","caf");
INSERT INTO countries VALUES("44","Chad","td","tcd");
INSERT INTO countries VALUES("45","Chile","cl","chl");
INSERT INTO countries VALUES("46","China","cn","chn");
INSERT INTO countries VALUES("47","Christmas Island","cx","cxr");
INSERT INTO countries VALUES("48","Cocos (Keeling) Islands","cc","cck");
INSERT INTO countries VALUES("49","Colombia","co","col");
INSERT INTO countries VALUES("50","Comoros","km","com");
INSERT INTO countries VALUES("51","Congo","cg","cog");
INSERT INTO countries VALUES("52","Congo, The Democratic Republic of the","cd","cod");
INSERT INTO countries VALUES("53","Cook Islands","ck","cok");
INSERT INTO countries VALUES("54","Costa Rica","cr","cri");
INSERT INTO countries VALUES("55","Cote d\'Ivoire","ci","civ");
INSERT INTO countries VALUES("56","Croatia","hr","hrv");
INSERT INTO countries VALUES("57","Cuba","cu","cub");
INSERT INTO countries VALUES("58","Curacao","cw","cuw");
INSERT INTO countries VALUES("59","Cyprus","cy","cyp");
INSERT INTO countries VALUES("60","Czech Republic","cz","cze");
INSERT INTO countries VALUES("61","Denmark","dk","dnk");
INSERT INTO countries VALUES("62","Djibouti","dj","dji");
INSERT INTO countries VALUES("63","Dominica","dm","dma");
INSERT INTO countries VALUES("64","Dominican Republic","do","dom");
INSERT INTO countries VALUES("65","Ecuador","ec","ecu");
INSERT INTO countries VALUES("66","Egypt","eg","egy");
INSERT INTO countries VALUES("67","El Salvador","sv","slv");
INSERT INTO countries VALUES("68","Equatorial Guinea","gq","gnq");
INSERT INTO countries VALUES("69","Eritrea","er","eri");
INSERT INTO countries VALUES("70","Estonia","ee","est");
INSERT INTO countries VALUES("71","Ethiopia","et","eth");
INSERT INTO countries VALUES("72","Falkland Islands (Malvinas)","fk","flk");
INSERT INTO countries VALUES("73","Faroe Islands","fo","fro");
INSERT INTO countries VALUES("74","Fiji","fj","fji");
INSERT INTO countries VALUES("75","Finland","fi","fin");
INSERT INTO countries VALUES("76","France","fr","fra");
INSERT INTO countries VALUES("77","French Guiana","gf","guf");
INSERT INTO countries VALUES("78","French Polynesia","pf","pyf");
INSERT INTO countries VALUES("79","French Southern Territories","tf","atf");
INSERT INTO countries VALUES("80","Gabon","ga","gab");
INSERT INTO countries VALUES("81","Gambia","gm","gmb");
INSERT INTO countries VALUES("82","Georgia","ge","geo");
INSERT INTO countries VALUES("83","Germany","de","deu");
INSERT INTO countries VALUES("84","Ghana","gh","gha");
INSERT INTO countries VALUES("85","Gibraltar","gi","gib");
INSERT INTO countries VALUES("86","Greece","gr","grc");
INSERT INTO countries VALUES("87","Greenland","gl","grl");
INSERT INTO countries VALUES("88","Grenada","gd","grd");
INSERT INTO countries VALUES("89","Guadeloupe","gp","glp");
INSERT INTO countries VALUES("90","Guam","gu","gum");
INSERT INTO countries VALUES("91","Guatemala","gt","gtm");
INSERT INTO countries VALUES("92","Guernsey","gg","ggy");
INSERT INTO countries VALUES("93","Guinea","gn","gin");
INSERT INTO countries VALUES("94","Guinea-Bissau","gw","gnb");
INSERT INTO countries VALUES("95","Guyana","gy","guy");
INSERT INTO countries VALUES("96","Haiti","ht","hti");
INSERT INTO countries VALUES("97","Heard Island and McDonald Islands","hm","hmd");
INSERT INTO countries VALUES("98","Holy See (Vatican City State)","va","vat");
INSERT INTO countries VALUES("99","Honduras","hn","hnd");
INSERT INTO countries VALUES("100","Hong Kong","hk","hkg");
INSERT INTO countries VALUES("101","Hungary","hu","hun");
INSERT INTO countries VALUES("102","Iceland","is","isl");
INSERT INTO countries VALUES("103","India","in","ind");
INSERT INTO countries VALUES("104","Indonesia","id","idn");
INSERT INTO countries VALUES("105","Iran, Islamic Republic of","ir","irn");
INSERT INTO countries VALUES("106","Iraq","iq","irq");
INSERT INTO countries VALUES("107","Ireland","ie","irl");
INSERT INTO countries VALUES("108","Isle of Man","im","imn");
INSERT INTO countries VALUES("109","Israel","il","isr");
INSERT INTO countries VALUES("110","Italy","it","ita");
INSERT INTO countries VALUES("111","Jamaica","jm","jam");
INSERT INTO countries VALUES("112","Japan","jp","jpn");
INSERT INTO countries VALUES("113","Jersey","je","jey");
INSERT INTO countries VALUES("114","Jordan","jo","jor");
INSERT INTO countries VALUES("115","Kazakhstan","kz","kaz");
INSERT INTO countries VALUES("116","Kenya","ke","ken");
INSERT INTO countries VALUES("117","Kiribati","ki","kir");
INSERT INTO countries VALUES("118","Korea, Democratic People\'s Republic of","kp","prk");
INSERT INTO countries VALUES("119","Korea, Republic of","kr","kor");
INSERT INTO countries VALUES("120","Kuwait","kw","kwt");
INSERT INTO countries VALUES("121","Kyrgyzstan","kg","kgz");
INSERT INTO countries VALUES("122","Lao People\'s Democratic Republic","la","lao");
INSERT INTO countries VALUES("123","Latvia","lv","lva");
INSERT INTO countries VALUES("124","Lebanon","lb","lbn");
INSERT INTO countries VALUES("125","Lesotho","ls","lso");
INSERT INTO countries VALUES("126","Liberia","lr","lbr");
INSERT INTO countries VALUES("127","Libyan Arab Jamahiriya","ly","lby");
INSERT INTO countries VALUES("128","Liechtenstein","li","lie");
INSERT INTO countries VALUES("129","Lithuania","lt","ltu");
INSERT INTO countries VALUES("130","Luxembourg","lu","lux");
INSERT INTO countries VALUES("131","Macao","mo","mac");
INSERT INTO countries VALUES("132","Macedonia, The former Yugoslav Republic of","mk","mkd");
INSERT INTO countries VALUES("133","Madagascar","mg","mdg");
INSERT INTO countries VALUES("134","Malawi","mw","mwi");
INSERT INTO countries VALUES("135","Malaysia","my","mys");
INSERT INTO countries VALUES("136","Maldives","mv","mdv");
INSERT INTO countries VALUES("137","Mali","ml","mli");
INSERT INTO countries VALUES("138","Malta","mt","mlt");
INSERT INTO countries VALUES("139","Marshall Islands","mh","mhl");
INSERT INTO countries VALUES("140","Martinique","mq","mtq");
INSERT INTO countries VALUES("141","Mauritania","mr","mrt");
INSERT INTO countries VALUES("142","Mauritius","mu","mus");
INSERT INTO countries VALUES("143","Mayotte","yt","myt");
INSERT INTO countries VALUES("144","Mexico","mx","mex");
INSERT INTO countries VALUES("145","Micronesia, Federated States of","fm","fsm");
INSERT INTO countries VALUES("146","Moldova, Republic of","md","mda");
INSERT INTO countries VALUES("147","Monaco","mc","mco");
INSERT INTO countries VALUES("148","Mongolia","mn","mng");
INSERT INTO countries VALUES("149","Montenegro","me","mne");
INSERT INTO countries VALUES("150","Montserrat","ms","msr");
INSERT INTO countries VALUES("151","Morocco","ma","mar");
INSERT INTO countries VALUES("152","Mozambique","mz","moz");
INSERT INTO countries VALUES("153","Myanmar","mm","mmr");
INSERT INTO countries VALUES("154","Namibia","na","nam");
INSERT INTO countries VALUES("155","Nauru","nr","nru");
INSERT INTO countries VALUES("156","Nepal","np","npl");
INSERT INTO countries VALUES("157","Netherlands","nl","nld");
INSERT INTO countries VALUES("158","New Caledonia","nc","ncl");
INSERT INTO countries VALUES("159","New Zealand","nz","nzl");
INSERT INTO countries VALUES("160","Nicaragua","ni","nic");
INSERT INTO countries VALUES("161","Niger","ne","ner");
INSERT INTO countries VALUES("162","Nigeria","ng","nga");
INSERT INTO countries VALUES("163","Niue","nu","niu");
INSERT INTO countries VALUES("164","Norfolk Island","nf","nfk");
INSERT INTO countries VALUES("165","Northern Mariana Islands","mp","mnp");
INSERT INTO countries VALUES("166","Norway","no","nor");
INSERT INTO countries VALUES("167","Oman","om","omn");
INSERT INTO countries VALUES("168","Pakistan","pk","pak");
INSERT INTO countries VALUES("169","Palau","pw","plw");
INSERT INTO countries VALUES("170","Palestinian Territory, Occupied","ps","pse");
INSERT INTO countries VALUES("171","Panama","pa","pan");
INSERT INTO countries VALUES("172","Papua New Guinea","pg","png");
INSERT INTO countries VALUES("173","Paraguay","py","pry");
INSERT INTO countries VALUES("174","Peru","pe","per");
INSERT INTO countries VALUES("175","Philippines","ph","phl");
INSERT INTO countries VALUES("176","Pitcairn","pn","pcn");
INSERT INTO countries VALUES("177","Poland","pl","pol");
INSERT INTO countries VALUES("178","Portugal","pt","prt");
INSERT INTO countries VALUES("179","Puerto Rico","pr","pri");
INSERT INTO countries VALUES("180","Qatar","qa","qat");
INSERT INTO countries VALUES("181","Reunion","re","reu");
INSERT INTO countries VALUES("182","Romania","ro","rou");
INSERT INTO countries VALUES("183","Russian Federation","ru","rus");
INSERT INTO countries VALUES("184","Rwanda","rw","rwa");
INSERT INTO countries VALUES("185","Saint Barthelemy","bl","blm");
INSERT INTO countries VALUES("186","Saint Helena, Ascension and Tristan Da Cunha","sh","shn");
INSERT INTO countries VALUES("187","Saint Kitts and Nevis","kn","kna");
INSERT INTO countries VALUES("188","Saint Lucia","lc","lca");
INSERT INTO countries VALUES("189","Saint Martin (French Part)","mf","maf");
INSERT INTO countries VALUES("190","Saint Pierre and Miquelon","pm","spm");
INSERT INTO countries VALUES("191","Saint Vincent and The Grenadines","vc","vct");
INSERT INTO countries VALUES("192","Samoa","ws","wsm");
INSERT INTO countries VALUES("193","San Marino","sm","smr");
INSERT INTO countries VALUES("194","Sao Tome and Principe","st","stp");
INSERT INTO countries VALUES("195","Saudi Arabia","sa","sau");
INSERT INTO countries VALUES("196","Senegal","sn","sen");
INSERT INTO countries VALUES("197","Serbia","rs","srb");
INSERT INTO countries VALUES("198","Seychelles","sc","syc");
INSERT INTO countries VALUES("199","Sierra Leone","sl","sle");
INSERT INTO countries VALUES("200","Singapore","sg","sgp");
INSERT INTO countries VALUES("201","Sint Maarten (Dutch Part)","sx","sxm");
INSERT INTO countries VALUES("202","Slovakia","sk","svk");
INSERT INTO countries VALUES("203","Slovenia","si","svn");
INSERT INTO countries VALUES("204","Solomon Islands","sb","slb");
INSERT INTO countries VALUES("205","Somalia","so","som");
INSERT INTO countries VALUES("206","South Africa","za","zaf");
INSERT INTO countries VALUES("207","South Georgia and The South Sandwich Islands","gs","sgs");
INSERT INTO countries VALUES("208","South Sudan","ss","ssd");
INSERT INTO countries VALUES("209","Spain","es","esp");
INSERT INTO countries VALUES("210","Sri Lanka","lk","lka");
INSERT INTO countries VALUES("211","Sudan","sd","sdn");
INSERT INTO countries VALUES("212","Suriname","sr","sur");
INSERT INTO countries VALUES("213","Svalbard and Jan Mayen","sj","sjm");
INSERT INTO countries VALUES("214","Swaziland","sz","swz");
INSERT INTO countries VALUES("215","Sweden","se","swe");
INSERT INTO countries VALUES("216","Switzerland","ch","che");
INSERT INTO countries VALUES("217","Syrian Arab Republic","sy","syr");
INSERT INTO countries VALUES("218","Taiwan, Province of China","tw","twn");
INSERT INTO countries VALUES("219","Tajikistan","tj","tjk");
INSERT INTO countries VALUES("220","Tanzania, United Republic of","tz","tza");
INSERT INTO countries VALUES("221","Thailand","th","tha");
INSERT INTO countries VALUES("222","Timor-Leste","tl","tls");
INSERT INTO countries VALUES("223","Togo","tg","tgo");
INSERT INTO countries VALUES("224","Tokelau","tk","tkl");
INSERT INTO countries VALUES("225","Tonga","to","ton");
INSERT INTO countries VALUES("226","Trinidad and Tobago","tt","tto");
INSERT INTO countries VALUES("227","Tunisia","tn","tun");
INSERT INTO countries VALUES("228","Turkey","tr","tur");
INSERT INTO countries VALUES("229","Turkmenistan","tm","tkm");
INSERT INTO countries VALUES("230","Turks and Caicos Islands","tc","tca");
INSERT INTO countries VALUES("231","Tuvalu","tv","tuv");
INSERT INTO countries VALUES("232","Uganda","ug","uga");
INSERT INTO countries VALUES("233","Ukraine","ua","ukr");
INSERT INTO countries VALUES("234","United Arab Emirates","ae","are");
INSERT INTO countries VALUES("235","United Kingdom","gb","gbr");
INSERT INTO countries VALUES("236","United States","us","usa");
INSERT INTO countries VALUES("237","United States Minor Outlying Islands","um","umi");
INSERT INTO countries VALUES("238","Uruguay","uy","ury");
INSERT INTO countries VALUES("239","Uzbekistan","uz","uzb");
INSERT INTO countries VALUES("240","Vanuatu","vu","vut");
INSERT INTO countries VALUES("241","Venezuela, Bolivarian Republic of","ve","ven");
INSERT INTO countries VALUES("242","Viet Nam","vn","vnm");
INSERT INTO countries VALUES("243","Virgin Islands, British","vg","vgb");
INSERT INTO countries VALUES("244","Virgin Islands, U.S.","vi","vir");
INSERT INTO countries VALUES("245","Wallis and Futuna","wf","wlf");
INSERT INTO countries VALUES("246","Western Sahara","eh","esh");
INSERT INTO countries VALUES("247","Yemen","ye","yem");
INSERT INTO countries VALUES("248","Zambia","zm","zmb");
INSERT INTO countries VALUES("249","Zimbabwe","zw","zwe");


DROP TABLE IF EXISTS faqs;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO faqs VALUES("1","Please type the subject here","<p>Please Update Faqs Here</p>\n");


DROP TABLE IF EXISTS footer;

CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `pho` varchar(200) NOT NULL,
  `face` varchar(200) NOT NULL,
  `webs` varchar(200) NOT NULL,
  `conh` varchar(200) NOT NULL,
  `twi` varchar(200) NOT NULL,
  `gplus` varchar(200) NOT NULL,
  `ins` varchar(200) NOT NULL,
  `yous` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `apply` text NOT NULL,
  `mission` text NOT NULL,
  `objective` text NOT NULL,
  `map` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO footer VALUES("2","info@bequesters.com","+233808883675466","www.facebook.com/info@bequesters","www.bequesters.com","Lasvegas USA","www.twitter.com/info@bequesters","www.googleplus.com/oinfo@bequesters","www.in.com/info@bequesters","www.youtube.com/info@bequesters","About the system here. Thanks, We are just testing the software and we discover that the software is errors free. Thanks once again.","Who may apply here. Thabnks","Mission here. Thanks","System OBJECTIVE HERE. Thanks","");


DROP TABLE IF EXISTS hiw;

CREATE TABLE `hiw` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hiw` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO hiw VALUES("1","<p>We Provide Loans For Individual, Coperate and Many</p>\n");


DROP TABLE IF EXISTS invoice;

CREATE TABLE `invoice` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `company` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `zip` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `taxid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO invoice VALUES("1","Trading Fortune Group","Mortazavi Seyedmohsen","15-09-1980 Carrer de Romans","08025","Barcelona","");


DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("3","Cryptos?rid=782752","at","avtar/user2.png","You are welcome to Cryptos.life, How can we help you pls!","2017-03-27 08:41:18");
INSERT INTO message VALUES("4","Cryptos?rid=453536","ggg","","hello pls can you help me?","2017-03-27 10:31:52");
INSERT INTO message VALUES("5","Cryptos?rid=782752","at","avtar/user2.png","You are welcome to Cryptos.life!","2017-03-27 10:42:45");
INSERT INTO message VALUES("6","Cryptos?rid=782752","at","avtar/user2.png","How can we help your pls?","2017-03-27 10:43:04");
INSERT INTO message VALUES("7","Cryptos?rid=453536","ggg","","Can you tell me more about this platform?","2017-03-27 10:44:47");
INSERT INTO message VALUES("8","Cryptos?rid=782752","at","avtar/user2.png","You are welcome to Cryptos.life, How can we help you pls!","2017-03-27 10:52:20");
INSERT INTO message VALUES("9","Cryptos?rid=782752","at","avtar/IMG_20170326_095920.jpg","How can we help you?","2017-03-31 01:29:00");


DROP TABLE IF EXISTS ph_list;

CREATE TABLE `ph_list` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Percentage` varchar(20) NOT NULL COMMENT '50%',
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `refid1` varchar(200) NOT NULL,
  `refid2` varchar(200) NOT NULL,
  `refid3` varchar(200) NOT NULL,
  `refid4` varchar(200) NOT NULL,
  `refid5` varchar(200) NOT NULL,
  `refid6` varchar(200) NOT NULL,
  `refid7` varchar(200) NOT NULL,
  `refid8` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL COMMENT 'Approved Or Pending',
  `last_withdrawed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO ph_list VALUES("7","Cryptos?rid=782752","au JJJ","9897877","20","0.24999999999998","2017-04-14 13:53:15","Cryptos?rid=536760","","","","","","","","Approved","0000-00-00 00:00:00");
INSERT INTO ph_list VALUES("8","Cryptos?rid=641378","Patrick","+56768909876","500","","2017-03-31 06:30:00","","","","","","","","","Approved","0000-00-00 00:00:00");
INSERT INTO ph_list VALUES("10","Cryptos?rid=641378","Patrick","+56768909876","55","0.55","2017-03-09 19:00:10","","","","","","","","","Approved","0000-00-00 00:00:00");
INSERT INTO ph_list VALUES("11","Cryptos?rid=782752","au JJJ","9897877","200","0.24999999999998","2017-04-14 13:53:15","Cryptos?rid=536760","","","","","","","","Approved","2017-04-03 10:59:36");
INSERT INTO ph_list VALUES("12","Cryptos?rid=607638","Papa","+7893434435","10","0.1","2017-03-31 06:28:24","Cryptos?rid=641378","","","","","","","","Pending","0000-00-00 00:00:00");
INSERT INTO ph_list VALUES("13","Cryptos?rid=689352","jjj","988","20","0.0083333333333333","2017-04-02 14:31:00","Cryptos?rid=536760","","","","","","","","Approved","0000-00-00 00:00:00");
INSERT INTO ph_list VALUES("14","Cryptos?rid=607638","Papa","+7893434435","50","0.5","2017-03-09 19:01:48","Cryptos?rid=641378","","","","","","","","Approved","0000-00-00 00:00:00");


DROP TABLE IF EXISTS referral_bonus;

CREATE TABLE `referral_bonus` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ref_id1` varchar(200) NOT NULL,
  `ref_id2` varchar(200) NOT NULL,
  `ref_id3` varchar(200) NOT NULL,
  `ref_id4` varchar(200) NOT NULL,
  `ref_id5` varchar(200) NOT NULL,
  `ref_id6` varchar(200) NOT NULL,
  `ref_id7` varchar(200) NOT NULL,
  `ref_id8` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `ref_bonus1` varchar(200) NOT NULL,
  `ref_bonus2` varchar(200) NOT NULL,
  `ref_bonus3` varchar(200) NOT NULL,
  `ref_bonus4` varchar(200) NOT NULL,
  `ref_bonus5` varchar(200) NOT NULL,
  `ref_bonus6` varchar(200) NOT NULL,
  `ref_bonus7` varchar(200) NOT NULL,
  `ref_bonus8` varchar(200) NOT NULL,
  `date1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date6` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date7` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date8` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=341 DEFAULT CHARSET=latin1;

INSERT INTO referral_bonus VALUES("335","Cryptos?rid=782752","","","","","","","","Cryptos?rid=536760","0.25","","","","","","","","2017-04-02 10:06:09","0000-00-00 00:00:00","0000-00-00 00:00:00","0000-00-00 00:00:00","0000-00-00 00:00:00","0000-00-00 00:00:00","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO referral_bonus VALUES("336","Cryptos?rid=689352","","","","","","","","Cryptos?rid=782752","0.355","0","0","0","0","0","0","0","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15","2017-04-14 13:53:15");
INSERT INTO referral_bonus VALUES("338","Cryptos?rid=782752","","","","","","","","Cryptos?rid=536760","0.0025","0.00083334","0.0005","0.00016666","8.334E-5","4.166E-5","2.5E-5","1.66E-6","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57","2017-03-09 18:56:57");
INSERT INTO referral_bonus VALUES("339","Cryptos?rid=641378","","","","","","","","","0.194375","0.00229169","0.001375","0.00045832","0.00022919","0.00022919","6.875E-5","6.875E-5","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21","2017-04-10 13:54:21");
INSERT INTO referral_bonus VALUES("340","Cryptos?rid=607638","","","","","","","","Cryptos?rid=641378","0.00625000","0.00208335","0.00125000","0.00041665","0.00020835","0.00010415","0.00006250","0.00000415","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48","2017-03-09 19:01:48");


DROP TABLE IF EXISTS sms;

CREATE TABLE `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_gateway` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `api` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO sms VALUES("1","SMSTEAMS","optimum","optimum","http://smsteams.com/components/com_spc/smsapi.php?","NotActivated");


DROP TABLE IF EXISTS support;

CREATE TABLE `support` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(200) NOT NULL,
  `sender_n` varchar(200) NOT NULL,
  `sender_p` varchar(200) NOT NULL,
  `receiver_id` varchar(200) NOT NULL,
  `receiver_n` varchar(200) NOT NULL,
  `receiver_p` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO support VALUES("1","Cryptos?rid=641378","Patrick","+56768909876","","","","","Unread","2017-03-30 12:15:44");
INSERT INTO support VALUES("2","Cryptos?rid=607638","Papa","+7893434435","Cryptos?rid=641378","Patrick","+56768909876","<p>hello</p>\n","Unread","2017-03-31 00:23:15");
INSERT INTO support VALUES("3","Cryptos?rid=782752","ADMIN","tol-cryptos-888","Cryptos?rid=536760","AKINADE AYODEJI","08101750845","<p>Make sure you invest quickly..</p>\n","Unread","2017-03-09 20:25:42");
INSERT INTO support VALUES("4","Cryptos?rid=782752","ADMIN","tol-cryptos-888","Cryptos?rid=607638","Papa","+7893434435","Welcome to Cryptos.life","Unread","2017-03-09 20:27:48");


DROP TABLE IF EXISTS systemset;

CREATE TABLE `systemset` (
  `sysid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `footer` text NOT NULL,
  `abb` varchar(200) NOT NULL,
  `htreg` text NOT NULL,
  `dschedule` text NOT NULL,
  `rdonation` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `map` text NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO systemset VALUES("1","Loan | Management System","Loan Management","� 2017 Cryptos.life. All rights reserved.","Loan","Complete online registration form with full details, contact number in international format (+1213789098), a valid and accessible email account will be carried out on your email address, so you are expected to use correct email address. Your account is now confirmed and you can proceed to login with username and password chosen during registration to access your newly created account.","Once youâ€™re in your user dashboard, familiarize yourself with your account. We have four donation options (Basic, Standard, Premium and Ultimate donations) available for specific donation. Get in touch with the receiver to make fast possible donation payment available and once funds is transfer or send, go to your outgoing donation and click paid once fund is paid, then recipient will be able to confirm your donation on other end once fund is received in his/her account.","Once you make a donation of specific amount (Bronze, Silver, Platinum, Emerald and Gold), youâ€™re scheduled automatically to receive a donation from other participants on a scheduled date (incoming donation in your dashboard)","+4915170805858","report.png","Lasvegas(USA)\n30321 Elite Young St Menifee,\nCA 92584-2146.\nUS. ","info@Cryptos.life","My Map");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `refid1` varchar(200) NOT NULL,
  `refid2` varchar(200) NOT NULL,
  `refid3` varchar(200) NOT NULL,
  `refid4` varchar(200) NOT NULL,
  `refid5` varchar(200) NOT NULL,
  `refid6` varchar(200) NOT NULL,
  `refid7` varchar(200) NOT NULL,
  `refid8` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=479 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("465","AKINADE AYODEJI","","smsteams.info@gmail.com","08101750845","","Nigeria","smsteams","dGltb3RoZXcwODA=","Cryptos?rid=536760","","","","","","","","","");
INSERT INTO user VALUES("467","au JJJ","","at@g.com","9897877","","Nigeria","at","YXQ=","Cryptos?rid=782752","report.png","Cryptos?rid=536760","","","","","","","");
INSERT INTO user VALUES("468","aa HHJ","","gg@gg.com","0978767788","","Nigeria","ggg","Z2dn","Cryptos?rid=453536","","Cryptos?rid=782752","","","","","","","");
INSERT INTO user VALUES("471","hhhh hh","","ggg@bbvh.com","7878778","","hhh","jjj","a2s=","Cryptos?rid=770989","","Cryptos?rid=782752","Cryptos?rid=536760","","","","","","");
INSERT INTO user VALUES("474","jjj","","ggg@bh.com","988","","nb","jj","amo=","Cryptos?rid=689352","","Cryptos?rid=782752","","","","","","","");
INSERT INTO user VALUES("475","Patrick","","mortazaviseyedmohsen1@gmail.com","+56768909876","","Barcelona","Koller","MTIzNDU2","Cryptos?rid=641378","avtar/17076039_420553034956083_8754822879029231616_n.jpg","","","","","","","","");
INSERT INTO user VALUES("476","name","surname","email@email.com","0808887","Aland Islands","city","user","cGFzcw==","Cryptos?rid=428103","","Cryptos?rid=782752","Cryptos?rid=536760","","","","","","");
INSERT INTO user VALUES("477","Papa","baba","Test@test1.com","+7893434435","Spain","tgrfdes","test1","MTIzNDU2","Cryptos?rid=607638","avtar/6.png","Cryptos?rid=641378","","","","","","","");
INSERT INTO user VALUES("478","TIMILEHIN","OLATUNDE","t_proc01@yahoo.com","+2348069372813","Nigeria","Lagos","tproc","dHByb2M=","Cryptos?rid=689027","","","","","","","","","");


