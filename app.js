function countdown(){
    var now = new Date();
    var eventDate = new Date(now.getFullYear(), 11, 25);

    var currentTime = now.getTime();
    var eventTime = eventDate.getTime();

    var remTime = eventTime - currentTime;

    var s = Math.floor(remTime / 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);

    h %= 24;
    m %= 60;
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    document.getElementById('dias').textContent = d;
    document.getElementById('dias').innerText = d;

    document.getElementById('horas').textContent = h;
    document.getElementById('minutos').textContent = m;
    document.getElementById('segundos').textContent = s;

    setTimeout(countdown, 1000);
    }

    countdown();