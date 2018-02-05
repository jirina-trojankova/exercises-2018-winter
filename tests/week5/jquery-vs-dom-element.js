var element = document.getElementById('foo'); // basic DOM element object
var jqelement = $('#foo'); // jQuery (selection) object

jqelement.html();
jqelement.find();
jqelement.hide();
jqelement.show();
jqelement.animate();
jqelement.css();
jqelement.addClass();

var jqelement = $(element);
var jqelement = $(jqelement);

// I need the JQ element from some_element
jqelement = $(some_element);