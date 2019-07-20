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
