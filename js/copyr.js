var client = new XMLHttpRequest();
client.open('GET', '/data/copy.txt');
client.onreadystatechange = function () {
    document.getElementById('copy').innerHTML = client.responseText;
}
client.send();