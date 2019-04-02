

var btn=document.getElementById('smit').addEventListener('click', myFunction, false);
var btna=document.getElementById('s').addEventListener('mouseover', function1, false);
var btnb=document.getElementById('s').addEventListener('mouseout', function2, false);
var form=document.getElementById('f').style.display='none';
/* var formc=document.getElementById('c').style.background = "#e6e6fa"; */
var formc=document.getElementById('c').style.backgroundImage= "url('seashell.jpg')";
var formca=document.getElementById('c').style.backgroundRepeat= "no-repeat";
var formcb=document.getElementById('c').style.backgroundPosition="center";




function function1(){


 /*var formc=document.getElementById('c').style.background = "#33ff33";*/
 var formc=document.getElementById('c').style.backgroundImage= "url('lighthse.jpg')";
 var formca=document.getElementById('c').style.backgroundRepeat= "no-repeat";
 var formcb=document.getElementById('c').style.backgroundPosition="center";

}


function function2(){


/* var formc=document.getElementById('c').style.background = "#e6e6fa";*/

var formc=document.getElementById('c').style.backgroundImage= "url('seashell.jpg')";
var formca=document.getElementById('c').style.backgroundRepeat= "no-repeat";
var formcb=document.getElementById('c').style.backgroundPosition="center";




}



function myFunction() {
  var x = document.getElementById('f');
  if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
}
