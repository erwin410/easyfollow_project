const api_url = 'http://localhost:8000/api/show.php?id=6';

async function getUsers()
{
    const response = await fetch(api_url);
    const data = await response.json();
    const { pseudo } = data;

    document.getElementById('pseudo').textContent = pseudo;
}

getUsers();


