var url_base = 'http://localhost/sistec/';
var url_data = url_base + "data/";

function loadView(view, element)
{
    $.get(url_base + view, function(data){
        element.html(data);
    });
}