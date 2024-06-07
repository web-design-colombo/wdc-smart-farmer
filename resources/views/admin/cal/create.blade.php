<x-admin-layout>
    <div class="container" style="margin-left: 280px; padding-top: 100px">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Vegetable</h1>
                <form action="{{ url('vegeaddcal') }}" method="POST">
                    @csrf
                    <!-- Vegetable Details -->
                    <div class="form-group">
                        <label for="name">Vegetable Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="days_to_harvest">Days to Harvest</label>
                        <input type="number" name="days_to_harvest" id="days_to_harvest" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fertilizer_per_sq_meter">Fertilizer per sq meter</label>
                        <input type="number" name="fertilizer_per_sq_meter" id="fertilizer_per_sq_meter" class="form-control" required>
                    </div>

                    <!-- Price Details -->
                    <div class="form-group">
                        <label for="price_per_kg">Price per KG</label>
                        <input type="number" name="price_per_kg" id="price_per_kg" class="form-control" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
