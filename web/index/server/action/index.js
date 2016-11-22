var index = require('../model/index.js');
var util = require('../lib/util.js');

module.exports = function(req, res, next) {
    index.getData().then(function(data) {
        res.render('index/page/index.tpl', {
        	title:'球员列表',
            list: data.data
        });
    }).catch(next);
};