let sudah_absen = false;
let connected = false;
let data = 
    {
        tanggal   : null,
        waktu     : null,
        masuk     : true,
        nik       : null
};

 // Calling showTime function at every second
setInterval(showTime, 1000);

// Defining showTime funcion
function showTime() {
    // Getting current time and date
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
 
    hour =
        hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;
 
    let currentTime =
        hour +
        ":" +
        min +
        ":" +
        sec ;
 
    // Displaying the time
    document.getElementById(
        "clock"
    ).innerHTML = currentTime;
}
showTime();
function showDate() {
    // Getting current date
    let time = new Date();
    let year = time.getFullYear();
    let month = time.getMonth() + 1; // Adding 1 because getMonth() returns 0-11
    let date_num = time.getDate();
    let day = new Date();
    let day_on_a_week = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];

    // Adding leading zeros if needed
    month = month < 10 ? "0" + month : month;
    date_num = date_num < 10 ? "0" + date_num : date_num;

    let currentDate = day_on_a_week[day.getDay()] +", "+ date_num + "-" + month + "-" + year;

    // Displaying the date
    document.getElementById("date").innerHTML = currentDate;
}
showDate();
document.getElementById("absen").onclick = function() {
    if (sudah_absen) {
        failedSound.play();
        absen.style.backgroundColor = 'grey';
        absen.style.color = 'black';
    } else {
        sudah_absen = true;
        console.log(sudah_absen);
        clickSound.play();
        window.alert("anda sudah berhasil terabsen");
        absen.style.backgroundColor = 'grey';
        absen.style.color = 'black';

        let time_input = new Date();
        data.tanggal = time_input.getFullYear() + "-" + (time_input.getMonth() + 1) + "-" + time_input.getDate();
        data.waktu = time_input.getHours() + "-" + time_input.getMinutes() + "-" + time_input.getSeconds();
        data.nik = 666
        console.log(data);

        // Convert the variable to a JSON-formatted string
        const jsonData = JSON.stringify(data, null, 2);

        // Call the function to save the JSON data to a file
        saveJSONToFile(jsonData, 'data_absen.json');
    }
};

function saveJSONToFile(jsonData, fileName) {
    const dataUri = `data:application/json;charset=utf-8,${encodeURIComponent(jsonData)}`;
    const link = document.createElement('a');
    link.setAttribute('href', dataUri);
    link.setAttribute('download', fileName);

    // Trigger a click event to simulate downloading the file
    link.click();
}