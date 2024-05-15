<x-admin-layout>
    <form method="POST" action="{{ url('addvegetable') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5 mb-20">
            <div class="bg-white shadow-md rounded-lg p-6">

                <div class="mb-4">
                    <label for="userName" class="block text-sm font-medium text-gray-700">Vegetable Name</label>
                    <input type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="userName" name="name" placeholder="Enter your name">
                </div>

                {{-- add heading --}}
                <div class="mb-4">
                    <label for="userName" class="block text-sm font-medium text-gray-700">Heading</label>
                    <input type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="userName" name="heading" placeholder="Enter Heading">
                </div>


                <div class="mb-4">
                    <label for="userName" class="block text-sm font-medium text-gray-700">Heading Description</label>
                    <input type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="userName" name="heading_description" placeholder="Enter Heading">
                </div>


                <div class="mb-4">
                    <label for="userName" class="block text-sm font-medium text-gray-700">First Description</label>
                    <input type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="userName" name="first_description" placeholder="Enter Heading">
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">First Image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="first_image"
                        placeholder="Enter your image">
                </div>



                {{-- add image --}}
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">variety_image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="variety_image"
                        placeholder="Enter your variety_image">
                </div>

                {{-- variety_description --}}
                <div class="mb-4" id="variety-description-container">
                    <div class="flex items-center mb-2" id="variety-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Variety Name" name="variety_description[0][variety_name]">
                        <textarea
                            class="ml-2 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Variety Description" name="variety_description[0][variety_description]" rows="3"></textarea>
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeVariety('variety-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-variety">Add Variety</button>
                <script>
                    let varietyCount = 1;

                    document.getElementById('add-variety').addEventListener('click', function() {
                        varietyCount++;
                        const varietyFields = document.getElementById('variety-description-container');
                        const newVariety = document.createElement('div');
                        newVariety.className = 'flex items-center mb-2';
                        newVariety.id = 'variety-' + varietyCount;
                        newVariety.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Variety Name" name="varieties[${varietyCount - 1}][variety_name]">
            <textarea class="ml-2 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Variety Description" name="varieties[${varietyCount - 1}][variety_description]" rows="3"></textarea>
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeVariety('variety-${varietyCount}')">Remove</button>
        `;
                        varietyFields.appendChild(newVariety);
                    });

                    function removeVariety(varietyId) {
                        const varietyToRemove = document.getElementById(varietyId);
                        varietyToRemove.parentNode.removeChild(varietyToRemove);
                    }
                </script>



                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">soil_image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="soil_image"
                        placeholder="Enter your variety_image">
                </div>


                {{-- soil_preparation --}}
                <div class="mb-4" id="soil-fields">
                    <div class="flex items-center mb-2" id="vegetable-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Soil Name" name="soil_preparation[0][soil_name]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Description" name="soil_preparation[0][soil_description]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeSoil('vegetable-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-soil">Add Soil</button>
                <script>
                    let soilCount = 1;

                    document.getElementById('add-soil').addEventListener('click', function() {
                        soilCount++;
                        const soilFields = document.getElementById('soil-fields');
                        const newSoil = document.createElement('div');
                        newSoil.className = 'flex items-center mb-2';
                        newSoil.id = 'vegetable-' + soilCount;
                        newSoil.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Soil Name" name="soils[${soilCount - 1}][soil_name]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Description" name="soils[${soilCount - 1}][soil_description]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeSoil('vegetable-${soilCount}')">Remove</button>
        `;
                        soilFields.appendChild(newSoil);
                    });

                    function removeSoil(soilId) {
                        const soilToRemove = document.getElementById(soilId);
                        soilToRemove.parentNode.removeChild(soilToRemove);
                    }
                </script>


                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">planting_image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="planting_image"
                        placeholder="Enter your planting_image">
                </div>



                {{-- planting_techniques --}}
                <div class="mb-4" id="planting-techniques">
                    <div class="flex items-center mb-2" id="technique-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Technique Name" name="planting_techniques[0][technique_name]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Description" name="planting_techniques[0][technique_description]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeTechnique('technique-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-technique">Add Planting Technique</button>
                <script>
                    let techniqueCount = 1;

                    document.getElementById('add-technique').addEventListener('click', function() {
                        techniqueCount++;
                        const techniqueFields = document.getElementById('planting-techniques');
                        const newTechnique = document.createElement('div');
                        newTechnique.className = 'flex items-center mb-2';
                        newTechnique.id = 'technique-' + techniqueCount;
                        newTechnique.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Technique Name" name="plantingtechniques[${techniqueCount - 1}][technique_name]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Description" name="plantingtechniques[${techniqueCount - 1}][technique_description]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeTechnique('technique-${techniqueCount}')">Remove</button>
        `;
                        techniqueFields.appendChild(newTechnique);
                    });

                    function removeTechnique(techniqueId) {
                        const techniqueToRemove = document.getElementById(techniqueId);
                        techniqueToRemove.parentNode.removeChild(techniqueToRemove);
                    }
                </script>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">care_image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="care_image"
                        placeholder="Enter your image">
                </div>

                <div class="mb-4">
                    <label for="city"
                        class="block text-sm font-medium text-gray-700">watering_practices_dis</label>
                    <input type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="city" name="watering_practices_dis" placeholder="watering_practices_dis">
                </div>

                {{-- <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">care_image</label>
                    <input type="file" class="mt-1 block w-full" id="image" name="careimage"
                        placeholder="Enter your care_image">
                </div>


                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">watering_practices_dis</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="watering_practices_dis_discription" rows="3"
                        placeholder="Enter watering_practices_dis"></textarea>
                </div> --}}



                {{-- watering_practices --}}
                <div class="mb-4" id="watering_practices">
                    <div class="flex items-center mb-2" id="technique-1xx">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Technique Name" name="watering_practices[0][wateringpractices_name]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Description" name="watering_practices[0][wateringpractices_description]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeTechniquexxx('technique-1xx')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-technique-watering">Add Watering Technique</button>
                <script>
                    let wateringCount = 1;

                    document.getElementById('add-technique-watering').addEventListener('click', function() {
                        wateringCount++;
                        const wateringFields = document.getElementById('watering_practices');
                        const newWatering = document.createElement('div');
                        newWatering.className = 'flex items-center mb-2';
                        newWatering.id = 'technique-' + wateringCount;
                        newWatering.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Technique Name" name="wateringpractices[${wateringCount - 1}][wateringpractices_name]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Description" name="wateringpractices[${wateringCount - 1}][wateringpractices_description]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeTechniquexxx('technique-${wateringCount}')">Remove</button>
        `;
                        wateringFields.appendChild(newWatering);
                    });

                    function removeTechniquexxx(techniqueId) {
                        const techniqueToRemove = document.getElementById(techniqueId);
                        techniqueToRemove.parentNode.removeChild(techniqueToRemove);
                    }
                </script>


                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">fertilization_strategy_dis</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="fertilization_strategy_dis" rows="3" placeholder="Enter description"></textarea>
                </div>

                {{-- fertilization_strategy --}}
                <div class="mb-4" id="fertilization_strategy_container">
                    <div class="flex items-center mb-2" id="technique-1xxaa">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Technique Name" name="fertilization_strategy[0][fertilizationstrategy_name]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Description"
                            name="fertilization_strategy[0][fertilizationstrategy_description]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeTechniquexxxnn('technique-1xxaa')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-fertilization_strategy">Add Fertilization Strategy</button>
                <script>
                    let fertilizationCount = 1;

                    document.getElementById('add-fertilization_strategy').addEventListener('click', function() {
                        fertilizationCount++;
                        const fertilizationFields = document.getElementById('fertilization_strategy_container');
                        const newFertilization = document.createElement('div');
                        newFertilization.className = 'flex items-center mb-2';
                        newFertilization.id = 'technique-' + fertilizationCount;
                        newFertilization.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Technique Name" name="fertilizationstrategy[${fertilizationCount - 1}][fertilizationstrategy_name]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Description" name="fertilizationstrategy[${fertilizationCount - 1}][fertilizationstrategy_description]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeTechniquexxxnn('technique-${fertilizationCount}')">Remove</button>
        `;
                        fertilizationFields.appendChild(newFertilization);
                    });

                    function removeTechniquexxxnn(techniqueId) {
                        const techniqueToRemove = document.getElementById(techniqueId);
                        techniqueToRemove.parentNode.removeChild(techniqueToRemove);
                    }
                </script>



                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">weed_management_dis</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="weed_management_dis" rows="3" placeholder="Enter weed_management_dis"></textarea>
                </div>

                {{-- weed_management --}}
                <div class="mb-4" id="weed_management_container">
                    <div class="flex items-center mb-2" id="technique-1weed">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Technique Name" name="weed_management[0][weedmanagement_name]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Description" name="weed_management[0][weedmanagement_description]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeTechniqueWeed('technique-1weed')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-weed_management">Add Weed Management Technique</button>
                <script>
                    let weedCount = 1;

                    document.getElementById('add-weed_management').addEventListener('click', function() {
                        weedCount++;
                        const weedFields = document.getElementById('weed_management_container');
                        const newWeed = document.createElement('div');
                        newWeed.className = 'flex items-center mb-2';
                        newWeed.id = 'technique-' + weedCount;
                        newWeed.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Technique Name" name="weedmanagement[${weedCount - 1}][weedmanagement_name]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Description" name="weedmanagement[${weedCount - 1}][weedmanagement_description]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeTechniqueWeed('technique-${weedCount}')">Remove</button>
        `;
                        weedFields.appendChild(newWeed);
                    });

                    function removeTechniqueWeed(techniqueId) {
                        const techniqueToRemove = document.getElementById(techniqueId);
                        techniqueToRemove.parentNode.removeChild(techniqueToRemove);
                    }
                </script>


                {{-- managing_pests_and_diseases --}}
                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">managing_pests_and_diseases</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="managing_pests_and_diseases" rows="3"
                        placeholder="Enter managing_pests_and_diseases"></textarea>
                </div>

                {{--  harvesting_discription --}}

                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">harvesting_discription</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="harvesting_discription" rows="3"
                        placeholder="Enter harvesting_discription"></textarea>
                </div>
                {{-- harvesting_table --}}
                <div class="mb-4" id="harvesting_table_container">
                    <div class="flex items-center mb-2" id="harvest-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Aspect" name="harvesting_table[0][aspect]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Detail" name="harvesting_table[0][detail]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Importance" name="harvesting_table[0][importance]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeHarvest('harvest-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-harvest">Add Harvesting Technique</button>
                <script>
                    let harvestCount = 1;

                    document.getElementById('add-harvest').addEventListener('click', function() {
                        harvestCount++;
                        const harvestFields = document.getElementById('harvesting_table_container');
                        const newHarvest = document.createElement('div');
                        newHarvest.className = 'flex items-center mb-2';
                        newHarvest.id = 'harvest-' + harvestCount;
                        newHarvest.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Aspect" name="harvestingtable[${harvestCount - 1}][aspect]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Detail" name="harvestingtable[${harvestCount - 1}][detail]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Importance" name="harvestingtable[${harvestCount - 1}][importance]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeHarvest('harvest-${harvestCount}')">Remove</button>
        `;
                        harvestFields.appendChild(newHarvest);
                    });

                    function removeHarvest(harvestId) {
                        const harvestToRemove = document.getElementById(harvestId);
                        harvestToRemove.parentNode.removeChild(harvestToRemove);
                    }
                </script>


                {{-- faqs --}}
                <div class="mb-4" id="faqs_container">
                    <div class="flex items-center mb-2" id="faq-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Question" name="faqs[0][question]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Answer" name="faqs[0][answer]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeFAQ('faq-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-faq">Add FAQ</button>
                <script>
                    let faqCount = 1;

                    document.getElementById('add-faq').addEventListener('click', function() {
                        faqCount++;
                        const faqFields = document.getElementById('faqs_container');
                        const newFaq = document.createElement('div');
                        newFaq.className = 'flex items-center mb-2';
                        newFaq.id = 'faq-' + faqCount;
                        newFaq.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Question" name="faqs[${faqCount - 1}][question]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Answer" name="faqs[${faqCount - 1}][answer]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeFAQ('faq-${faqCount}')">Remove</button>
        `;
                        faqFields.appendChild(newFaq);
                    });

                    function removeFAQ(faqId) {
                        const faqToRemove = document.getElementById(faqId);
                        faqToRemove.parentNode.removeChild(faqToRemove);
                    }
                </script>



                {{-- common_mistakestoavoid --}}
                <div class="mb-4" id="common_mistakes_container">
                    <div class="flex items-center mb-2" id="mistake-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Mistake Description" name="common_mistakestoavoid[0][description]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Solution" name="common_mistakestoavoid[0][solution]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeMistake('mistake-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-mistake">Add Common Mistake to Avoid</button>
                <script>
                    let mistakeCount = 1;

                    document.getElementById('add-mistake').addEventListener('click', function() {
                        mistakeCount++;
                        const mistakeFields = document.getElementById('common_mistakes_container');
                        const newMistake = document.createElement('div');
                        newMistake.className = 'flex items-center mb-2';
                        newMistake.id = 'mistake-' + mistakeCount;
                        newMistake.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Mistake Description" name="common_mistakes[${mistakeCount - 1}][description]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Solution" name="common_mistakes[${mistakeCount - 1}][solution]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeMistake('mistake-${mistakeCount}')">Remove</button>
        `;
                        mistakeFields.appendChild(newMistake);
                    });

                    function removeMistake(mistakeId) {
                        const mistakeToRemove = document.getElementById(mistakeId);
                        mistakeToRemove.parentNode.removeChild(mistakeToRemove);
                    }
                </script>


                {{-- advanced_tips_for_maximizing_yield --}}
                <div class="mb-4" id="advanced_tips_container">
                    <div class="flex items-center mb-2" id="tip-1">
                        <input type="text"
                            class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Tip Description" name="advanced_tips_for_maximizing_yield[0][description]">
                        <input type="text"
                            class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                            placeholder="Action" name="advanced_tips_for_maximizing_yield[0][action]">
                        <button type="button"
                            class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                            onclick="removeTip('tip-1')">Remove</button>
                    </div>
                </div>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                    id="add-tip">Add Advanced Tip for Maximizing Yield</button>
                <script>
                    let tipCount = 1;

                    document.getElementById('add-tip').addEventListener('click', function() {
                        tipCount++;
                        const tipFields = document.getElementById('advanced_tips_container');
                        const newTip = document.createElement('div');
                        newTip.className = 'flex items-center mb-2';
                        newTip.id = 'tip-' + tipCount;
                        newTip.innerHTML = `
            <input type="text" class="mt-1 flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Tip Description" name="advanced_tips[${tipCount - 1}][description]">
            <input type="text" class="ml-2 w-20 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" placeholder="Action" name="advanced_tips[${tipCount - 1}][action]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeTip('tip-${tipCount}')">Remove</button>
        `;
                        tipFields.appendChild(newTip);
                    });

                    function removeTip(tipId) {
                        const tipToRemove = document.getElementById(tipId);
                        tipToRemove.parentNode.removeChild(tipToRemove);
                    }
                </script>



                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                        id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                </div>


                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-sm focus:outline-none focus:shadow-outline">Submit</button>

            </div>
        </div>

    </form>
</x-admin-layout>
