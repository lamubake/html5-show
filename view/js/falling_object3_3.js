/**
 * eqShow - v3.3.2 - 2015-05-08
 * 
 *
 * Copyright (c) 2015 
 * Licensed MIT <>
 */
function fallingObject(a,b){function c(a){a.clearRect(0,0,i,j);for(var b=0;b<m.length;b++)a.save(),a.translate(m[b].x,m[b].y),a.scale(m[b].scale,m[b].scale),a.rotate(m[b].rotate),a.fillRect(0,0,n,n),a.restore()}function d(){Math.random()<.02*h.density&&f(),e()}function e(){for(var a=0;a<m.length;a++)m[a].x+=m[a].vx,m[a].y+=m[a].vy,m[a].vy+=m[a].g;for(var b=0,a=0;a<m.length;a++)m[a].y<j-n&&m[a].x>-n&&m[a].x<i&&(m[b++]=m[a]);for(;m.length>b;)m.pop();m.length>o&&(m.length=o)}function f(){var a=.5*Math.random()+.3,b={x:Math.ceil(Math.random()*i),y:-n,g:.02*a*h.src.vy,vx:.05*Math.pow(-1,Math.ceil(1e3*Math.random())),vy:.01*a*h.src.vy,color:"yellow",scale:a,rotate:Math.pow(-1,Math.ceil(1e3*Math.random()))*Math.random()*(h.src.rotate||0)*Math.PI/180};m.push(b)}var g=a[b-1];if(g.properties){var h=g.properties.fallingObject||{};renderPage(eqShow,b,a);var i=$(".m-img").width(),j=$(".m-img").height(),k=document.createElement("canvas");k.width=i,k.height=j,$(k).prependTo("#page"+b+" .edit_wrapper").attr("class","cas page_effect").attr("id","can"+b).attr("style","z-index: 0");var l=k.getContext("2d"),m=[],n=60,o=20,p=new Image;p.src=h.src.path,p.onload=function(){l.beginPath(),pattern=l.createPattern(p,"repeat"),l.fillStyle=pattern,l.closePath(),setInterval(function(){c(l),d()},20)}}}