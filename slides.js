
let slides = ["puppy1.jpg" , "puppy2.jpg" , "puppy3.jpg" , "puppy4.jpg" , "puppy5.jpg"];
let counter = 0;

function next()
{

  let pic = document.getElementById('slides');
  counter += 1;
  counter %= slides.length;
  pic.src = slides[counter];
}
