<x-site-layout>
<body>
    <h1>Vegetable Calculator</h1>
    <form action="{{ route('calculate') }}" method="POST">
        @csrf
        <label for="vegetable">Select Vegetable:</label>
        <select name="vegetable_id" id="vegetable">
            @foreach ($vegetables as $vegetable)
                <option value="{{ $vegetable->id }}">{{ $vegetable->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="area">Area (in sq meters):</label>
        <input type="number" name="area" id="area" required>
        <br>
        <button type="submit">Calculate</button>
    </form>
    @if (isset($result))
        <h2>Results</h2>
        <p>Estimated Income: ${{ $result['income'] }}</p>
        <p>Fertilizer Needed: {{ $result['fertilizer'] }} kg</p>
    @endif
</body>
</html>

</x-site-layout>
