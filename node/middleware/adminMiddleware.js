const auth = (req,res,next)=>{

    console.log('check');
    next();
};

const test = (req,res,next)=>{

    console.log('check 2');
    next();
}



module.exports = {auth,test};