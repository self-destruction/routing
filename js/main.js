$("#load_button")[0].onclick = function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'source.json', true);
    xhr.send();
    xhr.onreadystatechange = function () {
        if (xhr.readyState != 4) {
            return;
        } else {
            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                var json = JSON.parse(xhr.responseText);
                console.log(json);
            }
        }

    }
};

$("#load_sport")[0].onclick = function() {
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {'index': 1, 'category': 'sport'},
        success: function (response) {
            var json = JSON.parse(response);
            console.log(json);
        }
    });
};