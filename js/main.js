
document.getElementById("bconnexion").onclick = function(){
    
    if(document.getElementById('sconnexion').style.left == '-222px'){
        document.getElementById('sconnexion').style.left = '0';
        document.getElementById('bconnexion').style.backgroundColor = '#fff';

        
    }else{
        document.getElementById('sconnexion').style.left = '-222px';
        document.getElementById('bconnexion').style.background = 'none';
    }
    
    
};
document.getElementById("btn_header").onclick = function(){
    
    if(document.getElementById("headerpc").style.visibility == "hidden"){

        document.getElementById("headerpc").style.visibility = "visible"
    }else{
        document.getElementById("headerpc").style.visibility = "hidden"
    }
};

$(window).on("scroll", function(){
    if($(window).scrollTop()){
        $('header').addClass('scr');
    }else{
        $('header').removeClass('scr');
    }
})
 