<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Home Visit Request</title>
</head>
<body>
    <h3>New Home Visit Request</h3>
    <p>Service: {{ $data['service'] }}</p>
    <p>Location: {{ $data['location'] }}</p>
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Phone: {{ $data['phone'] }}</p>
    <p>Date: {{ $data['date'] }}</p>
    <p>Time: {{ $data['time'] }}</p>
    <p>Address: {{ $data['address1'] }}, {{ $data['address2'] }}, {{ $data['city'] }}, {{ $data['zip'] }}</p>
    <p>Additional Details: {{ $data['details'] }}</p>
</body>
</html>
