async function getData() {
    const response = await fetch('http://localhost:8080/apiSenai/');
    const data = await response.json();
    
    return data;
}

