"use strict";
const init = function(e){
    let spn = document.querySelector("#time");
    let endTime = new Date();
    let startTime = document.location.search.replace(/^.*?\=/,'');
    let elapsedTime = endTime.getTime() - localStorage.getItem('start-time');
    spn.innerHTML=endTime.getTime()-startTime;
};

document.addEventListener('DomContentLoaded',function(){
    init();});
