function $id(id){
	return document.getElementById(id);
}
function pos(name,ypos){
	name.style.backgroundPositionY=ypos;
}
function blocks(name,a){
	for(var i=0;i<name.length;i++){
		name[i].className="";
	}
	name[a].className="sblock";
}
function show(name,a){
	name.style.width=(10-a)*8+"px";
	name.style.backgroundPositionX=(-a*8)+"px";
}
var sec=$id("sec");
var startimg=$id("startimg");
var sstart=$id("sstart");
var sstarts=$id("sstarts");
var bottom=$id("bottom")
var spans=bottom.getElementsByTagName("span");
sec.onchange=function(){
	var val=sec.value;
	console.log(val);
	switch(val){
		case "1":
			pos(startimg,"0px");
			blocks(spans,0);
			show(sstarts,10);
			break;
		case "2":
			pos(startimg,"-50px");
			blocks(spans,1);
			show(sstarts,9);
			break;
		case "3":
			pos(startimg,"-100px");
			blocks(spans,2);
			show(sstarts,6);
			break;
		case "4":
			pos(startimg,"-150px");
			blocks(spans,3);
			show(sstarts,8);
			break;
		case "5":
			pos(startimg,"-200px");
			blocks(spans,4);
			show(sstarts,6);
			break;
		case "6":
			pos(startimg,"-250px");
			blocks(spans,5);
			show(sstarts,8);
			break;
		case "7":
			pos(startimg,"-300px");
			blocks(spans,6);
			show(sstarts,5);
			break;
		case "8":
			pos(startimg,"-350px");
			blocks(spans,7);
			show(sstarts,2);
			break;
		case "9":
			pos(startimg,"-400px");
			blocks(spans,8);
			show(sstarts,1);
			break;
		case "10":
			pos(startimg,"-450px");
			blocks(spans,9);
			show(sstarts,3);
			break;
		case "11":
			pos(startimg,"-500px");
			blocks(spans,10);
			show(sstarts,6);
			break;
		case "12":
			pos(startimg,"-550px");
			blocks(spans,11);
			show(sstarts,1);
			break;
	}
}
