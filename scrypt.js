const form = document.querySelector('form');
const message = document.getElementById('response');

form.addEventListener('submit',function(e){
    e.preventDefault();
    const formData=new FormData(form);
    // Affichage des paires clefs/valeurs

    console.log(formData);
    fetch('contact.php',{
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if(data.message !== undefined){
            // ok
            message.textContent= data.message;
            message.style.color="#008000";
            
            form.reset();
        }
        if(data.error !== undefined){
            // error
            message.textContent= data.error;
            message.style.color="#000000";
        }
    })
})


$("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
