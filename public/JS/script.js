function suggest(){
    var term = document.getElementById('search').value;
    const endpoint = '/showCars/' + term;
    const carlist = document.getElementById('carlist');
    carlist.innerHTML = '';
    console.log(endpoint);
    fetch(endpoint)
        .then(response => {
            if(!response.ok){
                throw new Error('HTTP error! Status: $(response.status)');
            }
            return response.json();
        })
        .then(data => {
            data.forEach(cars => {
                const li = document.createElement('li');
                li.innerHTML = cars.Model;
                carlist.appendChild(li);
                console.log(li);
                console.log(cars);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });            
}