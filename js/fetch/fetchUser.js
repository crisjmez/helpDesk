 const fetchUser = async ()=>{

    let res = await  fetch("../data/UserFetch.php");
    let data = await res.text();
    let jsonData = JSON.parse(data);
    
    return jsonData;
} 

export default fetchUser;