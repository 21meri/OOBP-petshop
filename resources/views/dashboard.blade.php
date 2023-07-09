<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<style>

#cityInput{
background-color: #FFFFFF;
  border: 1px solid #bf1c25;
  border-radius: 1px;
  
  color: #222222;
text-align:center;
font-size:20px;
font-weight:bold;
}

#button {
  background: #bf1c25;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

#button:hover,
#button:active {
  background-color: initial;
  background-position: 0 0;
  color: #bf1c25;
}

#button:active {
  opacity: .5;
}


#cityName
{
    color:white  
}


#inputContainer,#Para1
{
    margin: 3px;
padding:5px;

  border-radius: 8px;
  box-sizing: border-box;
  color: #222222;
text-align:center;
font-size:20px;
font-weight:bold;
}


#weatherContainer{
    position: absolute;
    top: 70%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    height: 300px;
    width: 1300px;
    border: 5px solid #cad0e6;    
    border-radius: 10px;
}

#iconsContainer{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    height: 240px;
    width: 1200px;    
    border: 5px solid #cad0e6;    
    border-radius: 10px;
}

.icons{
    display: inline-bock;
    float: left;
    height: 200px;
    width: 190px;
    margin: 20px;
    border: 5px solid #cad0e6;
    border-radius: 10px;
}

.image{
    height: 90px;
    width: 100%;
}

.imgClass{
    height: 90px;
    width: 100%;
}

.weather{
    margin: 5px;
    background-color: #cad0e6; 
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

.minValues{
    text-align: center;
    display: inline-block;
    border-radius: 5px;
    height: 25px;
    width: 85px;
    margin: 0;
    margin-bottom: 5px;
    margin-left: 5px;
}


.maxValues{
    text-align: center;
    display: inline-block;
    border-radius: 5px;
    height: 25px;
    width: 85px;
    margin: 0;
    margin-bottom: 5px;
    margin-left: 5px;
}

</style>
<body onload="DefaultScreen()">
    <center>
        <h1 id="Para1">Vremenska prognoza za narednih pet dana</h1>
        <p id="inputContainer">Unesi naziv grada: <input type="text" id="cityInput"></p>
        
        <button type="button" id="button" onclick="GetInfo()">Pretraži</button>        
        <h2 id="cityName">------</h2>
    </center>
    
    <div id = "weatherContainer">
        <div id="iconsContainer">    
            <div class = "icons">
                <p class="weather" id="day1"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img1"></div>
                <p class="minValues" id="day1Min">Loading...</p>
                <p class="maxValues" id="day1Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day2"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img2"></div>
                <p class="minValues" id="day2Min">Loading...</p>
                <p class="maxValues" id="day2Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day3"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img3"></div>
                <p class="minValues" id="day3Min">Loading...</p>
                <p class="maxValues" id="day3Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day4"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img4"></div>
                <p class="minValues" id="day4Min">Loading...</p>
                <p class="maxValues" id="day4Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day5"></p>
                <div class="image"><img src="dots.png" class="imgClass" id="img5"></div>
                <p class="minValues" id="day5Min">Loading...</p>
                <p class="maxValues" id="day5Max">Loading...</p>
            </div>
        </div>
    </div>



    <script>
function GetInfo() {

var newName = document.getElementById("cityInput");
var cityName = document.getElementById("cityName");
cityName.innerHTML = "--"+newName.value+"--";

fetch('https://api.openweathermap.org/data/2.5/forecast?q='+newName.value+'&appid=32ba0bfed592484379e51106cef3f204')
.then(response => response.json())
.then(data => {

//Getting the min and max values for each day
for(i = 0; i<5; i++){
    document.getElementById("day" + (i+1) + "Min").innerHTML = "Min: " + Number(data.list[i].main.temp_min - 273.15).toFixed(1)+ "°";
    //Number(1.3450001).toFixed(2); // 1.35
}

for(i = 0; i<5; i++){
    document.getElementById("day" + (i+1) + "Max").innerHTML = "Max: " + Number(data.list[i].main.temp_max - 273.15).toFixed(2) + "°";
}
//------------------------------------------------------------

//Getting Weather Icons
 for(i = 0; i<5; i++){
    document.getElementById("img" + (i+1)).src = "http://openweathermap.org/img/wn/"+
    data.list[i].weather[0].icon
    +".png";
}
//------------------------------------------------------------
console.log(data)


})

.catch(err => alert("Something Went Wrong: Try Checking Your Internet Coneciton"))
}

function DefaultScreen(){
document.getElementById("cityInput").defaultValue = "London";
GetInfo();
}


//Getting and displaying the text for the upcoming five days of the week
var d = new Date();
var weekday = ["Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota",];

//Function to get the correct integer for the index of the days array
function CheckDay(day){
if(day + d.getDay() > 6){
    return day + d.getDay() - 7;
}
else{
    return day + d.getDay();
}
}

for(i = 0; i<5; i++){
    document.getElementById("day" + (i+1)).innerHTML = weekday[CheckDay(i)];
}
//------------------------------------------------------------



document.getElementById("day1Min").innerHTML = Math.round(data.list[0].main.temp_min - 273.15, -2);
document.getElementById("day2Min").innerHTML = Math.round(data.list[1].main.temp_min - 273.15, -2);
document.getElementById("day3Min").innerHTML = Math.round(data.list[2].main.temp_min - 273.15, -2);
document.getElementById("day4Min").innerHTML = Math.round(data.list[3].main.temp_min - 273.15, -2);
document.getElementById("day5Min").innerHTML = Math.round(data.list[4].main.temp_min - 273.15, -2);

document.getElementById("day1Max").innerHTML = Math.round(data.list[0].main.temp_max - 273.15, -2);
document.getElementById("day2Max").innerHTML = Math.round(data.list[0].main.temp_max - 273.15, -2);
document.getElementById("day3Max").innerHTML = Math.round(data.list[0].main.temp_max - 273.15, -2);
document.getElementById("day4Max").innerHTML = Math.round(data.list[0].main.temp_max - 273.15, -2);
document.getElementById("day5Max").innerHTML = Math.round(data.list[0].main.temp_max - 273.15, -2);

document.getElementById("img1").src = "http://openweathermap.org/img/w/"+
data.list[0].weather[0].icon
+".png";
document.getElementById("img2").src = "http://openweathermap.org/img/w/"+
data.list[1].weather[0].icon
+".png";
document.getElementById("img3").src = "http://openweathermap.org/img/w/"+
data.list[2].weather[0].icon
+".png";
document.getElementById("img4").src = "http://openweathermap.org/img/w/"+
data.list[3].weather[0].icon
+".png";
document.getElementById("img5").src = "http://openweathermap.org/img/w/"+
data.list[4].weather[0].icon
+".png";


document.getElementById("day1").innerHTML = weekday[CheckDay(0)];
document.getElementById("day2").innerHTML = weekday[CheckDay(1)];
document.getElementById("day3").innerHTML = weekday[CheckDay(2)];
document.getElementById("day4").innerHTML = weekday[CheckDay(3)];
document.getElementById("day5").innerHTML = weekday[CheckDay(4)];

weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

    </script>
</body>
</html>
            </div>
        </div>
    </div>
</x-app-layout>
