const express = require("express");
const app     = express();
const admin   = require('./routes/admin/index');
const site    = require('./routes/site/index');
app.listen(3000);



app.get('/admin',admin);


app.get('/',(req,res)=>{
    res.send('front view');
});