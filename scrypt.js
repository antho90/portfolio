const form = document.querySelector('form');
const message = document.getElementById('response');
const links = document.querySelectorAll('figure a');
const menu = document.querySelector('input[type="checkbox"]');


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
  menu.addEventListener('change', ()=>{
      if (menu.checked){
        const nav_links = document.querySelectorAll('.nav_links');
        nav_links.forEach(link =>{
          link.addEventListener('click', () =>{
            console.log('test')
            menu.checked=false
          })
      })
          links.forEach(link =>{
          link.classList.add('menu-active')

      })
      }else {
        links.forEach(link =>{
            link.classList.remove('menu-active')
        })
      }
      
  })

