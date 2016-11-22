var addData = require('../model/addData.js');
var util = require('../lib/util.js');
module.exports.addData = function(req, res, next) {
    var _data = (function(){
    	var obj = req.query;
    	return obj;
    })();
    addData.addData(_data).then(function(data) {
    	console.log(data);
        (data.code==1)&&res.redirect('/');
    }).catch(next);
};