function writeLetter(a){
 var max=250,b=a.value.length;
 if(b>max){
  alert('Maksymalna długość komentarza to 250 znaków!');
  a.value=a.value.substr(0,max);
  b=max;
 }
 $("#lz").text(b);
}
function save(){
 var d=new Date(),t=$('#title').val(),a=$('#author').val(),y=parseInt($('#year').val()),p=$('#publisher').val(),c=$('#comment').val();
 if(t.length<2){
  alert('Zbyt krótki tytuł!');
  return;
 }
 if(a.length<3){
  alert('Zbyt krótki autor!');
  return;
 }
 if(isNaN(y)){
  alert('Niepoprawny rok!');
  return;
 }
 if(p.length<2){
  alert('Zbyt krótki wydawca!');
  return;
 }
 if(y<=-10000||y>d.getFullYear()){
  alert('Rok powinien mieścić się w przedziale od -9999 do '+d.getFullYear());
 }
 loading(0.8);
 ajaxConnect("typ=1&t="+encodeURIComponent(t)+"&a="+encodeURIComponent(a)+"&y="+encodeURIComponent(y)+"&p="+encodeURIComponent(p)+"&c="+encodeURIComponent(c),1);
}
function delbook(a){
 loading(0.8);
 ajaxConnect("typ=2&id="+parseInt(a));
}
function loading(a){
 var a=parseFloat(a);
 if(a==0.8){
  $('#cover').css('display',('block'));
 }else if(a!=0){
  return;
 }
 $('#cover').animate({'opacity':a},'fast',function(){if($(this).css('opacity')<0.8){$(this).css('display',('none'));}});
}
function ajaxConnect(a){
 $.ajax({url:"/pokazy/upload.php?callback=?",type:"post",data:a,dataType:"json",success:function(a){
  loading(0);
  if(a.error==1){
   alert('Wystąpił błąd!');
   return;
  }
  if(a[0]==1){
   var a1=$("#hdr").children(),b=$('tr'),c=b[b.length-1].className.substr(3),d='<tr id="row'+a[6]+'" class="row'+(c==1?2:1)+'" style="text-align:center"><td width="'+$(a1[0]).width()+'" style="text-align:left">'+b.length+'.</td><td width="'+$(a1[1]).width()+'">'+a[1]+'</td><td width="'+$(a1[2]).width()+'">'+a[2]+'</td><td width="'+$(a1[3]).width()+'">'+Math.abs(a[3])+' r.'+(a[3]<0?' p.n.e.':'')+'</td><td width="'+$(a1[4]).width()+'">'+a[4]+'</td><td width="'+$(a1[5]).width()+'">'+a[5]+'</td><td width="'+$(a1[6]).width()+'"><div class="delbut" onclick="delbook('+a[6]+')">[X]</div></td></tr>';
   $('table').css('border-bottom',0);$('<div id="temptab" style="display:none"><table border=1 style="border-top:0">'+d+'</table></div>').insertAfter('table').slideDown('slow',function(){
    $(d).appendTo('table');
	$("#temptab").remove();
	$('table').css('border-bottom','');
   });
  }else if(a[0]==2){
   $("#row"+a[1]).remove();
   countels=0;
   $('tr').each(function(){if(countels){$(this).children(':first-child').text(countels+'.');$(this).css('background-color',(countels%2?'#E7E7E7':'#CDCDCD'));}countels++;});
  }
 },error:function(){loading(0);alert('Wystąpił błąd!');}});
}
function getHeight(){
 return Math.max(Math.max(document.body.scrollHeight,document.documentElement.scrollHeight),Math.max(document.body.offsetHeight,document.documentElement.offsetHeight),Math.max(document.body.clientHeight,document.documentElement.clientHeight));
}
$(document).ready(function(){
 $('#cover img').css('margin-top',(getHeight()/2-64)+'px');
 $('#cover').css('height',getHeight()+'px');
});
