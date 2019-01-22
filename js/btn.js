var bt = [0,0,0,0,0,0];
function collect(id,b,count)
{
  if (bt[count-1]==0)
    bt[count-1]=b;

  bt[count-1]++;
  let inputData = "recipe_ID="+id +"& b="+ bt[count-1];
    //alert("hello:"+inputData);
    $.ajax({
    type: "POST",
    url: "collect.php",
    data: inputData,
    success: function()
    {
        change(bt[count-1],count);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown)
    {
        alert("Status: " + textStatus); alert("Error: " + errorThrown);
    }
});
}

function change(b,count)
{

  if(b%2==0)
  {
    switch (count)
    {
      case 1:$("#btn1").css({"background":"#CCC","color":"#000000"});break;
      case 2:$("#btn2").css({"background":"#CCC","color":"#000000"});break;
      case 3:$("#btn3").css({"background":"#CCC","color":"#000000"});break;
      case 4:$("#btn4").css({"background":"#CCC","color":"#000000"});break;
      case 5:$("#btn5").css({"background":"#CCC","color":"#000000"});break;
      default:$("#btn6").css({"background":"#CCC","color":"#000000"});
    }
  }
  else
  {
    switch (count)
    {
		case 1:$("#btn1").css({"background":"#ff7575","color":"#FFFFFF"});break;
      case 2:$("#btn2").css({"background":"#ff7575","color":"#FFFFFF"});break;
      case 3:$("#btn3").css({"background":"#ff7575","color":"#FFFFFF"});break;
      case 4:$("#btn4").css({"background":"#ff7575","color":"#FFFFFF"});break;
      case 5:$("#btn5").css({"background":"#ff7575","color":"#FFFFFF"});break;
      default:$("#btn6").css({"background":"#ff7575","color":"#FFFFFF"});
    }
   }
}
function unlogin()
{
  alert("請先登入");
}
