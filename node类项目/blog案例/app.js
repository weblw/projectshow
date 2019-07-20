messages=[
	{
		name:'李伟',
		message:'天气不错哦',
		time:setTime()
	},
	{
		name:'李伟',
		message:'天气不错哦',
		time:setTime()
	},
	{
		name:'李伟',
		message:'天气不错哦',
		time:setTime()
	},
	{
		name:'李伟',
		message:'天气不错哦',
		time:setTime()
	}
];
var http=require('http');
var fs=require('fs');
var template=require('art-template');
var url=require('url');
http.createServer(function(req,res){
	var obj=url.parse(req.url,true);
	var pathname=obj.pathname;
	if(pathname=='/'){
		fs.readFile('./views/index.html',function(err,data){
			if(err){
				return res.end('err one');
			}
			res.end(template.render(data.toString(),{
				messages:messages
			}));
		})
	}else if(pathname=='/post'){
		fs.readFile('./views/post.html',function(err,data){
			if(err){
				return res.end('err three');
			}
			res.end(data);
		})
	}else if(pathname.indexOf('/public/')==0){
		fs.readFile('.'+pathname,function(err,data){
			if(err){
				return res.end('err four');
			}
			res.end(data);
		})
	}else if(pathname=='/get'){
		var query=obj.query;
		query.time=setTime();
		messages.unshift(query);
		res.statusCode=302;
		res.setHeader('location','/');
		res.end();
	}else if(pathname=='/delete'){
		messages.shift();
		res.statusCode=302;
		res.setHeader('location','/');
		res.end();
	}else{
		fs.readFile('./views/notFound.html',function(err,data){
			if(err){
				return res.end('err two');
			}
			res.end(data);
		})
	}
})
.listen(3000,function(){
	console.log("Ruing......");
})
function setTime() {
    var date = new Date();
    var Y = date.getFullYear() + '-';
    var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
    var D = date.getDate() + ' ';
    var h = date.getHours() + ':';
    var m = date.getMinutes() + ':';
    var s = date.getSeconds();
    return Y+M+D+h+m+s;
}