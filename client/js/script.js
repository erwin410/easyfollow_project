const api_url = 'http://localhost:8000/api/show.php?id=1';

async function getUsers()
{
    const response = await fetch(api_url);
    const data = await response.json();
    const { name, pseudo } = data;

       
    document.getElementById('name').textContent = name;
    document.getElementById('pseudo').textContent = pseudo;
}

getUsers();