const express  = require('express');
const router   = express.Router(); 

//middleware 
const {auth,test} = require('../../middleware/adminMiddleware');

// Controller import
const {index,user,table} = require('../../controller/admin/userController');


// Routes
router.get('/',[auth,test], index);
router.get('/table',auth,table);
router.get('/user',auth,user);



module.exports =  router;