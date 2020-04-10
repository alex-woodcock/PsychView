"use strict";
const init =function(e){
    let btn=document.querySelector("#item1");
    let startTime = new Date();
    btn.addEventListener('click',function(){
        localStorage.setItem('start-time',startTime.getTime());
        window.document.location = './present5.html'+'?startTime='+startTime.getTime();
    });
    
}

document.addEventListener('DOMContentLoaded',function(){
    init();});
