function colors()
{
  let A =  document.getElementById('br').value;
  let B = document.getElementById('bg').value;
  let C =  document.getElementById('bb').value;
  let D = document.getElementById('width').value;
  let E =  document.getElementById('bgr').value;
  let F = document.getElementById('bgg').value;
let G = document.getElementById('bgb').value;
let p = document.getElementById("p");

  p.style.borderStyle= "solid";
  p.style.borderWidth=`${D}`;
  p.style.borderColor=`rgb(${A}, ${B}, ${C})`;
  p.style.backgroundColor=`rgb(${E}, ${F}, ${G})`;
}
