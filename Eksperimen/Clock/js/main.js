let section = document.querySelector("section"),
icons = document.querySelector(".icons");

icons.onclick = ()=>{
    section.classList.toggle("dark");
}

// Creating Function

setInterval(()=>{

    let date = new Date(),
    hour = date.getHours(),
    min = date.getMinutes(),
    sec = date.getSeconds();

    let d;
    d = hour < 24 ? "PM" : "AM"; //if hour smaller 24 than its value will be PM else its value be AM
    hour = hour > 24 ? hour - 24 : hour;
    hour = hour == 0 ? hour = 24 : hour;

    //adding 0 to all the value if they will less than 10
    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    document.querySelector(".hour_num").innerText = hour;
    document.querySelector(".min_num").innerText = min;
    document.querySelector(".sec_num").innerText = sec;
    document.querySelector(".am_pm").innerText = d;

},1000); //1000 milliseconds = 1s