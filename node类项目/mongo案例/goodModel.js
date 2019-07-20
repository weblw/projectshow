var mongoose=require('mongoose')

mongoose.connect('mongodb://localhost:27017/goodsData',{ useNewUrlParser: true})

var Schema=mongoose.Schema
var goodSchema=new Schema({
	brand:{
		type:String,
		required:true
	},
	model:{
		type:String,
		required:true
	},
	price:{
		type:Number,
		required:true
	}
})

var goodModel=mongoose.model('Good',goodSchema)

module.exports=goodModel
