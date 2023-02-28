const ul = document.querySelector("ul");
const iframe =  document.querySelector("iframe");
const fetchRol = async ()=>{

    let res = await  fetch("../data/UserFetch.php");
    let data = await res.text();
    let jsonData = JSON.parse(data);
    
    return jsonData;

} ;

const menu = async ()=>{

   
    let rol =  await fetchRol();
    let menuData = await fetch("../data/menu.json");
    let data = await menuData.json();

    data.map(item =>{
        if(item.user_Allowed.includes(Number(rol.rol))){
            if(item.hijos.length == 0){
                let li = document.createElement("li");
                let a = document.createElement("a");
                a.textContent = item.nombre;
                a.href = "#";
                a.addEventListener('click', (e)=>{
                    if(item.id === 4){
                        a.href= `../controllers/${item.url}`;
                    }
                    else{
                        e.preventDefault()
                        iframe.src = item.url;
                    }
                })
                li.append(a);
                ul.append(li);
             

            }
            else{
                let li = document.createElement("li");
                let ulCh = document.createElement("ul");
                ulCh.setAttribute('class', 'dropMenu_sub')
                let p = document.createElement("p");
                p.setAttribute('class', 'dropMenu');
                p.textContent = item.nombre;
                li.append(p);
                item.hijos.map((itemCh)=>{
                    let li2 = document.createElement("li");
                    let a = document.createElement("a");
                    a.textContent = itemCh.nombre;
                    a.href = "#";
                    a.addEventListener('click', (e)=>{
                        e.preventDefault()
                        iframe.src = itemCh.url;
                    })
                    li2.append(a);
                    ulCh.append(li2);
 
                });
                li.append(ulCh);
                ul.append(li);
            }
        }

        
    })

};

export default menu;