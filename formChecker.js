function validInput()
{
   let A =  document.getElementsByName('username');
   let B = document.getElementById('password');
   let C =  document.getElementById('1');
   let D = document.getElementById('2');
   let E =  document.getElementById('3');
   let F = document.getElementById('hello');


   if (B.value.length < 1)
   {
     alert('You need to enter a password');
   }
   //else if (F.value != "0" || F.value != "5" || F.value != "50")
   //{
    //alert('need to select shipping');
   //}

}
