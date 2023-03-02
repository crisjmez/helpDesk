export default async function fetchTickets(){

    let req = await fetch("../controllers/fetchTickets.php");
    let data = await req.json();

    return data;

}