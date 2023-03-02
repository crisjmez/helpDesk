import fetchUser from './fetch/fetchUser.js';
import fetchTickets from './fetch/fetchTickets.js';

const divTicketsNuevos = document.querySelector(".tickets-nuevos");

const ticketsNumber = async ()=>{
    const tickets = await fetchTickets();
    return tickets.length;
}

const btnPopUpsTickets = async ()=>{
    let size = await ticketsNumber();
  
    //div-btn
    const div_btn = document.createElement('div');
    div_btn.setAttribute("id", "div-btn");
   
    const btn = document.createElement('button');
    btn.textContent = "Nuevos Tickets";
    btn.setAttribute("id", "btn-nuevo-tickets");
    btn.addEventListener("click", ()=>{
        divTicketsNuevos.classList.toggle("active");
    });

    //div-btn append btn 
    div_btn.appendChild(btn);
    document.body.append(div_btn);
};

const popUpsTickets = async ()=>{
    const tickets = await fetchTickets();

    tickets.map(item=>{
        let section = document.createElement('section');
        let p_nombre = document.createElement('p');
        let p_departamento = document.createElement('p');
        let p_id = document.createElement('p');

        p_id.innerHTML= item.id_ticket;
        p_nombre.innerHTML= item.nombre + item.apellido;
        p_departamento.innerHTML= item.nombre_departamento;

        section.addEventListener("click", (e)=>{
            const div = document.createElement('div');
            div.setAttribute('class', "moreDetails");

            div.append(item.id_ticket);
            div.append(item.nombre + item.apellido);
            div.append( item.nombre_departamento)
        
            document.body.appendChild(div);
            
        })


        section.appendChild(p_id);
        section.appendChild(p_nombre);
        section.appendChild(p_departamento);
    
        divTicketsNuevos.appendChild(section);

        
    })

}

addEventListener("load", async ()=>{
    const user = await fetchUser();
    if(user.rol== 1){
        btnPopUpsTickets();
        popUpsTickets();
    }else{
        return;
    }
});



