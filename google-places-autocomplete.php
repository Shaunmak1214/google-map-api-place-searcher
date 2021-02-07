<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Api Serach</title>
    <style>

        body{

            height: 100vh;
            display: column;
            justify-content: center;
            align-items: center;

        }

        .wuwu{

            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .searcher{

            height: 100%;
            width:100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;

        }

        textarea:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus,
        select:focus {

            border-color: #FFB802;
            box-shadow: 0 1px 1px #FFB802 inset, 0 0 8px #FFB802;
            outline: 0 none;

        }
    
        #autocomplete{

            width: 80%;
            height : 50px;
            border: none;
            font-size: 13px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.13);
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 4px;

        }

        .pac-container{
      
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.13);
            margin-top: 10px;
            border-radius: 8px;
            padding: 10px 10px;
        
        }

        .hdpi .pac-icon{

            background: url(https://res.cloudinary.com/flashlives/image/upload/v1612690193/uobouzjmpgbykkjyc0pl.svg);
            height: 21px;
            width: 21px;
            background-size: 20px 20px;
            background-clip: border-box;
            background-attachment: inherit;
            background-repeat: no-repeat;

        }

        .pac-item{

            padding: 10px 10px;
            border: none

        }

    </style>
</head>
<body>
    <div class="wuwu">Build with love ❤️Shaun❤️</div>
    <div class="searcher">
        <p class="geometry">Geometry of selected : </p>
        <span>Latitude: <span class="lat"></span></span> <span>Longtitude: <span class="lng"></span></span>
        <br>
        <input type="text" id="autocomplete" placeholder="Enter a place" style="width: 400px;">
    </div>
</body>

<script>

    let autocomplete;

    function initAutocomplete(){

        autocomplete = new google.maps.places.Autocomplete(

            document.getElementById('autocomplete'),
            {

                //restrict google services to only these 3 is provided, less payout
                fields: ['place_id','geometry','name']

            });

        autocomplete.addListener('place_changed', onPlaceChanged);

    }

    function onPlaceChanged(){

        var place = autocomplete.getPlace();

        document.querySelector(".lat").innerHTML = place.geometry.location.lat();
        document.querySelector(".lng").innerHTML = place.geometry.location.lng();

        console.log(place.geometry.location.lat());
        console.log(place.geometry.location.lng());

    }

    const API_KEY = process.env.API_KEY;
    
</script>

<script async src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initAutocomplete&libraries=places&v=weekly"></script>

</html>