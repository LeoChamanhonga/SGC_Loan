DROP TABLE IF EXISTS aboutus;

CREATE TABLE `aboutus` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`abid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS additional_fees;

CREATE TABLE `additional_fees` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO additional_fees VALUES("20","1","Loan=1907598678","dddd","7888");
INSERT INTO additional_fees VALUES("21","2","Loan=21319580","Late Payment","4000");
INSERT INTO additional_fees VALUES("22","3","Loan=21319580","","");
INSERT INTO additional_fees VALUES("23","5","Loan=21319580","Late Payment","2000");


DROP TABLE IF EXISTS attachment;

CREATE TABLE `attachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO attachment VALUES("1","1","Loan=1907598678","document/4887_File_cryptos documentation.docx","2017-05-01 05:11:34");
INSERT INTO attachment VALUES("2","2","Loan=21319580","document/2782_File_Email.docx","2017-05-10 09:56:55");
INSERT INTO attachment VALUES("3","5","Loan=21319580","document/2045_File_Marksheet Management System.docx","2017-05-13 06:45:57");


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO banner VALUES("3","bannar/sld2.jpg");


DROP TABLE IF EXISTS battachment;

CREATE TABLE `battachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO battachment VALUES("1","1","Loan=1907598678","bdocument/5605_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2017-05-01 10:30:28");
INSERT INTO battachment VALUES("2","1","Loan=1907598678","bdocument/2630_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2017-05-01 10:32:52");
INSERT INTO battachment VALUES("3","2","Loan=1907598678","bdocument/6815_File_cryptos documentation.docx","2017-05-01 10:38:20");
INSERT INTO battachment VALUES("4","3","Loan=21319580","bdocument/2739_File_INTRODUCTION TO NIGERIA SOCIAL LIFE AND EARLY CIVILIZATION.docx","2017-05-01 12:35:25");
INSERT INTO battachment VALUES("5","4","Loan=21319580","bdocument/4525_File_ESTHER.docx","2017-05-13 06:32:51");


DROP TABLE IF EXISTS borrowers;

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addrs1` text NOT NULL,
  `addrs2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `account` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO borrowers VALUES("3","admin","admin","adeji@gmail.com","098999099","address","adres","city","state","zip","US","comment","account","img/9fdfcacaa4d943e0328bd32e35a40035ebdc7a9b.png","2017-05-01 12:35:25","Completed");
INSERT INTO borrowers VALUES("4","Ayodeji","Akinade","business2016@gmail.com","08033527716","FCE","Fce","Ikeja","Lagos","110001","US","Application for loan","0034445657","img/OPTIMUM LOGO FINAL .png","2017-05-13 06:32:51","Completed");
INSERT INTO borrowers VALUES("5","Doris","Micheal","segtism@gmail.com","+1564783934","Australia","Australia","South Australia","South Australia","23456646","AU","Application for loan","20000","img/user3.png","2017-05-13 06:34:48","Pending");


DROP TABLE IF EXISTS collateral;

CREATE TABLE `collateral` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type_of_collateral` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `make` varchar(200) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `estimated_price` varchar(200) NOT NULL,
  `proof_of_ownership` text NOT NULL,
  `cimage` text NOT NULL,
  `observation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO collateral VALUES("1","1","Loan=1907598678","bhhh","jhhhjk","hhh","hkkhkk","87877878","78787","","cimage/9fdfcacaa4d943e0328bd32e35a40035ebdc7a9b.png","hkjkl");
INSERT INTO collateral VALUES("2","2","Loan=21319580","Mr Segun O","New","LOAN2011","NEWLOAN","LOANS20166","40000","","cimage/OPTIMUM LOGO FINAL .png","This is just testing");
INSERT INTO collateral VALUES("3","5","Loan=21319580","Plot of Land","Land","Land","Land","Receipt","20000","","cimage/fair.png","Good for the application of the loan");


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


DROP TABLE IF EXISTS etemplates;

CREATE TABLE `etemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(200) NOT NULL,
  `template` varchar(200) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `created_by` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS faqs;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO faqs VALUES("1","Please type the subject here","<p>Please Update Faqs Here</p>\n");


DROP TABLE IF EXISTS fin_info;

CREATE TABLE `fin_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `occupation` text NOT NULL,
  `mincome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO fin_info VALUES("3","1","Loan=1907598678","","");
INSERT INTO fin_info VALUES("5","2","Loan=1907598678","Teacher","40000");
INSERT INTO fin_info VALUES("6","3","Loan=21319580","Banker","500000");


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


DROP TABLE IF EXISTS loan_info;

CREATE TABLE `loan_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `borrower` varchar(200) NOT NULL,
  `baccount` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_release` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `g_name` varchar(200) NOT NULL,
  `g_phone` varchar(200) NOT NULL,
  `g_address` text NOT NULL,
  `rela` varchar(200) NOT NULL,
  `g_image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_topay` varchar(200) NOT NULL,
  `teller` varchar(200) NOT NULL,
  `remark` text NOT NULL,
  `upstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO loan_info VALUES("1","1","97789789","kjhbkh","666","04/13/2017","aa HHJ","","","","","","Approved","jjlj","29/04/2017","889898","aa HHJ","lknlk","Completed");
INSERT INTO loan_info VALUES("3","3","3","Another Loan","90000","05/25/2017","Admin","Prof","08033527716","","","","Pending","Another Loan","05/31/2017","100000","Admin","Another Loan","Pending");
INSERT INTO loan_info VALUES("5","4","4","Application for loan","50000","06/22/2017","Admin","Mr Segun","08033527716","FCE","Family","img/OPTIMUM LOGO FINAL .png","Approved","Application for loan","05/24/2017","100000","Admin","Application for Loan","Completed");
INSERT INTO loan_info VALUES("6","3","3","ertyuytrew","50000","05/30/2017","Admin","Mr Segun","08033527716","rytrewq","GFriend","img/","Disapproved","loan","05/30/2017","300000","Admin","loan","Pending");
INSERT INTO loan_info VALUES("7","5","--Select Customer--","new loan","500000","06/21/2017","Admin","Mr Segun","09034543234","4, ade","GFriend","img/","Approved","good","10/31/2017","1000000","Admin","new loan","Pending");


DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(200) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `msg_to` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("4","Cryptos?rid=782752","au JJJ","Loan=21319580","Hello","<p>Good to see you</p>\n","2017-05-01 11:46:57");
INSERT INTO message VALUES("5","Loan=21319580","Admin","Cryptos?rid=782752","RE: Hello","<p>Thanks<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>Good to see you</p>\n\n<p>&nbsp;</p>\n","2017-05-01 11:48:27");
INSERT INTO message VALUES("6","Cryptos?rid=782752","au JJJ","Loan=21319580","RE: RE: Hello","<p>Thanks&nbsp; you<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>Thanks<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Good to see you</p>\n\n<p>&nbsp;</p>\n","2017-05-01 11:49:18");


DROP TABLE IF EXISTS mywallet;

CREATE TABLE `mywallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Desc` varchar(200) NOT NULL,
  `wtype` varchar(200) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO mywallet VALUES("39","Loan=1907598678","500","hkbvhk","credit","2017-05-01 02:07:38");
INSERT INTO mywallet VALUES("55","Cryptos?rid=453536","5000","transfer to aa HHJ","transfer","2017-04-29 13:47:54");
INSERT INTO mywallet VALUES("57","Cryptos?rid=453536","3000","reverse 3k back to you","transfer","2017-04-30 03:42:56");
INSERT INTO mywallet VALUES("58","Cryptos?rid=453536","5000","add payment","debit","2017-04-30 04:38:42");
INSERT INTO mywallet VALUES("59","Cryptos?rid=453536","2000","jjjjj","debit","2017-04-30 04:41:33");


DROP TABLE IF EXISTS pay_schedule;

CREATE TABLE `pay_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO pay_schedule VALUES("1","1","Loan=1907598678","05/16/2017","7","666","8899");
INSERT INTO pay_schedule VALUES("7","1","Loan=1907598678","05/16/2017","7","666","8899");
INSERT INTO pay_schedule VALUES("8","2","Loan=21319580","05/24/2017","30000","60000","20000");
INSERT INTO pay_schedule VALUES("9","5","Loan=21319580","05/11/2017","2000","10000","15000");


DROP TABLE IF EXISTS payment_schedule;

CREATE TABLE `payment_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `penalty` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO payment_schedule VALUES("1","Array","Loan=1907598678","676","","05/17/2017","777","88");
INSERT INTO payment_schedule VALUES("2","Array","Loan=1907598678","676","","05/17/2017","777","88");
INSERT INTO payment_schedule VALUES("3","Array","Loan=1907598678","","Day","Daily","800","");
INSERT INTO payment_schedule VALUES("4","Array","Loan=1907598678","","Day","Daily","800","");
INSERT INTO payment_schedule VALUES("5","Array","Loan=1907598678","777","Week","Weekly","800","66");
INSERT INTO payment_schedule VALUES("6","Array","Loan=1907598678","777","Week","Bi-weekly","666","66");
INSERT INTO payment_schedule VALUES("7","Array","Loan=1907598678","777","Week","Bi-weekly","666","66");
INSERT INTO payment_schedule VALUES("8","Array","Loan=21319580","1","Week","Daily","60000","2000");
INSERT INTO payment_schedule VALUES("9","Array","Loan=21319580","Begining of every month","Month","Weekly","10000","2000");


DROP TABLE IF EXISTS payments;

CREATE TABLE `payments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `loan` varchar(200) NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_to_pay` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO payments VALUES("4","Loan=21319580","50000","4","4","100000","05/24/2017","100000","Payment");
INSERT INTO payments VALUES("5","Loan=21319580","199382731","5","5","1000000","05/30/2017","3000000","Payment for Doris Micheal");
INSERT INTO payments VALUES("6","Loan=21319580","50000","3","3","100000","05/26/2017","200000","Payment for admin");


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


DROP TABLE IF EXISTS systemset;

CREATE TABLE `systemset` (
  `sysid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `footer` text NOT NULL,
  `abb` varchar(200) NOT NULL,
  `fax` text NOT NULL,
  `currency` text NOT NULL,
  `website` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `map` text NOT NULL,
  `timezone` text NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO systemset VALUES("1","Loan | Management System","Loan Management","All rights reserved. 2017 (c)","Loan","23459","$","https://www.optimumlinkup.com.ng","+4915170805858","../img/fair.png","Ghana Currency									","loan@loan.com","Map Code Here				","-12");


DROP TABLE IF EXISTS twallet;

CREATE TABLE `twallet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `Total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO twallet VALUES("8","Loan=1907598678","18000");
INSERT INTO twallet VALUES("9","Cryptos?rid=782752","1000");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addr1` text NOT NULL,
  `addr2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=483 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("467","au JJJ","at@g.com","+2334857757769","Ghana                    ","Ghana										","Acra","Acra","23450","US","Good                                            ","at","15914a7370260w==","Cryptos?rid=782752","img/user.png","");
INSERT INTO user VALUES("482","Admin","admin@admin.com","08101750845","address1","address2","city","state","zip","US","comment","admin","YWRtaW4=","Loan=21319580","img/bitcoin_3.png","admin");


