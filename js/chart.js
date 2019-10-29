var context = document.getElementsByClassName("bar-chart");

let regionals = [];
let average = [];

showGrafh();
async function showGrafh() {
    let data = await getData().then(
            data => {
                if (data.status == "success") {
                    console.log(data);
                    for (var i = 0; i < data.regionals.length; i++) {
                        regionals.push(data.regionals[i].description);
                        average.push(data.regionals[i].average);
                    }
                    var chartGrafh = new Chart(context, {
                        type: 'bar',
                        data: {
                            labels: regionals,
                            datasets: [{
                                    label: "Coeficiente",
                                    data: average,
                                    backgroundColor: 'rgba(77, 166, 253, 1)'
                                }]
                        }
                    });
                } else {
                    document.write("ERROR API");
                }
            }
    );
}










