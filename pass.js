function validFunc()
{
   let A =  document.getElementById('pw1');
   let B = document.getElementById('pw2');

   if (A.value.length < 8)
   {
     alert('The password needs to be atleast 8 characters long')
   }

   else if (A.value == B.value)
   {
     alert('The passwords are valid')
   }
   else if (A.value != B.value)
   {
    alert('The passwords are not valid')
   }

}
