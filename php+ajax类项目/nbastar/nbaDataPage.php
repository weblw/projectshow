<?php
header("content-type:text/html;charset=utf-8");
$nbastars = array(
		'奥登'=>array(
			'icon'=>'img/aodeng.jpg',
			'name'=>'奥登',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'保罗'=>array(
			'icon'=>'img/baoluo.jpg',
			'name'=>'保罗',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'布莱恩特'=>array(
			'icon'=>'img/bulaiente.jpg',
			'name'=>'布莱恩特',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'大乔丹'=>array(
			'icon'=>'img/daqiaodan.jpg',
			'name'=>'大乔丹',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'邓肯'=>array(
			'icon'=>'img/dengken.jpg',
			'name'=>'邓肯',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'给力芬'=>array(
			'icon'=>'img/gelifen.jpg',
			'name'=>'给力芬',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'霍华德'=>array(
			'icon'=>'img/huohuade.jpg',
			'name'=>'霍华德',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'加内特'=>array(
			'icon'=>'img/jianeite.jpeg',
			'name'=>'加内特',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'加索尔'=>array(
			'icon'=>'img/jiasuoer.jpg',
			'name'=>'加索尔',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'克劳福德'=>array(
			'icon'=>'img/kelaofude.jpg',
			'name'=>'克劳福德',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'库里'=>array(
			'icon'=>'img/kuli.jpg',
			'name'=>'库里',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'罗瑞'=>array(
			'icon'=>'img/luorui.jpg',
			'name'=>'罗瑞',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'麦蒂'=>array(
			'icon'=>'img/maidi.jpg',
			'name'=>'麦蒂',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'内特罗宾逊'=>array(
			'icon'=>'img/neiteluobinxun.jpg',
			'name'=>'内特罗宾逊',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'欧文'=>array(
			'icon'=>'img/ouwen.jpg',
			'name'=>'欧文',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'韦德'=>array(
			'icon'=>'img/weide.jpg',
			'name'=>'韦德',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'
		),
		'维斯布鲁克'=>array(
			'icon'=>'img/weisibuluke.jpg',
			'name'=>'维斯布鲁克',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'小乔丹'=>array(
			'icon'=>'img/xiaoqiaodan.jpg',
			'name'=>'小乔丹',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'姚明'=>array(
			'icon'=>'img/yaoming.jpg',
			'name'=>'姚明',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		),
		'詹姆斯'=>array(
			'icon'=>'img/zhanmusi.jpg',
			'name'=>'詹姆斯',
			'info'=>'体壮如牛，身高臂长，运动能力超强；
					   擅长远投，爱好扣篮，无人能阻拦；
					  人生格言：挡我者死！！'	
		)		

);
	
?>