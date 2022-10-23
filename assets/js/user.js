
     

function myFunction()
{




  
    var checkbox = document.getElementById("check");
 if(checkbox.checked == true)
    {
        $('#panel').fadeOut('slow');
        $('#table').fadeOut('slow');
        
    }
    else
    {
        $('#panel').fadeIn('slow');
        $('#table').fadeIn('slow');
    }

 
    }


   
  

  function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('check_password').value) 
            {
        document.getElementById('submit').disabled = false;
        document.getElementById('confirm_password').disabled = false;
        document.getElementById('error').style.color = 'green';
        document.getElementById('error').innerHTML = 'password match';
     
            } 
    else 
    {
        document.getElementById('submit').disabled = true;
        document.getElementById('confirm_password').disabled = true;
        document.getElementById('error').style.color = 'red';
        document.getElementById('error').innerHTML = 'password does not match';
        $("div#error").removeClass("error");
    }

  


}

function check_date() {
      if (document.getElementById('dateStart').value ==
          document.getElementById('dateEnd').value) 
          {
            document.getElementById('submit').disabled = true;
          document.getElementById('error2').style.color = 'red';
          document.getElementById('error2').innerHTML = 'You input same date.';
          alert('error u have same date and time');
      
          } 
          else
          {
            alert('adios');
            document.getElementById('submit').disabled = false;
            document.getElementById('error2').style.color = 'green';
            document.getElementById('error2').innerHTML = 'You asdasdasdasd same date.';
          }





}


 




