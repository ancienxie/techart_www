(()=>{"use strict";console.log("test_js"),document.querySelector(".form1").addEventListener("submit",(function(e){e.preventDefault();const t=document.querySelector('[name="name"]'),o=document.querySelector('[name="email"]'),n=document.querySelector('[name="message"]');document.querySelector(".errorMessages").innerHTML="";let s=[];if(t.value||s.push("Поле 'Имя' обязательное для заполнения."),o.value?/^([a-zA-Z]|[0-9])([a-zA-Z]|[0-9]|[\.\_\-])+@([a-zA-Z]|[0-9])+\.[a-zA-Z]+/gm.test(o.value)||s.push("Поле 'Email' заполнено неверно."):s.push("Поле 'Email' обязательное для заполнения."),n.value.length>=10&&s.push("Поле для комментария не должно превышать 10 символов."),s.length>0)!function(e){const t=document.querySelector(".errorMessages");e.forEach((e=>{const o=document.createElement("p");o.textContent=e,o.classList.add("errors-message"),t.appendChild(o)}))}(s);else{document.querySelector(".form1").submit(),document.querySelector(".form1").remove();const e=document.createElement("p");e.textContent="Спасибо за отзыв!",e.classList.add("success-message"),document.querySelector(".nav").appendChild(e),function(e,t,o){fetch("./mail.php",{method:"POST",body:JSON.stringify({name:e,email:t,message:o}),headers:{"content-type":"application/json"}})}(t,o,n)}}));const e=document.querySelector(".form1");fetch("form.php",{method:"POST",body:new FormData(e)}),console.log(e)})();