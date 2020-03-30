const mysql = require('mysql2');
// create the connection to database
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    database: 'wp'
  });

index = (req,res)=>{
    res.render('admin/dashboard/index',{title:"Dashboard"});
};

user = (req,res)=>{
    res.send('<h1> Users page</h1>',{title:"Dashboard"});
}


table = (req,res)=>{
    // simple query
    connection.query(
        'select * from wp_posts limit 50;',
        function(err, results, fields) {
        console.log(results); // results contains rows returned by server
         res.render('admin/table/index',{title:"Table",results:results});
        }
    );
}

module.exports = {index,user,table};