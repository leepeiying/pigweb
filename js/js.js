
var $box1 = $("#box1");
var $box2 = $("#box2");
var $sky1 = $("#sky1");
var $sky2 = $("#sky2");
var $pig1 = $("#pig1");
var $pig2 = $("#pig2");
var $wood1 = $("#wood1");
var $wood2 = $("#wood2");
var $no1 = $("#no1");
var $no2 = $("#no2");
var $ad = $("#ad");
var $sun = $("#sun");
var $sun2 = $("#sun2");




	
setInterval(fn,1000); //setInterval重複變換 ,執行fn,每2000毫秒變換一次 

function fn() {
	'use strict';
	var d = new Date();
	var h = d.getHours();

	if(0<=h && h<6){
    $box1.animate({opacity:0},1500,function(){  //opacity:0=透明度0 
        $box1.css({"background-image":"url(image/grass4.png)",opacity:1});  //切換box1&box2			
    });
	
	$box2.css("background-image","url(image/grass4.png)");

    $sky1.animate({opacity:0},1500,function(){
		$sky1.css({"background-image":"url(image/sky4.gif)",opacity:1});				
    });
       $sky2.css("background-image","url(image/sky4.gif)");
		
	$pig1.animate({opacity:0},1500,function(){  
        $pig1.css({"background-image":"url(image/pig4.png)",opacity:1});  	
    });
	
	$pig2.css("background-image","url(image/pig4.png)");	
					
    $wood1.animate({opacity:0},1500,function(){
		$wood1.css({"background-image":"url(image/wood4.png)",opacity:1});				
    });
       $wood2.css("background-image","url(image/wood4.png)");	
	
	$no1.animate({opacity:0},5000,function(){
		$no1.css({"background-color":"#ABB9A4",opacity:1});				
    });
       $no2.css("background-color","#AFAB9A");
		
		$ad.css("background","#AFAB9A");
		
		$sun.removeClass("sun22");
		$sun.addClass("sun1");
		$sun2.css({"background":"url(image/moon.png)","background-size":"cover"});	
	}
	
	
	
	if(6<=h && h<12){
    $box1.animate({opacity:0},1500,function(){  //opacity:0=透明度0 
        $box1.css({"background-image":"url(image/grass1.png)",opacity:1});  //切換box1&box2			
    });
	
	$box2.css("background-image","url(image/grass1.png)");

    $sky1.animate({opacity:0},1500,function(){
		$sky1.css({"background-image":"url(image/sky1.gif)",opacity:1});				
    });
       $sky2.css("background-image","url(image/sky1.gif)");
		
	$pig1.animate({opacity:0},1500,function(){  
        $pig1.css({"background-image":"url(image/pig1.png)",opacity:1});  	
    });
	
	$pig2.css("background-image","url(image/pig1.png)");	
		
	
    $wood1.animate({opacity:0},1500,function(){
		$wood1.css({"background-image":"url(image/wood1.png)",opacity:1});				
    });
       $wood2.css("background-image","url(image/wood1.png)");	
		
	$no1.animate({opacity:0},1500,function(){
		$no1.css({"background-color":"#B7A392",opacity:1});				
    });
       $no2.css("background-color","#B7A392");	
		
       $ad.css("background-color","#B7A392");	
		

		$sun.removeClass("sun1");
		$sun.addClass("sun22");
		$sun2.css({"background":"url(image/sun.gif)","background-size":"cover"});	
	}
	
	if(12<=h && h<18){
    $box1.animate({opacity:0},1500,function(){  //opacity:0=透明度0 
        $box1.css({"background-image":"url(image/grass2.png)",opacity:1});  //切換box1&box2			
    });
	
	$box2.css("background-image","url(image/grass2.png)");

    $sky1.animate({opacity:0},1500,function(){
		$sky1.css({"background-image":"url(image/sky2.gif)",opacity:1});				
    });
       $sky2.css("background-image","url(image/sky2.gif)");
		
	$pig1.animate({opacity:0},1500,function(){  
        $pig1.css({"background-image":"url(image/pig2.png)",opacity:1});  	
    });
	
	$pig2.css("background-image","url(image/pig2.png)");	
		
	
    $wood1.animate({opacity:0},1500,function(){
		$wood1.css({"background-image":"url(image/wood2.png)",opacity:1});				
    });
       $wood2.css("background-image","url(image/wood2.png)");	
		
	$no1.animate({opacity:0},1500,function(){
		$no1.css({"background-color":"#B88B5E",opacity:1});				
    });
       $no2.css("background-color","#B88B5E");	
		
       $ad.css("background-color","#B88B5E");	
		
		$sun.removeClass("sun1");
		$sun.addClass("sun22");
		$sun2.css({"background":"url(image/sun.gif)","background-size":"cover"});	
	}
	
	if(18<=h && h<24){
    $box1.animate({opacity:0},1500,function(){  //opacity:0=透明度0 
        $box1.css({"background-image":"url(image/grass3.png)",opacity:1});  //切換box1&box2			
    });
	
	$box2.css("background-image","url(image/grass3.png)");

    $sky1.animate({opacity:0},1500,function(){
		$sky1.css({"background-image":"url(image/sky3.gif)",opacity:1});				
    });
       $sky2.css("background-image","url(image/sky3.gif)");
		
	$pig1.animate({opacity:0},1500,function(){  
        $pig1.css({"background-image":"url(image/pig3.png)",opacity:1});  	
    });
	
	$pig2.css("background-image","url(image/pig3.png)");	
		
	
    $wood1.animate({opacity:0},1500,function(){
		$wood1.css({"background-image":"url(image/wood3.png)",opacity:1});				
    });
       $wood2.css({"background-image":"url(image/wood3.png)"});	
		
	$no1.animate({opacity:0},1500,function(){
		$no1.css({"background-color":"#7B7450",opacity:1});				
    });
       $no2.css("background-color","#7B7450");		

       $ad.css("background-color","#7B7450");	
		

		$sun.removeClass("sun22");
		$sun.addClass("sun1");
		$sun2.css({"background":"url(image/moon.png)","background-size":"cover"});	
	}

}
