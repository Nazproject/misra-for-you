'use strict';
const express = require("express");
const app     = express();
const admin   = require('./routes/admin');
const site    = require('./routes/site/index');


// Settings
app.set('view engine', 'ejs');
app.use('/public', express.static('public'));
app.set('views', __dirname + '/views');
app.listen(3000);


//routes
app.use('/admin',admin);
app.get('/',(req,res)=>{
    res.send('front view');
});

// app.use('',(req,res)=>{
//     res.send('<h1> 404 Not Found </h1>');
// });