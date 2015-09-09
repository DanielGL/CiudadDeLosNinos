$(function(){
	
$("#buildGraphic").click(function(){
	grafica();
});
	
function grafica(){
var data= [];
var obj{
label:
data:
}
$.plot($("#graph"), data,
{
        series: {
            pie: { 
                show: true
            }
        }
});
}

});