function suggest(){
    var term = document.getElementById("search").value;
    const endpoint ='/showCars/'+term;
    const carList = document.getElementById('carList');
    carList.innerHTML="";

    console.log(endpoint); 

    //Fetch API
    fetch(endpoint).then(response => {if(!response.ok){throw new Error ('HTTP error! Status: $(response.status)');
                                            }
                                    return response.json();
                                    })
                    .then(data => {
                        data.forEach(cars => {
                            const listItem=document.createElement('li');
                            listItem.innerHTML=cars.Model;
                            carList.appendChild(listItem);
                            console.log(listItem)
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                    });
}

function search(){
    var term = document.getElementById("search").value;
    const endpoint ='/carlisting/'+term;
    const carList = document.getElementById('carList');
    carList.innerHTML="";

    console.log(endpoint); 

    //Fetch API
    fetch(endpoint).then(response => {if(!response.ok){throw new Error ('HTTP error! Status: $(response.status)');
                                            }
                                    return response.json();
                                    })
                    .then(data => {
                        resultsContainer = document.getElementById("car-container");
                        resultsContainer.innerHTML = '';
                        data.forEach(cars => {
                            // const listItem=document.createElement('li');
                            // listItem.innerHTML=cars.Model;
                            // var link = document.createElement("a");
                            // link.href = "/carinfo/"+cars.Model;
                            // carList.appendChild(listItem);
                            // console.log(listItem)
                            var link = document.createElement("a");
                            link.href = "viewcar/" + cars.id;

                            var card = document.createElement("div");
                            card.className = "car-card";

                            var image = document.createElement("img");
                            image.src = "cars/" + cars.Pic;

                            var cardetails = document.createElement("div");
                            cardetails.className = "car-details";

                            var cartitle = document.createElement("div");
                            cartitle.className = "car-title";
                            cartitle.innerHTML = cars.Make+' ' + cars.Model;

                            var carinfo = document.createElement("div");
                            carinfo.className = "car-info";

                            var modelYear = document.createElement("div");
                            modelYear.innerHTML = "Model Year:" + cars.Year;

                            var rentalprice = document.createElement("div");
                            rentalprice.className = "rental-price";
                            rentalprice.innerHTML = cars.Price + "/day";

                            carinfo.appendChild(modelYear);
                            carinfo.appendChild(rentalprice);
                            cardetails.appendChild(cartitle);
                            cardetails.appendChild(carinfo);
                            card.appendChild(image);
                            card.appendChild(cardetails);
                            link.appendChild(card);

                            resultsContainer.appendChild(link);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                    });
}