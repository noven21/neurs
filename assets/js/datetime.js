//datetime picker start date
var picker = new MaterialDatetimePicker({})
.on('submit', function(d) {




var getString = document.getElementById("dateStart").value= d.toString();
var cutDate = getString.substr(4,20);


var date = new Date(cutDate);
var months = date.getMonth()+1;
var fixedmonths =  ('0'+months).slice(-2);
var days = ('0'+date.getDate()).slice(-2);
var hour = ('0'+date.getHours()).slice(-2);
var minutes = ('0'+date.getMinutes()).slice(-2);
var second =  ('0'+date.getSeconds()).slice(-2);


var startdate = date.getFullYear()+'-'+fixedmonths+'-'+days+' '+hour
+':'+minutes+':'+second;

document.getElementById("dateStart").value = startdate;


});


var start = document.querySelector('.c-datepicker-btn');
start.addEventListener('click', function() {
picker.open();
}, false);





//for datetime picker end date
var picker2 = new MaterialDatetimePicker({})
.on('submit', function(q) {



    var getString = document.getElementById("dateEnd").value= q.toString();
var cutDate = getString.substr(4,20);


var date = new Date(cutDate);
var months = date.getMonth()+1;
var fixedmonths =  ('0'+months).slice(-2);
var days = ('0'+date.getDate()).slice(-2);
var hour = ('0'+date.getHours()).slice(-2);
var minutes = ('0'+date.getMinutes()).slice(-2);
var second =  ('0'+date.getSeconds()).slice(-2);


var enddate = date.getFullYear()+'-'+fixedmonths+'-'+days+' '+hour
+':'+minutes+':'+second;

document.getElementById("dateEnd").value = enddate;


});


var end = document.querySelector('.c-datepicker-btn2');
end.addEventListener('click', function() {
picker2.open();
}, false);


