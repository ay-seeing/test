//设置或获取css属性值
function cssStyle(obj,attr,value){
    if(arguments.length==2){
        if(obj.currentStyle){  //用于ie获取属性值
            if(attr=="opacity"){
                return parseInt(obj.currentStyle[attr]*100);
            }else{
                return obj.currentStyle[attr];
            }
        }else{
            if(attr=="opacity" && !obj.style.opacity){
                return parseInt(getComputedStyle(obj,false)[attr]*100);
            }else if(attr=="opacity" && obj.style.opacity){
                return parseInt(obj.style.opacity*100);
            }else{
                return getComputedStyle(obj,false)[attr];
            }
        }
    }else{
        if(attr=="opacity"){
            obj.style["filter"]="alpha(opacity="+value+")";
            obj.style[attr]=value/100;
        }else{
            obj.style[attr]=value;
        }
    }
}

//运动函数
function moveFrame(obj,attr,iTarget){   //调用参数：obj 运动的对象 ， attr 改变的属性 ， iTarget 运动目标
    clearInterval(obj.timer);
    obj.timer=setInterval(function(){
        var nAttr=parseInt(cssStyle(obj,attr));   //用cssStyle()代替offsetWidth等获取属性
        var speed=(iTarget-nAttr)/8;
        speed=speed > 0 ? Math.ceil(speed) : Math.floor(speed);
        if(speed==0){clearInterval(obj.timer);}
        if(attr=="opacity"){
            obj.style["filter"]="alpha(opacity="+(nAttr+speed)+")";
            obj.style[attr]=(nAttr+speed)/100;
        }else{
            obj.style[attr]=nAttr+speed+"px";
        }
    },30);
}