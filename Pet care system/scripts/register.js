const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");

        //Watched youtbe tutotials and some online resources to complete the shope page 
        

nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));



var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");
      
      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
         // input.value="";
         // form.classList.remove('secActive');
        } else {
          confirm_password.setCustomValidity('');
         // form.classList.add('secActive');
        }
      }
      
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
      