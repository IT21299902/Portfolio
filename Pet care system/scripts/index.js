document.write("This is to check indexes");

var txt="lets watch legend playing";
var Length=txt.length;
alert(Length);

var str="Please locate where 'locate' occurs";
var pos=str.indexOf("locate");
alert(pos);

var str="Please locate where 'locate' occurs";
var pos=str.lastIndexOf("locate");
alert(pos);

var str="Please locate where 'locate' occurs";
var pos=str.lastIndexOf("John");
alert(pos);

var str="Please locate where 'locate' occurs";
var pos=str.lastIndexOf("locate",15);
alert(pos);
