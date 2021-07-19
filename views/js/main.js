var overlay = document.getElementById('overlay');

var addForm = document.getElementById('add-prisoner');

var BtnAddPrisoner = document.getElementById('add-prisoner-btn');

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