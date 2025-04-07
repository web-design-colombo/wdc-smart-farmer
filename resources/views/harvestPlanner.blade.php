


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Harvest Planner</title>
        <link rel="stylesheet" href="fyp.css" />
    </head>
    <body>
    <div class="container">
        <h1>Harvest Planner</h1>

        <label>
            Field Size (in hectares):
            <input type="number" id="fieldSize" placeholder="Enter field size" />
        </label>

        <label>
            Crop Type:
            <input type="text" id="cropType" placeholder="Enter crop type" />
        </label>

        <div class="button-row">
            <button onclick="getWeatherData()">Get Weather Data</button>
            <button onclick="getCropInfo()">Get Crop Info</button>
            <button onclick="saveHarvestData()">Save Harvest Data</button>
        </div>

        <div id="weatherDisplay" class="info-block"></div>
        <div id="cropDisplay" class="info-block"></div>
    </div>

    <script src="script.js"></script>
    </body>
    </html>


    <style>

        body {
            font-family: 'Helvetica Neue', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.esbs.co.uk%2Fwhat-is-an-agricultural-tie%2F&psig=AOvVaw1y4uRjPwrAf8-zen90VBoL&ust=1739536271915000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIjal9PSwIsDFQAAAAAdAAAAABAE') ;
            margin: 0;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .container {
            background-image:'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.esbs.co.uk%2Fwhat-is-an-agricultural-tie%2F&psig=AOvVaw1y4uRjPwrAf8-zen90VBoL&ust=1739536271915000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIjal9PSwIsDFQAAAAAdAAAAABAE';
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            transition: all 0.3s ease-in-out;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .container:hover {
            box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-5px); }
        }

        input {
            width: calc(100% - 20px);
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ced4da;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #28a745;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        #weatherInfo, #cropInfo {
            margin-top: 20px;
            padding: 15px;
            background: #fff3cd;
            border-left: 6px solid #ffa502;
            text-align: left;
            border-radius: 6px;
            font-size: 14px;
            line-height: 1.5;
            animation: fadeIn 1.5s ease-in-out;
        }
    </style>


    <script>

        let weatherData = null;
        let cropData = null;

        function getWeatherData() {
            const fieldSize = document.getElementById("fieldSize").value;
            const cropType = document.getElementById("cropType").value;

            if (!fieldSize || !cropType) {
                alert("Please fill in both fields.");
                return;
            }

            // Dummy Weather Data (replace with real API call)
            weatherData = {
                main: { temp: 295.15 },
                weather: [{ description: "clear sky" }],
            };

            const weatherDisplay = document.getElementById("weatherDisplay");
            weatherDisplay.innerHTML = `
    <h3>Weather Info:</h3>
    <p>Temperature: ${weatherData.main.temp} °K</p>
    <p>Condition: ${weatherData.weather[0].description}</p>
  `;
        }

        function getCropInfo() {
            const cropType = document.getElementById("cropType").value;

            if (!cropType) {
                alert("Please enter a crop type.");
                return;
            }

            // Dummy Crop Info (replace with real API call)
            cropData = {
                name: cropType,
                planting: "Plant in early spring.",
                yield: "4 tons/ha",
                soilType: "Loamy",
                climate: "Temperate",
            };

            const cropDisplay = document.getElementById("cropDisplay");
            cropDisplay.innerHTML = `
    <h3>Crop Info:</h3>
    <p><strong>Name:</strong> ${cropData.name}</p>
    <p><strong>Planting:</strong> ${cropData.planting}</p>
    <p><strong>Yield:</strong> ${cropData.yield}</p>
    <p><strong>Soil Type:</strong> ${cropData.soilType}</p>
    <p><strong>Climate:</strong> ${cropData.climate}</p>
  `;
        }

        function saveHarvestData() {
            const fieldSize = document.getElementById("fieldSize").value;
            const cropType = document.getElementById("cropType").value;

            if (!fieldSize || !cropType || !weatherData || !cropData) {
                alert("Please complete all steps before saving.");
                return;
            }

            const payload = {
                fieldSize,
                cropType,
                temperature: weatherData.main.temp,
                weather: weatherData.weather[0].description,
                cropName: cropData.name,
                planting: cropData.planting,
                yield: cropData.yield,
                soilType: cropData.soilType,
                climate: cropData.climate,
            };

            fetch("save_harvest.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload),
            })
                .then((res) => res.json())
                .then((data) => {
                    alert(data.message);
                })
                .catch((err) => {
                    console.error("Error saving data:", err);
                    alert("Something went wrong while saving.");
                });
        }
    </script>
