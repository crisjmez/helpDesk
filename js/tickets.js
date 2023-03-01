const estado = document.querySelectorAll('#editar');

estado.forEach((item)=>{

    item.addEventListener('click',(e)=>{
        let id = e.target.value;
        window.location.href = `../../controllers/actualizarEstado.php?id=${id}&estado=2`;
    })
});


const popUpsTickets = ()=>{

    const btn = document.createElement('button');
    
}

