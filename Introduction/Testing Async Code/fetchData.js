import fetch from 'node-fetch'
async function fetchJSON(){
    let jsonPromise = null;
    await fetch('http://localhost:8080/jest-lessons/testJson').then(data => jsonPromise = data.json());
    return jsonPromise;
}

async function fetchData(){
    return await fetchJSON();
}

export default fetchData;