import fetchUser from './fetch/fetchUser.js';
import fetchTickets from './fetch/fetchTickets.js';

const divTicketsNuevos = document.querySelector(".tickets-nuevos");
const btn_tickets = document.querySelector("#btn-nuevo-tickets");
const span = document.querySelector("#no-tickets");
const moreDetails = document.querySelector("#moreDetails");
const iframe = document.querySelector("iframe")


const popUpsTickets = async ()=>{
    const tickets = await fetchTickets();

    span.textContent = tickets.length
    
    tickets.map(item=>{
        let div = document.createElement('div');
        let p_nombre = document.createElement('p');
        let p_departamento = document.createElement('p');
        let p_id = document.createElement('p');
        let p_problema = document.createElement('p');
        let p_descripcion = document.createElement('p');
        let btn = document.createElement('button');
        
        div.setAttribute("class", "tickets-container")

        p_id.innerHTML= `<b>ID:
        </b> ${item.id_ticket}`;
        p_nombre.innerHTML= `<b>Nombre:</b> ${item.nombre}  ${item.apellido}`;
        p_departamento.innerHTML= `<b>Departamento:</b> ${item.nombre_departamento}`;
        p_problema.innerHTML = `<b>Problema:</b> ${item.problema}`;
        p_descripcion.innerHTML= `<b>Descripcion del Problema:</b> ${item.descripcion}`;
        btn.textContent = "Ver mas detalles"
        p_problema.style.display = 'none';
        p_descripcion.style.display = 'none';        

        btn.addEventListener("click", (e)=>{
            
            moreDetails.classList.toggle("active")
            divTicketsNuevos.classList.toggle("active");
            if(moreDetails.classList.contains("active")){
                p_problema.style.display = 'block';
                p_descripcion.style.display = 'block';
                moreDetails.appendChild(div);
                btn.textContent= "Cerrar detalles"
                 iframe.style.display = "none"
            }
            else{
                divTicketsNuevos.appendChild(div);
                p_problema.style.display = 'none';
                p_descripcion.style.display = 'none';
                btn.textContent = "Ver mas detalles"
                iframe.style.display = "block"
            }
            
        });

        div.appendChild(p_id);
        div.appendChild(p_nombre);
        div.appendChild(p_departamento);
        div.appendChild(p_problema);
        div.appendChild(p_descripcion);
        div.appendChild(btn);

        divTicketsNuevos.appendChild(div);
    })
}

addEventListener("load", async ()=>{
    const user = await fetchUser();
    if(user.rol == 1){
        btn_tickets.style.display = 'block'
        span.style.display = 'block'
        btn_tickets.addEventListener("click", ()=>{
            divTicketsNuevos.classList.toggle("active");
        });
        popUpsTickets();
    }
});



