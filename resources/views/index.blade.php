
    <h1>Customer Interactions</h1>
    <table>
        <thead>
            <tr>
                <th>Customer</th>
                <th>Product</th>
                <th>Interaction Type</th>
                <th>Rating</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($interactions as $interaction)
                <tr>
                    <td>{{ $interaction->customer->name }}</td>
                    <td>{{ $interaction->product->title }}</td>
                    <td>{{ $interaction->interaction_type }}</td>
                    <td>{{ $interaction->rating ?? 'N/A' }}</td>
                    <td>{{ $interaction->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

