
index = (req,res)=>{
    res.render('admin/index',{foo:"dashboard",bar:"some title"});
    // res.send('<h1> here it is </h1>');
};

user = (req,res)=>{
    res.send('<h1> Users page</h1>');
}


module.exports = {index,user};