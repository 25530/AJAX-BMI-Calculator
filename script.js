function ajax (gewicht, lengte) {
  let debug = true;
  let controlScript = "BMI.php";
  let xmlhttp = new XMLHttpRequest();
  let httpString = controlScript + "?gewicht=" + gewicht + "&lengte_cm=" + lengte;
  let httpResponse = "";

  if(debug) console.log(httpString)//// DEBUG:

  xmlhttp.onreadystatechange = function(){
if (xmlhttp.readyState == 4 && xmlhttp.status == 200){


  if (debug) console.log("http response = " + xmlhttp.responseText);
  httpResponse = xmlhttp.responseText;
  resultaat.innerHTML = httpResponse;
}}
  xmlhttp.open("GET",httpString, true);
  xmlhttp.send();

}

let bereken = document.getElementById('bereken');
let lengte = document.getElementById('lengte');
let gewicht = document.getElementById('gewicht');
let resultaat = document.getElementById("resultaat");
let input = document.getElementById("input");

gewicht.addEventListener('focus', function() {})
lengte.addEventListener('focus', function() {})
bereken.addEventListener('click', berekenBMI);
function berekenBMI (){
  ajax(gewicht.value, lengte.value);
}

function clearResult(){

}
