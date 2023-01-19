let hour = document.getElementById("hour");
let minute = document.getElementById("minute");
let second = document.getElementById("second");
let pm_am = document.getElementById("pm-am");

function clock() {
  let date = new Date();
  let h = date.getHours();
  let m = date.getMinutes();
  let s = date.getSeconds();

  s < 10 ? (second.textContent = "0" + s) : (second.textContent = s);
  m < 10 ? (minute.textContent = "0" + m) : (minute.textContent = m);
  h < 10 ? (hour.textContent = "0" + h) : (hour.textContent = h);

  h <= 12 ? (pm_am.textContent = "AM") : ((pm_am.textContent = "PM") && (hour.textContent = "0" + (hour.textContent - 12)));
}

setInterval("clock()", 1000);

//2.yol:

/* 
const saat = setInterval(() => { //ekrana şuanın saatini ss:dd:ss şeklinde yazdırır.
    const a = new Date();
    const b = a.toLocaleTimeString();
    document.body.innerHTML = b;
}, 1000);
*/