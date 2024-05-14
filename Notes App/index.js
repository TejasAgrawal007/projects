const express = require('express')
const path = require('path')
const fs = require('fs')
const app = express()
const port = 3000

app.use(express.json())
app.use(express.urlencoded({extended : true}))
app.use(express.static(path.join(__dirname, 'public')))

app.set('view engine', 'ejs')

app.get('/', (req, res) => {
    fs.readdir('./files',(err, files) => {
        res.render("index", {files : files})
    } )
})


app.get('/files/:filename', (req, res) => {
    fs.readFile(`./files/${req.params.filename}`, "utf8", (err, filedata) => {
        res.render("show", {filename : req.params.filename, filedata : filedata})
    })
})

app.get('/edit/:filename', (req, res) => {
    res.render("edit", {filename: req.params.filename});
})

app.post('/edit', (req,res)=> {
    fs.rename(`./files/${req.body.previous}`, `./files/${req.body.new}`, (err) => {
        res.redirect("/")
    })
})

app.post('/create',(req, res) => {
    fs.writeFile(`./files/${req.body.title.split(" ").join('')}.txt`, req.body.description, (err, filedata) => {
        res.redirect("/")
    })
})

app.listen(port, () => {
console.log(`Example app listening on port port`)
})