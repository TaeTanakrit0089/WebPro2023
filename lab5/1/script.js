async function fetchData() {
    await fetch('./employees.json').then(async res => {
        const data = await res.json()
        data.forEach(element => {
            const pTag = document.createElement('p')
            pTag.innerHTML = `${element.id}.) <b>${element.firstName} ${element.lastName}</b> (${element.gender}) is a ${element.position} at ${element.address}`
            document.body.appendChild(pTag)
        });
    })
}
fetchData()