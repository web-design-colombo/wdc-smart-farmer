<x-admin-layout>
    <style>
        #aa {
            padding-left: 20px;
            border-radius: 5px;
            background-color: #f2f2f2;
            margin-right: 10px
        }

        .new {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>



    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div
                    class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full mb-1">
                        <div class="mb-4">
                            <nav class="flex mb-5" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                    <li class="inline-flex items-center">
                                        <a href="#"
                                            class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                                </path>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">

                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                                aria-current="page">Products</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Create Vegetable
                            </h1>
                            </h1>
                        </div>

                    </div>
                </div>
                <div id="aa">
                    <form method="POST" action="{{ url('addvegetable') }}" enctype="multipart/form-data"
                        style="padding-top:10px; margin-right: 40px;">
                        @csrf

                        <label for="name">Name</label>
                        <input class="new" type="text" id="name" name="name" placeholder="Enter name">

                        <label for="image">Image</label>
                        <input class="new" type="file" id="image" name="image" placeholder="Image">


                        <label for="heading">Heading</label>
                        <input type="text" id="heading" name="heading" placeholder="Enter heading" class="new">

                        <label for="heading_description">Heading Description</label>
                        <textarea class="new" id="heading_description" name="heading_description" placeholder="Enter heading description"></textarea>

                        <div class="mb-4" id="faqs_container">
                            <div class="flex items-center mb-2" id="faq-1">
                                <input type="text" class="new" placeholder="Variety Name"
                                    name="faqs[0][question]">
                                <input type="text" class="new" placeholder="Variety" name="faqs[0][answer]"
                                    style="margin-left: 5px; margin-right:5px;">
                                <input type="file" class="new" name="faqs[0][image]">
                                <button type="button"
                                    class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                                    onclick="removeFAQ('faq-1')">Remove</button>
                            </div>
                        </div>
                        <button type="button"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                            id="add-faq" style="background-color: green">Add Variety</button>
                        <script>
                            let faqCount = 1;

                            document.getElementById('add-faq').addEventListener('click', function() {
                                faqCount++;
                                const faqFields = document.getElementById('faqs_container');
                                const newFaq = document.createElement('div');
                                newFaq.className = 'flex items-center mb-2';
                                newFaq.id = 'faq-' + faqCount;
                                newFaq.innerHTML = `
                                    <input type="text" class="new" placeholder="Variety Name" name="faqs[${faqCount - 1}][question]">
                                    <input type="text" class="new" placeholder="Variety" name="faqs[${faqCount - 1}][answer]" style="margin-left: 5px; margin-right:5px;">
                                    <input type="file" class="new" name="faqs[${faqCount - 1}][image]">
                                    <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeFAQ('faq-${faqCount}')">Remove</button>
                                `;
                                faqFields.appendChild(newFaq);
                            });

                            function removeFAQ(faqId) {
                                const faqToRemove = document.getElementById(faqId);
                                faqToRemove.parentNode.removeChild(faqToRemove);
                            }
                        </script>

                        <br><br>



                        <label for="climaticrequirements">Climatic Requirements</label>
                        <textarea class="new" id="climaticrequirements" name="climaticrequirements"
                            placeholder="Enter climatic requirements"></textarea>

                        <label for="areas">Areas</label>
                        <textarea class="new" id="areas" name="areas" placeholder="Enter areas"></textarea>


                        <label for="soil">Soil</label>
                        <input class="new" type="text" id="soil" name="soil" placeholder="Enter soil">

                        <label for="Seed_requirement">Seed Requirement</label>
                        <textarea class="new" id="Seed_requirement" name="Seed_requirement" placeholder="Enter seed requirement"></textarea>

                        <label for="Nursery_Management">Nursery Management</label>
                        <input class="new" type="text" id="Nursery_Management" name="Nursery_Management"
                            placeholder="Enter nursery management">

                        <label for="Land_preparation">Land Preparation</label>
                        <textarea class="new" id="Land_preparation" name="Land_preparation" placeholder="Enter land preparation"></textarea>

                        <label for="Planting">Planting</label>
                        <textarea class="new" id="Planting" name="Planting" placeholder="Enter planting"></textarea>

                        <label for="Spacing">Spacing</label>
                        <textarea class="new" id="Spacing" name="Spacing" placeholder="Enter spacing"></textarea>

                        <div class="mb-4" id="fertilizers_container">
                            <div class="flex items-center mb-2" id="fertilizer-1">
                                <input type="text" class="new" placeholder="Fertilizer Name"
                                    name="fertilizers[0][name]">
                                <input type="text" class="new" placeholder="tim for apply"
                                    name="fertilizers[0][tim]" style="margin-left: 5px; margin-right:5px;">
                                <input type="text" class="new" placeholder="Urea kg/ha"
                                    name="fertilizers[0][urea]" style="margin-left: 5px; margin-right:5px;">
                                <input type="text" class="new" placeholder="TSP kg/ha"
                                    name="fertilizers[0][tsp]" style="margin-left: 5px; margin-right:5px;">
                                <input type="text" class="new" placeholder="MOP kg/ha"
                                    name="fertilizers[0][mop]" style="margin-left: 5px; margin-right:5px;">
                                <button type="button"
                                    class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                                    onclick="removeFertilizer('fertilizer-1')">Remove</button>
                            </div>
                        </div>
                        <button type="button"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                            id="add-fertilizer" style="background-color: green">Add Fertilizer</button>

                        <script>
                            let fertilizerCount = 1;

                            document.getElementById('add-fertilizer').addEventListener('click', function() {
                                fertilizerCount++;
                                const fertilizerFields = document.getElementById('fertilizers_container');
                                const newFertilizer = document.createElement('div');
                                newFertilizer.className = 'flex items-center mb-2';
                                newFertilizer.id = 'fertilizer-' + fertilizerCount;
                                newFertilizer.innerHTML = `
        <input type="text" class="new" placeholder="Fertilizer Name" name="fertilizers[${fertilizerCount - 1}][name]">
        <input type="text" class="new" placeholder="tim for apply" name="fertilizers[${fertilizerCount - 1}][tim]" style="margin-left: 5px; margin-right:5px;">
        <input type="text" class="new" placeholder="Urea kg/ha" name="fertilizers[${fertilizerCount - 1}][urea]" style="margin-left: 5px; margin-right:5px;">
        <input type="text" class="new" placeholder="TSP kg/ha" name="fertilizers[${fertilizerCount - 1}][tsp]" style="margin-left: 5px; margin-right:5px;">
        <input type="text" class="new" placeholder="MOP kg/ha" name="fertilizers[${fertilizerCount - 1}][mop]" style="margin-left: 5px; margin-right:5px;">
        <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeFertilizer('fertilizer-${fertilizerCount}')">Remove</button>
    `;
                                fertilizerFields.appendChild(newFertilizer);
                            });

                            function removeFertilizer(fertilizerId) {
                                const fertilizerToRemove = document.getElementById(fertilizerId);
                                fertilizerToRemove.parentNode.removeChild(fertilizerToRemove);
                            }
                        </script>
<br>
<br>
                        <label for="Water_supply">Water Supply</label>
                        <textarea class="new" id="Water_supply" name="Water_supply" placeholder="Enter water supply"></textarea>

                        <label for="Weed_Control">Weed Control</label>
                        <textarea class="new" id="Weed_Control" name="Weed_Control" placeholder="Enter weed control"></textarea>

                        <div class="mb-4" id="pests_container">
                            <div class="flex items-center mb-2" id="pest-1">
                                <input type="text" class="new" placeholder="Pest Name"
                                    name="pests[0][question]">
                                <input type="text" class="new" placeholder="Pest Management"
                                    name="pests[0][answer]" style="margin-left: 5px; margin-right:5px;">
                                <input type="file" class="new" name="pests[0][image]">
                                <button type="button"
                                    class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                                    onclick="removePest('pest-1')">Remove</button>
                            </div>
                        </div>
                        <button type="button"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                            id="add-pest" style="background-color: green">Add Pest</button>
                        <script>
                            let pestCount = 1;

                            document.getElementById('add-pest').addEventListener('click', function() {
                                pestCount++;
                                const pestFields = document.getElementById('pests_container');
                                const newPest = document.createElement('div');
                                newPest.className = 'flex items-center mb-2';
                                newPest.id = 'pest-' + pestCount;
                                newPest.innerHTML = `
                                    <input type="text" class="new" placeholder="Pest Name" name="pests[${pestCount - 1}][question]">
                                    <input type="text" class="new" placeholder="Pest Management" name="pests[${pestCount - 1}][answer]" style="margin-left: 5px; margin-right:5px;">
                                    <input type="file" class="new" name="pests[${pestCount - 1}][image]">
                                    <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removePest('pest-${pestCount}')">Remove</button>
                                `;
                                pestFields.appendChild(newPest);
                            });

                            function removePest(pestId) {
                                const pestToRemove = document.getElementById(pestId);
                                pestToRemove.parentNode.removeChild(pestToRemove);
                            }
                        </script>


                        <div class="mb-4" id="disease_container">
                            <div class="flex items-center mb-2" id="disease-1">
                                <input type="text" class="new" placeholder="Disease Name"
                                    name="diseases[0][name]">
                                <textarea class="new" placeholder="Disease Management" name="diseases[0][management]"
                                    style="margin-left: 5px; margin-right:5px;"></textarea>
                                <input type="file" class="new" name="diseases[0][image]">
                                <button type="button"
                                    class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline"
                                    onclick="removeDisease('disease-1')">Remove</button>
                            </div>
                        </div>
                        <button type="button"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mt-2 rounded-sm focus:outline-none focus:shadow-outline"
                            id="add-disease" style="background-color: green">Add Disease</button>


                        <script>
                            let diseaseCount = 1;

                            document.getElementById('add-disease').addEventListener('click', function() {
                                diseaseCount++;
                                const diseaseFields = document.getElementById('disease_container');
                                const newDisease = document.createElement('div');
                                newDisease.className = 'flex items-center mb-2';
                                newDisease.id = 'disease-' + diseaseCount;
                                newDisease.innerHTML = `
            <input type="text" class="new" placeholder="Disease Name" name="diseases[${diseaseCount - 1}][name]">
            <textarea class="new" placeholder="Disease Management" name="diseases[${diseaseCount - 1}][management]" style="margin-left: 5px; margin-right:5px;"></textarea>
            <input type="file" class="new" name="diseases[${diseaseCount - 1}][image]">
            <button type="button" class="ml-2 bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-sm focus:outline-none focus:shadow-outline" onclick="removeDisease('disease-${diseaseCount}')">Remove</button>
        `;
                                diseaseFields.appendChild(newDisease);
                            });

                            function removeDisease(diseaseId) {
                                const diseaseToRemove = document.getElementById(diseaseId);
                                diseaseToRemove.parentNode.removeChild(diseaseToRemove);
                            }
                        </script>

                        <label for="Harvesting">Harvesting</label>
                        <textarea class="new" id="Harvesting" name="Harvesting" placeholder="Enter harvesting"></textarea>

                        <label for="Yield">Yield</label>
                        <textarea class="new" id="Yield" name="Yield" placeholder="Enter yield"></textarea>

                        <input type="submit" value="Submit">
                    </form>

                </div>



                </html>



</x-admin-layout>
