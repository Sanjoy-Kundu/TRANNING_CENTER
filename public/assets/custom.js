document.getElementById('status').innerText = window.navigator.onLine? 'online' : 'offline';

window.addEventListener('online', function(){
    document.getElementById('status').innerText = "Online";
});

window.addEventListener('offline', function(){
    document.getElementById('status').innerText = 'Offline';
})
