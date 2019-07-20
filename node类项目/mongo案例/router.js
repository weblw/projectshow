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
