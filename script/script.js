var keyword = document.getElementById("keyword");
var searchButton = document.getElementById("search-button");
var container = document.getElementById("pet-list");

keyword.addEventListener("keyup", function() {

    // AJAX Object
    var xhr = new XMLHttpRequest();

    // AJAX Connection Check
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    // AJAX execution
    xhr.open('GET', "../ajax/adopt-page.php?keyword=" + keyword.value, true);
    xhr.send();
});

