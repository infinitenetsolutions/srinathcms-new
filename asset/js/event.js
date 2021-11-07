function change(name) {
    console.log(name)
    if (name == 'school') {
        document.getElementById('board').style.display = 'block'
        document.getElementById('affiliated').style.display = 'none'
        document.getElementById('board_name').style.display = 'none'
    } else {
        document.getElementById('affiliated').style.display = 'block'
        document.getElementById('board').style.display = 'none'
        document.getElementById('board_name').style.display = 'none'
    }
}

function change_board(board) {
    if (board == 'others') {
        document.getElementById('board_name').style.display = 'block'
    } else {
        document.getElementById('board_name').style.display = 'none'
    }
}

function change_event(event) {

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('all_data').innerHTML = xhttp.responseText;
    }
    xhttp.open("GET", "./asset/ajax/ajax.php?event=" + event, true);
    xhttp.send();

}