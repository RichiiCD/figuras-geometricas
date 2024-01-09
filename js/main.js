

function loadShapeForm(shapeType) {
    let request = new XMLHttpRequest();
    request.open('GET', `./view/shape_form.php?shape=${shapeType}`)

    request.onload = () => {
        document.getElementById('shapes-container').innerHTML = request.responseText;
        document.getElementById('calculate-btn').addEventListener('click', () => {
            loadShapeCalculation()
        })
    }

    request.send()
}


function loadShapeCalculation() {
    let request = new XMLHttpRequest();
    request.open('POST', `./proc/calculate_shape.php`)

    let form = document.getElementById('shape-form')
    let formdata = new FormData(form);

    request.onload = () => {
        let data = JSON.parse(request.responseText);
        
        document.getElementById('area-result').textContent = "Area: " + data.area;
        document.getElementById('perimeter-result').textContent = "Perimeter: " + data.perimeter;
    }

    request.send(formdata)
}


window.onload = () => {
    let shapes = document.getElementsByClassName('shape');

    Array.prototype.forEach.call(shapes, function(element) {
        element.addEventListener('click', () => {
            loadShapeForm(element.getAttribute("name"))
        })
    });
}