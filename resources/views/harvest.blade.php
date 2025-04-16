<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Harvest Planner</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
<div class="container bg-white p-4 rounded shadow-sm" style="max-width: 400px;">
    <h1 class="text-center mb-4">Harvest Planner</h1>

    <!-- Dropdown for selecting vegetable -->
    <div class="mb-3">
        <label for="cropType" class="form-label">Select Crop:</label>
        <select id="cropType" class="form-select">
            <option value="Tomato">Tomato</option>
            <option value="Potato">Potato</option>
            <option value="Carrot">Carrot</option>
            <option value="Spinach">Spinach</option>
            <option value="Cabbage">Cabbage</option>
        </select>
    </div>

    <!-- Dropdown for selecting city -->
    <div class="mb-3">
        <label for="location" class="form-label">Select City:</label>
        <select id="location" class="form-select">
            <option value="Colombo">Colombo</option>
            <option value="Kandy">Kandy</option>
            <option value="Galle">Galle</option>
            <option value="Matara">Matara</option>
            <option value="Jaffna">Jaffna</option>
        </select>
    </div>

    <!-- Input for Land Size -->
    <div class="mb-3">
        <label for="landSize" class="form-label">Land Size (in hectares):</label>
        <input type="number" id="landSize" class="form-control" placeholder="Enter land size" required />
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-success" onclick="calculateHarvestData()">Calculate Data</button>
    </div>

    <!-- Display weather and crop info -->
    <div id="weatherDisplay" class="mt-4"></div>
    <div id="cropDisplay" class="mt-4"></div>
</div>

<script>
    // Hardcoded weather data based on Sri Lanka cities
    const weatherData = {
        Colombo: {
            temperature: 28,
            weather_condition: "Partly Cloudy",
            humidity: 80,
            wind_speed: 5
        },
        Kandy: {
            temperature: 24,
            weather_condition: "Cloudy",
            humidity: 78,
            wind_speed: 3
        },
        Galle: {
            temperature: 30,
            weather_condition: "Sunny",
            humidity: 85,
            wind_speed: 6
        },
        Matara: {
            temperature: 29,
            weather_condition: "Sunny",
            humidity: 75,
            wind_speed: 4
        },
        Jaffna: {
            temperature: 32,
            weather_condition: "Clear",
            humidity: 70,
            wind_speed: 7
        }
    };

    // Function to calculate and display harvest data
    function calculateHarvestData() {
        const location = document.getElementById("location").value;
        const cropType = document.getElementById("cropType").value;
        const landSize = document.getElementById("landSize").value;

        if (!location || !cropType || !landSize) {
            alert("Please fill all fields: Location, Crop Type, and Land Size.");
            return;
        }

        // Fetch weather data for the selected location
        const weather = weatherData[location];
        if (!weather) {
            alert("Invalid location data.");
            return;
        }

        // Display weather info
        const weatherDisplay = document.getElementById("weatherDisplay");
        weatherDisplay.innerHTML = `
            <h3 class="mt-3">Weather Info for ${location}:</h3>
            <p>Temperature: ${weather.temperature} °C</p>
            <p>Condition: ${weather.weather_condition}</p>
            <p>Humidity: ${weather.humidity} %</p>
            <p>Wind Speed: ${weather.wind_speed} m/s</p>
        `;

        // Display crop info (this can be expanded as needed)
        const cropDisplay = document.getElementById("cropDisplay");
        cropDisplay.innerHTML = `
            <h3 class="mt-3">Crop Info for ${cropType}:</h3>
            <p>Details about ${cropType} will be displayed here. You can further add crop-specific info like planting instructions, care, and expected yield.</p>
            <p>For ${landSize} hectares, you can expect an estimated yield based on weather and crop type. (This calculation is simplified in this demo.)</p>
        `;
    }
</script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
