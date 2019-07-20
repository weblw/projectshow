## `mongodb`版`goods`案例

### `app.js`

```javascript
var express=require('express')
var bodyParser=require('body-parser')
var router=require('./router')
var app=express()

app.use('/public/',express.static('./public/'))
app.use('/node/',express.static('./node_modules/'))

app.engine('html',require('express-art-template'))
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

app.use(router)

app.listen(3000,()=>{
	console.log('Runing...')
})

```

### `router.js`

```javascript
var express=require('express')
var fs=require('fs')
var model=require('./goodModel.js')

var router=express.Router()

router.get('/',(req,res)=>{
	model.find((err,goods)=>{
		if(err){
			return res.status(500).send('Server Error')
		}
		res.render('index.html',{
			goods:goods
		})
	})
})

router.get('/add',(req,res)=>{
	res.render('add.html')
})

router.post('/add',(req,res)=>{
	new model(req.body).save(err=>{
		if(err){
			return res.status(500).send('Server Error')
		}
		res.redirect('/')
	})
})

router.get('/delete',(req,res)=>{
	var id=req.query.id.replace(/"/g,"")
	model.findByIdAndRemove(id,err=>{
		if(err){
			return res.status(500).send('Server Error')
		}
		res.redirect('/')
	})
})

router.get('/update',(req,res)=>{
	var id=req.query.id.replace(/"/g,"")
	model.findById(id,(err,good)=>{
		if(err){
			return res.status(500).send('Server Error')
		}
		res.render('update.html',{
			good:good
		})
	})
})

router.post('/update',(req,res)=>{
	var id=req.body.id.replace(/"/g,"")
	model.findByIdAndUpdate(id,req.body,err=>{
		if(err){
			return res.status(500).send('Server Error')
		}
		res.redirect('/')
	})
})

module.exports=router

```

### `goodModel.js`

```javascript
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

```