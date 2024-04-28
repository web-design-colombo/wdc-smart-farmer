<x-app-layout>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Create Your Advertisement</h2>
                        <ul class="bread-list">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Create Your Advertisement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="margin-bottom: 20px">
        <div class="card">
            <div class="card-header bg-green text-white">
                <h2 class="mb-0">Vegetable Buyer's Form</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="userName">User Name</label>
                        <input type="text" class="form-control" id="userName" name="user_name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="userNIC">User NIC</label>
                        <input type="text" class="form-control" id="userNIC" name="user_nic" placeholder="Enter your NIC">
                    </div>
                    {{-- add city --}}
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
                    </div>
                    {{-- add image  --}}
                    <div class="form-group">
                        <label for="image">Shop Image or Your Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter your image">
                    </div>

                    <div class="form-group">
                        <label for="shopName">Shop Name</label>
                        <input type="text" class="form-control" id="shopName" name="shop_name" placeholder="Enter shop name">
                    </div>
                    <div class="form-group">
                        <label for="shopAddress">Shop Address</label>
                        <input type="text" class="form-control" id="shopAddress" name="shop_address" placeholder="Enter shop address">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="Enter phone number">
                    </div>
                    <div class="form-group" id="vegetable-fields">
                        <div class="form-row mb-2" id="vegetable-1">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Vegetable Name" name="vegetables[0][vegetable_name]">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Price(1 Kg)" name="vegetables[0][vegetable_price]">
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger btn-sm remove-vegetable" onclick="removeVegetable('vegetable-1')">Remove</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm mt-2" id="add-vegetable">Add Vegetable</button>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let vegetableCount = 1;

        document.getElementById('add-vegetable').addEventListener('click', function () {
            vegetableCount++;
            const vegetableFields = document.getElementById('vegetable-fields');
            const newVegetable = document.createElement('div');
            newVegetable.className = 'form-row mb-2';
            newVegetable.id = 'vegetable-' + vegetableCount;
            newVegetable.innerHTML = `
                <div class="col">
                    <input type="text" class="form-control" placeholder="Vegetable Name" name="vegetables[${vegetableCount - 1}][vegetable_name]">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Price(1 Kg)" name="vegetables[${vegetableCount - 1}][vegetable_price]">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger btn-sm remove-vegetable" onclick="removeVegetable('vegetable-${vegetableCount}')">Remove</button>
                </div>
            `;
            vegetableFields.appendChild(newVegetable);
        });

        function removeVegetable(vegetableId) {
            const vegetableToRemove = document.getElementById(vegetableId);
            vegetableToRemove.parentNode.removeChild(vegetableToRemove);
        }
    </script>
</x-app-layout>
