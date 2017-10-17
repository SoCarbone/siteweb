(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {};

// library properties:
lib.properties = {
	width: 800,
	height: 800,
	fps: 24,
	color: "#FFFFFF",
	webfonts: {},
	manifest: [
		{src:"./img/logo.png", id:"logo"}
	]
};



lib.webfontAvailable = function(family) {
	lib.properties.webfonts[family] = true;
	var txtFilters = lib.webFontTxtFilters && lib.webFontTxtFilters[family] || [];
	for(var f = 0; f < txtFilters.length; ++f) {
		txtFilters[f].updateCache();
	}
};
// symbols:



(lib.logo = function() {
	this.initialize(img.logo);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,294,94);


(lib.Symbole2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Calque 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhhCEQg3gpgKhDQgKhCApg3QApg3BDgKQBCgKA3ApQA3AoAKBEQAKBBgpA3QgpA3hDALQgOACgLAAQg0AAgsghg");
	this.shape.setTransform(0,16.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-16.5,0,33.1,33.1);


(lib.Symbole1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Calque 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Aj9D+QhqhqAAiUQAAiTBqhqQBqhqCTAAQCUAABqBqQBqBqAACTQAACUhqBqQhqBqiUAAQiTAAhqhqg");
	this.shape.setTransform(0,36);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-36,0,72,72);


// stage content:
(lib.animationlogo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// petit satelite
	this.instance = new lib.Symbole2();
	this.instance.setTransform(400.1,400,1,1,0,0,0,313.4,-98);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({regX:0,regY:16.6,rotation:2.7,x:81.6,y:499.8},0).wait(1).to({rotation:5.4,x:77.3,y:484.7},0).wait(1).to({rotation:8.1,x:73.7,y:469.5},0).wait(1).to({rotation:10.7,x:70.8,y:454.1},0).wait(1).to({rotation:13.4,x:68.6,y:438.6},0).wait(1).to({rotation:16.1,x:67.2,y:423.1},0).wait(1).to({rotation:18.8,x:66.5,y:407.4},0).wait(1).to({rotation:21.5,y:391.8},0).wait(1).to({rotation:24.2,x:67.2,y:376.2},0).wait(1).to({rotation:26.9,x:68.7,y:360.6},0).wait(1).to({rotation:29.6,x:70.9,y:345.1},0).wait(1).to({rotation:32.2,x:73.9,y:329.7},0).wait(1).to({rotation:34.9,x:77.5,y:314.5},0).wait(1).to({rotation:37.6,x:81.8,y:299.5},0).wait(1).to({rotation:40.3,x:86.9,y:284.7},0).wait(1).to({rotation:43,x:92.7,y:270.2},0).wait(1).to({rotation:45.7,x:99.1,y:255.9},0).wait(1).to({rotation:48.4,x:106.2,y:242},0).wait(1).to({rotation:51,x:113.9,y:228.4},0).wait(1).to({rotation:53.7,x:122.3,y:215.1},0).wait(1).to({rotation:56.4,x:131.2,y:202.3},0).wait(1).to({rotation:59.1,x:140.8,y:189.9},0).wait(1).to({rotation:61.8,x:150.9,y:178},0).wait(1).to({rotation:64.5,x:161.6,y:166.6},0).wait(1).to({rotation:67.2,x:172.8,y:155.7},0).wait(1).to({rotation:69.9,x:184.5,y:145.3},0).wait(1).to({rotation:72.5,x:196.7,y:135.5},0).wait(1).to({rotation:75.2,x:209.3,y:126.2},0).wait(1).to({rotation:77.9,x:222.3,y:117.6},0).wait(1).to({rotation:80.6,x:235.8,y:109.6},0).wait(1).to({rotation:83.3,x:249.6,y:102.2},0).wait(1).to({rotation:86,x:263.7,y:95.5},0).wait(1).to({rotation:88.7,x:278.1,y:89.4},0).wait(1).to({rotation:91.3,x:292.8,y:84},0).wait(1).to({rotation:94,x:307.8,y:79.4},0).wait(1).to({rotation:96.7,x:322.9,y:75.4},0).wait(1).to({rotation:99.4,x:338.2,y:72.2},0).wait(1).to({rotation:102.1,x:353.6,y:69.6},0).wait(1).to({rotation:104.8,x:369.2,y:67.8},0).wait(1).to({rotation:107.5,x:384.7,y:66.7},0).wait(1).to({rotation:110.1,x:400.4,y:66.4},0).wait(1).to({rotation:112.8,x:416,y:66.7},0).wait(1).to({rotation:115.5,x:431.6,y:67.9},0).wait(1).to({rotation:118.2,x:447.2,y:69.7},0).wait(1).to({rotation:120.9,x:462.6,y:72.3},0).wait(1).to({rotation:123.6,x:477.9,y:75.6},0).wait(1).to({rotation:126.3,x:493,y:79.6},0).wait(1).to({rotation:129,x:507.9,y:84.3},0).wait(1).to({rotation:131.6,x:522.6,y:89.7},0).wait(1).to({rotation:134.3,x:537,y:95.8},0).wait(1).to({rotation:137,x:551.1,y:102.6},0).wait(1).to({rotation:139.7,x:564.9,y:110},0).wait(1).to({rotation:142.4,x:578.3,y:118},0).wait(1).to({rotation:145.1,x:591.3,y:126.7},0).wait(1).to({rotation:147.8,x:603.9,y:135.9},0).wait(1).to({rotation:150.4,x:616.1,y:145.8},0).wait(1).to({rotation:153.1,x:627.8,y:156.2},0).wait(1).to({rotation:155.8,x:638.9,y:167.1},0).wait(1).to({rotation:158.5,x:649.6,y:178.6},0).wait(1).to({rotation:161.2,x:659.7,y:190.6},0).wait(1).to({rotation:163.9,x:669.2,y:203},0).wait(1).to({rotation:166.6,x:678.2,y:215.8},0).wait(1).to({rotation:169.3,x:686.5,y:229},0).wait(1).to({rotation:171.9,x:694.2,y:242.6},0).wait(1).to({rotation:174.6,x:701.3,y:256.6},0).wait(1).to({rotation:177.3,x:707.6,y:270.9},0).wait(1).to({rotation:180,x:713.4,y:285.5},0).wait(1).to({rotation:182.7,x:718.4,y:300.2},0).wait(1).to({rotation:185.4,x:722.7,y:315.3},0).wait(1).to({rotation:188.1,x:726.3,y:330.5},0).wait(1).to({rotation:190.7,x:729.2,y:345.9},0).wait(1).to({rotation:193.4,x:731.4,y:361.4},0).wait(1).to({rotation:196.1,x:732.8,y:376.9},0).wait(1).to({rotation:198.8,x:733.5,y:392.6},0).wait(1).to({rotation:201.5,y:408.2},0).wait(1).to({rotation:204.2,x:732.8,y:423.8},0).wait(1).to({rotation:206.9,x:731.3,y:439.4},0).wait(1).to({rotation:209.6,x:729.1,y:454.9},0).wait(1).to({rotation:212.2,x:726.1,y:470.3},0).wait(1).to({rotation:214.9,x:722.5,y:485.5},0).wait(1).to({rotation:217.6,x:718.2,y:500.5},0).wait(1).to({rotation:220.3,x:713.1,y:515.3},0).wait(1).to({rotation:223,x:707.3,y:529.8},0).wait(1).to({rotation:225.7,x:700.9,y:544.1},0).wait(1).to({rotation:228.4,x:693.8,y:558},0).wait(1).to({rotation:231,x:686.1,y:571.6},0).wait(1).to({rotation:233.7,x:677.7,y:584.9},0).wait(1).to({rotation:236.4,x:668.8,y:597.7},0).wait(1).to({rotation:239.1,x:659.2,y:610.1},0).wait(1).to({rotation:241.8,x:649.1,y:622},0).wait(1).to({rotation:244.5,x:638.4,y:633.4},0).wait(1).to({rotation:247.2,x:627.2,y:644.3},0).wait(1).to({rotation:249.9,x:615.5,y:654.7},0).wait(1).to({rotation:252.5,x:603.3,y:664.5},0).wait(1).to({rotation:255.2,x:590.7,y:673.8},0).wait(1).to({rotation:257.9,x:577.7,y:682.4},0).wait(1).to({rotation:260.6,x:564.2,y:690.4},0).wait(1).to({rotation:263.3,x:550.4,y:697.8},0).wait(1).to({rotation:266,x:536.3,y:704.5},0).wait(1).to({rotation:268.7,x:521.9,y:710.6},0).wait(1).to({rotation:271.3,x:507.2,y:716},0).wait(1).to({rotation:274,x:492.2,y:720.6},0).wait(1).to({rotation:276.7,x:477.1,y:724.6},0).wait(1).to({rotation:279.4,x:461.8,y:727.8},0).wait(1).to({rotation:282.1,x:446.4,y:730.4},0).wait(1).to({rotation:284.8,x:430.8,y:732.2},0).wait(1).to({rotation:287.5,x:415.3,y:733.3},0).wait(1).to({rotation:290.1,x:399.6,y:733.6},0).wait(1).to({rotation:292.8,x:384,y:733.3},0).wait(1).to({rotation:295.5,x:368.4,y:732.1},0).wait(1).to({rotation:298.2,x:352.8,y:730.3},0).wait(1).to({rotation:300.9,x:337.4,y:727.7},0).wait(1).to({rotation:303.6,x:322.1,y:724.4},0).wait(1).to({rotation:306.3,x:307,y:720.4},0).wait(1).to({rotation:309,x:292.1,y:715.7},0).wait(1).to({rotation:311.6,x:277.4,y:710.3},0).wait(1).to({rotation:314.3,x:263,y:704.2},0).wait(1).to({rotation:317,x:248.9,y:697.4},0).wait(1).to({rotation:319.7,x:235.1,y:690},0).wait(1).to({rotation:322.4,x:221.7,y:682},0).wait(1).to({rotation:325.1,x:208.7,y:673.3},0).wait(1).to({rotation:327.8,x:196.1,y:664.1},0).wait(1).to({rotation:330.4,x:183.9,y:654.2},0).wait(1).to({rotation:333.1,x:172.2,y:643.8},0).wait(1).to({rotation:335.8,x:161.1,y:632.9},0).wait(1).to({rotation:338.5,x:150.4,y:621.4},0).wait(1).to({rotation:341.2,x:140.3,y:609.4},0).wait(1).to({rotation:343.9,x:130.8,y:597},0).wait(1).to({rotation:346.6,x:121.8,y:584.2},0).wait(1).to({rotation:349.3,x:113.5,y:571},0).wait(1).to({rotation:351.9,x:105.8,y:557.4},0).wait(1).to({rotation:354.6,x:98.7,y:543.4},0).wait(1).to({rotation:357.3,x:92.4,y:529.1},0).wait(1).to({rotation:360,x:86.7,y:514.6},0).wait(1));

	// gros satelite
	this.instance_1 = new lib.Symbole1();
	this.instance_1.setTransform(400,400,1,1,0,0,0,-218.2,-106.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1).to({regX:0,regY:36,rotation:-5.4,x:630.5,y:521.1},0).wait(1).to({rotation:-10.7,x:640.8,y:499},0).wait(1).to({rotation:-16.1,x:649,y:476},0).wait(1).to({rotation:-21.5,x:655.1,y:452.3},0).wait(1).to({rotation:-26.9,x:658.8,y:428.2},0).wait(1).to({rotation:-32.2,x:660.3,y:403.9},0).wait(1).to({rotation:-37.6,x:659.5,y:379.4},0).wait(1).to({rotation:-43,x:656.5,y:355.3},0).wait(1).to({rotation:-48.4,x:651.2,y:331.4},0).wait(1).to({rotation:-53.7,x:643.6,y:308.2},0).wait(1).to({rotation:-59.1,x:634,y:285.8},0).wait(1).to({rotation:-64.5,x:622.3,y:264.4},0).wait(1).to({rotation:-69.9,x:608.6,y:244.2},0).wait(1).to({rotation:-75.2,x:593.1,y:225.3},0).wait(1).to({rotation:-80.6,x:575.9,y:208},0).wait(1).to({rotation:-86,x:557.1,y:192.4},0).wait(1).to({rotation:-91.3,x:537,y:178.6},0).wait(1).to({rotation:-96.7,x:515.7,y:166.7},0).wait(1).to({rotation:-102.1,x:493.3,y:156.9},0).wait(1).to({rotation:-107.5,x:470.1,y:149.2},0).wait(1).to({rotation:-112.8,x:446.4,y:143.8},0).wait(1).to({rotation:-118.2,x:422.1,y:140.6},0).wait(1).to({rotation:-123.6,x:397.8,y:139.6},0).wait(1).to({rotation:-129,x:373.4,y:141},0).wait(1).to({rotation:-134.3,x:349.2,y:144.6},0).wait(1).to({rotation:-139.7,x:325.6,y:150.5},0).wait(1).to({rotation:-145.1,x:302.5,y:158.6},0).wait(1).to({rotation:-150.4,x:280.3,y:168.8},0).wait(1).to({rotation:-155.8,x:259.2,y:181},0).wait(1).to({rotation:-161.2,x:239.3,y:195.1},0).wait(1).to({rotation:-166.6,x:220.8,y:211.1},0).wait(1).to({rotation:-171.9,x:203.9,y:228.7},0).wait(1).to({rotation:-177.3,x:188.8,y:247.8},0).wait(1).to({rotation:-182.7,x:175.4,y:268.2},0).wait(1).to({rotation:-188.1,x:164.1,y:289.8},0).wait(1).to({rotation:-193.4,x:154.8,y:312.4},0).wait(1).to({rotation:-198.8,x:147.7,y:335.7},0).wait(1).to({rotation:-204.2,x:142.8,y:359.7},0).wait(1).to({rotation:-209.6,x:140.1,y:384},0).wait(1).to({rotation:-214.9,x:139.8,y:408.4},0).wait(1).to({rotation:-220.3,x:141.7,y:432.7},0).wait(1).to({rotation:-225.7,x:145.9,y:456.7},0).wait(1).to({rotation:-231,x:152.3,y:480.3},0).wait(1).to({rotation:-236.4,x:160.9,y:503.1},0).wait(1).to({rotation:-241.8,x:171.6,y:525.1},0).wait(1).to({rotation:-247.2,x:184.3,y:545.9},0).wait(1).to({rotation:-252.5,x:198.9,y:565.4},0).wait(1).to({rotation:-257.9,x:215.3,y:583.5},0).wait(1).to({rotation:-263.3,x:233.3,y:600},0).wait(1).to({rotation:-268.7,x:252.8,y:614.8},0).wait(1).to({rotation:-274,x:273.5,y:627.6},0).wait(1).to({rotation:-279.4,x:295.4,y:638.5},0).wait(1).to({rotation:-284.8,x:318.2,y:647.2},0).wait(1).to({rotation:-290.1,x:341.7,y:653.8},0).wait(1).to({rotation:-295.5,x:365.7,y:658.1},0).wait(1).to({rotation:-300.9,x:390,y:660.2},0).wait(1).to({rotation:-306.3,x:414.5,y:660},0).wait(1).to({rotation:-311.6,x:438.7,y:657.5},0).wait(1).to({rotation:-317,x:462.7,y:652.7},0).wait(1).to({rotation:-322.4,x:486.1,y:645.7},0).wait(1).to({rotation:-327.8,x:508.7,y:636.6},0).wait(1).to({rotation:-333.1,x:530.4,y:625.4},0).wait(1).to({rotation:-338.5,x:550.9,y:612.2},0).wait(1).to({rotation:-343.9,x:570.1,y:597.1},0).wait(1).to({rotation:-349.3,x:587.8,y:580.3},0).wait(1).to({rotation:-354.6,x:603.9,y:562},0).wait(1).to({rotation:-360,x:618.2,y:542.2},0).wait(1).to({rotation:-365.4,x:630.5,y:521.1},0).wait(1).to({rotation:-370.7,x:640.8,y:499},0).wait(1).to({rotation:-376.1,x:649,y:476},0).wait(1).to({rotation:-381.5,x:655.1,y:452.3},0).wait(1).to({rotation:-386.9,x:658.8,y:428.2},0).wait(1).to({rotation:-392.2,x:660.3,y:403.9},0).wait(1).to({rotation:-397.6,x:659.5,y:379.4},0).wait(1).to({rotation:-403,x:656.5,y:355.3},0).wait(1).to({rotation:-408.4,x:651.2,y:331.4},0).wait(1).to({rotation:-413.7,x:643.6,y:308.2},0).wait(1).to({rotation:-419.1,x:634,y:285.8},0).wait(1).to({rotation:-424.5,x:622.3,y:264.4},0).wait(1).to({rotation:-429.9,x:608.6,y:244.2},0).wait(1).to({rotation:-435.2,x:593.1,y:225.3},0).wait(1).to({rotation:-440.6,x:575.9,y:208},0).wait(1).to({rotation:-446,x:557.1,y:192.4},0).wait(1).to({rotation:-451.3,x:537,y:178.6},0).wait(1).to({rotation:-456.7,x:515.7,y:166.7},0).wait(1).to({rotation:-462.1,x:493.3,y:156.9},0).wait(1).to({rotation:-467.5,x:470.1,y:149.2},0).wait(1).to({rotation:-472.8,x:446.4,y:143.8},0).wait(1).to({rotation:-478.2,x:422.1,y:140.6},0).wait(1).to({rotation:-483.6,x:397.8,y:139.6},0).wait(1).to({rotation:-489,x:373.4,y:141},0).wait(1).to({rotation:-494.3,x:349.2,y:144.6},0).wait(1).to({rotation:-499.7,x:325.6,y:150.5},0).wait(1).to({rotation:-505.1,x:302.5,y:158.6},0).wait(1).to({rotation:-510.4,x:280.3,y:168.8},0).wait(1).to({rotation:-515.8,x:259.2,y:181},0).wait(1).to({rotation:-521.2,x:239.3,y:195.1},0).wait(1).to({rotation:-526.6,x:220.8,y:211.1},0).wait(1).to({rotation:-531.9,x:203.9,y:228.7},0).wait(1).to({rotation:-537.3,x:188.8,y:247.8},0).wait(1).to({rotation:-542.7,x:175.4,y:268.2},0).wait(1).to({rotation:-548.1,x:164.1,y:289.8},0).wait(1).to({rotation:-553.4,x:154.8,y:312.4},0).wait(1).to({rotation:-558.8,x:147.7,y:335.7},0).wait(1).to({rotation:-564.2,x:142.8,y:359.7},0).wait(1).to({rotation:-569.6,x:140.1,y:384},0).wait(1).to({rotation:-574.9,x:139.8,y:408.4},0).wait(1).to({rotation:-580.3,x:141.7,y:432.7},0).wait(1).to({rotation:-585.7,x:145.9,y:456.7},0).wait(1).to({rotation:-591,x:152.3,y:480.3},0).wait(1).to({rotation:-596.4,x:160.9,y:503.1},0).wait(1).to({rotation:-601.8,x:171.6,y:525.1},0).wait(1).to({rotation:-607.2,x:184.3,y:545.9},0).wait(1).to({rotation:-612.5,x:198.9,y:565.4},0).wait(1).to({rotation:-617.9,x:215.3,y:583.5},0).wait(1).to({rotation:-623.3,x:233.3,y:600},0).wait(1).to({rotation:-628.7,x:252.8,y:614.8},0).wait(1).to({rotation:-634,x:273.5,y:627.6},0).wait(1).to({rotation:-639.4,x:295.4,y:638.5},0).wait(1).to({rotation:-644.8,x:318.2,y:647.2},0).wait(1).to({rotation:-650.1,x:341.7,y:653.8},0).wait(1).to({rotation:-655.5,x:365.7,y:658.1},0).wait(1).to({rotation:-660.9,x:390,y:660.2},0).wait(1).to({rotation:-666.3,x:414.5,y:660},0).wait(1).to({rotation:-671.6,x:438.7,y:657.5},0).wait(1).to({rotation:-677,x:462.7,y:652.7},0).wait(1).to({rotation:-682.4,x:486.1,y:645.7},0).wait(1).to({rotation:-687.8,x:508.7,y:636.6},0).wait(1).to({rotation:-693.1,x:530.4,y:625.4},0).wait(1).to({rotation:-698.5,x:550.9,y:612.2},0).wait(1).to({rotation:-703.9,x:570.1,y:597.1},0).wait(1).to({rotation:-709.3,x:587.8,y:580.3},0).wait(1).to({rotation:-714.6,x:603.9,y:562},0).wait(1).to({rotation:-720,x:618.2,y:542.2},0).wait(1));

	// logo
	this.instance_2 = new lib.logo();
	this.instance_2.setTransform(253,353);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(135));

	// cercle
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A2FWGQpJpKgBs8QABs6JJpLQJLpJM6gBQM8ABJKJJQJJJLABM6QgBM8pJJKQpKJJs8ABQs6gBpLpJg");
	this.shape.setTransform(400,400);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(135));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(470.2,600,584,400);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;
