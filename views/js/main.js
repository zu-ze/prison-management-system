var previousTab = document.getElementById('add-prisoner-record');;

function showTab(id)
{
    console.log('previous-tab: '+ previousTab);
    if(previousTab != null)
        previousTab.style.display = 'none';

    var currentTab = document.getElementById(id);
    console.log('current-tab: ' + currentTab);
    currentTab.style.display = 'block';
    previousTab = currentTab;
}
