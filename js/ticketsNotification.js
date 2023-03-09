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
        let p_problema = document.createElement('p');
        let p_descripcion = document.createElement('p');
        let exit = document.createElement('i');
        


        p_id.innerHTML= `<b>Numero del Ticket:
        </b> ${item.id_ticket}`;
        p_nombre.innerHTML= `<b>Nombre:</b> ${item.nombre}  ${item.apellido}`;
        p_departamento.innerHTML= `<b>Departamento:</b> ${item.nombre_departamento}`;
        p_problema.innerHTML = `<b>Problema:</b> ${item.problema}`;
        p_descripcion.innerHTML= `<b>Descripcion del Problema:</b> ${item.descripcion}`;
        exit.textContent = "X";

        p_problema.style.display = 'none';
        p_descripcion.style.display = 'none';
        exit.style.fontSize = "bolder";
        exit.style.display = 'none';
        exit.style.float = 'right';

        section.addEventListener("click", (e)=>{
            const div = document.createElement('div');
            div.setAttribute('class', "moreDetails");
            
            p_problema.style.display = 'block';
            p_descripcion.style.display = 'block';
            exit.style.display = 'inline';

            div.append(e.currentTarget);  
            document.body.appendChild(div);
            
        });

        exit.addEventListener("click", (ev)=>{
            ev.currentTarget.parentElement.style.display = "none";
            divTicketsNuevos.appendChild(section);
            //ev.target.style.display = 'none';
            p_problema.style.display = 'none';
            p_descripcion.style.display = 'none';
        })

        section.appendChild(exit);
        section.appendChild(p_id);
        section.appendChild(p_nombre);
        section.appendChild(p_departamento);
        section.appendChild(p_problema);
        section.appendChild(p_descripcion);
    
       // divTicketsNuevos.appendChild(section);
        divTicketsNuevos.src = section;
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



