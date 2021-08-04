var overlay = document.getElementById('overlay');

var addForm = document.getElementById('add-prisoner');

var BtnAddPrisoner = document.getElementById('add-prisoner-btn');

console.log('hello');

// creeate a request instance
let xmlHttp = new XMLHttpRequest();

let request = xmlHttp.open('get', 'http://127.0.0.1:8000/views/css/style.css');
//send the request by callind send function
xmlHttp.send();

console.log( xmlHttp.responseText );





console.log(xmlHttp.response );
// 

BtnAddPrisoner.addEventListener('click', (event)=> {
    event.preventDefault;
    showOverlay();
    showElement(addForm);
});

overlay.addEventListener('click', (event)=> {
    event.preventDefault;
    hideOverlay();
    hideElement(addForm);
});

function showOverlay() 
{
    overlay.style.zIndex = 5;
}

function hideOverlay()
{
    overlay.style.zIndex = -10;
}

function showElement(element)
{
    element.style.display = 'block';
}
function hideElement(element)
{
    element.style.display = 'none';
}