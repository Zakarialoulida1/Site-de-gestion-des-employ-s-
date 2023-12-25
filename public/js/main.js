 const btn_update_project=document.querySelectorAll(".btn_update_project");
 const popup =document.getElementById("popup");

btn_update_project.forEach(button => {
    button.addEventListener("click",()=>{
        popup.classList.toggle("hidden");

    })
});



